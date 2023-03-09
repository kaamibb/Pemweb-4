<?php
     require "var.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>kaamib</title>
  <script src="https://kit.fontawesome.com/4662d9f0d2.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1>kaamib</h1>
          </a>
        </div>
        <div class="nav-list">
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div class="foto">
        <img src="img/foto.jpg" />
      </div>
      <div class="teks">
        <h1>Hello<span>.</span></h1>
        <h1><span>I'm </span>Bima Arya</h1>
        <a href="#about" type="button" class="cta">About me</a>
      </div>
      <div class="scroll-down">
        <a href="#about" class="scroll-text">SCROLL</a>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- About Section -->

  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <div class="box1">
          <p><?php echo $about["desk"]; ?><p>
        </div>
        <div class="box2">
          <table>
            <tr>
              <td><b>Name</b></td>
              <td>:</td>
              <td><?php echo $about["nama"]; ?></td>
            </tr>
            <tr>
              <td><b>Addres</b></td>
              <td>:</td>
              <td><br><?php echo $about["addres"]; ?></td>
            </tr>
            <tr>
              <td><b>Study</b></td>
              <td>:</td>
              <td><br><?php echo $about["study"]; ?></td>
            </tr>
            <tr>
              <td><b>Email</b></td>
              <td>:</td>
              <td><?php echo $about["email"]; ?></td>
            </tr>
            <tr>
              <td><b>Umur</b></td>
              <td>:</td>
              <td> <br><?php echo $umur?></td>
            </tr>
            <tr>
              <td><b>Phone</b></td>
              <td>:</td>
              <td><?php echo $about["phone"]; ?></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="flex-center">
        <ul>
          <li style="--i:#a955ff;--j:#ea51ff;">
            <a href=<?php echo $link["facebook"] ?> target="_blank">
              <span class="icon"><i class="fa fa-facebook"></i></span>
              <span class="titulo">facebook</span>
            </a>
          </li>
          <li style="--i:#a955ff;--j:#ea51ff;">
            <a href=<?php echo $link["twitter"] ?> target="_blank">
              <span class="icon"><i class="fa fa-twitter"></i></span>
              <span class="titulo">twitter</span>
            </a>
          </li>
          <li style="--i:#a955ff;--j:#ea51ff;">
            <a href=<?php echo $link["whatsapp"] ?> target="_blank">
              <span class="icon"><i class="fa fa-whatsapp"></i></span>
              <span class="titulo">whatsapp</span>
            </a>
          </li>
          <li style="--i:#a955ff;--j:#ea51ff;">
            <a href=<?php echo $link["instagram"] ?> target="_blank">
              <span class="icon"><i class="fa fa-instagram"></i></span>
              <span class="titulo">instagram</span>
            </a>
          </li>
        </ul>
        <p class="find-me">Find me on networks</p>
      </div> 
    </div>
  </section>
  
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2><?php echo $about["phone"]; ?></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2><?php echo $about["email"]; ?></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2><?php echo $about["addres"]; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
</body>

</html>