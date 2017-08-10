@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <div class="container">
    <div class="featured">
      @while ($stickied_post->have_posts()) @php($stickied_post->the_post())
        <a href="{{ get_permalink() }}">
          @include('partials.featured-header')
        </a>
      @endwhile
      @php(wp_reset_postdata())
    </div>
    <div class="row">
      @while ($all_posts_without_stickies->have_posts())
        @php($all_posts_without_stickies->the_post())
        <div class="col-md-4">
          @include('partials.content-'.get_post_type())
        </div>
      @endwhile
      @php(wp_reset_postdata())
    </div>
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
