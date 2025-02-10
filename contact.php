<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Sure Seal Co.</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .hero-section {
            background: url('assets/images/contact-banner.jpg') no-repeat center center/cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .contact-icon {
            font-size: 2rem;
            color: #007bff;
        }
        .map-container {
            width: 100%;
            height: 400px;
            border: 0;
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<!-- Hero Section -->
<div class="hero-section">
    <h1>Get In Touch With Us</h1>
</div>

<!-- Contact Info Section -->
<section class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <i class="fa fa-map-marker contact-icon"></i>
            <h4>Office Address</h4>
            <p>Go Down 29 Busia Road, Nairobi, Kenya</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-phone contact-icon"></i>
            <h4>Phone Number</h4>
            <p>+254 712 345 678</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-envelope contact-icon"></i>
            <h4>Email Us</h4>
            <p>info@sureseal.com</p>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="container my-5">
    <h2 class="text-center">Send Us a Message</h2>
    <p class="text-center">Fill in the form below and our team will get back to you within 24 hours.</p>

    <form action="contact-form-handler.php" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-12">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="col-12">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send Message</button>
        </div>
    </form>
</section>

<!-- Google Maps Embed -->
<section class="container my-5">
    <h2 class="text-center">Find Us on Google Maps</h2>
    <iframe class="map-container" 
        src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=Go+Down+29+Busia+Road,Nairobi,Kenya" 
        allowfullscreen>
    </iframe>
</section>

<!-- WhatsApp & Social Media -->
<section class="container text-center my-5">
    <h2 class="text-center">Connect With Us</h2>
    <p>Reach out to us on WhatsApp or follow us on social media.</p>

    <a href="https://wa.me/254712345678" class="btn btn-success"><i class="fa fa-whatsapp"></i> WhatsApp Us</a>
    <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
    <a href="#" class="btn btn-info"><i class="fa fa-x-twitter"></i>X</a>
    <a href="#" class="btn btn-danger"><i class="fa fa-instagram"></i> Instagram</a>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'includes/footer.php'; ?>