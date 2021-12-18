<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>URND</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="test/css/bootstrap.min.css">  
        <link rel="stylesheet" href="test/css/fontAwesome.css">
        <link rel="stylesheet" href="test/css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<style>

 .text
  {
    font-size:80px;
    margin: 28px 0;
    color: white;
    text-align: center;
    font-family: Candara;

  }

.t-1 {
	color: red;
	font-family: Metropolis-Bold;
	font-size: 40px;
	font-weight: bold;
	color: white;
	margin-left: 40px;
	text-align: center;
	text-transform: capitalize;	
	padding-top: 10px;
}

@font-face {
  font-family: Metropolis-Bold;
  src: url(Metropolis-Bold.otf);
  
}


table {
	text-align: left;
	font-family: 'Spartan', sans-serif;
	font-size: 15px;
	background-color: white;
	margin:-25px -100px 30px 200px;
	border: 10px ;
	padding: 10px;
	width: 90%;
	
	/*box shadow effect*/
	-webkit-box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
	
}

table th {
	
	padding: 10px;
	text-align: center;
	background-color: #5B977F    ;
	color: white;
	opacity: 0.85;

}
table td {
	
	padding: 10px;
	border: 2px;
	background: #e0e0d1;
	opacity: 0.95;
}

/*button*/
.btn {
	margin-left: 25%;
}

.btn button{
	/*text*/
	font-size: 15px;  
	letter-spacing: 2px;
	font-family: 'Spartan', sans-serif;
	
	
	
	/*box style*/
	width: 15%;
	height: 8%;
	margin-top: 40px;
	margin-left: 50px;
    border: none;
	background: pink;
	padding: 11px 15px;
	cursor: pointer;
	-webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
	border-radius: 35px;
	-webkit-border-radius: 35px;
	-moz-border-radius: 35px;	
	
	/*box shadow effect*/
	-webkit-box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
}


/*button hover*/
.btn button:hover {
	background-color: black;
	color: pink;
}

/*add button link design*/
.btn button a:link {color:white;text-decoration:none;}
.btn button a:visited {color:white;text-decoration:none;}
.btn button a:hover {color: pink; text-decoration:underline;}


/*search box*/
.form-field input{
	padding: 10px 3px 10px 15px;
    font-size: 15px;  
	letter-spacing: 1px;
    border: none;
    background-color: white;
    box-sizing: border-box;
	font-family: 'Spartan', sans-serif;
    width: 30%;
	height: 6.5%;
	border-radius: 35px;
	margin-left: 28em;
	color: black;
	
}

form button.src-btn {
	padding: 10px 30px 10px 15px;
    font-size: 15px;  
	font-weight: bold;
	letter-spacing: 1px;
    border: none;
    background-color: #c3c388;
    box-sizing: border-box;
	font-family: Arial;
    width: 90px;
	text-align: center;
	height: 6.5%;
	border-radius: 35px;
	margin-left: 10px;
	color: white;	
}
/*button hover*/
form button.src-btn:hover {
	background-color: black;
	color: white;
}

form button.src-btn1 {
	padding: 10px 30px 10px 15px;
    font-size: 15px;  
	font-weight: bold;
	letter-spacing: 1px;
    border: none;
    background-color: #c3c388;
    box-sizing: border-box;
	font-family: Arial;
    width: 90px;
	text-align: center;
	height: 6.5%;
	border-radius: 35px;
	margin-right: 50%;
	color: white;	
}
/*button hover*/
form button.src-btn1:hover {
	background-color: black;
	color: white;
}

/*search button link design*/
form button.src-btn a:link {color:white;text-decoration:none;}
form button.src-btn a:visited {color:pink;text-decoration:none;}
form button.src-btn a:hover {text-decoration:underline;}


.btn-dsp button.mg {
	margin-left: 32em;
}



</style>

    </head>

<body>
        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <a href="#">URND</a>
            </div>
            
            <nav>
                <ul>
                    <p>Welcome, Unitenians!</p>
                    <li>
                        <a href="/redirect">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/listproject')}}">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            List Project
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/updateproj')}}">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Update Progress
                        </a>
                    </li>
                    @auth
                    <li>
                        <a href="{{ route('logout') }}" class="logout" onclick = "event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <form method="POST" action="{{ route('logout')}}">
                        @csrf
                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();"><span class="rect"></span>
                            <span class="circle"></span> Log Out
                      
                    </x-jet-responsive-nav-link>
                </form>
@csrf
</form></a></li>
@endauth
          
                </ul>
            </nav>
      
        </div>

        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                <div class="item item-1">
                    <div class="img-fill">
                    <div class="image">
                    <div class="info">
					<table>
    <thead>
		
        <tr>
            <th>ID</th>
            <th>Category</th>
			<th>Project Name</th>
			<th>Project Leader</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
							@foreach($x as $view)
							  <tr>
							  
							  	<td>{{$view->project_id}}</td>
								  <td>
									  @if($view->project_category=='1')

									  Research

									  @else

									  Consultancy

									  @endif
								  </td>
								  <td>{{$view->project_name}}</td>
								  <td>
									  @if($view->project_leader==$view->id)

									  {{$view->name}}

									  @endif
								  </td>
                                  <td><button><a href={{url('/action')}}>Edit</button></td></a>
                                </tr>
							@endforeach
							
							</tbody>
</table>




                        </div>
                    </div>
                </div>               
        </div>
</body>
</html>



