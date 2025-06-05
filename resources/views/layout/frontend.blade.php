<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Pharma - Votre pharmacie en ligne de confiance. Médicaments de qualité, livraison rapide et conseils professionnels.">
    <meta name="keywords" content="pharmacie, médicaments, santé, bien-être, livraison, consultation">
    <meta name="author" content="Web Pharma">

    <!-- Title -->
    <title>@yield('title', 'Web Pharma - Notre Action la Disponibilité')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <!-- Custom Pharmacy Theme CSS -->
    <style>
        :root {
            --primary-green: #2c5530;
            --primary-red: #dc3545;
            --secondary-blue: #007bff;
            --light-gray: #f8f9fa;
            --dark-gray: #6c757d;
            --white: #ffffff;
            --black: #212529;
        }

        body {
            font-family: 'Poppins', 'Open Sans', sans-serif;
            color: var(--black);
            line-height: 1.6;
        }

        .main-color {
            color: var(--primary-green) !important;
        }

        .secondary-color {
            color: var(--primary-red) !important;
        }

        .accent-color {
            color: var(--secondary-blue) !important;
        }

        .bg-main {
            background-color: var(--primary-green) !important;
        }

        .bg-secondary {
            background-color: var(--primary-red) !important;
        }

        .bg-accent {
            background-color: var(--secondary-blue) !important;
        }

        .btn-pharmacy {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            color: var(--white);
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-pharmacy:hover {
            background-color: #1e3d22;
            border-color: #1e3d22;
            color: var(--white);
            transform: translateY(-2px);
        }

        .btn-pharmacy-outline {
            background-color: transparent;
            border: 2px solid var(--primary-red);
            color: var(--primary-red);
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-pharmacy-outline:hover {
            background-color: var(--primary-red);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Header Styles - conserve votre structure existante */
        .top-header-area {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 999;
        }

        /* Navigation Styles - améliore votre menu existant */
        .main-menu ul li a {
            color: var(--primary-green);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .main-menu ul li a:hover,
        .main-menu ul li.current-list-item a {
            color: var(--primary-red);
        }

        /* Product Cards - compatible avec vos produits existants */
        .single-product-item {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .single-product-item:hover {
            box-shadow: 0 5px 20px rgba(44, 85, 48, 0.1);
            transform: translateY(-5px);
        }

        .cart-btn {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            color: var(--white);
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .cart-btn:hover {
            background-color: #1e3d22;
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Footer Styles - améliore votre footer existant */
        .footer-area {
            background-color: var(--primary-green);
            color: var(--white);
            padding: 60px 0 30px;
        }

        .footer-area .widget-title {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .footer-area a {
            color: #cccccc;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-area a:hover {
            color: var(--primary-red);
            text-decoration: none;
        }

        .footer-area ul {
            list-style: none;
            padding: 0;
        }

        .footer-area ul li {
            margin-bottom: 8px;
        }

        .footer-area ul li a {
            display: block;
            padding: 5px 0;
        }

        /* Social Icons - améliore vos icônes existantes */
        .social-icons ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 10px;
        }

        .social-icons ul li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .social-icons ul li a:hover {
            background-color: var(--primary-red);
            transform: translateY(-2px);
        }

        /* Copyright - améliore votre section copyright */
        .copyright {
            background-color: #1e3d22;
            color: var(--white);
            padding: 20px 0;
        }

        .copyright p {
            margin: 0;
        }

        .copyright a {
            color: #cccccc;
            text-decoration: none;
        }

        .copyright a:hover {
            color: var(--primary-red);
        }

        /* Subscribe Form - améliore votre formulaire d'abonnement */
        .subscribe form {
            display: flex;
            margin-top: 15px;
        }

        .subscribe input[type="email"] {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .subscribe button {
            padding: 12px 15px;
            background-color: var(--primary-red);
            border: none;
            border-radius: 0 5px 5px 0;
            color: var(--white);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .subscribe button:hover {
            background-color: #c82333;
        }

        /* Loading Animation */
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loader-inner {
            width: 60px;
            height: 60px;
            border: 4px solid var(--light-gray);
            border-top: 4px solid var(--primary-green);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .social-icons {
                text-align: center;
                margin-top: 20px;
            }

            .social-icons ul {
                justify-content: center;
            }

            .btn-pharmacy,
            .btn-pharmacy-outline {
                padding: 8px 15px;
                font-size: 14px;
            }
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary-green);
            color: var(--white);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .back-to-top:hover {
            background-color: #1e3d22;
            color: var(--white);
            text-decoration: none;
            transform: translateY(-2px);
        }
    </style>

    @yield('styles')
</head>

<body>
    <!-- PreLoader -->
    <div class="loader">
        <div class="loader-inner"></div>
    </div>
    <!-- PreLoader Ends -->

    @yield('contentPage')

    <!-- Footer - conserve votre structure existante avec améliorations -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">Qui Sommes Nous?</h2>
                        <p>Web Pharma est votre pharmacie de confiance en ligne. Nous nous engageons à fournir des médicaments de qualité et des conseils professionnels pour votre santé et votre bien-être.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Contact</h2>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Bobo-Dioulasso</li>
                            <li><i class="fas fa-envelope"></i> iouedraogo@wedpharma23.com</li>
                            <li><i class="fas fa-phone"></i> +226 75 04 72 07</li>
                            <li><i class="fas fa-phone"></i> +226 70 81 91 21</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Liens rapides</h2>
                        <ul>
                            <li><a href="{{route('frontend.index')}}">Accueil</a></li>
                            <li><a href="{{route('frontend.about')}}">À Propos</a></li>
                            <li><a href="{{route('frontend.services')}}">Nos Services</a></li>
                            <li><a href="{{route('frontend.news')}}">Actualités</a></li>
                            <li><a href="{{route('frontend.contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Newsletter</h2>
                        <p>Abonnez-vous à notre newsletter pour recevoir les dernières actualités et offres spéciales.</p>
                        <form action="{{route('frontend.index')}}">
                            <input type="email" placeholder="Votre email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Copyright - conserve votre structure existante -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; <a href="{{route('frontend.index')}}">Web Pharma</a>, Tous droits réservés. | Notre Action la Disponibilité
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- jQuery - conserve vos scripts existants -->
    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Count Down -->
    <script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Mean Menu -->
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- Sticker JS -->
    <script src="{{asset('assets/js/sticker.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Custom Scripts -->
    <script>
        $(document).ready(function() {
            // Hide loader when page is loaded
            $(window).on('load', function() {
                $('.loader').fadeOut('slow');
            });

            // Smooth scrolling for anchor links
            $('a[href*="#"]').on('click', function(e) {
                e.preventDefault();
                var target = $(this).attr('href');
                if ($(target).length) {
                    $('html, body').animate({
                        scrollTop: $(target).offset().top
                    }, 500, 'linear');
                }
            });

            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
                return false;
            });

            // Product hover effects
            $('.single-product-item').hover(
                function() {
                    $(this).addClass('animated pulse');
                },
                function() {
                    $(this).removeClass('animated pulse');
                }
            );

            // Newsletter form submission
            $('.subscribe form').on('submit', function(e) {
                e.preventDefault();
                var email = $(this).find('input[type="email"]').val();
                if (email) {
                    alert('Merci pour votre abonnement à notre newsletter !');
                    $(this).find('input[type="email"]').val('');
                } else {
                    alert('Veuillez saisir une adresse email valide.');
                }
            });

            // Social icons hover effects
            $('.social-icons ul li a').hover(
                function() {
                    $(this).addClass('animated bounceIn');
                },
                function() {
                    $(this).removeClass('animated bounceIn');
                }
            );
        });
    </script>

    @yield('scripts')
</body>
</html>
