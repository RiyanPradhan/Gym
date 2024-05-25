<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];

$sql="INSERT INTO tblbooking (package_id, userid) VALUES (:pid, :uid)";

$query = $dbh->prepare($sql);
$query->bindParam(':pid', $pid, PDO::PARAM_STR);
$query->bindParam(':uid', $uid, PDO::PARAM_STR);
$query->execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Gym Management System - Blog</title>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Management System Blog">
    <meta name="keywords" content="gym, blog, fitness, motivation">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/nice-select.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <!-- Header Section -->
    <?php include 'include/header.php';?>
    <!-- Header Section end -->

    <!-- Page top Section -->
    <section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-white">
                    <h2>Motivation Blog</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
            <img src="img/logo.png" alt=""style="width:50px; height:auto; display:block; margin:0 auto;">
                <h2>Our Blog</h2>
            </div>
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-lg-12 col-md-6 blog-item">
                    <div class="blog-content">
                        <h3>Fitness Journey: How to Start and Keep Going</h3>
                        <img src="img/journey.jpg" alt="Fitness Journey" class="img-fluid">
                        <p>Starting a fitness journey can be both exciting and daunting. The key to success is setting realistic goals, creating a balanced workout routine, and maintaining a positive mindset. Begin with simple exercises and gradually increase the intensity as your fitness level improves. It's important to stay motivated and not get discouraged by setbacks. Remember, fitness is a journey, not a destination. Celebrate small victories along the way and keep pushing yourself to reach new heights. Consistency is crucial, so make exercise a regular part of your daily routine and enjoy the process of becoming a healthier and stronger version of yourself.</p>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="col-lg-12 col-md-6 blog-item">
                    <div class="blog-content">
                        <h3>Top 10 Exercises for a Full-Body Workout</h3>
                        <img src="img/fullbody.jpg" alt="Full-Body Workout" class="img-fluid">
                        <p>A full-body workout is an excellent way to ensure all major muscle groups are targeted. Here are the top 10 exercises that can be included in your routine: 1) Squats, 2) Deadlifts, 3) Push-ups, 4) Pull-ups, 5) Bench Press, 6) Bent-Over Rows, 7) Planks, 8) Lunges, 9) Overhead Press, and 10) Burpees. These exercises offer a combination of strength training and cardiovascular benefits. Incorporate them into your workout regimen to build muscle, improve endurance, and enhance overall fitness. Remember to maintain proper form and technique to prevent injuries and maximize the effectiveness of each exercise.</p>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="col-lg-12 col-md-6 blog-item">
                    <div class="blog-content">
                        <h3>Nutrition Tips for Building Muscle</h3>
                        <img src="img/nutrients.jpg" alt="Nutrition Tips" class="img-fluid">
                        <p>Building muscle requires a combination of effective workouts and proper nutrition. Here are some essential nutrition tips to help you achieve your muscle-building goals: 1) Consume adequate protein to support muscle repair and growth. Good sources include chicken, fish, eggs, and plant-based proteins like beans and lentils. 2) Include healthy fats in your diet, such as avocados, nuts, and olive oil. 3) Eat a variety of fruits and vegetables to get essential vitamins and minerals. 4) Stay hydrated by drinking plenty of water throughout the day. 5) Consider taking supplements like protein powder or creatine, but consult with a healthcare professional before starting any supplement regimen. Proper nutrition will fuel your workouts and help you build and maintain muscle mass effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>
    <!-- Footer Section end -->

    <div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

    <!-- Javascripts & Jquery -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
