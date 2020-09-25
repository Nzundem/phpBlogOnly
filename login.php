
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="css/business-casual.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Business Casual</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->

<?php require_once 'nav.php';?>
<div class="container">
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr><h2 class="intro-text text-center">
                Login
            </h2>
            <p class="alert alert-danger">You <strong>must login </strong>to views blog posts</p>
            <hr>
            <div id="add_err"></div>
            <!-- horizontal Form -->
            <form role="form text-center">
                        <div class="row ">
                            <div class="form-group row col-lg-12">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="250">                                    
                                </div>
                            </div>
                            <div class="form-group row col-lg-12">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="col-lg-5"></div>
                                <button type="submit" class="btn btn-default col-lg-2" id="login">Login</button>
                            </div>
                        </div>
                        
                    </form>
                    
                    <div class="col-lg-12">
                    <div class="col-lg-5"></div>
                    <a href="register.php" ><button type="submit" class="btn btn-default col-lg-2">Register</button></a>       
                     </div>
        </div>
    </div>
</div>
</div>
                    
<!-- footer -->

<footer class="text-center">
    Copyright &copy; Perfect Cup 2020
</footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
</body>
</html>