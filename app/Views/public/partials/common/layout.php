<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= esc($meta_title ?? 'KT-NEXUS TECHNOLOGIES') ?></title>
<meta name="description" content="<?= esc($meta_description ?? 'IT Solutions & Software Development') ?>">
<meta name="keywords" content="<?= esc($meta_keywords ?? 'IT solutions, software development') ?>">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --text-color: #334155;
            --text-light: #64748b;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
        }
        
        /* Navbar Styles */
        .navbar {
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        
        .navbar-brand {
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--primary-color);
        }
        
        .navbar-brand span {
            color: var(--dark-color);
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 0.5rem;
            color: var(--text-color);
        }
        
        .nav-link:hover {
            color: var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.5rem 1.5rem;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-weight: 800;
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        /* Quick Links Cards */
        .quick-links {
            margin-top: -4rem;
            position: relative;
            z-index: 2;
        }
        
        .quick-link-card {
            background: white;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .quick-link-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .quick-link-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        /* About Section */
        .about-section {
            padding: 6rem 0;
            background-color: white;
        }
        
        .section-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
        }
        
        .section-subtitle {
            color: var(--text-light);
            margin-bottom: 3rem;
            max-width: 700px;
        }
        
        .about-img {
            border-radius: 1rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        /* Portfolio Section */
        .portfolio-section {
            padding: 6rem 0;
            background-color: #f8fafc;
        }
        
        .portfolio-card {
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            background: white;
        }
        
        .portfolio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .portfolio-category {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }
        
        /* Testimonial Section */
        .testimonial-section {
            padding: 6rem 0;
            background-color: white;
        }
        
        .testimonial-card {
            background: #f8fafc;
            border-radius: 0.75rem;
            padding: 2rem;
            margin: 1rem;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            color: var(--text-color);
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .testimonial-role {
            color: var(--text-light);
            font-size: 0.875rem;
        }
        
        /* Team Section */
        .team-section {
            padding: 6rem 0;
            background-color: #f8fafc;
        }
        
        .team-card {
            background: white;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .team-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        
        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .team-social a {
            color: var(--text-light);
            transition: all 0.3s ease;
        }
        
        .team-social a:hover {
            color: var(--primary-color);
        }
        
        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
        }
        
        .cta-title {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .cta-subtitle {
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn-light {
            padding: 0.75rem 2rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        /* Contact Section */
        .contact-section {
            padding: 6rem 0;
            background-color: white;
        }
        
        .contact-card {
            background: #f8fafc;
            border-radius: 0.75rem;
            padding: 2rem;
            height: 100%;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            color: #94a3b8;
            font-size: 0.875rem;
        }
        
        /* About Page */
        .page-header {
            padding: 5rem 0 3rem;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            text-align: center;
        }
        
        .breadcrumb {
            justify-content: center;
            background: transparent;
        }
        
        /* Portfolio Page */
        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }
        
        .portfolio-filter button {
            background: transparent;
            border: none;
            padding: 0.5rem 1.5rem;
            margin: 0 0.5rem;
            color: var(--text-light);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .portfolio-filter button.active, 
        .portfolio-filter button:hover {
            color: var(--primary-color);
        }
        
        /* Portfolio Details */
        .portfolio-details-img {
            border-radius: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .portfolio-details-info {
            background: #f8fafc;
            border-radius: 0.75rem;
            padding: 2rem;
        }
        
        .info-item {
            margin-bottom: 1rem;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        /* Login Page */
        .login-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: #f8fafc;
        }
        
        .login-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .login-logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .form-control {
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
        }
        
        /* Terms Page */
        .terms-section {
            padding: 5rem 0;
        }
        
        .terms-content {
            background: white;
            border-radius: 1rem;
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        /* Animations */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
        
        .slide-up {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 1s ease forwards;
        }
        
        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .quick-links {
                margin-top: 2rem;
            }
            
            .quick-link-card {
                margin-bottom: 1.5rem;
            }
        }
        /* Pagination styling to match your design */
.pagination {
    justify-content: center;
    margin-top: 2rem;
}

.pagination .page-item.active .page-link {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
}

.pagination .page-link {
    color: #0d6efd;
    margin: 0 5px;
    border-radius: 4px;
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
}
    </style>
</head>
<body>
    <!-- General Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span>KT-NEXUS</span> TECHNOLOGIES
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about_us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="/auth">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Pages will be rendered here -->
    <main>
        <?=$this->renderSection("content")?> 
    </main>

    <!-- General Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-title">KT-NEXUS TECHNOLOGIES</h3>
                    <p>Delivering innovative IT solutions since 2018. We help businesses transform through custom software, web development, and database management.</p>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about_us">About Us</a></li>
                        <li><a href="/portfolio">Portfolio</a></li>
                        <li><a href="/#team">Our Team</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-title">Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Custom Software</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Database Management</a></li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">Maintenance</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-title">Newsletter</h3>
                    <p>Subscribe to our newsletter for the latest updates and insights.</p>
                    <form class="mt-4">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" aria-label="Your Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright text-center">
                <p>&copy; 2023 KT-NEXUS TECHNOLOGIES. All Rights Reserved. | <a href="terms.html" class="text-decoration-none">Terms of Service</a> | <a href="#" class="text-decoration-none">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary btn-lg back-to-top" style="position: fixed; bottom: 20px; right: 20px; display: none;">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Animate on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom Script -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Initialize Owl Carousel
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive:{
                    768:{
                        items:2
                    },
                    992:{
                        items:3
                    }
                }
            });
            
            // Back to top button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });
            
            $('.back-to-top').click(function(){
                $('html, body').animate({scrollTop: 0}, 1500);
                return false;
            });
            
            // // Contact form submission
            // $('#contactForm').submit(function(e){
            //     e.preventDefault();
                
            //     // Here you would typically send the form data to your server
            //     // For demonstration, we'll show a success message
                
            //     Swal.fire({
            //         title: 'Message Sent!',
            //         text: 'Thank you for contacting us. We will get back to you soon.',
            //         icon: 'success',
            //         confirmButtonText: 'OK'
            //     });
                
            //     // Reset the form
            //     this.reset();
            // });
            
            // Portfolio filter (for portfolio page)
            $('.portfolio-filter button').click(function(){
                $('.portfolio-filter button').removeClass('active');
                $(this).addClass('active');
                
                // Here you would filter the portfolio items
                // This is just a demo - in a real implementation you would show/hide items
            });
        });
    </script>
</body>
</html>