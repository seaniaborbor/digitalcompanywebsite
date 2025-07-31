<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('content')?>
        <!-- Default content is the landing page -->
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 hero-content" data-aos="fade-right">
                        <h1 class="hero-title">Innovative IT Solutions for Your Business</h1>
                        <p class="hero-subtitle">We deliver cutting-edge software, websites, and database management solutions tailored to your needs since 2018.</p>
                        <div class="d-flex gap-3">
                            <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
                            <a href="/portfolio" class="btn btn-outline-primary btn-lg">Our Work</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="/public_assets/img/home/hero.png" alt="Hero Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Links Section -->
        <section class="container quick-links">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="quick-link-card">
                        <div class="quick-link-icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h3>Custom Software</h3>
                        <p>Tailored solutions designed to streamline your business processes and improve efficiency.</p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">Learn more →</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="quick-link-card">
                        <div class="quick-link-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Modern, responsive websites that engage your audience and drive business growth.</p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">Learn more →</a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="quick-link-card">
                        <div class="quick-link-icon">
                            <i class="bi bi-database"></i>
                        </div>
                        <h3>DB Management</h3>
                        <p>Expert database solutions to organize, secure, and optimize your critical data.</p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">Learn more →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="/public_assets/img/home/aaaaaaaaaaaa.jpg" alt="About Us" class="img-fluid w-100 about-img">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h2 class="section-title">About KT-NEXUS Technologies</h2>
                        <p class="section-subtitle">Since 2018, we've been helping businesses transform through technology.</p>
                        <p>KT-NEXUS TECHNOLOGIES is a leading IT solutions provider specializing in custom software development, web applications, and database management systems. Our team of experienced professionals is dedicated to delivering high-quality solutions that drive business growth and operational efficiency.</p>
                        <p>We pride ourselves on our client-centric approach, ensuring that every solution we deliver is tailored to meet your specific business needs and objectives.</p>
                        <a href="/about_us" class="btn btn-primary mt-3">Read More About Us</a>
                    </div>
                </div>
            </div>
        </section>

      <!-- Portfolio Section -->
<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Our Portfolio</h2>
            <p class="section-subtitle mx-auto">Explore some of our recent projects and see how we've helped our clients succeed.</p>
        </div>
        <div class="row g-4">
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $index => $project): ?>
                    <?php 
                    // Clean and prepare the description
                    $description = html_entity_decode($project['description']);
                    $description = strip_tags($description); // Remove all HTML tags
                    $description = trim($description); // Remove whitespace
                    ?>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <div class="portfolio-card h-100">
                            <?php if (!empty($project['featured_image'])): ?>
                                <img src="<?= base_url('uploads/portfolio/' . esc($project['featured_image'])) ?>" alt="<?= esc($project['title']) ?>" class="portfolio-img">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/400x300" alt="<?= esc($project['title']) ?>" class="portfolio-img">
                            <?php endif; ?>
                            <div class="p-4">
                                <span class="portfolio-category"><?= esc($project['category']) ?></span>
                                <h3><?= esc($project['title']) ?></h3>
                                <p><?= esc(character_limiter($description, 100)) ?></p>
                                <a href="<?= base_url('portfolio/' . esc($project['slug'])) ?>" class="text-primary text-decoration-none fw-bold">View Project →</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No projects found.</p>
                </div>
            <?php endif; ?>
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="<?= base_url('portfolio') ?>" class="btn btn-outline-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle mx-auto">Hear from businesses that have transformed with our solutions.</p>
        </div>
        <div class="owl-carousel owl-theme" data-aos="fade-up">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <p class="testimonial-text">"KT-NEXUS built our charity organization website with exceptional attention to our mission's needs. The platform has helped us reach more donors and streamline our operations."</p>
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('public_assets/img/team/minister.jpeg') ?>" alt="Min. Fomba Kanneh" class="rounded-circle me-3" style="width:60px !important; height:60px !important">
                    <div>
                        <h5 class="testimonial-author mb-0">Min. Fomba Kanneh</h5>
                        <p class="testimonial-role mb-0">Assistant Minister, Ministry of Internal Affairs, Liberia</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <p class="testimonial-text">"The university website and student management system developed by KT-NEXUS has revolutionized how we serve our students. The system is robust, user-friendly, and exceeded our expectations."</p>
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('public_assets/img/team/sonii.jpg') ?>" alt="Prof. Ansu Sonii" class="rounded-circle me-3" style="width:60px !important; height:60px !important">
                    <div>
                        <h5 class="testimonial-author mb-0">Prof. Ansu Sonii</h5>
                        <p class="testimonial-role mb-0">Former Minister of Education of Liberia</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <p class="testimonial-text">"Our e-commerce platform built by KT-NEXUS has increased our online sales by 300%. Their team understood our business needs perfectly and delivered a flawless solution."</p>
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('public_assets/img/team/little.jpg') ?>" alt="Nathaniel Gibson" class="rounded-circle me-3" style="width:60px !important; height:60px !important">
                    <div>
                        <h5 class="testimonial-author mb-0">Nathaniel Gibson</h5>
                        <p class="testimonial-role mb-0">Entrepreneur</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <p class="testimonial-text">"The school website and management software transformed our administrative processes. KT-NEXUS provided excellent support throughout implementation and beyond."</p>
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('public_assets/img/team/bedell.jpg') ?>" alt="Christiana Bedell" class="rounded-circle me-3" style="width:60px !important; height:60px !important">
                    <div>
                        <h5 class="testimonial-author mb-0">Christiana Bedell</h5>
                        <p class="testimonial-role mb-0">Preparatress</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
      <!-- Team Section -->
