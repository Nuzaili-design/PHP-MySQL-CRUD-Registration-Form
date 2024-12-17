<?php

include 'action.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $bit="SELECT * FROM users WHERE id=?";
    $mega=$conn->prepare($bit);
    $mega->bind_param("i",$id);
    $mega->execute();
    $result= $mega->get_result();
    if ($result->num_rows>0){
        $row=$result->fetch_assoc();
    }
    else { echo "error 505";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
        <h2 class="mb-4">Registration Form</h2>
<form action="process.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo $row['first_name'] ?>" required>
            </div>
        
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo $row['last_name'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob'] ?>" required>
            </div>
        
            <div class="mb-3">
    <label class="form-label">Gender</label>
    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" 
                <?php if ($row['gender'] === 'Male') echo 'checked'; ?> required>
            <label class="form-check-label" for="genderMale">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" 
                <?php if ($row['gender'] === 'Female') echo 'checked'; ?> required>
            <label class="form-check-label" for="genderFemale">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="genderOther" value="Other" 
                <?php if ($row['gender'] === 'Other') echo 'checked'; ?> required>
            <label class="form-check-label" for="genderOther">Other</label>
        </div>
    </div>
</div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?>" required>
            </div>
            
 
        <input type="submit" class="btn btn-primary"  name="update">
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-cB03C4MNUhoFYdSXmVp2Y1TFws6We1uNrR+Pz0Xk79t4mUuIIT2k4E5vGni31D8F" 
            crossorigin="anonymous"></script>

</body>
</html>



