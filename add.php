
<?php
include "newdb.php";

   if(isset($_POST["ok"])){
   $name=$_POST["name"];
   $address=$_POST["address"];
    $phone=$_POST["phone"];
    mysqli_query($conn,"INSERT INTO `student`(`name`, `address`, `phone`) VALUES ('$name','$address','$phone')");

  // echo "$name";
  // echo "$address";
    //  echo "$phone";
   }

   ?>

<body>
  <form action="#" method="post">
<table>
  <tr>
    <td>Name
    </td>
    <td>
      <input type="text" name="name" id="na"><br>
  </tr>
  <tr>
    <td>address
    </td>
    <td>
      <input type="text" name="address" id="address"><br>
  </tr>
  <tr>
    <td>phone
    </td>
    <td>
      <input type="text" name="phone" id="phone"><br>
  </tr>
  <tr>

    <td>
      <input type="submit" value="ok" name="ok"><br>
    </td>
  </tr>
</table>
</form>
</body>
