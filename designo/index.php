<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Designo</title>
   <link rel="stylesheet" href="./css/styles.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
   <header class="header">
      <section class="container flex">
      <a class="logo" href="#">
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
      <section class="container hero flex">
            <div class="hero__content">
               <h1>Award-winning custom designs and digital branding solutions</h1>
               <p>With over 10 years in the industry, we are experienced in creating fully responsive websites, app design, and engaging
               brand experiences. Find out more about our services.</p>
               <a href="#">Learn More</a>
            </div>
      </section>
      <section class="container flex products">
         <div class="products__content">
            <article class="product__content-item product">
               <div>
                  <h2>web design</h2>
                  <a href="./webd.html">
                     <h3>view projects</h3>
                  </a>
               </div>
            </article>
               <div class="product__content-item">
            <article class="product">
               <div>
                  <h2> app design</h2>
                  <a href="./appd.html">
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
      <section class="container flex props">
         <article class="props__item">
            <img src="../img/props-icon1.svg" alt="">
            <h2>PASSIONATE</h2>
            <p>Each project starts with an in-depth brand research to ensure we only create products that serve a purpose. We merge
            art, design, and technology into exciting new solutions.</p>
         </article>
         <article class="props__item">
            <img src="../img/props-icon2.svg" alt="">
            <h2>RESOURCEFUL</h2>
            <p>Everything that we do has a strategic purpose. We use an agile approach in all of our projects and value customer
            collaboration. It guarantees superior results that fulfill our clients’ needs.</p>
         </article>
         <article class="props__item">
            <img src="../img/prop-icon3.svg" alt="">
            <h2>FRIENDLY</h2>
            <p>We are a group of enthusiastic folks who know how to put people first. Our success depends on our customers, and we
            strive to give them the best experience a company can provide.</p>
         </article>
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
            <a class="logo" href="#">
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
            <article class="info__item social">
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