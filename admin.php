<?php 
session_start();
include 'connection.php';
if(isset($_POST["submit"]))
{
   if(!empty($_POST['user']) && !empty($_POST['pass']))
   {
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   
   //DB Connection
   //Selecting database
   $sql =("SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");
    
   $query = mysqli_query($conn, $sql);
  
   $numrows = mysqli_num_rows($query);
   if($numrows == 1)
   {
  
   $_SESSION['sess_user']=$user;
  header("Location:index.php");
   }
   else
   {
   echo "Invalid Username or Password!";
   }
   } 
   else
   {
   echo "Required All fields!";
   }
  
  }
?>
<html>
    <head>
    <meta charset="UTF-8">
				  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
					integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
				  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
					integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
					crossorigin="anonymous"></script>	
					<link rel="stylesheet" href="css/global.css">	
        <style>.form-center
        {
            width:200px;
            margin: 0 auto;
        }
        </style>    
</head>
<body>
<div class="main">
<nav class="navbar navbar-default">
   <a class="navbar-brand" href="admin.php" img src="C:\Users\GREESHMA\Desktop"></a>
</div>
<div class="container-fluid" style="padding-top: 10%;">
<div class="pull-right text-right">
   <div class="music align-mey-pading">
</div>
</div>
</nav>
<div class="main-body">
   <div id="admin=login" class="admin_login">
       <h1 style="text-align: center;">Admin panel</h1>
       <div class="form-center">
    <form action="" method="post">
   <label> UserName:&nbsp;&nbsp;</label><input type="text" name="user" required><br/>
    <label> Password:&nbsp;&nbsp;</label><input type="password" name="pass" required><br/>
    <input type="submit" class="button" value="login" name="submit"><br/>
    </form>
</div>
</div>
</div>
</body>
</html>
