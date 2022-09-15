<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$result1 = mysqli_query($conn,"SELECT * FROM product");

$limit = 100;
$total_rows = mysqli_num_rows($result1);  
$total_pages = ceil ($total_rows / $limit);

if (!isset ($_GET['page']) ) { 
  $page_number = 1;  
} else {  
  $page_number = $_GET['page'];      
}    
$initial_page = ($page_number-1) * $limit; 

$sql = "SELECT * FROM product  LIMIT  $initial_page,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class ='center11' border=1>
  <tr>
  <th> id </th>
  <th> Name </th>
  <th> Category </th>
  <th> Brand </th>
  <th> Price </th>
  <th> Quantity </th>
  <th> Description </th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td>
    <td>".$row['pname']."</td>
    <td>".$row['pcat']."</td>
    <td>".$row['brand']."</td>
    <td>".$row['price']."</td>
    <td>".$row['quantity']."</td>
    <td>".$row['description']."</td>
    <td>
          ";
  }
  
  echo "</table>";
} else {
  echo "0 results";
}

for($page_number = 1; $page_number<= $total_pages; $page_number++) {
  echo '<a href = "admin.php?page=' . $page_number . '">' . $page_number . ' </a>';  
}

mysqli_close($conn);
?>
</div>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
  .center11{
    background-color : #ADD8E6;
    margin-left: 8%;
   
  }
  th, td {
      background-color : #000000;
      color : white;
      
    }
    body {
          /* background-image : url("./image/img2.jpg"); 
          background-repeat : no-repeat ,repeat;
          background-size: 1800px 800px; */
          background-color : #ADD8E6;  
    }
   
  </style>
</head>
<body>

</body>
</html>