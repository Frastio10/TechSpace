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
	<h4 class="mb-4 f-25 f-rufina-b">Berita terbaru</h4>
	<div class="row">
		
		<div class="col-md-9">
			@for ($i = 0; $i < 4; $i++)
				<div class="card border-0 mb-5">
						<div class="d-f pos-r card-inside">
							<img src="images/news-thumb-11.jpg" class="bring-back news-thumb" alt="">
							<div class="flex-center">
								<div class="bg-white d-block card-text shadow-sm border">
									<span class="badge badge-pill bg-success f-roboto f-15 py-1 px-3 f-normal text-white d-ib">
										Pendidikan
									</span>
									<div class="cf"></div>
									<h3 class="f-rufina-b f-18 mb-0">Membentengi Generasi Milenial dari Pengaruh Paham Radikal Negatif</h3>
									<div class="d-flex f-lato f-grey card-info">
										<img src="images/clock.svg" alt="">
										<span class="f-12 d-ib f-roboto f-grey-8">18 Agustus 2019</span>
										<span class="f-12 d-ib f-roboto f-grey-8">Oleh : Amanda Aprilia</span>
									</div>
									<div class="text-card">
										<p class="f-roboto mb-0 f-16 f-grey-8">
											Kemajuan teknologi dan informasi tidak hanya berdampak positif, tetapi memiliki dampak negatif terutama menyangkut sikap intoleransi.
										</p>
									</div>
									<a href="view-news" class="btn btn-primary rounded-0 f-roboto f-14">Baca selengkapnya</a>
								</div>
							</div>
						</div>
				</div>
			@endfor
			
			<div class="pagination f-roboto f-grey-8">
				<ul class="">
					<li>
						<a href="?page=1" class="">
								<div class="paginate-item">
									<img src="images/arr-left.svg" alt="">
								</div>
							</a>
						</li>
						<li>
							<a href="?page=1" class="paginate-item paginate-number page-1 active">
								<div class="paginate-item active">1</div>
							</a>
						</li>
						<li>
							<a href="?page=2" class=" paginate-number page-2">
								<div class="paginate-item">2</div>
							</a>
						</li>
						<li>
							<a href="?page=3" class=" paginate-number page-3">
								<div class="paginate-item">3</div>
							</a>
						</li>
						<li><a href="?page=3" class=" ">
								<div class="paginate-item">
									<img src="images/arr-right.svg" alt="">
								</div>
							</a>
						</li>
					</ul>
				</div>
		</div>
		<div class="col-md-3">
			<div class="search-box shadow-sm d-f">
					<input type="text" class="w-100 ol-none f-lato f-13" placeholder="Cari berita lainnya" id="search_input_2">
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
								<a href="{link}" class=" text-decoration-none f-grey-8">
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