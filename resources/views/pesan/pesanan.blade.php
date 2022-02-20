<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARBRE DESIGN CO | CHECK OUT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<!-- <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<script>
		$(document).ready(function() {
			$('#provinsi').change(function() {
				var provinsi_id = $(this).val();

				$.ajax({
					type: 'POST',
					url: '{{ url('app/City.php') }}',
					data: 'province_id='+provinsi_id,
					success: function(response) {
						$(#kota).html(response);
					}
				});
			})
		});
	</script> -->

</head>
<body>
	<style type="text/css">
		body {
		    font-family: Helvetica Neue;
		    font-size: 15px;
		    padding: 8px;
		}
		h2{
		    text-align:left;
		}

		* {
		    box-sizing: border-box;
		}

		.error {
		    color: #ff7315;
		    border-color: #ff7315;
		}

		.row {
		    display: -ms-flexbox; /* IE10 */
		    display: flex;
		    -ms-flex-wrap: wrap; /* IE10 */
		    flex-wrap: wrap;
		    margin: 0 -10px;
		}

		.col-25 {
		    -ms-flex: 25%; /* IE10 */
		    flex: 25%;
		}

		.col-50 {
		    -ms-flex: 50%; /* IE10 */
		    flex: 50%;
		}

		.col-75 {
		    -ms-flex: 55%; /* IE10 */
		    flex: 55%;
		}

		.col-25,.col-50,.col-75 {
		    padding: 0 16px;
		}

		.container {
		    background-color: #FFFFFF;
		    padding: 3px 18px 13px 18px;
		    border-radius: 3px;
		    box-shadow: 0 0 2rem 0 rgba(168, 180, 194, 0.37);
		}


		input[type=text] {
		    width: 100%;
		    margin-bottom: 20px;
		    padding: 12px;
		    border-top: 0;
			border-right: 0;
			border-left: 0;
		}

		input[type=number] {
		    width: 100%;
		    margin-bottom: 20px;
		    padding: 12px;
		    border-top : 0;
			border-left: 0;
			border-right: 0;
		}

		select[type=text] {
		    width: 100%;
		    margin-bottom: 20px;
		    padding: 12px;
		    border-top : 0;
			border-left: 0;
			border-right: 0;
		    font-size: 16px;"
		}

		label {
		    margin-bottom: 10px;
		    display: block;
		}

		.icon-container {
		    margin-bottom: 20px;
		    padding: 7px 0;
		    font-size: 24px;
		}

		.btn {
		    background-color: #01BAEF;
		    color: white;
		    padding: 12px;
		    margin: 10px 0;
		    border: none;
		    width: 100%;
		    border-radius: 3px;
		    cursor: pointer;
		    font-size: 17px;
		    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

		}

		.btn:hover {
		    background-color: #0CBABA;
		}

		a {
		    color: #2196F3;
		}

		hr {
		    border: 1px solid lightgrey;
		}

		span.price {
		    float: right;
		    color: grey;
		}

		/* Responsive layout - when the screen is less than 800px wide, make the two columns 
		    stack on top of each other instead of next to each other (also change the direction 
		    - make the "cart" column go on top) 
		*/
		@media (max-width: 800px) {
		    .row {
		        flex-direction: column-reverse;
		    }
		    .col-25 {
		        margin-bottom: 20px;
		    }
		}

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
	</style>
	<div class="container">
		<p style="text-align: center; padding: 30px; font-size: 2em; font-family: Candara; font-weight: 600; "><b>Check<span style=" color: #ff7315">Out</span></b></p>
		<div class="row">
		    <div class="col-75 card w3l-ecommerce-main ">
		        <div class="card-body product-grid2">
		            <form id="validate" action="{{url('/history/store/'.$keranjang->product->id)}}" method="GET">
		                {{csrf_field()}}
		                <div class="row">
		                    <div class="col-50">
		                        <h4 class="mt-2 mb-4"><i>Shipping Address</i></h4>
		                        <label for="fname"><i class="fa fa-user"></i> Recipient's Name</label>
		                        <input type="text" id="fullname" name="fullname" required>
		                        <input type="text" name="Keranjang_id" value="">
		                        <label for="province">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
								  	<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Province</label>
									<select name="provinsi" id="province" onchange="updateProvince()" class="form-control form-control-sm radius province" style=" width: 100%; margin-bottom: 20px; padding: 12px; border: none; border-bottom: 1px solid black; border-radius: 0;" required>
                                        <option value="">Select Province</option>
                                        @foreach ($subdistricts as $province)
                                            <option class="text-dark" value="{{ $province->province_name }}" required>{{ $province->province_name }}</option>
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" class="form-control radius text-p input_province_id address-isi-c" name="province_id" value="" hidden> -->
                                
									<!-- <input type="text" id="provinsi" name="provinsi" required> -->
		                        <label for="city">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
								  	<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> City</label>
										
									<select name="kabupaten" id="city" onchange="updateCity()" class="form-control form-control-sm radius city"  required style=" width: 100%; margin-bottom: 20px; padding: 12px; border: none; border-bottom: 1px solid black; border-radius: 0;" required>
                                        <option value="">Select City</option>
                                        @foreach ($subdistricts as $city)
                                            <option class="text-dark" value="{{ $city->city_name }}" required>{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                    <!-- <input type="text" class="form-control radius text-p input_city_id address-isi-c" name="city_id" value="{{ ($customera->city_id !=null)? $customera->city_id : '' }}" required hidden> -->
                                
									<!-- <input type="text" id="kabupaten" name="kabupaten" required> -->
		                        <label for="subdistrict">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
								  	<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Districts</label>

									<select name="kecamatan" id="subdistrict" class="form-control form-control-sm radius subdistrict" required style=" width: 100%; margin-bottom: 20px; padding: 12px; border: none; border-bottom: 1px solid black; border-radius: 0;" required>
                                        <option value="">Select Subdistrict</option> 
                                        @foreach ($subdistricts as $district)
                                            <option class="text-dark" value="{{ $district->city_name }}" required>{{ $district->city_type }}</option>
                                        @endforeach 
                                    </select>
                                    <!-- <input type="text" class="form-control form-control-sm radius text-p input_subdistrict_id address-isi-c" value="{{ ($customera->subdistrict_id !=null)? $customera->subdistrict_id : '' }}" name="subdistrict_id" hidden> -->
                                
		                        <label for="alamat_rumah">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
		  							<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Address</label>
		                        <input type="text" id="alamat_rumah" name="alamat_rumah" required>
		                        <label for="no_hp"><i class="fa fa-phone"></i> Phone</label>
		                        <input type="text" id="no_hp" name="no_hp" required>
		                        <input type="text" name="input_product_id" id="input_product_id" value="{{ $keranjang->product->id }}" hidden="">
		                    </div>

		                    <div class="col-50">
		                        <h4 class="mt-2 mb-4"><i>Payment</i></h4>
		                        <label for="metode">Payment Method</label>
		                        <select  type="text" id="metode" name="metode" required>
		                        	<option></option>
		                        	<option value="COD" >COD</option>
		                        	<option value="Send An Address">Send An Address</option>
		                        </select>
		                        
		                    </div>
		                </div>
		                	<input type="submit" class="btn btn-md transmitv-cart ptransmitv-cart add-to-cart btn-block mt-2" value="Make An Order">
		            
		        </div>
			    </div>
			    <div class="col-25">
			        <div class="container" style="font-size: 14px;">
			            <div class="alert alert-danger mt-2" role="alert" style="font-size: 15px;">
						  	Immediately Make Payments Before the Date<br>
						  	<b>
							  <?php
			                    $pinjam            = date("d-m-Y");
			                    $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
			                    $kembali           = date("d-m-Y", $tujuh_hari);
			                    echo "$kembali";
			                  ?>
			          		</b>
						</div>
			            <h4 class="mb-4">Shopping Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4><hr>
			            <p>
			            	<input type="" name="nama_barang" id="nama_barang" value="{{ $keranjang->product->nama_barang }}" hidden="">
			            	{{ $keranjang->product->nama_barang }}
			            	<input type="" name="input_harga" id="input_harga" value="Rp. {{ number_format($keranjang->product->harga) }}" hidden="">
			            	<span class="price">Rp. {{ number_format($keranjang->product->harga) }}</span></p>
			            <p>Quantity
			            	<input type="" name="input_jumlah" id="input_jumlah" value="{{ $keranjang->jumlah }}" hidden="">
			            	<span id="jumlah" name="jumlah" class="price">{{ $keranjang->jumlah }}</span></p>
			            <p>Heavy<span class="price">{{ $keranjang->product->berat }}</span></p>
			            <hr>
			            <input type="" name="input_jumlah_harga"  id="input_jumlah_harga" value="{{ $keranjang->jumlah_harga }}" hidden="">
			            <p>Total Price <span class="price" style="color:black" id="jumlah_harga" name="jumlah_harga">{{ $keranjang->jumlah_harga }}</span></p>
			            <p>Shipping Cost 
			            	<input type="" id="input_ongkir" name="input_ongkir" value="0" hidden="">
			            	<span  class="price" style="color:black;" id="ongkir" name="ongkir"><small>0</small></span></p>
			            <p>Grand Total
			            	<input type="" name="input_total" id="input_total" hidden="">
			            	<span class="price total" style="color:black" id="total" name="total"><strong></strong></span></p>
			        </div>
			    </div>
			</form>
		</div>
	</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            city: {
                required: true,
            },
            province: {
                required: true,
            },
            subdistrict: {
                required: true,
            },
            alamat_rumah: {
                required: true,
            },
            no_hp: {
                required: true,
            },
            metode: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input Full Name*",
            city:"Please input Regency*",
            province:"Please input Province*",
            subdistrict:"Please input Sub Districts*",
            alamat_rumah:"Please input Home Address*",
            no_hp:"Please input Phone*",
            metode:"Please input Method*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
	function updateProvince() {
		let province = $("#province").val()
		$("#city").children().remove()
		$("#city").val('');
		$("#city").append('<option value="">Select City</option>');
		$("#city").prop('disabled',true)
		if(province!='' && province!=null){
			$.ajax({
				url:"{{url('')}}/list_city/"+province,
				success:function(res){
					console.log(res)
					$("#city").prop('disabled',false)
					$.each(res,function(index,data){
						$("#city").append('<option value="'+data.city_id+'">'+data.name+'</option>');
					});
				}
			});
		}
	}

	function updateCity() {
		let city = $('#city').val()
		$("#subdistrict").children().remove()
		$("#subdistrict").val('');
		$("#subdistrict").append('<option value="">Select Subdistrict</option>');
		$("#subdistrict").prop('disabled',true)
		if(city!='' && city!=null){
			$.ajax({
				url:"{{url('')}}/list_subdistrict/"+city,
				success:function(res){
					console.log(res)
					$("#subdistrict").prop('disabled',false)
					$.each(res,function(index,list){
						$("#subdistrict").append('<option value="'+list.subdistrict_id+'">'+list.name+'</option>')
					});
				}
			});
		}
	}
</script>

<!-- <script type="text/javascript">
	// address.js

// jQuery(function(){
    var province=$('.input_province_id').val();
    var city= $('.input_city_id').val();
    var subdistrict= $('.input_subdistrict_id').val();

    // UNTUK MODAL ADD NEW ADDRESS
    // Jika province berubah
    $('.modalAddAddress .province_id').on('change', function(){
        let province_id=$(this).val();
        let this_url='../api/province/';

        if(province_id){
            $('.modalAddAddress .input_province_id').empty();
            $('.modalAddAddress .input_province_id').val(province_id);

            getCity(this_url, province_id);
        }else{
            $('.modalAddAddress .city_id').append('<option>Select City</option>');
            $('.modalAddAddress .city_id').append('<option>Select City</option>');

        }
    });

    // Jika City berubah
    $('.modalAddAddress .city_id').on('change', function(){
        let city_id=$('.city_id').val();
        let this_url='../api/city';

        if(city_id){
            $('.modalAddAddress .input_city_id').empty();
            $('.modalAddAddress .input_city_id').val(city_id);

            getSubdistrict(this_url, city_id);
        }else{
            $('.modalAddAddress .subdistrict_id').append('<option>Select Subdistrict</option>');
        }
    });

    // Jika Subdistrict berubah
    $('.modalAddAddress .subdistrict_id').on('change', function(){
        let subdistrict_id=$(this).val();

        if(subdistrict_id){
            $('.modalAddAddress .input_subdistrict_id').empty();
            $('.modalAddAddress .input_subdistrict_id').val(subdistrict_id);
        }
    });



    //UNTUK PROFIL ALAMAT CUSTOMER
    if($('.profile_input_province_id')[0]){
        if($('.profile_input_province_id').val() != ''){
            let prov_id=$('.profile_input_province_id').val();
            let this_url=BASE_URL+'/api/province';
    
            $('.select-province-val').hide();
            getCity(this_url, prov_id);
        } else{
            $('.profile-customer .select-province-val').show();
        }
    }

    if($('.profile-customer .input_city_id')[0]){
        if($('.profile-customer .input_city_id').val() != ''){
            let city_id=$('.profile-customer .input_city_id').val();
            let this_url=BASE_URL+'/api/city';
    
            $('.profile-customer .select-city-val').hide();
    
            getSubdistrict(this_url, city_id);
        }
    }

    if($('.profile-customer .input_subdistrict_id')[0]){
        if($('.profile-customer .input_subdistrict_id').val() != ''){
            let subdistrict=$('.profile-customer .input_subdistrict_id').val();
            $('profile-customer .subdistrict_id').val(subdistrict);
    
            $('.subdistrict-default-value').hide();
        }
    }


    // kalau inputan berubah
    $('.profile-province_id').on('change', function(){
        let province_id=$(this).val();
        let this_url=BASE_URL+'/api/province';

        if(province_id){
            $('.profile_input_province_id').empty();
            $('.profile_input_province_id').val(province_id);
            $('.profile-customer .city_id').empty();
            $('.profile-customer .input_city_id').empty();
            $('.profile-customer .input_subdistrict_id').val("");
            $('.profile-customer .subdistrict_id').empty();
            $('.profile-customer .subdistrict_id').append('<option>Select Subdistrict</option>');

            getCity(this_url, province_id);
        }else{
            $('.profile-customer .city_id').append('<option>Select City</option>');
        }
    });

    $('.profile-customer .city_id').on('change', function(){
        let city_id=$('.profile-customer .city_id').val();
        let this_url=BASE_URL+'/api/city';

        if(city_id){
            $('.profile-customer .input_city_id').empty();
            $('.profile-customer .input_city_id').val(city_id);
            $('.profile-customer .subdistrict_id').empty();
            $('.profile-customer .input_subdistrict_id').empty();


            getSubdistrict(this_url, city_id);
        }else{
            $('.profile-customer .subdistrict_id').append('<option>Select Subdistrict</option>');
        }
    });

    $('.profile-customer .subdistrict_id').on('change', function(){
        let id=$(this).val();

        if(id){
            $('.profile-customer .input_subdistrict_id').empty();
            $('.profile-customer .input_subdistrict_id').val(id);
        }else{
            $('.profile-customer .subdistrict_id').append('<option>select subdistrict</option>');
        }
    });

// });


// FUNCTION
// CITY
function getCity(this_url, province_id){
    let city=$('.input_city_id').val();

    $.ajax({
        url: this_url+'/'+province_id+'/city',
        type: 'GET',
        dataType: 'json',
        beforeSend: function(){	
            $('.city_id').empty();	
            $('.city_id').append('<option selected>Please wait..</option>');	
        },
        success: function(data){
            $('.city_id').empty();
            $('.city_id').append('<option selected disabled value="">Select City</option>');

            $.each(data.results, function(key, value){
                $('.city_id').append('<option value="'+value.city_id+'" id="'+value.id+'" class="my-0 py-0" city="'+value.city_id+'">'+value.type+' '+value.name+'</option>');
            });

            $('.city_id').val(city);
            console.log("berhasil");
        }
    });
}

// SUBDISTRICT
function getSubdistrict(this_url, city_id){
    let subdistrict=$('.input_subdistrict_id').val();

    $.ajax({
        url: this_url+'/'+city_id+'/subdistrict',
        type: 'GET',
        dataType: 'json',
        beforeSend: function(){	
            $('.subdistrict_id').empty();	
            $('.subdistrict_id').append('<option selected>Please wait..</option>');	
        },
        success: function(data){
            $('.subdistrict_id').empty();
            $('.subdistrict_id').append('<option selected disabled value="">Select Subdistrict</option>');
            $.each(data.results, function(key, value){
                $('.subdistrict_id').append('<option value="'+value.subdistrict_id+'" id="'+value.id+'" class="my-0 py-0" subdistrict="'+value.subdistrict_id+'">'+value.name+'</option>');
            })
            
            $('.subdistrict_id').val(subdistrict);
        }
    });
} -->




	<!-- // $('#province').change(function() {
    //     var provinsiID = $(this).val();
    //     if (provinsiID) {
    //         $.ajax({
    //             type: "GET",
    //             url: "{{ url('pesan/pesanan') }}?province_id=" + provinsiID,
    //             success: function(res) {
    //                 if (res) {
    //                     $('#city').empty();
    //                     $('#city').append('<option value="">Pilih Kota/Kabupaten</option>');
    //                     $.each(res, function(key, value) {
    //                         $('#city').append($('<option value="' + id + '">' + name + '</option>'));
    //                     });
    //                 } else {
    //                     $('#city').empty();
    //                 }
    //             }
    //         });
    //     } else {
    //         $('#city').empty();
    //         $('#subdistricts').empty();
    //     }
    // });
</script> -->
<!-- <script type="text/javascript">
	$(document).ready(function() {
		$(document).on('change','.province',function(){
			console.log("hmmm its change");

			var province=$(this).val();
			console.log(province);
			var div=$(this).parent();
			var city=$(this).val();

			var op=" ";
			
			$.ajax({
				type:'get',
				url:'{{URL('/pesan/pesanan/{id}')}}',
				data:{id:'province'},
				success:function(data){
					console.log('succcess');

					// console.log(data);

					console.log(data.length);

					op+='<option value="0" selected disabled>chose city</option>';
					for(var i=0;i<province;i++){
						op+='<option value="'+data[i].name+'">'+data[i].name+'</option>';
					}
					div.find('.province').html(" ");
					div.find('.city').append($('').attr('value', op));
				},
				error:function(){
					
				}
			});
		});
	});
</script> -->
</body>
</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#metode").change(function() {
			var metode = $(this).val();
			

			if (metode == "COD") {
				var ongkir = 0;
				$("small").html(ongkir);
			} else{
				var ongkir = "{{ $keranjang->product->berat }}"*"10";
				$("small").html(ongkir);
			}

			var jml=document.getElementById('input_jumlah_harga').value;
			var jumlah=document.getElementById('input_jumlah').value;
			var nama_barang=document.getElementById('nama_barang').value;
			var harga=document.getElementById('input_harga').value;
			var product_id=document.getElementById('input_product_id').value;
			document.getElementById('input_ongkir').value=ongkir;
			var total=parseInt(jml)+parseInt(ongkir);
			document.getElementById('input_total').value=total;
			$(".total").html(total);

			// window.alert(total);

		});
	});
	// $("#total").keyup(function(){
	// 	var jumlah_harga = parseInt($("#jumlah_harga").val())
	// 	var ongkir = parseInt($("#ongkir").val())
	// 	var total = jumlah_harga + ongkir;
	// 	$("#total").attr("value",total);

	// 	console.log(total);
	// });
	// function total(){
	// 	var jml=document.getElementById('jumlah_harga').value;
	// 	var ong=document.getElementById('ongkir').value;
	// 	var total=jml+ong;
	// 	document.getElementById('total').value=total;
	// 	console.log(total);
	// }

	// function jml_beli(id){
	// 	jml=document.getElementById('jumlah_harga'+id).value;
	// 	ong=document.getElementById('ongkir'+id).value;
	// 	total= jml+ong;

	// 	console.log(jml);
	// 	console.log(ong);
	// 	console.log(total);

</script>
