<?php
include_once('conn.php');
$query="select * from login";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DETAILS</title>
    </head>
    <body>
    <table style="width:600px; line-height:40px;">
    <tr>
        <th colspan="4"><h2>User Information</h2></th>
        </tr>
              <th> USER ID </th>
              <th> Name </th>
              <th> Email </th>
             
        </tr>
       
        <?php while($rows=mysqli_fetch_assoc($result))
        {
        ?>
        <tr> <td><?php echo $rows['username']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['password']; ?></td>
        </tr>
    <?php
               }
          ?>


    </table>
    </body>
    </html>
