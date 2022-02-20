<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>ARBRE DESIGN CO | DETAIL BARANG</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head">
					<p style="text-align: center; padding: 30px; font-size: 2em; font-family: sans-serif; font-weight: 600; "><b>SHOPPING <span style=" color: #ff7315">CART</span></b></p>
				</div>
				<div class="card-body" style="font-family: FontAwesome">
					<div class="row">
						<div class="col-lg-6 col-6 product-incfhny mt-3">
							<img src="{{ asset($product->gambar1)}}" class="rounded mx-auto d-block" width="100%" alt="">
						</div>
						<div class="col-md-6 mt-4">
							<h3>{{ $product->nama_barang }}</h3>
							<table class="table">
								<tbody>
									<tr>
										<td>Price</td>
										<td>:</td>
										<td>Rp. {{ number_format($product->harga) }}</td>
									</tr>
									<tr>
										<td>Supply</td>
										<td>:</td>
										<td>{{ number_format($product->stock) }}</td>
									</tr>
									<tr>
										<td>Heavy</td>
										<td>:</td>
										<td>{{ number_format($product->berat) }}</td>
									</tr>
									<tr>
										<td>Description</td>
										<td>:</td>
										<td>{{ $product->deskripsi }}</td>
									</tr>
									<tr>
										<td>Quantity</td>
										<td>:</td>
										<td>
											<form action="{{ url('pesan', $product->id) }}" method="post">
											@csrf
												<input type="number" name="jumlah" class="form-control" required="" min="1" value="1">
												@if(!empty(Auth::user()->id))
													@if($product->stok==0)
														<button type="" class="btn btn-dark mt-3 disabled">Stok Habis
													@else
														<button type="submit" class="btn btn-dark mt-3">Add to Cart
													@endif
													
												</button>
												@else
													@if($product->stok==0)
														<button type="" class="btn btn-dark mt-3 disabled">Stok Habis
													@else
														<a href="{{ route('login') }}">
															<button type="button" class="btn btn-dark mt-3">Add to Cart</button>
														</a>
													@endif
												@endif
											</form>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>