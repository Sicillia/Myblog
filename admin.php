<?php 
require 'connection.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
  $view = query ("SELECT * FROM blog");
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin's Corner</title>
</head>
<body>

<center>
  <br>
<button><a href="create.php">Add</a></button>
<button><a href="logout.php">Logout</a></button>
<br><br>
    <h2>Admin's Corner</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Number</th>
    <th>Generic Name of Medicine</th>
    <th>Disease(s) Used</th>
    <th>Last Updated</th>
    <th>Option</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($view as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["medicine"] ?></td>
    <td><?= $x["disease"];  ?></td>
    <td><?= $x["time"];  ?></td>
    <td>
      <center><button><a href="change.php?id=<?= $x["id"]?>">Change</a></button><br><br><button><a href="delete.php?id=<?= $x["id"]?>" onclick =" return confirm ('Are You Sure You Want to Delete It?');">Delete</a></button></center>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<form>
  <a href="index.php">Back to Home </a></button>
  </form>
</center>
  </body>
</html>
