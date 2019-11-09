<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       	@include('layouts.head')
       	@yield('meta')
       	@yield('css')
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>@yield('title') | TechSpace</title>
	
      	
    </head>
    <body>
       <header class="header">
	       	<nav class="navbar shadow-sm fixed-top navbar-expand-lg navbar-light bg-white">
			  <div class="container">
			  	 <a class="navbar-brand mr-4" href="/"><img src="images/logo-only.svg" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav f-roboto">
					      @yield('nav-links') 
					    </ul>
					    <div class="popup-trigger ml-auto pos-r language">
							<img src="images/indo-flag.svg" class="flag-lang" alt="">
								<img src="images/chevron-right.svg" alt="">
								<div class="popup-content d-none pos-a bring-front popup-lang bg-white  shadow-sm">
									<div class=" flags">
										<a href="en/">
											<img src="images/en.svg" alt="">
											EN
										</a>
										<a href="">
											<img src="images/indo-flag.svg" alt="">
											ID
										</a>
										
									</div>
								</div>
						  </div>
						  <div class="popup-trigger pos-r ml-3" id="profile-picture">
								<img src="images/userprofile-2.jpg" alt="" class="user-image">
								<div class="popup-content d-none pos-a bring-front popup-profile">
									<div class="bg-white list shadow-sm">
										<ul class="list-group">
										  <a class="list-group-item username" href="/settings">Amanda Aprilia</a>
										  <a  class="list-group-item list-item" href="/settings">Akun</a>
										  <a  class="list-group-item list-item" href="/chat">Pesan</a>
										  <a  class="list-group-item list-item" href="/account">Pengaturan</a>
										  <a  class="list-group-item list-item" href="/login">Keluar</a>
										  
										</ul>
									</div>
								</div>
							</div>
					   
					</div>
			  </div> 
		    </nav>
       </header>
       @yield('content')
       <footer class="footer w-100 d-f footer-box bg-white mt-5">
			<div class="box-left"></div>
			<div class="container">
				<div class="inner-footer">
					<div class="f-left footer-desc">
						<div class="logo">
							<a href="index.html" class="text-decoration-n d-flex">
								<div class="d-flex flex-center">
									<img src="images/logo-only.svg" alt="">
									
								</div>
							</a>
						</div>
						<p>Tujuanya di buat techspace supaya bisa mewadahi bakat dan keinginan orang orang untuk membangun startup mereka sendiri</p>
						
					</div>
					<div class="f-left footer-list">
						<b class="f-roboto">Navbar</b>
						<ul class="no-decoration list-style-none">
							
							<li><a href="news.html">Berita</a></li>
							<li><a href="diskusi.html">Diskusi</a></li>
							<li><a href="startup.html">Startup</a></li>
							<li><a href="inspirasi.html">Inspirasi</a></li>
							<li><a href="gallery.html">Galeri</a></li>
						</ul>
					</div>
					<div class="f-left footer-list">
						<b class="f-roboto">Lainnya</b>
						<ul class="no-decoration list-style-none">
							
							<li><a href="settings.html">Akun</a></li>
							<li><a href="">Bahasa</a></li>
							<li><a href="about.html">Tentang</a></li>
							<li><a href="">App</a></li>
							
						</ul>
					</div>
					<div class="f-left footer-desc footer-desc-left">
						
							<span class="f-roboto">Untuk tetap terhubung</span>
							<div class="mt-10">
								<p class="">admin@techspace.id </p>
							<p class="">+62 812-0000-0000</p>
							</div>
							<ul class="horizontal-list social-media">
							<li><a href=""><img src="images/facebook.svg" alt=""></a></li>
							<li><a href="https://instagram.com/frastio10" target="_blank"><img src="images/instagram.svg" alt=""></a></li>
							<li><a href=""><img src="images/twitter.svg" alt=""></a></li>
							<li><a href=""><img src="images/youtube.svg" alt=""></a></li>
						</ul>
							
					</div>
					<span class="line-h"></span>
					<span class="f-13 f-roboto f-left made-by my-3">&#169; 2019 TechSpace By Bernice Team</span>
				</div>

			</div>
	   </footer>

    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/public.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    @yield('component')
    @yield('js')

</html>
