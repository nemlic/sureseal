<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQs - Sure Seal Co.</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .hero-section {
            background: url('assets/images/faq-banner.jpg') no-repeat center center/cover;
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
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<!-- Hero Section -->
<div class="hero-section">
    <h1>Frequently Asked Questions</h1>
</div>

<!-- FAQ Section -->
<section class="container my-5">
    <h2 class="text-center section-title">General Questions</h2>
    <div class="accordion" id="faqAccordion">

        <!-- Question 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne">
                    What services do you offer?
                </button>
            </h2>
            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We provide a wide range of construction and waterproofing solutions, including residential and commercial construction, foundation reinforcement, roofing solutions, and more.
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo">
                    Do you offer free site visits?
                </button>
            </h2>
            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes! We offer free site visits within Nairobi and its surrounding areas. For projects outside these locations, a small consultation fee may apply.
                </div>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree">
                    How long does a typical project take?
                </button>
            </h2>
            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Project duration varies depending on the scope and size. Residential projects typically take 3-6 months, while larger commercial projects may take up to a year.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical & Warranty FAQs -->
<section class="container my-5">
    <h2 class="text-center section-title">Technical & Warranty Questions</h2>
    <div class="accordion" id="faqAccordion2">

        <!-- Question 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour">
                    What warranty do you offer?
                </button>
            </h2>
            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion2">
                <div class="accordion-body">
                    We offer a **10-year warranty** on structural construction and a **5-year waterproofing guarantee** to ensure quality and durability.
                </div>
            </div>
        </div>

        <!-- Question 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive">
                    What materials do you use for waterproofing?
                </button>
            </h2>
            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion2">
                <div class="accordion-body">
                    We use **high-quality waterproofing membranes, bitumen coatings, and cementitious waterproofing materials** for maximum durability and effectiveness.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="container text-center my-5">
    <h2 class="section-title">Still Have Questions?</h2>
    <p>Contact us today and our team will be happy to assist you.</p>
    <a href="contact.php" class="btn btn-primary"><i class="fa fa-envelope"></i> Contact Us</a>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include 'includes/footer.php'; ?>
