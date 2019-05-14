

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>General</title>

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
          <h1 class="page-header">Medicine</h1>
    <?php 
require 'connection.php';
  $view = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<body>
</body>
</html>

    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Definition
        </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
        Medicine is the science and practice of establishing the diagnosis, prognosis, treatment, and prevention of disease. Medicine encompasses a variety of health care practices evolved to maintain and restore health by the prevention and treatment of illness. Contemporary medicine applies biomedical sciences, biomedical research, genetics, and medical technology to diagnose, treat, and prevent injury and disease, typically through pharmaceuticals or surgery, but also through therapies as diverse as psychotherapy, external splints and traction, medical devices, biologics, and ionizing radiation, amongst others.
        </div>
      </div>
      </div>
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          History
        </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
        Medicine has been around for thousands of years, during most of which it was an art (an area of skill and knowledge) frequently having connections to the religious and philosophical beliefs of local culture. For example, a medicine man would apply herbs and say prayers for healing, or an ancient philosopher and physician would apply bloodletting according to the theories of humorism. In recent centuries, since the advent of modern science, most medicine has become a combination of art and science (both basic and applied, under the umbrella of medical science). While stitching technique for sutures is an art learned through practice, the knowledge of what happens at the cellular and molecular level in the tissues being stitched arises through science.
        </div>
      </div>
      </div>
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Form
        </a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
        <div class="panel-body">
        Prescientific forms of medicine are now known as traditional medicine and folk medicine. They remain commonly used with or instead of scientific medicine and are thus called alternative medicine. For example, evidence on the effectiveness of acupuncture is "variable and inconsistent" for any condition, but is generally safe when done by an appropriately trained practitioner. In contrast, treatments outside the bounds of safety and efficacy are termed quackery.
        </div>
      </div>
      </div>
    </div>
     <form>
     <a href="front.php">Back to Home </a></button>
     </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
