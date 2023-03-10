<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Fashion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">MUSLIM FASHION<span></span></a>

    <nav class="navbar">
        <a href="#home">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#review">REVIEW</a>
        <a href="#contact">CONTACT</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.php" class="fas fa-user"></a>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>Muslim Fashion</h3>
        <span> Natural & Beautiful </span>
        <p>Find your favorite style here</p>
        <a href="#" class="btn">shop now</a>
    </div>
    
</section>

<section class="about" id="about">

  <h1 class="heading"> About Us </h1>

  <div class="row">

      <div class="video-container">
          <video src="about-vid.mp4" loop autoplay muted></video>
          <h3>Best Muslim Fashion</h3>
      </div>

      <div class="content">
          <h3>Why Choose Us?</h3>
          <p>It is very important for the customer to pay attention to the pursuit of the elite adipiscing. No matter what the case, no one who has a clear view of the body is spurned by any repudiation.</p>
          <p>Thank you very much. It is a matter of great advantage to the accusers, because they see the trouble, which is indeed unrepentant.</p>
          <a href="#" class="btn">learn more</a>
      </div>

  </div>

</section>

  <div class="wrapper">

    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="men">Men</span>
        <span class="item" data-name="women">Women</span>
        <span class="item" data-name="couple">Couple</span>

      </div>
    </nav>

    <div class="gallery">
      <div class="image" data-name="men"><span><img src="Men/men1.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men2.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men3.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men4.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men5.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men6.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men7.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men8.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men9.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men10.jpg" alt=""></span></div>
      <div class="image" data-name="men"><span><img src="Men/men11.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women1.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women2.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women3.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women4.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women5.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women6.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women7.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women8.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women9.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women10.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women11.jpg" alt=""></span></div>
      <div class="image" data-name="women"><span><img src="Women/women12.jpeg" alt=""></span></div>
      <div class="image" data-name="couple"><span><img src="Couple/couple1.jpg" alt=""></span></div>
      <div class="image" data-name="couple"><span><img src="Couple/couple2.jpg" alt=""></span></div>
    </div>
  </div>

  <div class="preview-box">
    <div class="details">
      <span class="title">Image Category: <p></p></span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box"><img src="" alt=""></div>
  </div>
  <div class="shadow"></div>
  <script src="script.js"></script>

  <section class="contact" id="contact">

    <h1 class="heading"> Contact us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Number" class="box">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

    </div>

</section>
</body>
</html>