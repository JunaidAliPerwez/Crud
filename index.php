<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
</head>
<body>
	<div class="container mt-5">
		<h1 class="alert-success text-center mb-5 p-3">
			AJAX -- PHP -- Bootstrap -- jQuery (CRUD)
		</h1>
		<div class="row">
			<form class="col-sm-5" id="myform" >
			<h3 class="alert-danger text-center p-2">Add/ Update Student</h3>
			<div>
				<input type="text" id="nid" style="display: none;">
				<label for="nameid" class="form-lable">
			     Name
				</label>
				<input type="text" class="form-control" id="nameid"  />
			</div>
			<div>
				<label for="emailid" class="form-lable">
			     Email
				</label>
				<input type="email" 
				 class="form-control" id="emailid" />
			</div>
			<div>
				<label for="passwordid" class="form-lable">
			     Password
				</label>
				<input type="password" 
				 class="form-control" id="passwordid" />
			</div>
			<div class="mt-5" >
				<button type="submit" class="btn btn-primary" id="btnsave">
					Save
				</button>
			</div>
			<!-- <div id="msg"></div> -->
			</form>

			<div class="col-sm-7 text-center">
				<h3 class="alert-danger p-2">Show student information</h3>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Password</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="tbody"></tbody>
				</table>
			</div>
		</div>
		
	</div>



<script src="js/bootstrap.js"></script>
<script src="js/jQuery.js"></script>
<script src="js/popper.js"></script>
<script src="js/jqajax.js"></script>
</body>
</html>