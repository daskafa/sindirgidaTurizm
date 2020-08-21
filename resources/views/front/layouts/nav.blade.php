<header>
	<div class="container">


		<!-- <div class="admin-panel-header">
			<div class="row">
				<div class="col-md-12">
					<div class="admin-panel-logo">
						<a href="/"><img src="/images/sindirgi-logo.PNG" alt=""></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="admin-panel-title">
						<h1 style="text-align: center;">SINDIRGI TURİZM OFİSİ ADMİN PANELİ</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="admin-panel-new-news">
						<a href="/posts/new">
							<p>YENİ HABER EKLE</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="admin-panel-quit">
					<a href="/users/logout">
						<p>ÇIKIŞ YAP</p>
					</a>
				</div>
			</div>
		</div>
		 -->


		<div class="responsive-menu" style="display: none;">
			<div class="row">
				<div class="col-md-6">
					<div class="responsive-logo">
						<a href="{{route('homepage')}}">
							<img src="{{asset('front/')}}/images/sindirgi-logo.png" alt="">
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="responsive-menu-icon">
						<!--  <p>MENÜ</p>  -->
						<i class="zmdi zmdi-menu"></i>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="responsive-menu-content" style="display: none;">
					<div class="responsive-menu-content-logo">
						<a href="{{route('homepage')}}">
							<img src="{{asset('front/')}}/images/sindirgi-logo.png" alt="">
						</a>
					</div>
					<div class="responsive-menu-content-close">
						<i class="zmdi zmdi-close"></i>
					</div>
					<ul>
						<li><a href="{{route('homepage')}}">
								<p>anasayfa</p>
							</a></li>
						<li><a href="{{route('gezilecekYerler')}}">
								<p>gezİlecek yerler</p>
							</a></li>
						<li><a href="{{route('tarihimiz')}}">
								<p>tarİhİmİz</p>
							</a></li>
						<li><a href="{{route('iletisim')}}">
								<p>İletİşim</p>
							</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header-out">
			<div class="row">
				<div class="col-md-4">
					<div class="bakanlik-logo">
						<a href="{{route('homepage')}}">
							<img src="{{asset('front/')}}/images/sindirgi-logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text">
						<p>sındırgı<br> turİzm danışma bürosu</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sindirgi-logo">
						<a href="{{route('homepage')}}">
							<img src="{{asset('front/')}}/images/belediye-logo.png">
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="menu">
						<ul>
							<li><a href="{{route('homepage')}}">anasayfa</a></li>
							<li><a href="{{route('gezilecekYerler')}}">gezİlecek yerler</a></li>
							<li><a href="{{route('tarihimiz')}}">tarİhİmİz</a></li>
							<li><a href="{{route('iletisim')}}">İletİşim</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


	</div>
</header>
