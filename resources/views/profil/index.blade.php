<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARBRE DESIGN CO | PROFIL</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  
</head>
<body>
	<style>
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
	</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="body-card m-4">
						<h4><i class="fa fa-user"></i> My Profile</h4>
						<table class="table table-striped table-hover mt-4">
							<tbody>
								<tr>
									<td>Name</td>
									<td>:</td>
									<td>{{ $user->name }}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>{{ $user->email }}</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>:</td>
									<td>{{ $user->no_hp }}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td>{{ $user->alamat }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-2 w3l-ecommerce-main mb-4">
				<div class="card">
					<div class="card-body">
						<h4><i class="fa fa-pencil"></i> Edit Profile</h4>
						<form action="{{url('/profil/update/'.$user->id)}}" method="POST">
		                @csrf
		                <div class="card-body">
		                    @if(session('errors'))
		                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
		                            Something it's wrong:
		                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                                <span aria-hidden="true">×</span>
		                            </button>
		                            <ul>
		                            @foreach ($errors->all() as $error)
		                            <li>{{ $error }}</li>
		                            @endforeach
		                            </ul>
		                        </div>
		                    @endif
		                    <div class="form-group">
		                        <label for=""><strong>Full Name</strong></label>
		                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Email</strong></label>
		                        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Phone</strong></label>
		                        <input type="text" name="no_hp" class="form-control" value="{{ $user->no_hp }}">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Address</strong></label>
		                        <textarea name="alamat" class="form-control">{{ $user->alamat }}</textarea>
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Password</strong></label>
		                        <input type="password" name="password" class="form-control">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Confirm Password</strong></label>
		                        <input type="password" name="password_confirmation" class="form-control">
		                    </div>
		                </div>
		                <div class="product-grid2 mt-5 mb-4" style="margin-left: 20px; margin-right: 20px; width: 150px;">
		                    <button type="submit" class="btn transmitv-cart add-to-cart mt-2">Save</button>
		                </div>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>