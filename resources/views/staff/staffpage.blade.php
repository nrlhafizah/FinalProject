
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
                    <div class="image"></div>
                    <div class="info">
                        <div>
                          <h1>Uniten R&D Management Site</h1>
                          <p>This is a platform where you can check project assigning to you.<br>
                          	Do update all the details required if there is any project has been assigned to you!<br>
                            You may update the project status through this platform.</p>  
                        </div>
                        </div>
                    </div>
                </div>               
        </div>
</body>
</html>