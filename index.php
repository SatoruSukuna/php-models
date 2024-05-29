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
  $mail->Password="fyticmsnqjkjtxot";
  $mail->SMTPSecure="ssl";
  $mail->Port=465;
  $mail->setFrom("tarunsagwal38@gmail.com");
  $mail->addAddress($_POST['email']);
  $mail->isHTML(true);
  $mail->Subject=$_POST['name'];
  $mail->Body="<h1> <?php echo $name  ?>  thankyou to join a shoplift <br> I give you better experience </h1>";
   $mail->send();
 }
?>
<?php
    $con = mysqli_connect('localhost','root','','study');
    if(isset($_POST['sub'])){
        $user = $_POST['email'];
        $query = mysqli_query($con,"insert into shoplift (email) values ('$user')");
        // if($query){
        //   echo "inserted";
        // }
        // else{
        //   echo "not inserted";
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mainindex.css">
    <link rel="icon" href="img/store-solid-24.png">
</head>
<body class="fst-italic">
  <div class="load" onload="load()">
      <div class="loading">
        </div>
        <i class='bx bx-store' style='color:#f13e3e' ></i>
  </div>

  <div class="profile_bar">
    <div class="profile_box"></div>
  </div>


    <header class="container-fluid pt-2 pb-2 position-relative">
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 position-fixed">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder fs-3 gap-2 d-flex align-items-center" href="#"><i class='bx bx-store' style='color:#fff; padding:.5rem .5rem; background:#f13e3e; border-radius:50%; font-size:2rem; ' ></i>shoplift</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <div class="d-flex gap-1">
     <h4 class="text-black fw-light">hi,<?php echo $name ?></h4>
          <div class="cricle">
    <img onclick="profile()" src="upload/<?php echo $profile ?>" alt="" srcset="">
          </div>
       </div>
    </div>
  </div>
</nav>
    </header>


    <section class="section">
      <div class="main">
       <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="imgset/fram.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>women cloth</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/ads.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>animation hindi</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imgset/women 2.jpg" class="d-block w-100" alt="...">
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
           <div class="d-flex flex-wrap gap-5 justify-content-around ">
           <?php
            $arryimg=["men.webp","women 4.jpg","baby.webp"];
            $arrywrite=["men Fashion","Women's Fashion","baby fashion"];
              $run=0;
              while ($run<=2){
              ?>
            <div class="imgcard " data-aos="fade-up" data-aos-anchor-placement="center-bottom">
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
    <div class="container-fluid mt-5" data-aos="flip-up" >
      <div class="d-flex justify-content-around align-items-center card">
        <h1 class="text-black">Trending This Week</h1>
        <ul class="nav navbar fw-bold flex-nowrap ">
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">men</a></li>
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">women</a></li>
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">baby</a></li>
          <li class="shop_red nav-item"><a href="#" class="text-black nav-link">fashion</a></li>
            </ul>
      </div>
      
    </div>

<div class="container-fluid w-100 mt-5" style="background:#dbbb9a;" data-aos="fade-up"  data-aos-anchor-placement="top-bottom">
 <div class="container align-items-center d-flex flex-column justify-content-center">
  <h1 class="pt-5 fs-3 text-center">customer Testimonial</h1>
  <p class="fw-lighter fst-normal pt-2 fs-3 text-center">Everybody is different, which is why we offer styles for every body.<br> Laborum fuga incidunt laboriosam voluptas iure, delectus dignissimos<br> facilis neque nulla earum.</p>
  <div class="d-flex  gap-1">
    <div class="bg-black coment_img">
      <img src="imgset/men.webp" alt="profile">
    </div>
    <div class="row">
      <h1 class="fw-bold fs-5">david</h1>
      <p class=" fs-6">designer at colorlib</p>

    </div>
  </div>
</div>
</div>


<div class="container mt-5" >
  <h1 class="fw-bolder text-decoration-underline text-white  text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">visit store</h1>
  <div class="row" >
    <div class="col-md-6 col-lg-3" data-aos="flip-left">
      <div class="card" >
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Gucci</h3>
          <img src="imgset/gucci.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">The Gucci store has received mixed reviews from customers. Some customers have reported positive experiences, such as good service from staff and high-quality products.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3" data-aos="flip-right">
      <div class="card" >
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Chanel</h3>
          <img src="imgset/chanel.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text"> Chanel has an overall rating of 4.0 out of 5, indicating a generally positive experience for customers. Many reviewers have reported a positive outlook for the business.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3" data-aos="flip-up">
      <div class="card" >
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Louis Vuitton</h3>
          <img src="imgset/louis.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">Awful customer service. UPS turned up at 8pm and refused to hand over my parcel because I don't have a driving license. I phoned LV and after accusing me of being.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3" data-aos="flip-down">
      <div class="card">
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Prada</h3>
          <img src="imgset/prada.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">Prada is a premium brand offering a wide range of products, including bags, clothes, accessories, and more. According to reviews, the Prada outlet is a must-visit.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about_page container-fluid bg-dark mt-3">
  <div class="d-flex align-items-center  justify-content-between">
           <a class="navbar-brand text-white fw-bolder fs-3 gap-2 d-flex align-items-center" href="#"><i class='bx bx-store' style='color:#fff; padding:.5rem .5rem; background:#f13e3e; border-radius:50%; font-size:2rem; ' ></i>shoplift</a>
     <div class="icon_center">
       <a href="http://www.instagram.com/tarun.sagwal/"><i class='bx bxl-instagram' ></i><span class="hover_text hover_text_tsa fw-bold ">tarun.sagwal</span></a>
       <a href="http://github.com/SatoruSukuna"><i class='bx bxl-github'></i><span class="hover_text hover_text_sa fw-bold ">SatoruSukuna</span></a>
       <a href="#"><i class='bx bxl-linkedin'></i><span class="hover_text hover_text_ta fw-bold ">Tarun</span></a>
       <a href="http://portfoliotarunsagwal.rf.gd"><i class='bx bxs-user-circle'></i><span class="hover_text hover_text_po fw-bold ">portfolio</span></a>
     </div>
  </div>
</div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="index.js"></script>
</body>
</html>