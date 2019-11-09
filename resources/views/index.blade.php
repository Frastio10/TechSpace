@extends('layouts.app')
@section('title','Beranda')

@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection


@section('content')
<!-- Popups -->
<div class="video-backdrop">
	<div class="video-popup">
		<video controls autoplay src="" class="video-target"></video>
		<div class="video-close" data-target="video/video-2.mp4">
			<img src="images/close-2.png" alt="">
		</div>
	</div>
</div>

<div class="image-modalview-backdrop pos-f d-flex flex-center">
	<div class="image-modalview pos-r">
		<div class="close-popup d-flex flex-center pos-a">
			<img src="images/close.png" alt="">
		</div>
		<img src="" alt="" class="w-100" id="image-modal">
	</div>
</div>
<!-- End popups -->


<!-- Banner -->
<section id="banner">
	<div class="banner w-100 d-flex">
		<div class=" banner-image banner-image-1 f-left">
			<div class="container">
				<div class="banner-right f-right">
					<div class="">
						<div class="bg-white shadow-sm border">
							<b class="f-25 f-rufina-b">Tuangkan ide kreatif mu di TechSpace!</b>
							<div class="clearfix"></div>
							<p class="f-15 f-grey-8 p f-roboto res-block">Techspace  Di buat untuk mewadahi orang orang yang ingin menuangkan ide kreatifnya untuk membangun sebuah startup Ataupun bergabung dengan startup  yang yg sudah ada untuk menyalurkan bakat dan ide yang mereka miliki Techspace juga memberikan sebuah inspirasi melalui media bacaan yang di bagikan oleh pengguna dan dan di publikasi oleh admin
							</p>
							<a href="news" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Lihat selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 
<!-- End banner -->



<!-- News -->
<section id="news-list" class="py-5">
	<div class="container">
		<div class="section-title col-md-5 pl-0">
			<h4 class="h f-rufina-b f-25 mb-0">Berita</h4>
			<p class="p f-roboto f-grey-8 f-15">Tambah wawasan dan pengetahuan mu dengan membaca berita terbaru dan terkini  di TechSpace</p>
		</div>
		<div class="row">
			<div class="col-md-3 pr-0">
				<div class="card card-withimage shadow-sm rounded-0" style="width: 100%;">
				  <img src="images/news-thumb-2-261x138.jpg" class="card-img-top rounded-0" alt="...">
				  <div class="card-body rounded-0">
				    <h5 class="f-15 f-rufina-b mb-0">Google Assistant Bisa Sulap Perangkat Android</h5>
				    <div class="clock d-f align-items-center my-1">
				    	<img src="images/clock.svg" alt="">
				    	<span class="f-lato f-12 f-grey-8 ml-1">18 agustus 2019</span>
				    </div>
				    <p class="f-14 f-roboto f-grey-8">Google meluncurkan fitur baru untuk Google Assistant di IFA 2019, yaitu Ambient Mode</p>
				    <a href="view-news" class="btn btn-primary rounded-0 f-12">Baca selengkapnya</a>
				  </div>
				</div>
			</div>
			<div class="col-md-3 pr-0">
				<div class="card card-withimage shadow-sm rounded-0" style="width: 100%;">
				  <img src="images/news-thumb-6-261x138.jpg" class="card-img-top rounded-0" alt="...">
				  <div class="card-body rounded-0">
				    <h5 class="f-15 f-rufina-b mb-0">Peran Generasi Petani Milenial di Era Pertanian 4.0</h5>
				    <div class="clock d-f align-items-center my-1">
				    	<img src="images/clock.svg" alt="">
				    	<span class="f-lato f-12 f-grey-8 ml-1">18 agustus 2019</span>
				    </div>
				    <p class="f-14 f-roboto f-grey-8">Estafet petani selanjutnya adalah pada pundak generasi muda, mereka mempunyai inovasi</p>
				    <a href="view-news" class="btn btn-primary rounded-0 f-12">Baca selengkapnya</a>
				  </div>
				</div>
			</div>
			<div class="col-md-3 pr-0">
				<div class="card card-withimage shadow-sm rounded-0" style="width: 100%;">
				  <img src="images/news-thumb-11-261x138.jpg" class="card-img-top rounded-0" alt="...">
				  <div class="card-body rounded-0">
				    <h5 class="f-15 f-rufina-b mb-0">Membentengi Generasi Milenial dari Pengaruh Paham Radikal</h5>
				    <div class="clock d-f align-items-center my-1">
				    	<img src="images/clock.svg" alt="">
				    	<span class="f-lato f-12 f-grey-8 ml-1">18 agustus 2019</span>
				    </div>
				    <p class="f-14 f-roboto f-grey-8">Kemajuan teknologi dan informasi tidak hanya berdampak positif, negatif juga</p>
				    <a href="view-news" class="btn btn-primary rounded-0 f-12">Baca selengkapnya</a>
				  </div>
				</div>
			</div>
			<div class="col-md-3 pr-0">
				<div class="card card-withimage shadow-sm rounded-0" style="width: 100%;">
				  <img src="images/news-thumb-10-261x138.jpg" class="card-img-top rounded-0" alt="...">
				  <div class="card-body rounded-0">
				    <h5 class="f-15 f-rufina-b mb-0">Milenial Dominasi Kompetisi Kewirausahaan</h5>
				    <div class="clock d-f align-items-center my-1">
				    	<img src="images/clock.svg" alt="">
				    	<span class="f-lato f-12 f-grey-8 ml-1">18 agustus 2019</span>
				    </div>
				    <p class="f-14 f-roboto f-grey-8">Wismilak Foundation kembali menggelar kompetisi Diplomat Success Challenge</p>
				    <a href="view-news" class="btn btn-primary rounded-0 f-12">Baca selengkapnya</a>
				  </div>
				</div>
			</div>
			<div class="w-100 d-f justify-content-center pt-4">
				<a href="news" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Berita lainnya</a>
			</div>
		</div>
	</div>
