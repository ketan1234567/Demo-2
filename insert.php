<?php

include("dbConnection.php");


$data=stripslashes(file_get_contents("php://input"));
$mydata=json_decode($data,true);

if(isset($mydata["name"]) && isset($mydata["email"]) && isset($mydata["password"])  ){

    $id=$mydata['id'];
    $name=$mydata['name'];
    $email=$mydata['email'];
    $password=$mydata['password'];

    if(!empty($name) && !empty($email) && !empty($password)){
        $sql="INSERT INTO student (id,name,email,password) VALUES('$id','$name','$email','$password')";
        if($conn->query($sql)==TRUE){
            echo "Student saved succfully";
        }else{
            echo "unbale to save student".$conn->error;
        }

}else{
    echo "fill all data fileds";
}
}else{
    echo "invalid data format";
}
    

$conn->close();


?>