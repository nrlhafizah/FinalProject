<!doctype html>
<html lang="en">
  <head>
  	<title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="admin/assets1/css/style.css">

	

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Create Projects</h2><br><br>
					<form>
					<label for="radio"><h3 class="h5 mb-4 text-center">Category:</h3></label><br>
					<input type="radio" id="html" name="fav_language" value="HTML">
  					<label for="html">Research</label><br>
					<input type="radio" id="css" name="fav_language" value="CSS">
  					<label for="css">Consultancy</label><br><br><br>
  					<label for="lname"><h3 class="h5 mb-4 text-center">Project Name:</h3></label><br>
  					<input type="text" id="lname" name="lname"><br>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br><h3 class="h5 mb-4 text-center">List name of UNITEN staff</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
								<th>&emsp;&emsp;</th>
						    
						    	<th>&nbsp;</th>
						    	<th>Name</th>
						      <th>Email</th>
						      
						    </tr>
						  </thead>
						  <tbody>
							  @foreach($data as $data)
							  <tr align="center">
							  <td><input type="radio" id="html" name="fav_language" value="HTML"><td>
								  <td>{{$data->name}}</td>
								  <td>{{$data->email}}</td>
</tr>
@endforeach
								  
								 

						   

	<script src="admin/assets1/js/jquery.min.js"></script>
  <script src="admin/assets1/js/popper.js"></script>
  <script src="admin/assets1/js/bootstrap.min.js"></script>
  <script src="admin/assets1/js/main.js"></script>

	</body>
</html>

