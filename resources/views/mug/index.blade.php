<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ARBRE DESIGN CO | MUG</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="w3l-banner-slider-main">
		<div class="head">
			<p style="text-align: center; padding: 30px; font-family: sans-serif; font-weight: 600; font-size: 4vh;"><b>SHOPPING BY <span style=" color: #ff7315">CATEGORY</span></b></p>
		</div>
		<div class="theme theme-detail my-3">
	        <div class="row justify-content-center">
	            <div class="col-11 col-lg-10">
	                <div class="card border-0 mb-3 pb-2 card-theme">
	                    <div class="card-body d-flex">
	                        <!-- start row-->
	                      @foreach ($kategori as $data)
	                        <div class="row">
	                        	<div class="col-12 col-md-6 pr-4 my-auto">
	                                <img src="{{$data->gambar_kategori}}" alt="" class="card-img align-self-center card-img-lg">
	                            </div>
	                            <div class="col-0 col-md-6 px-3 pb-3">
	                                <h5 class="mt-4 mt-md-0 mb-4 mb-md-4"><span class="lohny" style="font-family: Roboto Slab; text-align: center; font-weight: 600; font-size: 25px;"><center>{{$data->nama_kategori}} </center></span></h5>
	                                <p class="mb-md-5">{{$data->deskripsi_kategori}}</p>
	                            </div>
	                        </div>
	                      @endforeach
	                        <!-- end row -->
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="w3l-ecommerce-main" style="margin-top: -100px;">
			<div class="ecom-contenthny py-5">
				<div class="container py-lg-5">
					<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
					<p class="text-center">Handpicked Favourites just for you</p>
					<!-- /row-->
					
					<div class="ecom-products-grids row mt-lg-5 mt-3">
						@foreach ($product as $data)
						<div class="col-lg-3 col-6 product-incfhny mt-4">
							<div class="product-grid2 transmitv">
								<div class="product-image2">
									<a href="#">
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
									<h3 class="title"><a href="#">{{$data->nama_barang}}</a></h3>
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

</body>
</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->

<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>