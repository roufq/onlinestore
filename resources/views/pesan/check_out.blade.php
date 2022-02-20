<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>ARBRE DESIGN CO | CART</title>

	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
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
			.item {
				margin-left: -5vh;
				margin-right: -5vh;
			}
		}

		.read input[readonly] 
		{
			border:none;
			background-color: white;        
			color: black;
		}
		
	</style>


	<div class="container">
			<div class="head">
				<p style="text-align: center; padding: 30px; font-size: 2em; font-family: Candara; font-weight: 600; "><b>My Shopping <span style=" color: #ff7315">Cart</span></b></p>
			</div>		
			<div class="col-md-12">
				<div class="w3l-ecommerce-main">
					<div class="card-body product-grid2">
						<div class="row">
							<div class="col-md-6">
								<!-- <a href="{{ url('check_out/destroy/'.$data->semua_id) }}">
					     			<button class="btn btn-sm transmitv-cart ptransmitv-cart add-to-cart mb-3 mr-1" disabled="disabled" onclick="" id="btn_delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
									<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
									</svg></button>
								</a>

								<button class="btn btn-sm transmitv-cart ptransmitv-cart add-to-cart mb-3 ml-1" disabled="disabled" id="button-nonaktif-all-i">Check Out</button> -->
							</div>
							
						</div>
						@if(count($query)>0)
						<table style="width: 100%;">
							<tr style="font-family: Optima;">
								<td style="width: 80%; text-align: right;">
									<p><strong>Grand Total :</strong></p>
								</td>
								<td class="read" style="width: 20%;">
									<input type="number" name="sum" class="form-control" style="margin-top: -15px; font-size: 20px; font-weight: 600; text-align: right;" id="sum" value="{{ $query->sum('jumlah_harga')}}" readonly="background-color: white;">
										
								</td>
							</tr>
						</table>
						<table id="table" class="read item">
							<tr style="width: 100%; height: 40px; font-family: Geneva; border-bottom: 2px solid grey;">
								<th style="width: 10%; padding-left: 20px;">Product</th>
								<th style="width: 30%;"></th>
								<th style="width: 10%;">Quantity</th>
								<th style="width: 15%; padding-left: 20px;">Price</th>
								<th style="width: 15%; padding-left: 20px;">Total</th>
								<th style="width: 15%">Action</th>
								<th style="width: 5%;"></th>
							</tr>
							<tr>
								
								@foreach($query as $data)
								<td style="width: 10%; padding-top: 20px;"><img src="{{ asset($data->gambar1)}}" style="width: 70px;"></td>
								<td style="width: 20%;  font-size: 13px;">{{$data->nama_barang}}</td>
								
								<td style="width: 10%;">
									
										<input type="number" min="1" class="form-control" name="jumlah" id="jumlah{{ $data->id }}" value="{{$data->jumlah}}" style="width: 60px; font-size: 13px; border-radius: 0px; border-color: grey;" onchange="jml_beli({{ $data->id }})" >

										
								</td>
								<td style="width: 15%;">
									<input type="text" class="form-control" style="font-size: 13px;" name="harga" id="harga{{ $data->id }}" readonly value="{{($data->harga)}}">
								</td>
								<td style="width: 15%;">
									<input type="text" class="form-control" style="font-size: 13px;" id="jumlah_harga{{ $data->id }}" name="jumlah_harga" readonly value="{{($data->jumlah_harga)}}">
									
								</td>
								<td style="width: 15%; padding-top: 20px;">
									<a href="{{url('pesan/pesanan/'.$data->id)}}" class="btn btn-sm transmitv-cart ptransmitv-cart add-to-cart btn-block mt-2">Check Out</a>
								</td>
								<td style="width: 15%; text-align: right;">
									<a href="{{ url('check_out/destroy/'.$data->id) }}" style="color: #ff7315">X</a>
								</td>

							</tr>
							@endforeach
							    
						</table>
						@else
					    	<div class="kosong" align="center" style="font-family: Geneva;">
								<img src="assets/images/empty_cart1.png">
								<p style="margin-top: ;">Your cart is empty</p>
								<a href="{{url('shop')}}" class="btn transmitv-cart ptransmitv-cart add-to-cart btn-block mt-2" style="font-family: Candara; font-size: 13px;">Shop now</a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>

