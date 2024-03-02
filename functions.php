<!-- slider function -->
<?php
function generateCarousel($carousel_items) {
    ob_start(); // Start output buffering
?>
    <section class="slider_section">
        <div class="dot_design">
            <img src="images/dots.png" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($carousel_items as $key => $item) {
                    $active_class = ($key == 0) ? 'active' : '';
                ?>
                    <div class="carousel-item <?php echo $active_class; ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <div class="play_btn">
                                            <button>
                                                <i class="fa fa-play" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <h1><?php echo $item['title']; ?></h1>
                                        <p><?php echo $item['description']; ?></p>
                                        <a href=""><?php echo $item['button_text']; ?></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="<?php echo $item['image']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <img src="images/prev.png" alt="">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <img src="images/next.png" alt="">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean(); 
}
?>



<!-- Our Doctors function -->

<?php
function generateDoctorSection($doctors) {
    ob_start(); 
?>
    <section class="team_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our <span>Doctors</span></h2>
            </div>
            <div class="carousel-wrap">
                <div class="owl-carousel team_carousel">
                    <?php foreach ($doctors as $doctor) : ?>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="<?php echo $doctor['image']; ?>" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5><?php echo $doctor['name']; ?></h5>
                                    <h6><?php echo $doctor['qualification']; ?></h6>
                                    <div class="social_box">
                                        <a href="<?php echo $doctor['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="<?php echo $doctor['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="<?php echo $doctor['linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="<?php echo $doctor['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean(); 
}
?>

<!-- Testimonials function -->
<?php
function generateTestimonialSection($testimonials) {
    ob_start(); 
?>
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2><span>Testimonial</span></h2>
            </div>
        </div>
        <div class="container px-0">
            <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($testimonials as $key => $testimonial) : ?>
                        <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
                            <div class="box">
                                <div class="client_info">
                                    <div class="client_name">
                                        <h5><?php echo $testimonial['name']; ?></h5>
                                        <h6><?php echo $testimonial['position']; ?></h6>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p><?php echo $testimonial['content']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean(); 
}
?>