<section class="team-section" id="team">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title">Meet Our Team</h2>
            <p class="section-subtitle mx-auto">The talented professionals behind KT-NEXUS TECHNOLOGIES</p>
        </div>
        <div class="row g-4">
            <?php if (!empty($team)): ?>
                <?php foreach ($team as $index => $member): ?>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <div class="team-card">
                            <?php if (!empty($member['image'])): ?>
                                <img src="<?= base_url('public_assets/img/team/' . esc($member['image'])) ?>" alt="<?= esc($member['name']) ?>" class="team-img">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/400x300" alt="<?= esc($member['name']) ?>" class="team-img">
                            <?php endif; ?>
                            <div class="p-4 text-center">
                                <h3><?= esc($member['name']) ?></h3>
                                <p class="text-primary"><?= esc($member['position']) ?></p>
                                <p><?= esc(character_limiter($member['bio'], 100)) ?></p>
                                <div class="team-social">
                                    <?php if (!empty($member['linkedin_url'])): ?>
                                        <a href="<?= esc($member['linkedin_url']) ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($member['twitter_url'])): ?>
                                        <a href="<?= esc($member['twitter_url']) ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($member['github_url'])): ?>
                                        <a href="<?= esc($member['github_url']) ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-github"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>Our team profiles are coming soon.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div data-aos="fade-up">
                    <h2 class="cta-title">Ready to Transform Your Business?</h2>
                    <p class="cta-subtitle">Let's discuss how we can help you achieve your goals with our innovative IT solutions.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#contact" class="btn btn-light btn-lg">Get in Touch</a>
                        <a href="tel:+231776077575" class="btn btn-outline-light btn-lg">Call Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                        <h2 class="section-title">Contact Us</h2>
                        <p class="section-subtitle">Have a project in mind or questions about our services? We'd love to hear from you.</p>
                        
                        <div class="row mt-5 g-4">
                            <div class="col-md-6">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <h3>Email</h3>
                                    <p>info@ktnexus.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <h3>Phone</h3>
                                    <p>(+231) 776077575</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <h3>Office</h3>
                                    <p>New Georgia Estate, Monrovia, LR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="card shadow-sm">
                            <div class="card-body p-5">
                                <form id="contactForm" method="post" action="<?= site_url('send_message') ?>">
    <?= csrf_field() ?>
    <div class="row">
        <div class="col-md-6 mb-4">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required 
                   value="<?= old('name') ?>">
            <?php if (isset($errors['name'])): ?>
                <small class="text-danger"><?= $errors['name'] ?></small>
            <?php endif; ?>
        </div>
        <div class="col-md-6 mb-4">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required
                   value="<?= old('email') ?>">
            <?php if (isset($errors['email'])): ?>
                <small class="text-danger"><?= $errors['email'] ?></small>
            <?php endif; ?>
        </div>
    </div>
    <div class="mb-4">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" required
               value="<?= old('subject') ?>">
        <?php if (isset($errors['subject'])): ?>
            <small class="text-danger"><?= $errors['subject'] ?></small>
        <?php endif; ?>
    </div>
    <div class="mb-4">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required><?= old('message') ?></textarea>
        <?php if (isset($errors['message'])): ?>
            <small class="text-danger"><?= $errors['message'] ?></small>
        <?php endif; ?>
    </div>
    <button type="submit" class="btn btn-primary">Send Message</button>
    
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success mt-3">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger mt-3">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?=$this->endSection()?>