<a href="{{ get_permalink() }}" @php(post_class())>
	<figure>
		<img src={{ get_the_post_thumbnail_url() }} />
	</figure>
	<div class="post-box">
		<h5>{{ get_the_title() }}</h5>
	</div>
</a>