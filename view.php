<html>
<body>
  <table border="1">
    <tbody>
      <tr>
        <th>name</th>
        <th>address</th>
        <th>phone</th>
      <th>edit</th>
      <th>delete</th>
      </tr>


<?php
include "newdb.php";
$result=mysqli_query($conn,"SELECT * FROM `student`");

while($row=mysqli_fetch_array($result)){


?>
<tr>
  <td>
    <?php echo$row["name"]; ?>
  </td>
  <td>
    <?php echo$row["address"]; ?>
  </td>
  <td>
    <?php echo$row["phone"]; ?>
  </td>
  <td>
  <a href="edit.php?id=<?php echo $row["id"];?>">edit</a></td>

  <td>
  <a href="delete.php?id=<?php echo $row["id"];?>">delete</a></td>

</tr>
<?php }
?>
</table>
