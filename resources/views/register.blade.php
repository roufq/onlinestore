<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<style>
        .log{
            font-size: 20px;
        }
        @media(max-width: 575.98px){
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
                font-size: 15pt;
            }
            .log .isi-log{
                margin-top: 70px;
                padding: 0;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
                font-family: 'Spectral', serif;
            }
            .log{
                font-family: 'Spectral', serif;
            }
        }

        @media(min-width: 576px) and (max-width: 767.98px){
            
            .log .form-group input{
                margin-bottom: 5px;
            }
            .log .isi-log{
                margin-top: 80px;
                margin-left: -10px;
                margin-right: -10px;
                padding: 0px;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
            }
        }

        @media(min-width: 768px) and (max-width: 991.98px){
            
            .log label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
            }
            .log .isi-log{
                margin-top: 80px;
                margin-left: 30px;
                margin-right: 30px;
                padding: 0px;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
            }
        }

        @media(min-width: 992px) and (max-width: 1199.98px){
            
            .log label{
                font-size: 10pt;
                margin-bottom: 0;
            }
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
            }
            .log .isi-log{
                margin-top: 80px;
                margin-left: 10px;
                margin-right: 10px;
                padding: 0px;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
            }
        }

        @media(min-width: 1200px){
            
            .log label{
                margin-bottom: 2px;
                font-size: 1.2vw;
            }
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
                font-size: 1.2vw;
            }
            .log .isi-log{
                margin-top: 15vh;
                margin-left: 2vw;
                margin-right: 2vw;
                padding: 0px;
                background-color: white;
                color: black;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
                font-size: 1.2vw;
            }
        }


        .log .card{
            border: none;
            margin: auto ;
        }


        .log input[type=text],
        .log input[type=email],
        .log input[type=password],
        .log input[type=checkbox]{
            color: black;
            border: 1px solid #DCDCDC;
            border-radius: 5px;
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

    .inputBox{
        position: relative;
    }
    .inputBox input{
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        background: transparent;
        padding: 0 20px;
        box-sizing: border-box;
        border-radius: 8px;
    }
    .inputBox input::placeholder{
        color: #ccc;
    }
    #toggle{
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: url("assets/images/hide.png");
        background-size: cover;
        cursor: pointer;
    }
    #toggle.hide{
        background: url("assets/images/show.png");
        background-size: cover;
    }

    #toggles{
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        background: url("assets/images/hide.png");
        background-size: cover;
        cursor: pointer;
    }
    #toggles.hide{
        background: url("assets/images/show.png");
        background-size: cover;
    }


    </style>


    <div class="log" id="register">
        <div class="card w3l-ecommerce-main">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-md-7 col-lg-5">
                <form action="{{ route('register') }}" method="post" class="isi-log text-black">
                @csrf
                <h4 class="text-left" style="letter-spacing: 2px; font-size: 20pt; font-family: Raleway-Regular, sans-serif; margin-left: 20px;">ACCOUNT REGISTER</h4>

                <div class="card-body" style="margin-top: -15px;">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close mr-2" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li style="margin-top: -20px; margin-bottom: -10px;">{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group text-left mt-4">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;">Username</label>
                        <input type="text" name="name" class="form-control mt-2" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 30px;">
                    </div>
                    <div class="form-group text-left mt-2">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;">Email</label>
                        <input type="text" name="email" class="form-control mt-2" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 30px;">
                    </div>
                    <div class="form-group text-left mt-2">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;">Phone Number</label>
                        <input type="text" name="no_hp" class="form-control mt-2" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 30px;">
                    </div>
                    <div class="form-group text-left mt-2">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;">Address</label>
                        <input type="text" name="alamat" class="form-control mt-2" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 30px;">
                    </div>
                    <div class="form-group text-left mt-2">
                        
                    <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;">Password</label>
                    <div class="inputBox">
                        <input type="password" name="password" id="password" class="form-control mt-2" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 30px;">
                        <div id="toggle" onclick="showHide();"></div>
                    </div>
                    </div>
                    <div class="form-group text-left mt-2">

                    <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;">Confirm Password</label>
                        <div class="inputBox">
                            <input type="password" name="password_confirmation" id="password_confirm" class="form-control" style="height: 35px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 30px;">
                            <div id="toggles" onclick="showHideConfirm();"></div>
                        </div>
                    </div>
                </div>
                <div class="product-grid2" style="padding-left: 20px; padding-right: 20px;">
                <button type="submit" class="btn btn-block transmitv-cart ptransmitv-cart add-to-cart" style="padding-top: 9px; letter-spacing: 2px; font-weight: 550; font-size: 11pt; border-radius: 0px;">REGISTER</button>
                    <p class="mt-2 text-center" style="font-family: Raleway-SemiBold;">Already have an account? <a href="{{ route('login') }}">Login</a> now!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const password = document.getElementById('password');
        const toggle = document.getElementById('toggle');
        
        function showHide(){
            if(password.type === 'password'){
                password.setAttribute('type', 'text');
                toggle.classList.add('hide')
            } else{
                password.setAttribute('type', 'password');
                toggle.classList.remove('hide')
            }
        }
    </script>

    <script type="text/javascript">
        const password_confirm = document.getElementById('password_confirm');
        const toggles = document.getElementById('toggles');
        
        function showHideConfirm(){
            if(password_confirm.type === 'password'){
                password_confirm.setAttribute('type', 'text');
                toggles.classList.add('hide')
            } else{
                password_confirm.setAttribute('type', 'password');
                toggles.classList.remove('hide')
            }
        }
    </script>
    
</body>
</html>