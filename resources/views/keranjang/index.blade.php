<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
	<div class="container">
		<div class="row">
	        <div class="col-xs-12">
	          	<div class="box">
	            	<div class="box-header">
						<h3 class="hny-title mb-0 text-center" style="padding: 50px;">Shopping <span>Cart</span></h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover">
							<thead class="table-dark">
							    <tr>
							    	<th>No</th>
							    	<th>Nama Barang</th>
							    	<th>Jumlah</th>
							    	<th>Harga</th>
							     	<th>Gambar</th>
							    </tr>
							</thead>
							<tbody>
							    <tr>
							    	@foreach($query as $data)
							     	<td>{{$loop->iteration}}</td>
							     	<td>{{$data->nama_barang}}</td>
							     	<td>{{$data->jumlah}}</td>
							     	<td>{{number_format($data->harga)}}</td>
							     	<td><img src="{{$data->gambar1}}" style="height: 90px; width: 105px;"></td>
							    </tr>
							    @endforeach

							    <tr>
							    	<td></td>
							    	<td><b>Sub Total<b></td>
							    	<td></td>
							    	<td>{{$data->harga}}</td>
							    	<td></td>
							    </tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@push('bottom')
	<script type="text/javascript">
		function harga(){
			hrg=document.getElementById('harga').value;
			jml=document.getElementById('jumlah').value;
			total= hrg*jml;
			document.getElementById('harga').value=total;
			}
	</script>


</body>
</html>