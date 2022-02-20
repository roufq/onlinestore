<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARBREDESIGNCO | SHOP</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
</head>
		
<body>
	<div class="w3l-ecommerce-main">
		
		<div class="ecom-contenthny py-2">
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
				<!-- //row-->
			</div>
		</div>
	</div>
</body>
</html>