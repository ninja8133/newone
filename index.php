




<?php
$insert=false;
if(isset($_POST['uucms'])){
    $server="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($server,$username,$password);
    if(!$conn){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $uucms=$_POST['uucms'];
    $name=$_POST['name'];
    $class=$_POST['class'];
    
    $desc=$_POST['desc'];
    $sql="INSERT INTO `picnic`.`picnic` ( `UUCMS`, `Name`, `Class`,  `Description`, `Date`) 
    VALUES ( '$uucms', '$name', '$class', '$desc',current_timestamp());";
    //echo $sql;    

    if($conn->query($sql) == true){
        //echo"Successfully inserted";
        
        
        if($insert == true){
        echo "<p class='after'> Thanks for submitting your form.We are happy to see you for joining us for picnic</p>";
        }
        
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
    $conn->close();
}
?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel from</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bgg" src="h.avif" alt="Divekar">
    <div class="container">
        <h1>Welcome to ______________ picnic form</h1></br>
        <p>Enter your details to confirm your participation in the picnic</p>
        

        <form action="index.php" method="post">
            <input type="text" name="uucms" id="uucms" placeholder="Enter your uucms">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="class" id="class" placeholder="Enter your class">
            
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information"></textarea>
            <button class="btn">Submit</button>

        </form>
        <!-- INSERT INTO `picnic` (`Sno`, `UUCMS`, `Name`, `Class`, `PhoneNo`, `Parents PhoneNo`, `Description`, `Date`) VALUES ('1', 'U02KF21S0000', 'MabluTandel', 'Bca III', '9999999999', '9999999999', 'Very much happy to for the pacnic', current_timestamp()); -->
    </div>
</body>
</html>