<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <title>Coffe</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts     -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center">

         <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a>

         <nav class="nav">
            <a href="http://127.0.0.1:8000/">Beranda</a>
            <a href="tentang.php">Tentang</a>
            <a href="menu.php">Menu</a>
            <a href="galeri.php">Galeri</a>
            <a href="#reviews">Review</a>
            <a href="kontak.php">Kontak</a>
            <a href="#blogs">Blog</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="login-btn" class="fas fa-user"></div>
         </div>

      </div>

   </div>

</header>

<!-- login form starts -->

<div class="login-form">

   <form action="">
      <div id="close-login-form" class="fas fa-times"></div>
      <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a>
      <h3>Mari kita mulai hari baru yang hebat</h3>
      <input type="email" name="" placeholder="Masukkan email Anda" id="" class="box">
      <input type="password" name="" placeholder="Masukkan password anda" id="" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="ingat saya">
         <label for="ingat saya">Ingat saya</label>
         <a href="#">Tidak ingat kata sandi?</a>
      </div>
      <input type="submit" value="login now" class="link-btn">
      <p class="account">Tidak punya akun? <a href="#">Buatlah akun</a></p>
   </form>

</div>

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="images/about-img-1.png" class="w-100" alt="">
         </div>
         <div class="col-md-6">
            <span>Tentang</span>
            <h3 class="title">Pembuat Coffe Terbaik Di Kota</h3>
            <p>Kopi merupakan salah satu minuman yang populer di seluruh dunia. Tak hanya nikmat, manfaatnya yang mampu membuat orang tetap terjaga membuat kopi hampir selalu dijadikan sebagai solusi bagi mereka yang ingin bekerja hingga larut malam. Selain itu, kopi juga banyak dijadikan sebagai teman untuk menghabiskan waktu berbincang-bincang dengan orang kesayangan, termasuk kopi Kapal Api yang aroma dan rasanya jelas lebih enak.</p>
            <p>Nah,apakah Temen Ngopi akhir-akhir ini merasa mulai suka kopi? Apa kamu sudah tahu apa saja fakta menarik kopi? Jangan hanya dinikmati saja, sebagai seorang pecinta kopi yang masih pemula, kamu juga harus mengetahui berbagai fakta menarik tentangnya. Seperti berikut beberapa di antaranya.</p>
            <div class="icons-container">
               <div class="icons">
                  <i class="fas fa-coffee"></i>
                  <h3>Coffe Terbaik</h3>
               </div>
               <div class="icons">
                  <i class="fas fa-shipping-fast"></i>
                  <h3>Pengiriman gratis</h3>
               </div>
               <div class="icons">
                  <i class="fas fa-headset"></i>
                  <h3>Layanan 24 Jam</h3>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>