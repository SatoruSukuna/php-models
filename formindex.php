<?php
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    if(isset($_FILES['profile'])){
        $profile=$_FILES['profile']['name'];
        $tmp=$_FILES['profile']['tmp_name'];
        move_uploaded_file($tmp,"upload/".$profile);
    }

    setcookie($name,$email,time() + (86400*1));

    
    echo $name.$lname.$email.$num;
    
}
?>