@php
if (post_password_required()) {
  return;
}
@endphp

<section id="comments" class="comments">
  @php( $comment_args = array( 'title_reply' => 'Leave a comment', 'fields' => apply_filters( 'comment_form_default_fields', array('url' => '', 'author' => '<div class="comment-form-author">' . '<input id="author" placeholder="Name" name="author" aria-required="true" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></div>', 'email' => '<div class="comment-form-email">' . '<input id="email" placeholder="Email" name="email" type="text" aria-required="true" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" /></div>')), 'comment_field' => '<div class="comment-form-comment">' . '<textarea id="comment" name="comment" placeholder="Your thoughts here" cols="45" rows="8" aria-required="true"></textarea></div>', 'comment_notes_before' => '<p>Your email will not be published.</p>'))
  @php(comment_form($comment_args))

  @if (have_comments())
    <hr />
    <h3>
      {!! sprintf(_nx('One comment', '%1$s comments', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number())) !!}
    </h3>

    <ol class="comment-list">
      {!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
    </ol>

    @if (get_comment_pages_count() > 1 && get_option('page_comments'))
      <nav>
        <ul class="pager">
          @if (get_previous_comments_link())
            <li class="previous">@php(previous_comments_link(__('&larr; Older comments', 'sage')))</li>
          @endif
          @if (get_next_comments_link())
            <li class="next">@php(next_comments_link(__('Newer comments &rarr;', 'sage')))</li>
          @endif
        </ul>
      </nav>
    @endif
  @endif

  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
    <div class="alert alert-warning">
      {{ __('Comments are closed.', 'sage') }}
    </div>
  @endif
</section>
