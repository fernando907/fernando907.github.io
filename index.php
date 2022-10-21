<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="images/logo.png">
   <title>Toko</title>

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

         <a href="#" class="logo mr-auto"> <i class=" "></i> Toko </a>

         <nav class="nav">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#menu">Menu</a>
            <a href="#gallery">Galeri</a>
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
      <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> Toko </a>
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

<!-- login form ends -->

<!-- header section ends    -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row align-items-center text-center text-md-left min-vh-100">
         <div class="col-md-6">
            <h2 class="text-primary font-weight-medium m-0">Selamat Datang<h2>
            <h1 class="display-1 text-white m-0">Di Toko Rasya </h1>

           
            
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">
         <div class="col-md-6">
            <img src="images/about-img-1.png" class="w-100" alt="">
         </div>
         <div class="col-md-6">
            <span>Tentang</span>
            <h3 class="title">Toko Mama Rasya</h3>
            <p>Toko kelontong adalah toko yang menjual berbagai macam kebutuhan sehari-hari. Selain itu, jenisnya pun beragam dan lebih lengkap. Produk yang dijual biasanya peralatan dan kebutuhan rumah tangga, seperti beras, bumbu dapur, peralatan mandi, sabun mencuci pakaian, pembersih rumah, dan lain sebagainya</p>
            <div class="icons-container">
               <div class="icons">
                  <i class="fas fa-shipping-fast"></i>
                  <h3>Pengiriman gratis</h3>
               </div>
               <div class="icons">
                  <i class="fas fa-headset"></i>
                  <h3>Layanan Pukul 10.00–17.00</h3>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <h1 class="heading"> Menu </h1>

   <div class="container box-container">

      <div class="box">
         <img src="images/paket-sembako.jpg" alt="">
         <h3>Paket Sembako</h3>
         <p>Isi Paket Sembako Adalah Beras, Gula, Minyak Goreng, Kopi Hitam, Tepung Terigu Dan Lain-Lain</p>
         <h2>Rp 175.000</h2>
			<button class="btn">
         <a href="#contact" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
      </div>

      <div class="box">
         <img src="images/mie-goreng.jpg" alt="">
         <h3>Mie Goreng 1 Dus</h3>
         <p>Indomie Goreng 1 dus isi 40 bungkus.</p>
         <h2>Rp 130.000</h2>
			<button class="btn">
         <a href="#contact" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
      </div>

      <div class="box">
         <img src="images/mie-soto.jpg" alt="">
         <h3>Mie Soto 1 Dus</h3>
         <p>INDOMIE RASA SOTO 1 DUS ISI 40 BUNGKUS PCS - Indomi Mie Mi Instan Grosir Murah</p>
         <h2>Rp 130.000</h2>
			<button class="btn">
         <a href="#contact" class="waves-effect waves-light btn"><h4>Hubungin</h4></a>
      </div>

   </div>
   <div class="bottom" style="text-align: center;margin-bottom: 50px; width: 100%;">
      <div class="col s12">
         <a href="menu.php" class="waves-effect waves-light btn" style="background:#ff0000  !important;">Menu lengkapnya</a>
      </div>
   </div>
</section>

<!-- menu section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <h1 class="heading"> Galeri </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/Galeri1.jpg" alt="">
         <div class="content">
            <h3>Toko Mama Rasya</h3>
         </div>
      </div>

      <div class="box">
         <img src="images/galeri2.jpg" alt="">
         <div class="content">
            <h3>Toko Mama Rasya</h3>
         </div>
      </div>

      <div class="box">
         <img src="images/galeri3.jpg" alt="">
         <div class="content">
            <h3>Toko Mama Rasya</h3>
         </div>
      </div>

      <div class="box">
         <img src="images/galeri4.jpg" alt="">
         <div class="content">
            <h3>Toko Mama Rasya</h3>
         </div>
      </div>

      <div class="box">
         <img src="images/Galeri5.jpg" alt="">
         <div class="content">
            <h3>Toko Mama Rasya</h3>
         </div>
      </div>

      <div class="box">
         <img src="images/mie-goreng.jpg" alt="">
         <div class="content">
            <h3>Mama Rasya</h3>
         </div>
      </div>

      </div>
   <div class="bottom" style="text-align: center;margin-bottom: 50px; width: 100%;">
      <div class="col s12">
         <a href="Galeri.php" class="waves-effect waves-light btn" style="background:#ff0000  !important;">Galeri lengkapnya</a>
      </div>
   </div>

   </div>
   

</section>

<!-- gallery section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading"> Kontak Kami  </h1>

   <div class="container">

      <div class="contact-info-container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>Whatsapp : 0855-8081-309 </p>
            <p>Nomor HP : 0855-8081-309 </p>
         </div>
   
         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>@gmail.com</p>
         </div>
   
         <div class="box">
            <i class="fas fa-map"></i>
            <h3>Lokasi</h3>
            <p>Indonesia, Jakarta Timur,Jl. Batu ampar 1 gg h raijin RT 13 RW 02 no 107  batu ampar Kramat </p>
         </div>
   
      </div>

      <div class="row align-items-center">

         <div class="col-md-6 mb-5 mb-md-0 ">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.87033454183518!2d106.86421851468047!3d-6.2735459999999925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a2118dcc7b%3A0xc6ec576cbef053e0!2sToko%20Mama%20Rasya!5e0!3m2!1sid!2sid!4v1666334524933!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

   </div>

</section>

<!-- contact section ends -->

<!-- newsletter section starts  -->

<section class="newsletter">
  <div class="container">
      <h3>newsletter</h3>
      <p>update terbaru</p>
      <form action="">
         <input type="email" name="" placeholder="Masukkan email Anda" id="" class="email">
         <input type="submit" value="Submit" class="link-btn">
      </form>
  </div>
</section>

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer container">

   <a href="#" class="logo"> <i class="fas fa-mug-hot"></i> Toko Mama Rasya </a>

   <p class="credit"> Bisa Hubungin Disini <span>Toko Mama Rasya</span></p>

   <div class="share">
      <a href="https://api.whatsapp.com/send/?phone=628558081309&text&type=phone_number&app_absent=0" class="fab fa-whatsapp"></a>
   </div>
   
   
</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>