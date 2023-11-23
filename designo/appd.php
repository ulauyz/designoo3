<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>App Design</title>
   <link rel="stylesheet" href="./css/styles.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
</head>
<body class="webd">
   <header class="header">
      <section class="container flex">
      <a class="logo" href="./index.html">
         <img class="logo-header" src="./img/logo_header.png" alt="лого компанії">
      </a>
         <nav>
         <ul class="menu header__menu flex">
            <li><a href="#">OUR COMPANY</a></li>
            <li><a href="#">LOCATIONS</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a href="./reviews.html">REVIEWS</a></li>
         </ul>
         </nav>
      </section>
   </header>
   <main class="main container-bg">


      <article class="touch flex">
         <div class="touch__content">
            <h2>App Design</h2>
            <p>We build websites that serve as powerful marketing tools
            and bring memorable brand experiences.</p>
         </div>
      </article>
      <section class="container flex works">
         <article class="works__item flex">
            <img src="./img/w1.png" alt="site" width="350px" height="320px">
            <div class="flex">
            <h3>EXPRESS</h3>
            <p>A multi-carrier shipping website for ecommerce businesses</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w2.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>PHOTON</h3>
               <p>A state-of-the-art music player with high-resolution audio and DSP effects</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w3.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>TRANSFER</h3>
               <p>Site for low-cost money transfers and sending money within seconds</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w4.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>BUILDER</h3>
               <p>Connects users with local contractors based on their location</p>
            </div>
         </article>
         <article class="works__item flex">
            <img src="./img/w5.png" alt="site" width="350px" height="320px">
            <div class="flex">
               <h3>BLOGR</h3>
               <p>Blogr is a platform for creating an online blog or publication</p>
            </div>
         </article>
         
      </section>
      <section class="container flex products">
         <div class="products__content">
            
               <div class="product__content-item">
            <article class="product">
               <div>
                  <h2> web design</h2>
                  <a href="./webd.html">
                     <h3>view projects</h3>
               </a>
               </div>
            </article>
            <article class="product">
               <div>
                  <h2>graphic design</h2>
                  <a href="./graphic.html">
                     <h3>view projects</h3>
                  </a>
               </div>
            </article>
            </div>
         </div>
      </section>
      </main>
   <footer class="footer">
      <section class="container">
         <article class="touch flex">
            <div class="touch__content">
               <h2>Let’s talk about your project</h2>
               <p>Ready to take it to the next level? Contact us today and find out how our expertise can help your business grow.</p>
            </div>
            <a href="#">Get in touch</a>
         </article>
         <section class="container flex bt-line">
            <a class="logo" href="./index.html">
               <img class="logo-footer" src="./img/logo_footer.png" alt="лого компанії">
            </a>
               <ul class="menu footer__menu flex">
                  <li><a href="#">OUR COMPANY</a></li>
                  <li><a href="#">LOCATIONS</a></li>
                  <li><a href="#">CONTACT</a></li>
                  <li><a href="./reviews.html">REVIEWS</a></li>
               </ul>
         </section>
      </section>
      <section>
         <section class="info flex">
            <article class="info__item ">
               <h2>Designo Central Office</h2>
               <p>3886 Wellington Street</p>
               <p>Toronto, Ontario M9C 3J5</p>
               <p>
               <?php
                  $date = date('d.m.Y');
                  echo $date;
                  ?>
               </p>
            </article>
            <article class="info__item fw700">
            <h2>Contact Us (Central Office)</h2>
            <p>P : +1 253-863-8967</p>
            <p>M : contact@designo.co</p>
            </article>
            <article class="info__item social flex">
               <ul class="networks_list">
               <li class="netwoks__item">
                  <a href="https://twitter.com"><img src="./img/twitter.svg" alt="social network"></a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.facebook.com" ><img src="./img/facebook.svg"
                        alt="social network">
                  </a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.instagram.com" ><img src="./img/instagram.svg"
                        alt="social network">
                  </a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.youtube.com" ><img src="./img/youtube.svg"
                        alt="social network">
                  </a>
               </li>
               <li class="netwoks__item">
                  <a href="https://www.pinterest.com" ><img src="./img/pinterest.svg"
                        alt="social network">
                  </a>
               </li>
            </ul>
            </div>
            </article>
         </section>
      </section>
   </footer>
      <div class="scroll__up">⇡</div>
      <script src="./js/script.js"></script>
</body>
</html>