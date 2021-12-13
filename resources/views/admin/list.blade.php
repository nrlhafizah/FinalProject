<!doctype html>
<html lang="en">
  <head>
  	<title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="staff/assets1/css/style.css">
	
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="admin/assets/libs/css/style.css">

  
		<nav class="navMenu">
			
      <a href="{{url('/list')}}">Create Project</a>&emsp;&emsp;&emsp;&emsp;
      <a href="#">View Progress</a>&emsp;&emsp;&emsp;&emsp;
	  
	  
		  @auth
		  
		  <form method="POST" action="{{ route('logout') }}">
		  
		  @csrf

		  <a href="{{ route('logout') }}"
						 onclick="event.preventDefault();
						  this.closest('form').submit();" >
			  {{ __('Log Out') }}

</a>
	  </form>
	  </nav>
</a>
		  @endauth
	  </div>


    </nav>
	

	</head>
	<body>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
				<form action = "/add" method = "post">
					@csrf
 		
				
					<h2 class="heading-section">Create Projects</h2><br><br>
					<form>
					<label for="radio"><h3 class="h5 mb-4 text-center">Category:</h3></label><br>
					<input type="radio" id="category" name="category" value="research">
  					<label for="html">Research</label><br>
					<input type="radio" id="category" name="category" value="consultancy">
  					<label for="css">Consultancy</label><br><br><br>
  					<label for="pname"><h3 class="h5 mb-4 text-center">Project Name:</h3></label><br>
  					<input type="text" id="pname" name="pname"><br>
			
					
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

									<td><input type="radio" id="leader" name="leader" value={{($data->id)}}></td>

								  @endforeach
								  </tbody>
							</tr>
							</tbody>
					
						</table>
						</div>
					</div>
				</div>
			</div>


				
			</div>
			</form>
</form>
		</div>


			
</section>


	</body>

</html>


