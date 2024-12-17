<?php

include 'action.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $bit="DELETE FROM users WHERE id = ?";
    $mega=$conn->prepare($bit);
    $mega->bind_param("i",$id);

    if($mega->execute()){
        header("Location:users.php");
    }
    else{
        echo "Error 405";
    }
}
else {
    echo  "Error 606";
}


?>