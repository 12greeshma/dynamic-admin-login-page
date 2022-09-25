<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Insert form values into database</title>
    </head>
<body>
    <h1> Fill the details </h1>
   <form action="index.php" method="post">
        
        Id:<input type="text" name="id" id="i"><br><br>
        Name:<input type="text" name="name" id="n"><br><br>
        Cost:<input type="text" name="cost" id="c"><br><br>
        <input type="datetime-local" name="date" value="date"><br><br>
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="delete" name="delete">
        <input type="submit" value="update" name="update"><br><br>
        </form>
        <script>
            $(function()
            {
                $("#datepicker-2").datepicker();
            });
            </script>
   
    <?php
include 'connection.php';
$query="select *from details1";
$result=mysqli_query($conn,$query);
?>
    <table align="center" border="2" cellpadding="8">
    <tr>
        <th colspan="4"><h2>Details</h2></th>
    </tr>    
    <tr>
            <th><b>id</b></th>
            <th><b>Name</b></th>
            <th><b>Cost</b></th>
            <th><b>Date and Time</b></th>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo$rows['id'];?></td>
                <td><?php echo$rows['Name'];?></td>
                <td><?php echo$rows['Cost'];?></td>
                <td><?php echo$rows['Date'];?></td>
            </tr>
       <?php       
        }
        ?>
    </table>
</body>
</html>