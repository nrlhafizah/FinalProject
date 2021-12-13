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

  <li>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <li><a href="{{ route('login') }}" class="scroll-to-section">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="scroll-to-section">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
        </li>   
		<nav class="navMenu">
			
      <a href="{{url('/listproject')}}">List project</a>&emsp;&emsp;&emsp;&emsp;
      <a href="#">Update Progress</a>&emsp;&emsp;&emsp;&emsp;
      <div class="dot"></div>
    </nav>
	

	</head>
	<body>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
				
					
					<form>
			
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br><h3 class="h5 mb-4 text-center">Project Assigned</h3>
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
								  <td>
									<select name="dog-names" id="dog-names">
    								<option value="rigatoni">Inception</option>
  									<option value="dave">Milestone 1</option>
  									<option value="pumpernickel">Milestone 2</option>
  									<option value="reeses">Final Report</option>
									  <option value="reeses">Closing</option>
									</select>
								</td>
								  <td>
									  <select name="dog-names" id="dog-names">
    								<option value="rigatoni">On track</option>
  									<option value="dave">Delayed</option>
  									<option value="pumpernickel">Extended</option>
  									<option value="reeses">Completed</option>
									</select>
								</td>

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
