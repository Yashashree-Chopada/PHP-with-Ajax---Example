<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "form");
 $query = "SELECT * FROM register WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["id"] = $row["id"];
  $data["username"] = $row["username"];
  $data["gender"] = $row["gender"];
  $data["email"] = $row["email"];
  $data["phone"] = $row["phone"];
 }

 echo json_encode($data);
}
?>
