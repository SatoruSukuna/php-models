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
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require "PHPMailer/src/Exception.php";
// require "PHPMailer/src/SMTP.php";
// require "PHPMailer/src/PHPMailer.php";
// if(isset($_POST['sub'])){
//   $mail=new PHPMailer(true);
//   $mail->isSMTP();
//   $mail->Host="smtp.gmail.com";
//   $mail->SMTPAuth=true;
//   $mail->Username="tarunsagwal38@gmail.com";
//   $mail->Password="bxtlhhlnobtipkrd";
//   $mail->SMTPSecure="ssl";
//   $mail->Port=465;
//   $mail->setFrom("tarunsagwal38@gmail.com");
//   $mail->addAddress($_POST['email']);
//   $mail->isHTML(true);
//   $mail->Subject=$_POST['name'];
  // $mail->Body="<h1> <?php echo $name  ?> 
  <!-- thankyou to join a shoplift <br> I give you better experience </h1>"; -->
  <!-- $mail->send(); -->
 <!-- } -->
<!-- ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoping</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mainindex.css">
</head>
<body class="fst-italic">
  <div class="load" onload="load()">
      <div class="loading">
  <i class='bx bx-store' style='color:#f13e3e' ></i>
      </div>
  </div>
    <header class="container-fluid pt-2 pb-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder" href="#">shoplift</a>
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
    <img src="upload/<?php echo $profile ?>" alt="" srcset="">
    </div>
</div>
    </div>
  </div>
</nav>
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
      <img src="imgset/fram.webp" class="d-block w-100" alt="..." style="height:90vh;">
      <div class="carousel-caption d-none d-md-block text-black">
        <h5>women cloth</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/ads.jpg" class="d-block w-100" alt="..." style="height:90vh;">
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
    <div class="container-fluid mt-5" data-aos="fade-up"     data-aos-anchor-placement="top-bottom" >
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
<div class="owl-carousel  container-fluid" data-aos="fade-up"     data-aos-anchor-placement="top-bottom">
  <div class="text-black">
    <div class="imgowl">
        <img src="imgset/women 5.jpg" alt="loading...">   
      </div> 
      <h1 class="fs-6 fw-lighter text-center">cashmere Tank + bag</h1> 
      <p class="fs-5 text-center fw-lighter fst-normal">$98  <span class="text-decoration-line-through fs-6 fw-lighter " style="color:#dbbb9a;">$500</span></p>
   </div>
  <div class="text-black">
     <div class="imgowl">
          <img src="imgset/latest.webp" alt="loading...">    
      </div>
      <h1 class="fs-6 fw-lighter text-center">cashmere Tank + bag</h1>
      <p class="fs-5 text-center fw-lighter fst-normal">$98  <span class="text-decoration-line-through fs-6 fw-lighter " style="color:#dbbb9a;">$500</span></p>
   </div>
  <div class="text-black"> 
    <div class="imgowl">
         <img src="imgset/latest1.webp" alt="loading...">  
    </div>
    <h1 class="fs-6 fw-lighter text-center">cashmere Tank + bag</h1>
    <p class="fs-5 text-center fw-lighter fst-normal">$98  <span class="text-decoration-line-through fs-6 fw-lighter " style="color:#dbbb9a;">$500</span></p>
   </div>
 <div class="text-black"> 
  <div class="imgowl">
      <img src="imgset/women 5.jpg" alt="loading...">    
  </div>
  <h1 class="fs-6 fw-lighter text-center">cashmere Tank + bag</h1>
  <p class="fs-5 text-center fw-lighter fst-normal">$98  <span class="text-decoration-line-through fs-6 fw-lighter " style="color:#dbbb9a;">$500</span></p>
  </div>
  <div class="text-black">
    <div class="imgowl">
       <img src="imgset/latest.webp" alt="loading...">    
     </div>
     <h1 class="fs-6 fw-lighter text-center">cashmere Tank + bag</h1>
     <p class="fs-5 text-center fw-lighter fst-normal">$98  <span class="text-decoration-line-through fs-6 fw-lighter " style="color:#dbbb9a;">$500</span></p>
  </div>
  <div class="text-black"> 
    <div class="imgowl">
      <img src="imgset/latest1.webp" alt="loading...">  
    </div>
    <h1 class="fs-6 fw-lighter text-center">cashmere Tank + bag</h1>
    <p class="fs-5 text-center fw-lighter fst-normal">$98  <span class="text-decoration-line-through fs-6 fw-lighter " style="color:#dbbb9a;">$500</span></p>
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


<div class="container mt-5" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Gucci</h3>
          <img src="imgset/gucci.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Chanel</h3>
          <img src="imgset/chanel.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Louis Vuitton</h3>
          <img src="imgset/louis.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-body">
          <h3 class="fw-light card-title text-center">Prada</h3>
          <img src="imgset/prada.webp" style="height: 12rem;" alt="loading..." class="card-img-top">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">shop  now</a>
        </div>
      </div>
    </div>
  </div>
</div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="index.js"></script>
</body>
</html>