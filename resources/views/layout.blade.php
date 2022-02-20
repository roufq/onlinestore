
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ARBRE DESIGN CO</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->

  <script  src =" https://unpkg.com/sweetalert/dist/sweetalert.min. js " > </script>

</head>
<body>
<!--w3l-banner-slider-main-->

  <div class="w3l-banner-slider-main">
    <div class="top-header-content">
      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <!--/left-->
            
            <!--//left-->
            <!--/right-->
            <ul class="top-hnt-right-content col-lg-12">
              @if(empty(Auth::user()->id))
              <li class="transmitvcart galssescart2 cart cart box_1">
                <a class="last" href="{{url('login')}}">
                  <button class="top_transmitv_cart">
                    Login 
                    <span class="fa fa-user"></span>
                  </button>
                </a>
              </li>
              @endif

              @if(empty(Auth::user()->id))
              <li class="transmitvcart galssescart2 cart cart box_1">

                <?php 
                  $notif = \App\Keranjang::where('user_id', Auth::user()->id)->where('status',0)->get()->count();
                
                ?>
                <a href="{{url('login')}}" class="last">
                  <button class="top_transmitv_cart" type="submit" name="submit" value="">
                    My Cart
                    <span class="fa fa-shopping-cart"></span><sup><span class="badge badge">{{ $notif }}</span></sup>
                  </button>
                </a>
              </li>
              @else
              <li class="transmitvcart galssescart2 cart cart box_1">

                <?php 
                  $notif = \App\Keranjang::where('user_id', Auth::user()->id)->where('status',0)->get()->count();
                
                ?>
                <a href="{{url('check_out')}}" class="last">
                  <button class="top_transmitv_cart" type="submit" name="submit" value="">
                    My Cart
                    <span class="fa fa-shopping-cart"></span><sup><span class="badge badge">{{ $notif }}</span></sup>
                  </button>
                </a>
              </li>
              @endif
            </ul>
            <!--//right-->
            
          </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid serarc-fluid">
            <a class="navbar-brand" href="#">
              ARBRE<span class="lohny">DESIGN</span>CO</a>
            <!-- if logo is image enable this   
                <a class="navbar-brand" href="#index.html">
                  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
            <!--/search-right-->
            <!-- <div class="search-right">

              <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                <span class="search-text">Search here</span></a> -->
              <!-- search popup -->
              <!-- <div id="search" class="pop-overlay">
                <div class="popup">

                  <form action="/search" method="GET" class="search-box">
                    <input type="search" placeholder="Keyword" name="search" required="required"
                      autofocus="">
                    <button type="submit" class="btn">Search</button>
                  </form>

                </div>
                <a class="close" href="#">×</a>
              </div> -->
              <!-- /search popup -->
            <!-- </div> -->
            <!--//search-right-->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#shop">Shop</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="dropdownSubMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border- shadow" style="opacity: 0.6">
                    <li><a href="https://www.instagram.com/arbredesign.co" class="dropdown-item" target="blank">Instagram</a></li>
                    <li><a href="https://shopee.co.id/arbredesignco" class="dropdown-item" target="blank">Shopee</a></li>
                    <li><a href="https://www.tokopedia.com/arbredesignco" class="dropdown-item" target="blank">Toko Pedia</a></li>
                  </ul>
                  <!-- <ul class="nav-link isi-dropdown" style="list-style: none;">
                    <li><a class="nav-link" href="https://www.instagram.com/arbredesign.co/" target="blank">Instagram</a></li>
                    <li><a class="nav-link" href="https://shopee.co.id/arbredesignco" target="blank">Shopee</a></li>
                    <li><a class="nav-link" href="https://www.tokopedia.com/arbredesignco" target="blank">Toko Pedia</a></li>
                  </ul> -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="dropdownSubMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="opacity: 0.6">
                    <li><a href="{{ url('profil') }}" class="dropdown-item">Profil</a></li>
                    <li>
                      <?php 
                        $notif = \App\Checkout::where('user_id', Auth::user()->id)->get()->count();
                      
                      ?>
                      <a href="{{ url('history') }}" class="dropdown-item">History<sup><span class="badge badge">{{ $notif }}</span></sup></a></li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item">Logout</a></li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="bannerhny-content">

        <!--/banner-slider-->
        <div class="content-baner-inf">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container">
                  <div class="carousel-caption">
                    <h3>Mug</h3>
                    <a href="{{url('mug')}}" class="shop-button btn">
                      Shop Now
                    </a>

                  </div>
                </div>
              </div>
              <div class="carousel-item item2">
                <div class="container">
                  <div class="carousel-caption">
                    <h3>Coke Tumbler</h3>
                    <a href="{{url('coke')}}" class="shop-button btn">
                      Shop Now
                    </a>

                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!--//banner-slider-->
        <!--//banner-slider-->
        <div class="right-banner">
          <div class="right-1">
          </div>
        </div>

      </div>
    </div>
  </div>
@yield('content')



<!-- //w3l-banner-slider-main -->

<!-- //content-6-section -->

   <!-- //specification-6-->
     

<!-- //video-6-->

<!-- //products-->


<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
						<div class="photo-6-inf-right col-lg-9">
							<h4 class="hny-title text-left">Thank you for supporting our girls in Arbre Design Co. We’re working on the best team and put an effort to you. Hope you and your people happy after receive this package. We’ll work better and make improvements every day.</h4>
							<span>Thanks in advanced.</span>
						</div>
						<div class="photo-6-inf-right col-lg-3">
								<img src="assets/images/logo_k.jpg" class="img-fluid" alt="" style="width: 300px; height: 300px;">
						</div>
					</div>
			 </div>
	  </div>
</section>

<!-- //customers-->

<hr>
<div class="footer py-2 text-center">
    <h6>&COPY; ARBRE DESIGN CO</h6>
</div>



  </body>

  </html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->

<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
 <!-- cart-js -->
 
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>