<script type="text/javascript">
	// let yangDiCheck = 0

	// $("#head-cb").on('click', function(){
	// 	var isChecked = $("#head-cb").prop("checked")
	// 	$(".cb-child").prop("checked",isChecked)
	// 	$("#btn_delete").prop('disabled',!isChecked)
	// 	$("#button-nonaktif-all-i").prop('disabled',!isChecked)
		
	// });

	// $("#table tbody").on("click",".cb-child", function(){
	// 	if ($(this).prop("checked")!=true) {
	// 		$("#head-cb").prop("checked",false)
	// 	}

	// 	let semua_checkbox = $("#table tbody .cb-child:checked")
	// 	let button_non_aktif_status = (semua_checkbox.length>0)
	// 	$("#btn_delete").prop('disabled',!button_non_aktif_status)
	// 	$("#button-nonaktif-all-i").prop('disabled',!button_non_aktif_status)
	// });

	// function destroy()
	// {
	// 	let checkbox_terpilih = $("#table tbody .cb-child:checked")
	// 	let semua_id = []
	// 	$.each(checkbox_terpilih, function(index,elm){
	// 		semua_id.push(elm.value)
	// 	})
	// 	$.ajax({
	//         url: "{{ url('') }}/check_out/destroy",
	//         method:"post",
	//         data: {id},
	//         success: function(res) {
	//             table.ajax.reload(null,false)
	//     });
	// 	// for(let key in checkbox_terpilih){
	// 	// 	semua_id.push(checkbox_terpilih[key].value)
	// 	// }
	          // $.ajax({
	          //   url:"",
	          //   method:'post',
	          //   data:{semua_id},
	          //   success:function(){
	          //     for(var i=0; i<id.length; i++){
	          //       $('tr#'+id[i]+'').fadeOut('slow');
	          //     }
	          //   }
	          // });
	        
	// 	console.log(semua_id)
	// 	console.log("YANG TERPILIIH AKAN DI HAPUS")
	// }


	// function read()
	// {
	// 	$.get("{{ url('read') }}", {}, function(data, status) {
	// 		$("#read").html(data);
	// 	})
	// }

	// function show(id)
	// {
	// 	$.get("{{ url('show') }}/" + id, {}, function(data, status) {
	// 		$("#exampleModalLabel").html('edit jumlah')
	// 		$("#page").html(data);
	// 		$("#exampleModal").modal('show');
	// 	});

	// function jml_beli(id){
	// 	hrg=document.getElementById('harga'+id).value;
	// 	jml=document.getElementById('jumlah'+id).value;
	// 	total= hrg*jml;
	// 	document.getElementById('jumlah_harga'+id).value=total;
	// 	console.log(hrg);
	// 	console.log(jml);
	// 	//console.log(total);
	// }
				// var jumlah = $("#jumlah").val();
				// $.ajax({
				// 	type: "get",
				// 	url: "{{ url('show') }}/" + id,
				// 	data: "jumlah=" + jumlah,
				// 	success: function(data) {
				// 		$(".btn-close").click();
				// 		read()
				// 	}
				// });
			
	// }
</script>

<script type="text/javascript">
	function jml_beli(id){
		hrg=document.getElementById('harga'+id).value;
		jml=document.getElementById('jumlah'+id).value;
		total= hrg*jml;


		console.log(hrg);
		console.log(jml);
		console.log(sum);

		var url = "{{URL('check_out/update')}}"+"/"+id;
		$.ajax({
			headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
			type: "post",
			url: url,
			data: {
				jumlah:jml,
				jumlah_harga:total,
			},
			success: function(dataResult){
				document.getElementById('jumlah_harga'+id).value=total;
				dataResult = JSON.parse(dataResult);
				console.log(dataResult);

			}, error: function(error){
            console.log(error.responseText);
        }

		});	
					
					
	}
</script>