</section>
<!-- End news -->



<!-- Discussion -->
<section id="popular-discussion" class="py-5">
	<div class="left-box py-5">
		<div class="container">
			<div class="section-title section-title-left col-md-5 pl-0">
				<h4 class="h">Diskusi Popular</h4>
				<p class="p">Diskusikan apa yang sedang kamu pikirkan dan temukan sarannya dengan cepat di TechSpace</p>
			</div>
			<div class="row">
				<div class="col-md-6">
					<a href="/view-diskusi" class="bg-white b-box px-3 py-4 shadow-sm f-left border card card-noimage">
						<div class="user-info d-f">
							<img src="images/userprofile-1.jpg" class="user-image" alt="">
							<div class="d-f flex-column ml-2">
								<span class="f-20 f-rufina f-grey-7">Yumna Azahra</span>
								<div class="clearfix"></div>
								<div class="d-f align-items-center">
									<img src="images/clock.svg" alt="">
									<span class="f-12 f-roboto f-grey-8 ml-1">4 November 2019</span>
								</div>
							</div>
						</div>
						<div class="discuss-text">
							<p class="p f-roboto f-15 f-grey-8 mt-2">Perkembangan teknologi dari tahun ke tahun selalu mengalami peningkatan. Hal ini dibuktikan dengan mulai bermunculannya alat elektronik seperti smartphone, tablet, hingga music player. Di Indonesia sendiri perkembangan teknologi tidak dapat dibendung lagi karena ...</p>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="/view-diskusi" class="bg-white b-box px-3 py-4 shadow-sm f-left border card card-noimage">
						<div class="user-info d-f">
							<img src="images/userprofile-1.jpg" class="user-image" alt="">
							<div class="d-f flex-column ml-2">
								<span class="f-20 f-rufina f-grey-7">Yumna Azahra</span>
								<div class="clearfix"></div>
								<div class="d-f align-items-center">
									<img src="images/clock.svg" alt="">
									<span class="f-12 f-roboto f-grey-8 ml-1">4 November 2019</span>
								</div>
							</div>
						</div>
						<div class="discuss-text">
							<p class="p f-roboto f-15 f-grey-8 mt-2">Perkembangan teknologi dari tahun ke tahun selalu mengalami peningkatan. Hal ini dibuktikan dengan mulai bermunculannya alat elektronik seperti smartphone, tablet, hingga music player. Di Indonesia sendiri perkembangan teknologi tidak dapat dibendung lagi karena ...</p>
						</div>
					</a>
				</div>
				<div class="w-100 d-f justify-content-center pt-4">
					<a href="news" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Diskusi lainnya</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End discussion -->



