<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</style>
<body>
	<form action="proseslogin.php" method="post">
		<div class="d-flex justify-content-center align-items-center mt-5">


			<div class="card">

				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item text-center">
						<a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
					</li>
					<li class="nav-item text-center">
						<a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
					</li>

				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

						<div class="form px-4 pt-5">

							<input type="text" name="username" class="form-control" placeholder="Username">

							<input type="text" name="password" class="form-control" placeholder="Password">
							<button class="btn btn-dark btn-block">Login</button>

						</div>



					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


						<div class="form px-4">

							<input type="text" name="username" class="form-control" placeholder="Username">

							<input type="text" name="password" class="form-control" placeholder="Password">

							<button class="btn btn-dark btn-block">Signup</button>


						</div>



					</div>

				</div>




			</div>


		</div>
	</form>
</body>
</html>