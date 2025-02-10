<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Sure Seal Co.</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .hero-section {
            background: url('assets/images/about-banner.jpg') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        .icon-box {
            font-size: 40px;
            color: #007bff;
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<!-- Hero Section -->
<div class="hero-section">
    <h1>About Sure Seal Co.</h1>
</div>

<!-- About Company Section -->
<section class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="assets/images/company-building.jpg" class="img-fluid rounded" alt="Company Building">
        </div>
        <div class="col-md-6">
            <h2 class="section-title">Who We Are</h2>
            <p>Sure Seal Co. is a leading construction and waterproofing company in Kenya, specializing in high-quality, durable, and cost-effective solutions. With years of industry experience, we have built a reputation for excellence, professionalism, and reliability.</p>
            <p>We take pride in delivering cutting-edge waterproofing, foundation reinforcement, and general construction solutions for residential, commercial, and industrial projects.</p>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="container my-5">
    <h2 class="text-center section-title">Why Choose Us?</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <i class="fa fa-certificate icon-box"></i>
            <h4>Certified Experts</h4>
            <p>We are a team of licensed professionals with extensive experience in the construction and waterproofing industry.</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-shield icon-box"></i>
            <h4>Guaranteed Quality</h4>
            <p>We use premium materials and advanced techniques to ensure long-lasting and high-quality workmanship.</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-users icon-box"></i>
            <h4>Client-Focused Approach</h4>
            <p>We work closely with our clients, understanding their needs, and delivering customized solutions.</p>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="section-title">Our Mission</h2>
            <p>To provide innovative and sustainable construction solutions, ensuring quality, durability, and customer satisfaction at every stage.</p>
        </div>
        <div class="col-md-6">
            <h2 class="section-title">Our Vision</h2>
            <p>To be the most trusted and preferred construction company in East Africa, setting the benchmark for quality and innovation.</p>
        </div>
    </div>
</section>

<!-- Our Clients Section -->
<section class="container my-5">
    <h2 class="text-center section-title">Our Valued Clients</h2>
    <p class="text-center">We have had the privilege to work with top-tier companies across various sectors, ensuring high-quality construction and waterproofing solutions.</p>
    <div class="row text-center">
        <div class="col-md-3"><img src="assets/images/client1.png" class="img-fluid" alt="Client 1"></div>
        <div class="col-md-3"><img src="assets/images/client2.png" class="img-fluid" alt="Client 2"></div>
        <div class="col-md-3"><img src="assets/images/client3.png" class="img-fluid" alt="Client 3"></div>
        <div class="col-md-3"><img src="assets/images/client4.png" class="img-fluid" alt="Client 4"></div>
    </div>
</section>

<!-- Testimonials -->
<section class="container my-5">
    <h2 class="text-center section-title">What Our Clients Say</h2>
    <div class="row">
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p>"Sure Seal Co. exceeded our expectations! Their team delivered outstanding work on our commercial project."</p>
                <footer class="blockquote-footer">John Mwangi, CEO - Elite Builders</footer>
            </blockquote>
        </div>
        <div class="col-md-6">
            <blockquote class="blockquote">
                <p>"Excellent customer service and high-quality workmanship. Highly recommended!"</p>
                <footer class="blockquote-footer">Sarah Wanjiru, Homeowner</footer>
            </blockquote>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'includes/footer.php'; ?>