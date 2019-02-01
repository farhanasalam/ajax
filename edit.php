
<?php
include "newdb.php";
$kid=$_GET["id"];
   if(isset($_POST["ok"]))
   {
   $name=$_POST["name"];
   $address=$_POST["address"];
    $phone=$_POST["phone"];
  mysqli_query($conn,"UPDATE `student` SET `name`='$name',`address`='$address',`phone`='$phone' WHERE id='$kid'");
  header("location:view.php");
}
$result=mysqli_query($conn,"select * from `student` where id='$kid' ");
$row=mysqli_fetch_array($result);

?>

  <form action="#" method="post">
<table>
  <tr>
    <td>Name
    </td>
    <td>
      <input type="text" name="name" value="<?php echo $row["name"];?>"/>
  </tr>
  <tr>
    <td>address
    </td>
    <td>
      <input type="text" name="address" value="<?php echo $row["address"];?>"/>
  </tr>
  <tr>
    <td>phone
    </td>
    <td>
      <input type="text" name="phone" value="<?php echo $row["phone"];?>"/>
  </tr>
  <tr>

    <td>
      <input type="submit" value="ok" name="ok"><br>
    </td>
  </tr>
</table>
</form>
