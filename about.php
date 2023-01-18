<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Booksy. is an online bookstore, physically based in Kathmandu, Nepal, with an aim to create the largest community of book readers in Nepal.News and events At Booksmandala, you can browse and buy books online at the lowest everyday prices.</p>
         <p>We here at Booksy. think that people should be able to get books to read when they want and where they want and get books at very cheap prices.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>"I've been ordering books from this online bookstore for years and I'm always pleased with the service. They have a wide selection of books, the prices are good, and the delivery is fast."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Client 1</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>"I recently purchased a book from this online bookstore and couldn't be happier. The selection was great, the prices were good, and the delivery was fast. Highly recommend!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Client 2</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>This online bookstore is one of the best out there! Their prices are fair and shipping is fast. I always find what I'm looking for and the customer service is great.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Client 3</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>I've been shopping with this online bookstore for years and I'm always happy with the selection and prices. They have a wide range of books and the customer service is top notch.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Client 4</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpg" alt="">
         <p>I recently purchased a book from this online bookstore and I was so pleased with the purchase! The delivery was prompt and the book was exactly what I expected.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Client 5</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.jpg" alt="">
         <p>This online bookstore is my go-to place for all my book needs. Their customer service is great and I always get my order in a timely manner. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Client 6</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Gorge RR Martin</h3>
      </div>

      <div class="box">
         <img src="images/author-2.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JK Rowling</h3>
      </div>

      <div class="box">
         <img src="images/author-1.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Robert T. Kiyosaki</h3>
      </div>

      <div class="box">
         <img src="images/author-2.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Fujiko F. Fujio</h3>
      </div>

      <div class="box">
         <img src="images/author-1.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mishasi Kishimoto</h3>
      </div>

      <div class="box">
         <img src="images/author-2.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amar Neupane</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>