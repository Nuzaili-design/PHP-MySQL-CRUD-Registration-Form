<?php
include 'action.php';

$bit = "SELECT * FROM users";
$result=$conn->query($bit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
</head>
<body>

<table border="1px"  class="table table-striped table-bordered table-hover">
    <tr class="table-primary">
<th>ID</th>
<th>firstname</th>
<th>lastname</th>
<th>dob</th>
<th>gender</th>
<th>email</th>
<th>created_at</th>
<th>Action</th>
</tr>
<?php

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$row['id']."</td>";
        echo "<td>" .$row['first_name']."</td>";
        echo "<td>" .$row['last_name']."</td>";
        echo "<td>" .$row['dob']."</td>";
        echo "<td>" .$row['gender']."</td>";
        echo "<td>" .$row['email']."</td>";
        echo "<td>" .$row['created_at']."</td>";
        echo "<td><a href ='edit.php?id="  .$row['id']."' class='btn btn-primary btn-sm'  >Update</a>
        
        <a href ='delete.php?id="  .$row['id']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete it?');\" >Delete</a>
        </td>";

        echo"</tr>";
    }
}

?>


</table>
    
</body>
</html>