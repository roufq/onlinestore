<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <style>
        .box{
            /* background-image: url('../assets/ref/login-bg.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            border: none;
            /* height: 100vh; */
            background-color: white;
            font-family: 'Spectral', serif;
            font-size: 20px;
        }

        /* REGISTER LOGAN */
        @media(max-width: 575.98px){
            #login .box h4,
            #register .box h4{
                font-size: 10pt;
                margin-bottom: 8px;
                font-family: 'Spectral', serif;
            }
            #login .box .card,
            #register .box .card{
                margin-top: 0;
            }
            #login .box label,
            #register .box label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
                font-size: 15pt;
            }
            .box .form-auth{
                margin-top: 50px;
                padding: 0;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
                font-family: 'Spectral', serif;
            }
            .box .nb-text{
                font-size: 6pt;
            }
            .box{
                font-family: 'Spectral', serif;
            }
        }

        @media(min-width: 576px) and (max-width: 767.98px){
            .box h4{
                font-size: 11pt;
                margin-bottom: 8px;
            }
            .box label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
            }
            .box .form-auth{
                margin-top: 80px;
                margin-left: 30px;
                margin-right: 30px;
                padding: 0px;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
            }
            .box .nb-text{
                font-size: 7pt;
            }
        }

        @media(min-width: 768px) and (max-width: 991.98px){
            .box h4{
                font-size: 10pt;
                margin-bottom: 8px;
            }
            .box label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
            }
            .box .form-auth{
                margin-top: 80px;
                margin-left: 30px;
                margin-right: 30px;
                padding: 0px;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
            }
            .box .nb-text{
                font-size: 6pt;
            }
            .box .card .card-img{
                height: 70%;
                border: none;
            }
        }

        @media(min-width: 992px) and (max-width: 1199.98px){
            .box h4{
                font-size: 11pt;
                margin-bottom: 8px;
            }
            .box label{
                font-size: 10pt;
                margin-bottom: 0;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
            }
            .box .form-auth{
                margin-top: 80px;
                margin-left: 40px;
                margin-right: 40px;
                padding: 0px;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
            }
            .box h6, .box p{
                font-size: 10pt;
            }
            .box .nb-text{
                font-size: 8pt;
            }
            .box .card .card-img{
                height: 80%;
                border: none;
            }
        }

        @media(min-width: 1200px){
            .box h4{
                margin-bottom: 8px;
            }
            .box label{
                margin-bottom: 2px;
                font-size: 1.2vw;
            }
            .box a{
                font-size: 1.2vw;
            }
            .box .form-group{
                margin: 0;
            }
            .box .form-group input{
                margin-bottom: 5px;
                font-size: 1.2vw;
            }
            .box .form-auth{
                margin-top: 15vh;
                margin-left: 5vw;
                margin-right: 5vw;
                padding: 0px;
                background-color: white;
                color: black;
            }
            .box .form-auth button{
                margin-top: 8px;
                padding: 0;
                font-size: 1.2vw;
            }
            .box .nb-text{
                font-size: 9pt;
            }
            .box .card .card-img{
                height: 100%;
                border: none;
            }
        }


        .box .card{
            height: 90.2vh;
            border: none;
            margin: auto ;
        }


        .box input[type=text],
        .box input[type=email],
        .box input[type=password],
        .box input[type=checkbox]{
            box-shadow: none;
            border-radius: 0;
            border-bottom: 1px solid black;
            border-top: none;
            border-left: none;
            border-right: none;
            padding: 0;
        }

        .box input[type=text]:focus,
        .box input[type=email]:focus,
        .box input[type=password]:focus {
            box-shadow: none;
            border-radius: 0;
            border-bottom: 1px solid grey;
            border-top: none;
            border-left: none;
            border-right: none;
            padding: 0;
        }

        .box input[type=text]:active,
        .box input[type=email]:active,
        .box input[type=password]:active {
            border: none;
            box-shadow: none;
            padding: 0;
        }

        .box .field-icon {
            float: right;
            margin-left: -25px;
            position: relative;
            z-index: 2;
        }

        .w3l-ecommerce-main .product-grid2 .add-to-cart {
		  color: #fff;
		  background-color: black;
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
    <div class="box" id="login">
        <div class="card bg-transparent text-white w3l-ecommerce-main">
            <div class="row justify-content-center my-3 my-xl-5">
                <div class="col-10 col-sm-8 col-md-7 col-lg-5">
                <form method="POST" action="{{ url('/forgot_password') }}" class="form-auth text-black">
                    {{ csrf_field() }}

                    @if(session('error'))
                        <div>{{ session('error') }}</div>
                    @endif

                    @if(session('success'))
                        <div>{{ session('success')}}</div>
                    @endif

                    <div class="form-group  text-left">
                        <label style="font-size: 13pt; letter-spacing: 1px;>Email Address">Email Address</label>
                        <input style="height: 35px; font-size: 13pt; letter-spacing: 0.5px;" id="email" type="email" class="form-control radius form-control-sm"
                            name="email" required>
                    </div>

                    <div class="product-grid2">
                        <button type="submit" class="btn btn-block transmitv-cart ptransmitv-cart add-to-cart" style="padding-top: 10px; letter-spacing: 2px; font-weight: 550; font-size: 10pt; border-radius: 0px;">SEND PASSWORD RESET LINK</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>