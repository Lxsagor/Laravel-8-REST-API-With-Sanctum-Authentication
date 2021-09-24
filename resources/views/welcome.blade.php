<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    @yield('content')
   
   
   <nav class="navbar navbar-default">
       <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="/">E-com</a>
         </div>
     
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav">
             <li class="active"><a href="#">Home</a></li>
             <li class=""><a href="">Orders</a></li>
   
             
           </ul>
           <form action="/search" class="navbar-form navbar-left">
             <div class="form-group">
               <input type="text" name="query" class="form-control search-box" placeholder="Search">
             </div>
             <button type="submit" class="btn btn-default">Search</button>
           </form>
           <ul class="nav navbar-nav navbar-right">
            
           
            
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            
         </div><!-- /.navbar-collapse -->
       </div><!-- /.container-fluid -->
   </nav>
   @yield('content')
</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important

    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 25%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 200px;
    }
    .cart-list-divider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .search-box{
        width: 500px !important
    }
</style>
</html>
