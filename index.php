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

    setcookie($name,$num,time() + (86400*1));

    // echo $name.$lname.$email.$num;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mainindex.css">
</head>
<body>
    <header class="container-fluid fst-italic  ">
        <div class=" d-flex justify-content-around align-items-center">
        <h1 class="">trst shop</h1>
        <nav class="nav align-items-center">
            <ul class="nav navbar ">
                <li class="nav-item"><a class="nav-link fw-bolder text-white" href="">home</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder text-white" href="">item</a></li>
                <li class="nav-item"><a class="nav-link fw-bolder text-white" href="">F&Q</a></li>
                <li class="nav-item dropdown ">
                    <a class="nav-link  fw-bolder text-white dropdown-toggle active" data-bs-toggle="dropdown" href="">contact</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">t-shirt</li>
                    <li class="dropdown-item">electronic</li>
                    <li class="dropdown-item">grocery</li>
                </ul>
            </li>
            </ul>
        <form>
            <input type="search" class="form-control" placeholder="search">
        </form>
        </nav>
        <div class="d-flex gap-1">
            <h4>hi,<?php echo $name ?></h4>
            <div class="cricle">
            <img src="upload/<?php echo $profile ?>" alt="" srcset="">
            </div>
        </div>
        </div>
    </header>
</body>
</html>