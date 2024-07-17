@extends('layout.main')

@section('main')

<div class="wrapper">	

			<div class="section started section-title" id="section-started">

				<div class="video-bg jarallax" style="background-image: url({{asset('assets/images/Journey.jpg')}});">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Project</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{route('Beranda')}}">Home</a> / Project
									</p>
								</div>
								<span class="typed-bread"></span>
							</div>
						</div>
					</div>
				</div>

				<a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

			</div>

			<div class="section blog">
				<div class="content content-box">
					<div class="single-post-text">

						<div class="portfolio-info portfolio-cols">
							<div class="description-col">

								<div class="title">
									<div class="title_inner">Smart Ripeness Durian Detector</div>
								</div>

								<div class="single-post-text">
									<p>
									  Pendeteksi Kematangan Durian dengan Arduino berbasis Prediksi Naive Bayes
									</p>

									<!-- Galeri -->
									<div class="gallery-item">
										<p>
											<a href="{{asset('assets/images/sdrd.png')}}">
												<img src="{{asset('assets/images/sdrd.png')}}" alt="Smart Durian Ripeness Detector" />
											</a>
										</p>
									</div>

								</div>

							</div>
							<div class="details-col">

								<div class="title">
									<div class="title_inner">Detail</div>
								</div>
								
								<ul class="details-list">
									<li><strong>Kategori:</strong> Robotik & Microprocessor</li>
									<!-- <li><strong>Tanggal:</strong> 9 Juni 2021</li> -->
									<!-- <li><strong>Model:</strong> -</li> -->
									<li><strong>Keterangan:</strong> Pendanaan PKM</li>
									<!-- <li><strong>Author:</strong> Anton S</li> -->
								</ul>

							</div>
						</div>

						<br><br>

						<div class="portfolio-info portfolio-cols">
							<div class="description-col">

								<div class="title">
									<div class="title_inner">TingTingChat</div>
								</div>

								<div class="single-post-text">
									<p>
									  TingTingChat - Talk with Other with simple App!
									</p>

									<!-- Galeri -->
									<div class="gallery-item">
										<p>
											<a href="{{asset('assets/images/tingtingchat.png')}}">
												<center><img src="{{asset('assets/images/tingtingchat.png')}}" alt="TingTingChat" /></center>
											</a>
										</p>
									</div>

								</div>

							</div>
							<div class="details-col">

								<div class="title">
									<div class="title_inner">Detail</div>
								</div>
								
								<ul class="details-list">
									<li><strong>Kategori:</strong> Android Application</li>
									<!-- <li><strong>Tanggal:</strong> 9 Juni 2021</li> -->
									<!-- <li><strong>Model:</strong> -</li> -->
									<li><strong>Keterangan:</strong> -</li>
									<li><span class="icon fab fa-github"></span><a target="_blank" href="https://github.com/antonsurya22/tingting_chat" style="none"> Github</a></li>
								</ul>

							</div>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>

		</div>

@endsection