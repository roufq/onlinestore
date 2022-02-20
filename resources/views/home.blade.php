@extends('layout')
@section('content')
<!-- <section class="w3l-grids-hny-2"> -->
	<!-- /content-6-section -->

	    
	<div class="w3l-grids-hny-2">
		<div class="grids-hny-2-mian py-5">
			<div class="container py-lg-5">
					
				<h3 class="hny-title mb-0 text-center">Shop With <span>category</span></h3>
				<p class="mb-4 text-center">Handpicked Favourites just for you</p>
				<div class="welcome-grids row mt-5">
					@foreach($kategori as $data)
					<div class="col-lg-1 col-md-1 col-sm-1 col-1 welcome-image"></div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-4 welcome-image">
						<div class="boxhny13">
							<a href="{{ url('detail_kategori')}}/{{ $data->id }}">
								<img src="{{$data->gambar}}" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<a href="{{ url('detail_kategori')}}/{{ $data->id }}"><h3 class="title">{{$data->nama_kategori}}</h3></a>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-1  welcome-image"></div>
					@endforeach
				</div>

			</div>
		</div>
	</div>
<!-- </section> -->

	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-lg-8">
					<div class="video-inner text-center">
								<!--popup-->
									<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
											<span class="fa fa-play" aria-hidden="true"></span>
									</a>
									<div id="small-dialog" class="mfp-hide">
										<div class="search-top notify-popup">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/082iUqdPvj0" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
									<!--//popup-->
					      </div>
				  </div>
				<div class="video-gd-left col-lg-4 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">How Arbre Design Co Wrapping Your Order | <span>Simple & Minimalist</span>
						</h3>
						<p>Step by step is done perfectly with love</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- /products-->
	<div class="w3l-ecommerce-main">
		<div class="ecom-contenthny py-5">
			<div class="container py-lg-5" id="shop">
				<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
				<p class="text-center">Handpicked Favourites just for you</p>
				<!-- /row-->
				
				<div class="ecom-products-grids row mt-lg-5 mt-3">
					@foreach ($product as $data)
					<div class="col-lg-3 col-6 product-incfhny mt-4">
						<div class="product-grid2 transmitv">
							<div class="product-image2">
								<a href="{{ url('pesan', $data->id) }}">
									<img class="pic-1 img-fluid" src="{{$data->gambar1}}">
									<img class="pic-2 img-fluid" src="{{$data->gambar2}}">
								</a>
								
								<div class="transmitv single-item">
								
										<a href="{{ url('pesan', $data->id) }}">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
												Add to Cart
											</button>
										</a>
								</div>
							</div>
							<div class="product-content">
								<h3 class="title"><a href="{{ url('pesan', $data->id) }}">{{$data->nama_barang}}</a></h3>
								<span class="price">Rp. {{ number_format($data->harga)}}</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<!-- //row-->
			</div>
		</div>
	</div>



@endsection