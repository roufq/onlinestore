<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARBRE DESIGN CO | DETAIL HISTORY</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
	<style type="text/css">
		.w3l-ecommerce-main .product-grid2 .add-to-cart {
		  color: #fff;
		  background-color: #232020;
		  font-size: 13px;
		  font-weight: 600;
		  text-align: center;
		  padding: 7px 7px;
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

		.read input[readonly] 
		{
			border: none;
			border-bottom: 2px solid black;
			background-color: white;        
			color: black;
			border-radius: 0px;
		}
	</style>

	<div class="container">
		<div class="content">
			<div class="box box-info">
	            <div class="content-header mt-4 mb-4">
					<p style="padding: 10px; font-size: 2em; font-family: Candara; font-weight: 600; "><b>Order <span style=" color: #ff7315">Details</span></b></p>
				</div>
				<div class="w3l-ecommerce-main">
					<div class="card-body product-grid2" style="font-family: Candara;">
			            <form class="form-horizontal read" action="{{url('/history/update/'.$checkout->id)}}" method="POST" enctype="multipart/form-data">
			            	{{csrf_field()}}
			            	<div class="row g-3 align-items-center">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Recipient's Name</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="fullname" class="form-control" name="fullname" value="{{$checkout->fullname}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Product Name</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="nama_barang" class="form-control" name="nama_barang" value="{{$checkout->nama_barang}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Price</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="harga" class="form-control" name="harga" value="{{$checkout->harga}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Quantity</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="jumlah" class="form-control" name="jumlah" value="{{$checkout->jumlah}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Total Price</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="jumlah_harga" class="form-control" name="jumlah_harga" value="{{$checkout->jumlah_harga}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Method</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="metode" class="form-control" name="metode" value="{{$checkout->metode}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Shipping Costs</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="ongkir" class="form-control" name="ongkir" value="{{$checkout->ongkir}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Total Pay</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="total" class="form-control" name="total" value="{{$checkout->total}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Address</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="alamat_rumah" class="form-control" name="alamat_rumah" value="{{$checkout->alamat_rumah}}" readonly="">
							  </div>
							</div>
							<div class="row g-3 align-items-center mt-1">
							  <div class="col-sm-2">
							    <label for="input" class="col-form-label">Status</label>
							  </div>
							  <div class="col-sm-10">
							    <input type="text" id="status" class="form-control" name="status" value="{{$checkout->status}}" readonly="">
							  </div>
							</div>
			            </form>
		        	</div>
		        </div>
		    </div>
		</div>
	</div>

</body>
</html>