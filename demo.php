<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ViewBox</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">
    
     <link href="css/nuestro.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script>
    $(document).ready(function()
    {
        $(".boton").hide();
        
        $('.file').change(function(){
            $(".boton").show();
            $('.change').attr('src', 'img/prueba.png');
        })
        
        $('.boton').on("click", function(){
            $('.change').attr('src', 'img/azure.png');
        });
    })
</script>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix" style="color:black;">
        <div class="container" style="color:black;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="color:black;">
                <ul class="nav navbar-nav">
                    <li><a href="index.php" style="color:black;">Inicio</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <section id="features" class="features">
        
        <section class="info">
            <img src="img/demo.png" width="30%" class="change">
            <div>
                <input type="file" class="file">
                <input type="button" value="analizar" class="boton">
            </div>
            
        </section>
        
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>We <i class="fa fa-heart"></i> new friends!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2017 ViewBox. Todos los derechos reservados.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacidad</a>
                </li>
                <li>
                    <a href="#">Términos</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
