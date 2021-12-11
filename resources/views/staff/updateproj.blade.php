<!doctype html>
<html lang="en">
  <head>
  	<title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="staff/assets1/css/style.css">
</head>
	<body>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
				
				<form action = "/edit" method = "post">
					@csrf			
					<input type="button" value="Go back!" onclick="history.back()"><br><br>	
					<h2 class="heading-section">Create Projects</h2><br><br>
				
  					<label for="start"><h3 class="h5 mb-4 text-center">Start Date:</h3></label><br>
  					<input type="text" id="start" name="start"><br>
                      <label for="end"><h3 class="h5 mb-4 text-center">End Date:</h3></label><br>
  					<input type="text" id="end" name="end"><br>
                      <label for="duration"><h3 class="h5 mb-4 text-center">Duration:</h3></label><br>
  					<input type="text" id="duration" name="duration"><br>
                      <label for="cost"><h3 class="h5 mb-4 text-center">Cost:</h3></label><br>
  					<input type="text" id="cost" name="cost"><br>
                      <label for="client"><h3 class="h5 mb-4 text-center">Client:</h3></label><br>
  					<input type="text" id="client" name="client"><br>

					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br><h3 class="h5 mb-4 text-center">List name of UNITEN staff</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						
							<th>ID</th>
						    	<th>Name</th>
						      <th>Email</th>
							  <th>Location</th>
							  <th>&nbsp;&nbsp;</th>
							  
						      
						    </tr>
						  </thead>
						  <tbody>
							  @foreach($data as $data)
							  <tr>
							  
							  	<td>{{$data['id']}}</td>
								  <td>{{$data['name']}}</td>
								  <td>{{$data['email']}}</td>
								  <td>{{$data['location']}}</td>

                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">

								  @endforeach
								  </tbody>
							</tr>
							</tbody>
					
						</table>
						</div>
					</div>
				</div>
			</div>
			<section>
			<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-4">
				<br><button type="submit">Update</button>
			</div>
			</form>

		</div>

</section>
			
</section>


	<script src="staff/assets1/js/jquery.min.js"></script>
  <script src="staff/assets1/js/popper.js"></script>
  <script src="staff/assets1/js/bootstrap.min.js"></script>
  <script src="staff/assets1/js/main.js"></script>
  
	</body>

</html>