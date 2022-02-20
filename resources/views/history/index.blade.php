<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARBRE DESIGN CO | HISTORY</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<body>
	<style type="text/css">
		.w3l-ecommerce-main .product-grid2 .add-to-cart {
		  color: #fff;
		  background-color: #232020;
		  font-size: 13px;
		  font-weight: 600;
		  text-align: center;
		  left: 0;
		  bottom: -100%;
		  transition: all .3s;
		}

		.w3l-ecommerce-main .product-grid2 .add-to-cart:hover {
		  background-color: #ff7315;
		  text-decoration: none;
		}

		.w3l-ecommerce-main .product-grid2:hover .add-to-cart {
		  bottom: 0;
		}

		@media(max-width: 575.98px){
			.kosong {
				margin-top: 50px;
			}
			.item {
				margin-left: 5px;
				margin-right: 5px;
			}
		}

		@media(min-width: 576px) and (max-width: 767.98px){
			.kosong {
				margin-top: 80px;
			}
			.item {
				margin-left: 20px;
				margin-right: 20px;
			}
		}

		@media(min-width: 768px) and (max-width: 991.98px){
			.kosong {
				margin-top: 80px;
			}
			.kosong img {
				width: 230px;
			}
			.kosong p {
				font-size: 30px;
			}
			.kosong a {
				width: 130px;
			}
			
			.kosongq {
				margin-top: 80px;
			}
			.kosongq img {
				width: 230px;
			}
			.kosongq p {
				font-size: 20px;
			}
			.kosongq a {
				width: 200px;
			}
			.item {
				margin-left: -100px;
				margin-right: -100px;
			}
		}

		@media(min-width: 992px) and (max-width: 1199.98px){
			.kosong {
				margin-top: 80px;
			}
			.kosong img {
				width: 140px;
			}
			.kosong p {
				font-size: 17px;
			}
			.kosong a {
				width: 100px;
			}
			.kosongq {
				margin-top: 80px;
			}
			.kosongq img {
				width: 140px;
			}
			.kosongq p {
				font-size: 17px;
			}
			.kosongq a {
				width: 150px;
			}
			.item {
				margin-left: 20px;
				margin-right: 20px;
			}
		}

		@media(min-width: 1200px){
			.kosong {
				margin-top: 15vh;
			}
			.kosong img {
				width: 200px;
			}
			.kosong p {
				font-size: 20px;
			}
			.kosong a {
				width: 100px;
			}

			.kosongq {
				margin-top: 15vh;
			}
			.kosongq img {
				width: 200px;
			}
			.kosongq p {
				font-size: 20px;
			}
			.kosongq a {
				width: 150px;
			}
			.item {
				margin-left: -5vh;
				margin-right: -5vh;
			}
			.status {
				font-size: 13px;
			}
		}
	</style>
	<div class="container">
		<div class="content-header mt-4 mb-4">
			<p style="padding: 10px; font-size: 2em; font-family: Candara; font-weight: 600; "><b>Your Order <span style=" color: #ff7315">HISTORY</span></b></p>
		</div>
		<div class="w3l-ecommerce-main">
	            <!-- /.box-header -->
	            <div class="card-body product-grid2">
	            	@if(count($checkout)>0)
					<table style="width: 100%; font-family: Geneva;" class="item">
						<tr>
							<td>
								<p style="font-size: 1.4em; font-weight: 400; ">Order Success</p>
	            				<p style="font-size: 1em;">Your order has been successfully ordered, then for payment, please transfer it to your account, <strong>Bank BRI Account Number: 47658-335741-984</strong></p>
								<p style="font-size: 1em;">The goods will be packed when you have paid for it</p>
							</td>
						</tr>
					</table>
		            <table id="table" class="item" style="margin-top: 20px;">
		                <tr style="width: 100%; height: 40px; font-family: Geneva; border-bottom: 2px solid grey;">
		                	<th style="width: 20%;">Product Name</th>
		                	<th style="width: 10%;">Price</th>
		                	<th style="width: 20%; text-align: center;">Quantity</th>
		                  	<th style="width: 15%;">Shipping Costs</th>
		                  	<th style="width: 15%;">Total Pay</th>
		                  	<th style="width: 10%;">Status</th>
							<th></th>
		                  	<th style="width: 10%;">Action</th>
		                </tr>
		                @foreach ($checkout as $data)
		                <tr>
							<td style="width: 20%; padding-top: 20px;">{{$data->nama_barang}}</td>
							<td style="width: 10%; padding-top: 20px;">{{$data->harga}}</td>
							<td style="width: 20%; padding-top: 20px; text-align: center;">{{$data->jumlah}}</td>
							<td style="width: 15%; padding-top: 20px;">Rp. {{ number_format($data->ongkir)}}</td>
							<td style="width: 15%; padding-top: 20px;">Rp. {{ number_format($data->total)}}</td>
							<td style="width: 10%; padding-top: 20px;">
								@if($data->status == 'Not Yet Paid')
									<button type="button" class="btn btn-warning btn-sm status">{{$data->status}}</button>
								@elseif($data->status == 'Being Sent')
									<button type="button" class="btn btn-primary btn-sm status">{{$data->status}}</button>
								@elseif($data->status == 'Finished')
									<button type="button" class="btn btn-success btn-sm status">{{$data->status}}</button>
								@elseif($data->status == 'Cancelled')
									<button type="button" class="btn btn-danger btn-sm status">{{$data->status}}</button>
								@endif
							</td>
							<td></td>
							<td style="width: 10%; padding-top: 20px;">
								<a href="{{url('/history/edit/'.$data->id)}}" class="btn transmitv-cart btn-sm add-to-cart btn-block">Details</a>
							</td>
							<!--  @if(empty($data->bukti_pembayaran))
							<td>
								<input type="file" name="bukti_pembayaran" id="bukti_pembayaran">
							</td>
							@else
							<td>
								<img src="{{$data->bukti_pembayaran}}" height="30%" width="30%">
							</td>
							@endif -->
		                </tr>
		                @endforeach
		               </table>
			            @else
							<div class="kosongq" align="center" style="font-family: Geneva;">
								<img src="assets/images/empty_history1.png">
								<p style="margin-top: ;">Your history is empty</p>
								<a href="{{url('check_out')}}" class="btn transmitv-cart add-to-cart btn-block mt-2" style="font-family: Candara; font-size: 13px;">Checkout now</a>
							</div>
						@endif
	              </div>
	            <!-- /.box-body -->
	          </div>
		</div>
	</div>

</body>
</html>