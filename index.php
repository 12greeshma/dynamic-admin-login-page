<?php 
include 'connection.php';
if(isset($_POST['submit']))
{    
     $id   = $_POST['id'];
     $name = $_POST['name'];
     $cost = $_POST['cost'];
     $date =$_POST['date'];
     $sql = "INSERT INTO details1 (id,Name,Cost,Date)
     VALUES ('$id','$name','$cost','$date')";
     if (mysqli_query($conn, $sql)) 
     {
        echo "New record has been added successfully !\n";
     } else 
     {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
if(isset($_POST['delete']))
{
     $id   = $_POST['id'];
   $sql="DELETE FROM details1 WHERE id=$id";
   if (mysqli_query($conn, $sql)) 
     {
        echo " record deleted successfully !\n";
     } 
     else 
     {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
  
}
if(isset($_POST['update']))
{
   $id = $_POST['id'];
   $name = $_POST['name'];
   $cost = $_POST['cost'];
   $date =$_POST['date'];
  $sql="UPDATE details1 SET Name='$name',Cost='$cost',Date='$date' WHERE id=$id";
  if (mysqli_query($conn, $sql)) 
     {
        echo " record updated successfully !\n";
     }
      else 
     {
        echo "Error";
     }
     mysqli_close($conn);
}
header("Location:http://localhost/php_project/form.php");
exit;
?>

