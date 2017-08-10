<div class="post-meta">
	<span class="byline author vcard">
		{{ get_the_author() }}
	</span>|
	<span class="post-meta__time">
	<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
	</span>|
	<span class="post-meta__reading">
  	@php($time = App\reading_time(get_post_field( 'post_content', $post->ID)))
		{{ $time }} read
	</span>
</div>