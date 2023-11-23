
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
            <h2>REVIEWS</h2>
            <p>Write a review about us please.</p>
         </div>
      </article>
      <section class="reviews__container">
      <div class="reviews">
         <div class="col-lg-5">
            <div class="comments__reviews" id="comment-field">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = $_POST["name"];
         $comment = $_POST["message"];
         $file = 'comments.txt';
         $currentContent = file_get_contents($file);
         $currentContent .= $name . ": " . $comment . "\n";
         file_put_contents($file, $currentContent);
         }
      $allComments = file_get_contents('comments.txt');
      echo nl2br($allComments); ?>
            </div>
         </div>
      </div>
         <div class="reviews2">
         <div class="col-lg-6">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
               <div class="form-group">
                  <label for="comment-name">Name:</label>
                  <input type="name" name="name" class="form-control" id="comment-name" placeholder="Your name" required>
               </div>
               <div class="form-group">
                  <label for="comment-body">Comment:</label>
                  <input type="name" name="message" class="form-control" id="comment-body" placeholder="Your comment" required>
               </div>
               <div class="form-group text-right">
                  <button type="submit" id="comment-add" class="reviews__btn">Add comment</button>
               </div>
            </form>
         </div>
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
         <p>Lorem Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</section>
   </main>
   <footer class="footer">
      <section class="container">
         <article class="touch flex">
            <div class="touch__content">
               <h2>Let’s talk about your project</h2>
               <p>Ready to take it to the next level? Contact us today and find out how our expertise can help your
                  business grow.</p>
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
            <article class="info__item social">
               <ul class="networks_list">
                  <li class="netwoks__item">
                     <a href="https://twitter.com"><img src="./img/twitter.svg" alt="social network"></a>
                  </li>
                  <li class="netwoks__item">
                     <a href="https://www.facebook.com"><img src="./img/facebook.svg" alt="social network">
                     </a>
                  </li>
                  <li class="netwoks__item">
                     <a href="https://www.instagram.com"><img src="./img/instagram.svg" alt="social network">
                     </a>
                  </li>
                  <li class="netwoks__item">
                     <a href="https://www.youtube.com"><img src="./img/youtube.svg" alt="social network">
                     </a>
                  </li>
                  <li class="netwoks__item">
                     <a href="https://www.pinterest.com"><img src="./img/pinterest.svg" alt="social network">
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