<!-- Startup -->
<section id="best-startups" class="py-5">
	<div class="container">
		<div class="section-title col-md-5 pl-0">
			<h4 class="h f-rufina-b f-25 mb-4">Startup terbaik TechSpace</h4>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="card card-rate">
									<div class="card-thumb">
										<img src="images/startup/stadium.png" alt="">
									</div>
									<div class="card-detail">
										<div class="card-tag">
											<span>Productivity</span>
											<span>Design</span>
											<span>Web Development</span>
										</div>
										<h4 class="card-title">Stadium</h4>
										<div class="card-rating">
											<ul>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="#fbb72b" stroke="#fbb72b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="#fbb72b" stroke="#fbb72b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
											</ul>
											<span>2/5</span>
											<span class="text-blue">5 review</span>
										</div>
										<div class="card-desc">
											<p>Stadium adalah perusahaan Enabler Web develover yang didirikan di Singapura pada 2010</p>
										</div>
										<span class="card-line"></span>
										<a href="" class="card-link">Lihat selengkapnya</a>
									</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-rate">
									<div class="card-thumb">
										<img src="images/startup/logo better.png" alt="">
									</div>
									<div class="card-detail">
										<div class="card-tag">
											<span>Productivity</span>
											<span>Design</span>
											<span>Web Development</span>
										</div>
										<h4 class="card-title">Cloudbread</h4>
										<div class="card-rating">
											<ul>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="#fbb72b" stroke="#fbb72b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="#fbb72b" stroke="#fbb72b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
											</ul>
											<span>2/5</span>
											<span class="text-blue">5 review</span>
										</div>
										<div class="card-desc">
											<p>Stadium adalah perusahaan Enabler Web develover yang didirikan di Singapura pada 2010</p>
										</div>
										<span class="card-line"></span>
										<a href="" class="card-link">Lihat selengkapnya</a>
									</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-rate">
									<div class="card-thumb">
										<img src="images/startup/medium-1.png" alt="">
									</div>
									<div class="card-detail">
										<div class="card-tag">
											<span>Productivity</span>
											<span>Design</span>
											<span>Web Development</span>
										</div>
										<h4 class="card-title">Museum</h4>
										<div class="card-rating">
											<ul>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="#fbb72b" stroke="#fbb72b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="#fbb72b" stroke="#fbb72b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
												<li>
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.265" viewBox="0 0 16 15.265">
												  		<path id="star" d="M9.5,2l2.318,4.695L17,7.452,13.25,11.1l.885,5.16L9.5,13.828,4.865,16.265,5.75,11.1,2,7.452l5.183-.757Z" transform="translate(-1.5 -1.5)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
													</svg>
												</li>
											</ul>
											<span>2/5</span>
											<span class="text-blue">5 review</span>
										</div>
										<div class="card-desc">
											<p>Stadium adalah perusahaan Enabler Web develover yang didirikan di Singapura pada 2010</p>
										</div>
										<span class="card-line"></span>
										<a href="" class="card-link">Lihat selengkapnya</a>
									</div>
				</div>
			</div>
			<div class="w-100 d-f justify-content-center pt-4">
				<a href="news" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Lihat lebih banyak</a>
			</div>
		</div>
	</div>
</section>
<!-- End startup -->


<!-- Video -->
<section id="video-list" class="py-5">
	<div class="container">
		<div class="section-title col-md-5 pl-0">
			<h4 class="h">Video</h4>
			<p class="p">TechSpace menyediakan video teknologi, dan juga saran untuk membuat ide membagun startup bertujuan untuk menambah wawasan</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="video-wrapper d-f pos-r  d-f justify-content-center align-items-center">
					<img src="images/bg_teks.png" class="" alt="">
					<img src="images/playbutton.svg" alt="" class="pos-a cur-p playbutton">
				</div>
			</div>
			<div class="col-md-6">
				<div class="video-wrapper d-f  pos-r d-f justify-content-center align-items-center">
					<img src="images/bg_teks.png" class="" alt="">
					<img src="images/playbutton.svg" alt="" class="pos-a cur-p playbutton">
				</div>
			</div>
			<div class="w-100 d-f justify-content-center pt-4">
				<a href="gallery" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Lihat lebih banyak</a>
			</div>
		</div>
	</div>
</section>
<!-- End video -->



