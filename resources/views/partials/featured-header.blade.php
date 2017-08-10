<section class="featured-header" style='background-image: url({{ get_the_post_thumbnail_url() }}); background-color: {{ get_field("header_background_color") }}' >
  <div class="container">
    @if ( is_home() )
      <span class="featured-article-tag">— Featured Article —</span>
    @endif
    <div class="header-title">
      <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1 class="entry-title">{{ get_the_title() }}</h1>
            @include('partials/entry-meta-full-post')
        </div>
      </div>
    </div>
  </div>
</section>