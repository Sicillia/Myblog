

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Traditional</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="1.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">You're My Medicine</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a data-toggle="dropdown" href="#">^_^</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        </ul>
        </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="medicine.php">Medicine</a></li>
            <li ><a href="list.php">List</a></li>
            <li ><a href="search.php">Search Medicine</a></li>
            <li ><a href="wikipedia.php">Search on Wikipedia</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <?php 
require 'connection.php';
  $view = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<body>
  <br>
  <center>
    <h3>Traditional Medicine</h3>
     <form>
     <a href="front.php">Back to Home </a></button>
     </form>
  <br>
  <body>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      <div class="item active">
        <img style="max-height: 500px;" src="picture/6.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img style="max-height: 500px;" src="picture/2.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img style="max-height: 500px;" src="picture/7.jpg" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      </div>
       <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      </div>
       <body>
        <br><br>
        <div class="panel-group" id="accordion">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Traditional Medicine
        </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
        Traditional medicine is the ancient and culture–bound medical practice which existed before the application of modern science to health. The practice of traditional medicine varies widely, in keeping with the societal and cultural heritage of different countries. Every human community has responded to the challenge of maintaining health and treating diseases by developing a medical system. Thus, traditional medicine has been practised to some degree in all cultures.
        </div>
      </div>
      </div>
  
  </body>
  </div>
  </body>
  <br><br>

 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </center>
  </body>
</html>
