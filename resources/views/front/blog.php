<div class="posts">
	<div class="container">
		<div class="row">
			{{#each posts}}
			<div class="col-md-4">
				<div class="item">
					<div class="image-bg">
						<div class="image">
							<img src="{{post_image}}">
						</div>
					</div>
					<div class="news-text">
						<div class="news-title-2">
							<h3>{{title}}</h3>
						</div>
						<div class="news-description">
							<p>{{post_half}}<br><br> <a href="/posts/{{_id}}"><span>devamı için tıklayınız.</span></a> </p>
						</div>
					</div>
				</div>
			</div>
		{{/each}}
		</div>




		{{!-- 
{{post_image}}
{{generateDate date 'MMM DD YYYY'}}
{{title}}
{{post_half}}
{{_id}}
 --}}



	</div>

</div>
</section>