<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Wikipedia Time</title>

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
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="medicine.php">Medicine</a></li>
            <li ><a href="list.php">List</a></li>
            <li ><a href="search.php">Search Medicine</a></li>
            <li class="active" ><a href="wikipedia.php">Search on Wikipedia</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">  Wikipedia Time \^o^/</h1>
    <?php 
require 'connection.php';
  $view = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<body>
  <br>

    </head>
<body>
  <form id="form-container" class="form-container">
   
<!--Element-elemen tag <body> tulis disini-->
  <header> <!--Section HEADER-->
    <div class="menu">
     <ul>
        <label for="input">Wikipedia :</label>
        <input type="text" id="input" value="">
        <button id="submit-btn">Submit</button> 
      </ul> 
    </div>
  </header>

</header>
  <li class="wikipedia-container">
      <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
  </li>
  <form><center>
     <a href="front.php">Back to Home </a></button>
     </center></form>
  <br><br>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>   

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  
  </body>
</html>
