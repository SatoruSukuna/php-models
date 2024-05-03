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

    // setcookie($name,$num,time() + (86400*1));

}
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/PHPMailer.php";
if(isset($_POST['sub'])){
  $mail=new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->SMTPAuth=true;
  $mail->Username="tarunsagwal38@gmail.com";
  $mail->Password="bxtlhhlnobtipkrd";
  $mail->SMTPSecure="ssl";
  $mail->Port=465;
  $mail->setFrom("tarunsagwal38@gmail.com");
  $mail->addAddress($_POST['email']);
  $mail->isHTML(true);
  $mail->Subject=$_POST['name'];
  $mail->Body="<h1> <?php echo $name ?> thankyou to join a shoplift <br> I give you better experience </h1>";
  $mail->send();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mainindex.css">
</head>
<body class="fst-italic">
    <header class="container-fluid pt-2 pb-2">
        <div class=" d-flex justify-content-around align-items-center">
        <h1 class="">shoplift</h1>
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
        <!-- <form> -->
            <input type="search" class="btn bg-white text-black" placeholder="search">
        <!-- </form> -->
        </nav>
        <div class="d-flex gap-1">
            <h4>hi,<?php echo $name ?></h4>
            <div class="cricle">
            <img src="upload/<?php echo $profile ?>" alt="" srcset="">
            </div>
        </div>
        </div>
    </header>
    <section>
        <div class="main">
        <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="width:100vw; height: 90vh;">
    <div class="carousel-item active ">
      <img src="img/ads.jpg" class="d-block w-100" alt="..." style="height:90vh;">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>women cloth</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imgset/fram.webp" class="d-block w-100" alt="..." style="height:90vh;">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>animation hindi</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imgset/women 2.jpg" class="d-block w-100" alt="..." style="height:90vh;">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>baby cloth</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </section>
    <div class="cloth mt-5">
        <div class="container-fluid">
           <div class="d-flex gap-5 justify-content-around ">
           <?php
            $arryimg=["men.webp","women 4.jpg","baby.webp"];
            $arrywrite=["men Fashion","Women's Fashion","baby fashion"];
              $run=0;
              while ($run<=2){
              ?>
            <div class="imgcard " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <div class="boxs">
                <img src="imgset/<?php echo $arryimg[$run] ?>" alt="img loading" srcset="">
              </div>
              <h1 class="fs-5"><?php echo $arrywrite[$run]?></h1>
              <div class="shop_link">
              <a href="" class="text-white fw-3">shop now</a>
              </div>
            </div>
              <?php
              $run++;
              };
              ?>
           </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
      <div class="d-flex justify-content-around align-items-center card">
        <h1 class="text-black">Trending This Week</h1>
        <ul class="nav navbar fw-bold ">
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">men</a></li>
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">women</a></li>
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">baby</a></li>
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">fashion</a></li>
            </ul>
        
      </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>