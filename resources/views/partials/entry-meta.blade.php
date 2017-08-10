<div class="post-meta-data">
	<p class="post-meta-data__time">
	<i class="fa fa-calendar" aria-hidden="true"></i>
	<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
	</p>
	<p class="post-meta-data__reading">
  	<i class="fa fa-clock-o" aria-hidden="true"></i>
  	@php($time = App\reading_time(get_post_field( 'post_content', $post->ID)))
		{{ $time }}
	</p>
</div>