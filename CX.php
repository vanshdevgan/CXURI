
<?php
$conn = new mysqli("localhost","admin_CXURI","","admin_CXURI");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
else{
$pup  =$_GET['url'];

$sql = "SELECT murl FROM CXURI WHERE surl='$pup'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {

$surl= $result->fetch_assoc()['murl'];
header("Location: ".$surl); 
}
else{
echo "This Short Url Is Available For Use OR Something Went Wrong";
}
}
?>
