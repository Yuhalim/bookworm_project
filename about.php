<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/Digital presentation-amico.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Bookworm, we believe in empowering individuals through education. Choose us, and embark on a journey that goes beyond textbooks and exams, a journey that prepares you for a fulfilling and successful future. Your education is not just a destination; it's a transformative experience with us.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+100</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+5k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+40</h3>
            <span>expert tutors</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>
<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"I was thrilled to find such a diverse range of courses on Bookworm. The professors are engaging, and the interactive discussions in the virtual classroom make learning fascinating. The community here is supportive, and the resources provided have enriched my understanding of historical events. Highly recommend for anyone with a passion for learning!"</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Sandra Atama</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The engineering courses on Bookworm have exceeded my expectations. The curriculum is up-to-date, and the practical approach to learning has been instrumental in my academic success. The platform's user-friendly interface and responsive support team make the online learning experience seamless."</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>john daniel</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Having recently graduated, I was seeking a platform to enhance my skills and stay relevant in the job market. This Website has been a game-changer. The advanced courses align with current industry trends, and the platform's technology is top-notch.</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Aliyu tukuwa</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The flexibility of the courses allows me to study at my own pace, and the recorded lectures are a game-changer. The career guidance services have been invaluable, and I feel more confident about my career prospects now. Definitely a wise investment in my future!"</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Elizabeth Chukwudi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The art courses are inspiring, and the feedback from instructors is constructive. The collaborative projects with fellow students have expanded my artistic horizons. This platform has truly fueled my passion for the arts!"</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Adnan Jubril</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"After being recommended to this website by a friend i have not been able to get away, it helps me study better with the help of expert tutors that provide well detailed videos and recordings of topics. I as well would be recommending it to other students and graduates who want an effective to use platform for easy learning </p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Olamide Balogun</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>