<!-- Inspirasi -->
<section id="inspirasi-list" class="py-5">
	<div class="left-box py-5">
		<div class="container">
			<div class="section-title section-title-left col-md-5 pl-0">
				<h4 class="h">Inspirasi</h4>
				<p class="p">Temukan kisah inspiratif yang dapat memberimu semangat dan juga ide untuk membuat startup</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a class="card card-noimage shadow-sm p-4" href="view-diskusi">
						<div class="d-f">
							<img src="images/ys-icon.svg" class="user-image" alt="">
							<div class="d-f flex-column ml-2">
								<h5 class="f-rufina f-20 f-black-3 mb-0">Admin TechSpace</h5>
								<div class="d-f">
									<img src="images/clock.svg" class="mr-1" alt="">
									<span class="f-grey-8 f-12 f-roboto">8 September 2019</span>
								</div>
							</div>
						</div>
						<div class="card-desc mt-2">
							<p class="f-grey-8 f-roboto f-15 p">Cewek kelahiran Jakarta 29 April 1976 ini selain cantik juga punya jiwa sosial yang tinggi lho. Nila, begitu dia biasa ...</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="card card-noimage shadow-sm p-4" href="view-diskusi">
						<div class="d-f">
							<img src="images/ys-icon.svg" class="user-image" alt="">
							<div class="d-f flex-column ml-2">
								<h5 class="f-rufina f-20 f-black-3 mb-0">Admin TechSpace</h5>
								<div class="d-f">
									<img src="images/clock.svg" class="mr-1" alt="">
									<span class="f-grey-8 f-12 f-roboto">8 September 2019</span>
								</div>
							</div>
						</div>
						<div class="card-desc mt-2">
							<p class="f-grey-8 f-roboto f-15 p">Cewek kelahiran Jakarta 29 April 1976 ini selain cantik juga punya jiwa sosial yang tinggi lho. Nila, begitu dia biasa ...</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a class="card card-noimage shadow-sm p-4" href="view-diskusi">
						<div class="d-f">
							<img src="images/ys-icon.svg" class="user-image" alt="">
							<div class="d-f flex-column ml-2">
								<h5 class="f-rufina f-20 f-black-3 mb-0">Admin TechSpace</h5>
								<div class="d-f">
									<img src="images/clock.svg" class="mr-1" alt="">
									<span class="f-grey-8 f-12 f-roboto">8 September 2019</span>
								</div>
							</div>
						</div>
						<div class="card-desc mt-2">
							<p class="f-grey-8 f-roboto f-15 p">Cewek kelahiran Jakarta 29 April 1976 ini selain cantik juga punya jiwa sosial yang tinggi lho. Nila, begitu dia biasa ...</p>
						</div>
					</a>
				</div>
				<div class="w-100 d-f justify-content-center pt-4">
					<a href="inspirasi" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Lihat lebih banyak</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End inspirasi -->



<!-- About -->
<section id="about" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-f align-items-center">
				<img src="images/gallery/gallery-1-300x200.jpg" class="w-100" alt="">
			</div>
			<div class="col-md-6 pl-5">
				<h4 class="f-rufina-b h f-25">Tentang Kami</h4>
				<p class="f-grey-8 f-15 p f-roboto mb-2">Techspace juga memberikan sebuah inspirasi melalui media bacaan yang di bagikan oleh pengguna dan dan di publikasi oleh admin melalui kisah kisah mereka membangun dan mengurus startup mereka. dan menyediakan video dan berita tentang teknologo dengan harapan supaya bisa menambah wawasan pengguna mengenai teknologi</p>
				
				<p class="f-grey-8 f-15 p f-roboto mb-2">Tujuanya di buat techspace supaya bisa mewadahi bakat dan keinginan orang orang untuk membangun startup mereka sendiri, dibuat dengan harapan bisa megelurkan bakat mereka dibidang teknologi dan ikut bergabung dengan startup starup yang bagus dan terpercaya</p>
				<a href="news" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Lihat selengkapnya</a>
			</div>
		</div>
	</div>
</section>
<!-- End about -->



<!-- Gallery -->
<section id="gallery" class="py-5">
	<div class="right-box py-5">
		<div class="container">
			<div class="section-title  col-md-5 pl-0">
				<h4 class="h">Galeri</h4>
				<p class="p">Berisi gambar dan video teknologi masa kini yang di kirim oleh user kepada admin untuk di upload ke TechSpace</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="image-hover">
						<div class="hover"></div>
						<img src="images/gallery/gallery-2-300x200.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4">
					<div class="image-hover">
						<div class="hover"></div>
						<img src="images/gallery/gallery-1-300x200.jpg" alt="">
					</div>
				</div>
				<div class="col-md-4">
					<div class="image-hover">
						<div class="hover"></div>
						<img src="images/gallery/gallery-3-300x200.jpg" alt="">
					</div>
				</div>
				<div class="w-100 d-f justify-content-center pt-4">
					<a href="gallery" class="btn btn-primary rounded-0 f-roboto f-14 px-4 py-2">Lihat lebih banyak</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End gallery -->


@endsection