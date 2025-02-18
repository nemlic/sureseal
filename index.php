<?php include 'includes/header.php'; ?>

<!-- Hero Section Carousel -->
<section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <!-- Static First Slide -->
        <div class="carousel-item active" style="background-image: url('images/construction homebg.webp'); background-size: cover; background-position: center; min-height: 80vh;">
            <div class="hero-slide text-white text-center d-flex align-items-center justify-content-center">
                <div class="container">
                    <h1 class="fw-bold">Building the Future, Restoring the Past</h1>
                    <p class="lead">Innovative construction and waterproofing solutions for residential & commercial projects.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg mt-3">Get a Free Quote</a>
                </div>
            </div>
        </div>

        <!-- Dynamic Slides -->
        <?php
        $slides = [
            ["Flat Roof Waterproofing", "Protect your flat roof with advanced waterproofing techniques.", "services.php#waterproofing", "Learn More", "images/flatroof.jpg"],
            ["Floating Services & Landscaping", "Transform spaces with our high-quality floating services and landscaping solutions.", "services.php#landscaping", "Explore Services", "images/floating_machine.jpeg"],
            ["Structural Repairs & Reinforcement", "Strengthen and extend the life of your buildings with expert repair services.", "services.php#repairs", "Get a Consultation", "images/etienne-girardet-sgYamIzhAhg-unsplash.jpg"],
            ["Basement Waterproofing", "Prevent water damage and leakage in your basement with our proven solutions.", "services.php#basement", "See Solutions", "images/basement.jpg"]
        ];

        foreach ($slides as $slide) {
            echo "<div class='carousel-item' style='background-image: url({$slide[4]}); background-size: cover; background-position: center; min-height: 80vh;'>
                    <div class='hero-slide text-white text-center d-flex align-items-center justify-content-center'>
                        <div class='container'>
                            <h1 class='fw-bold'>{$slide[0]}</h1>
                            <p class='lead'>{$slide[1]}</p>
                            <a href='{$slide[2]}' class='btn btn-primary btn-lg mt-3'>{$slide[3]}</a>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</section>

<!-- Our Solutions -->
<section id="solutions" class="py-5 text-center bg-dark">
    <div class="container">
        <h2 class="text-warning">Our Solutions</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <h4 class="text-light">General Construction</h4>
                <p class="text-muted">We provide quality construction services for residential and commercial buildings.</p>
            </div>
            <div class="col-md-4">
                <h4 class="text-light">Waterproofing</h4>
                <p class="text-muted">Expert waterproofing solutions to protect your structures from moisture damage.</p>
            </div>
            <div class="col-md-4">
                <h4 class="text-light">Renovations & Remodeling</h4>
                <p class="text-muted">Upgrade and modernize your space with our professional renovation services.</p>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews -->
<section id="reviews" class="py-5 text-center bg-image">
    <div class="container">
        <h2>What Our Clients Say</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="review-card p-3 border rounded shadow-sm">
                    <h5>Jane Doe</h5>
                    <p class="text-muted">★★★★★</p>
                    <p>"Sure Seal delivered excellent waterproofing services. Highly professional and efficient!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card p-3 border rounded shadow-sm">
                    <h5>John Smith</h5>
                    <p class="text-muted">★★★★★</p>
                    <p>"Their structural repairs were outstanding. I highly recommend their expertise!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card p-3 border rounded shadow-sm">
                    <h5>Emily Johnson</h5>
                    <p class="text-muted">★★★★★</p>
                    <p>"Great customer service and quality work. My home renovation was a success!"</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action -->
<section id="cta" class="bg-dark text-white text-center py-5">
    <div class="container">
        <h2 class="fw-bold">Ready to Start Your Project?</h2>
        <p class="lead">Get in touch with our team for expert construction and waterproofing solutions.</p>
        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Request a Free Consultation</a>
    </div>
</section>

<!-- Our Partners -->
<section id="partners" class="bg-light py-5 text-center">
    <div class="container">
        <h2>Our Trusted Partners</h2>
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $partners = [
                    ["drfix it logo.jpeg", "Dr Fix It"],
                    ["izomix.jpeg", "Izo Mix"],
                    ["insutech.png", "Insutech"],
                    ["mapei.png", "Mapei"],
                    ["Quilosa Professional Logo PNG Vector (AI) Free Download.jpeg", "Quilosa"],
                    ["Fosroc.png", "Fosroc"],
                    ["sika.webp", "Sika"]
                ];

                foreach (array_chunk($partners, 2) as $index => $chunk) {
                    $activeClass = ($index === 0) ? 'active' : '';
                    echo "<div class='carousel-item $activeClass'>
                            <div class='row justify-content-center'>";
                    foreach ($chunk as $partner) {
                        echo "<div class='col-md-4'>
                                <img src='images/{$partner[0]}' class='img-fluid' alt='{$partner[1]}'>
                              </div>";
                    }
                    echo "</div></div>";
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<a id="quote-btn" href="contact.php" class="btn btn-warning btn-lg d-block text-center my-4">Get a Free Quote</a>

<?php include 'includes/footer.php'; ?>
