<?php
$connect = mysqli_connect("localhost", "test", "password", "test");
$keyword = $_GET["keyword"];
$sql = "SELECT * FROM testusers;";  
if (!($result = mysqli_query($connect, $sql))) {
     echo "Error: " . $sql . "<br>" . $connect->error;
}
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["user"].'</td>  
         <td>'.$row["name"].'</td>  
         <td>'.$row["action"].'</td>  
       </tr>  
        ';  
     }
?>