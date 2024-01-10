<?php
$database=mysqli_connect("localhost", "root", "", "user_data");
$name="";
$email="";
$number="";
if(isset($_POST['register'])){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['number'])){
        echo "All fields are required!";
    }
    else{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $insert="INSERT INTO info(name, email, number) VALUES('$name', '$email', '$number')";
        $check=$database->query($insert);
        if($check){
            echo "Congratulations, you've successfully registered";
        } else{
            echo "Check your information!";
        }
    }
}
?>