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
                <input type="button" value="Go back!" onclick="history.back()"><br><br>
				
				<form>
			
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br><h3 class="h5 mb-4 text-center">PROJECT PROGRESS</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						
							<th>ID</th>
						    	<th>Category</th>
						      <th>Project Name</th>
							  <th>Project Leader</th>
                              <th>Project Stage</th>
                              <th>Project Status</th>
					
							  
						      
						    </tr>
						  </thead>
						  <tbody>
							  @foreach($data as $data)
							  <tr>
							  
							  	<td>{{$data['id']}}</td>
								  <td>{{$data['category']}}</td>
								  <td>{{$data['pname']}}</td>
								  <td>{{$data['leader']}}</td>
                                

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
				
			</div>
			</form>
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
