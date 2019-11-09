@extends('layouts.app')
@section('title','Berita')

@section('css')
<link rel="stylesheet" href="{{asset('css/news.css')}}">
@endsection

@section('nav-links')
<li class="nav-item">
					        <a class="nav-link active" href="/news">Berita</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="/diskusi">Diskusi</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="/startup">Startup</a>
					      </li>  
					      <li class="nav-item">
					        <a class="nav-link" href="/inspirasi">Inspirasi</a>
					      </li>  
					      <li class="nav-item">
					        <a class="nav-link" href="/about">Tentang Kami</a>
					      </li>  
					      <li class="nav-item">
					        <a class="nav-link" href="/inspirasi">Galeri</a>
					      </li> 
@endsection

@section('content')
<div class="container">
	<h4 class="f-25 f-rufina-b dots-sm mt-60 d-ib h pl-0 col-md-7">Qualcomm Berencana Untuk Perluas 5G ke Ponsel Menengah</h4>
	<div class="row">
		<div class="col-md-9">
			<div class="bg-white shadow-sm">	
				<img src="images/news-thumb-4.jpeg" class="w-100" alt="">
				<div class="news-text p-3">
  								<div class="d-flex">
  									<img src="images/clock.svg" alt="">
  									<span class="f-14 f-roboto f-grey-8 ml-1" id="time">
  										8 September 2019
  									</span>
  									<span id="writer" class="f-14 f-roboto f-grey-8 ml-3">
  										Oleh : Amanda Aprilia
  									</span>
  								</div>
  								<div class="cf"></div>
  								<p id="desc" class="f-roboto f-15 f-grey-8 mt-3">
  									Qualcomm memberikan kejutan yang menarik di perhelatan IFA 2019. Mereka mengumumkan rencana untuk memperluas penetrasi 5G dengan menghadirkannya di ponsel kelas menengah.<br><br>Selama ini 5G hanya ditemui di perangkat flagship yang ditenagai Snapdragon seri 8. Harganya yang cukup mahal membuat ponsel 5G belum terjangkau bagi semua orang.<br><br>Jelang komersialisasi 5G secara global, Qualcomm berencana memperluas portfolio mobile platform 5G di chipset Snapdragon seri 7 dan 6 tahun depan.<br><br>"Untuk mempercepat komersialisasi 5G untuk skala global dengan mitra OEM dan operator kami dengan penawaran mobile platform kami di Snapdragon Seri 8, Seri 7 dan Seri 6 kami pada tahun 2020," kata Alex Katouzian, Senior Vice President dan General Manager, Mobile, Qualcomm Technologies.<br><br>Untuk Snapdragon Seri 7 akan memiliki 5G yang diintegrasikan ke dalam SoC (System-on-Chip) dan mendukung semua wilayah dan pita frekuensi secara global. Platform mobile yang dibangun pada proses teknologi 7nm akan dibekali fitur-fitur premium, termasuk generasi selanjutnya dari Qualcomm AI Engine dan fitur Qualcomm Snapdragon Elite Gaming, untuk audiens yang lebih luas.<br><br>Dua belas OEM dan merek global terkemuka dipastikan akan menggunakan Snapdragon seri 7 5G di ponselnya. Vendor tersebut di antaranya Oppo, Realme, Redmi, Vivo, Motorola, HMD Global, Nokia, LG Electronics. Ponsel Snapdragon seri 7 5G diharapkan sampai ke tangan konsumen pada kuartal pertama tahun depan. Rincian lengkap dari platform ini akan diungkapkan pada akhir 2019 ini.<br><br>Sementara mobile platform Snapdragon seri 6 5G diharapkan akan tersedia secara komersial pada paruh kedua tahun 2020. Diyakini Qualcomm ini akan sangat memperluas jangkauan 5G secara global.<br><br>Sumber: <a href="detik.com">detik.com</a>
  								</p>
  								<div class="d-flex mt-30 pos-r">
									
										
  										<button class="mr-3 f-left cs-p bg-none bd-n ol-none border-0 bg-white" onclick="">
  											<div class="" id="share">
  												<img src="images/share-2.svg" alt="">
  											</div>
  										</button>
									
									
  										<button onclick="" class="mr-3 love-btn border-0 bg-white">
  											<div class="f-left cs-p love" id="love">
  												<svg xmlns="http://www.w3.org/2000/svg" width="28.496" height="25.11" viewBox="0 0 28.496 25.11">
  												  <path id="heart_1_" data-name="heart (1)" d="M26,5.041a6.972,6.972,0,0,0-9.862,0L14.8,6.385,13.453,5.041A6.973,6.973,0,0,0,3.591,14.9l1.344,1.344L14.8,26.108l9.862-9.862L26,14.9a6.972,6.972,0,0,0,0-9.862Z" transform="translate(-0.549 -1.998)" fill="none" stroke="#1592e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
  												</svg>
  											</div>
  										</button>
									
  									<div class="mr-3 f-left cs-p slide-trigger" id="comment">
  										<button class="d-flex flex-center border-0 bg-white" onclick="">
  											<img class="cs-p" src="images/message-square.svg" alt="">
  										</button>
  									</div>
  								</div>
  							</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="search-box shadow-sm d-f">
					<input type="text" class="w-100 ol-none f-roboto f-13" placeholder="Cari berita lainnya" id="search_input_2">
					<button class="d-f bg-primary search-icon border-0 cs-p" id="search_button_2">
						<img src="images/search.svg" alt="">
					</button>
			</div>
			<div class="bg-white shadow-sm mt-3 category">
					<h4 class="f-20 f-rufina-b">Kategori</h4>
					<ul>
						<li><a href="?category=all" class="f-roboto f-14 category-list all active">Semua</a></li>
						<li><a href="?category=education" class="f-roboto f-14 category-list edu">Pendidikan</a></li>
						<li><a href="?category=technology" class="f-roboto f-14 category-list tech">Teknologi</a></li>
						<li><a href="?category=nature" class="f-roboto f-14 category-list nature">Alam</a></li>
						<li><a href="?category=lifestyle" class="f-roboto f-14 category-list lifestyle">Gaya hidup</a></li>
					</ul>
			</div>
			<div class="bg-white shadow-sm mt-3 random-news b-box">
					<h2 class="f-20 f-rufina-b dots-sm">Berita terkait</h2>
					<div class="w-100 list-wrapper" id="root_2">
						@for ($i = 0; $i < 4; $i++)
							<div class="list-item w-100 d-flex flex-column">
								<a href="view-news" class=" text-decoration-none f-grey-8">
									<div class="item">
										<div class="d-f align-items-center">
											<img src="images/news-thumb-13.jpeg" class="w-100 random-thumb" alt="">
											<span  class="f-roboto f-14">CT Bicara Milenial, Konsumerisme Jadi Gaya Hidup</span>
										</div>
									</div>
								</a>
								<div class="line"></div>
							</div>
						@endfor
					</div>
			</div>
		</div>
	</div>
</div>
@endsection