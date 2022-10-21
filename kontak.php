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
            <a href="">Review</a>
            <a href="kontak.php">Kontak</a>
            <a href="">Blog</a>
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

<section class="contact" id="contact">

   <h1 class="heading"> Kontak Kami  </h1>

   <div class="container">

      <div class="contact-info-container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>Whatsapp : </p>
            <p>Nomor HP : </p>
         </div>
   
         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>@gmail.com</p>
         </div>
   
         <div class="box">
            <i class="fas fa-map"></i>
            <h3>Lokasi</h3>
            <p>Indonesia, Dki Jakarta</p>
         </div>
   
      </div>

      <div class="row align-items-center">

         <div class="col-md-6 mb-5 mb-md-0 ">
            <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.65294810734!2d106.68943162494352!3d-6.229386704800049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1663140871440!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
         </div>

         <form action="" class="col-md-6">
            <h3>berhubungan</h3>
            <input type="text" placeholder="Nama" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Phone" class="box">
            <textarea name="" placeholder="Pesan" class="box" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Mengirim pesan" class="link-btn">
         </form>
      </div>

   </div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>