<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Navbar with Search Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 10px;
        
    }
    
   
</style>
</head>
<body>
    

        @yield('content')
        
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Abdul hadee Anwaar </a>
        <a href="#" class="navbar-brand">FA17-BSE-066 </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
            <a href="welcome" class="nav-item nav-link active">Welcome</a>
                <a href="home" class="nav-item nav-link active">Home</a>
                <a href="login" class="nav-item nav-link">Log In</a>
                <a href="contact" class="nav-item nav-link">contact</a>
            </div>
            <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
        </div>
    </nav>
        </div>
        </div>
        

      
       
        

    
        


</body>
</html>                            