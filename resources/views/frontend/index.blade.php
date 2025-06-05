@extends('layout.frontend')

@section('contentPage')

    <x-menu_navigation />
		<!-- home page slider -->
	<div class="homepage-slider" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);">
		<!-- single home slider -->
		<div class="homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle" style="color: #ffffff;">Santé & Bien-être</p>
								<h1>Médicaments de Qualité</h1>
								<div class="hero-btns">
									<a href="{{route('frontend.shop')}}" class="boxed-btn" style="background-color: #003366; border-color: #003366;">Notre Pharmacie</a>
									<a href="{{route('frontend.contact')}}" class="bordered-btn" style="border-color: #dc3545; color: #dc3545;">Nous Contacter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="homepage-bg-2" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle" style="color: #ffffff;">Disponible 24h/24</p>
								<h1>Votre Santé Notre Priorité</h1>
								<div class="hero-btns">
									<a href="{{route('frontend.shop')}}" class="boxed-btn" style="background-color: #003366; border-color: #003366;">Voir Nos Produits</a>
									<a href="{{route('frontend.contact')}}" class="bordered-btn" style="border-color: #dc3545; color: #dc3545;">Nous Contacter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="homepage-bg-3" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle" style="color: #dc3545;">Promotions en cours !</p>
								<h1>Remises Spéciales</h1>
								<div class="hero-btns">
									<a href="{{route('frontend.offres')}}" class="boxed-btn" style="background-color: #dc3545; border-color: #dc3545;">Voir Offres</a>
									<a href="{{route('frontend.contact')}}" class="bordered-btn" style="border-color: #ffffff; color: #ffffff;">Nous Contacter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	{{-- <!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon" style="color: #2c5530;">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3 style="color: #2c5530;">Livraison Gratuite</h3>
							<p>Pour commandes de plus de 50000 FCFA</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon" style="color: #007bff;">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3 style="color: #007bff;">Support 24/7</h3>
							<p>Assistance pharmaceutique continue</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon" style="color: #dc3545;">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3 style="color: #dc3545;">Remboursement</h3>
							<p>Retour sous 7 jours !</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end features list section --> --}}

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			 
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span style="color: #2c5530;">Nos</span> Produits</h3>
						<p>Découvrez notre large gamme de médicaments et produits de santé de qualité.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="#"><img src="{{asset('assets/img/img_pharma/image_3.jpg')}}" alt="" ></a>
						</div>
						<h3>Paracétamol</h3>
						<p class="product-price"><span>Boîte</span> 1000 FCFA </p>
						<a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="#"><img src="{{asset('assets/img/img_pharma/image_1.jpg')}}" alt=""></a>
						</div>
						<h3>Vitamine C</h3>
						<p class="product-price"><span>Boîte</span> 1800 FCFA </p>
						<a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="#"><img src="{{asset('assets/img/img_pharma/image_2.jpg')}}" alt=""></a>
						</div>
						<h3>Aspirine</h3>
						<p class="product-price"><span>Boîte</span> 900 FCFA </p>
						<a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
					</div>
				</div>
			</div>
            <div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{route('frontend.shop')}}" class="boxed-btn" style="background-color: #2c5530; border-color: #2c5530;">Plus de produits</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	{{-- <!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100" style="background-color: #f8f9fa;">
		<div class="container">
			<div class="row clearfix">
				<!--Image Column-->
				<div class="image-column col-lg-6">
					<div class="image">
						<div class="price-box" style="background-color: #dc3545;">
							<div class="inner-price">
								<span class="price" style="color: white;">
									<strong>25%</strong> <br> de réduction
								</span>
							</div>
						</div>
						<img src="assets/img/a.jpg" alt="">
					</div>
				</div>
				<!--Content Column-->
				<div class="content-column col-lg-6">
					<h3><span style="color: #dc3545;">Offre</span> du mois</h3>
					<h4>Compléments Alimentaires</h4>
					<div class="text">Profitez de nos offres spéciales sur une large gamme de compléments alimentaires et vitamines. Qualité garantie et prix attractifs pour votre bien-être quotidien.</div>
					<!--Countdown Timer-->
					<div class="time-counter"><div class="time-countdown clearfix" data-countdown="2025/12/31"><div class="counter-column"><div class="inner"><span class="count">00</span>Jours</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Heures</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Min</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Sec</div></div></div></div>
					<a href="cart.html" class="cart-btn mt-3" style="background-color: #2c5530; border-color: #2c5530;"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end cart banner section --> --}}

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avatars/avatar_3.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3 style="color: #2c5530;">Mariam Barro <span style="color: #1e3a8a;">Cliente fidèle</span></h3>
								<p class="testimonial-body">
									"Excellent service ! Les pharmaciens sont très professionnels et toujours disponibles pour répondre à mes questions. Livraison rapide et produits de qualité."
								</p>
								<div class="last-icon" style="color: #dc3545;">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avatars/avatar_3.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3 style="color: #2c5530;">Yassia Porgo <span style="color: #1e3a8a;">Client régulier</span></h3>
								<p class="testimonial-body">
									"Je recommande vivement Web Pharma. Interface facile à utiliser, conseils pertinents et prix compétitifs. Un service client exemplaire."
								</p>
								<div class="last-icon" style="color: #dc3545;">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{asset('assets/img/avatars/avatar_1.jpg')}}" alt="">
							</div>
							<div class="client-meta">
								<h3 style="color: #2c5530;">Soufiane Camara <span style="color: #1e3a8a;">Client satisfait</span></h3>
								<p class="testimonial-body">
									"Très pratique pour commander mes médicaments en ligne. Livraison discrète et rapide. Je fais confiance à cette pharmacie depuis des années."
								</p>
								<div class="last-icon" style="color: #dc3545;">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
                        <img src="{{asset('assets/img/img_pharma/image_1.jpg')}}" alt="pharma">
                    </div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub" style="color: #1e3a8a;">Depuis 2016</p>
						<h2>Nous sommes <span style="color: #2c5530;">Web Pharma</span></h2>
						<p>Notre société WED-PHARMA est une entreprise ambitieuse qui vise à devenir un acteur majeur dans le secteur pharmaceutique au Burkina. Nous sommes convaincus que notre expertise, notre savoir-faire et notre engagement envers nos clients seront des atouts majeurs pour atteindre notre succès.</p>

						<a href="{{route('frontend.about')}}" class="boxed-btn mt-4" style="background-color: #2c5530; border-color: #2c5530;">En savoir plus</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	{{-- <!-- shop banner -->
	<section class="shop-banner" style="background-color: #2c5530;">
		<div class="container">
			<h3 style="color: white;">Promotions de saison ! <br> avec de <span style="color: #dc3545;">Gros Rabais...</span></h3>
			<div class="sale-percent"><span style="color: white;">Promo ! <br> Jusqu'à</span><span style="color: #dc3545;">30%</span> <span style="color: white;">de remise</span></div>
			<a href="shop.html" class="cart-btn btn-lg" style="background-color: #dc3545; border-color: #dc3545;">Acheter Maintenant</a>
		</div>
	</section>
	<!-- end shop banner --> --}}

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span style="color: #2c5530;">Nos</span> Actualités</h3>
						<p>Restez informés des dernières nouveautés et conseils santé de notre équipe de professionnels.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="#"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="#" style="color: #2c5530;">Les bienfaits des vitamines en hiver</a></h3>
							<p class="blog-meta">
								<span class="author" style="color: #1e3a8a;"><i class="fas fa-user"></i> Dr. Pharmacien</span>
								<span class="date" style="color: #dc3545;"><i class="fas fa-calendar"></i> 15 Mai, 2025</span>
							</p>
							<p class="excerpt">Découvrez comment renforcer votre système immunitaire pendant la saison froide avec les bons compléments.</p>
							<a href="#" class="read-more-btn" style="color: #2c5530;">lire plus <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="#"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="#" style="color: #2c5530;">Conseils pour bien prendre ses médicaments</a></h3>
							<p class="blog-meta">
								<span class="author" style="color: #1e3a8a;"><i class="fas fa-user"></i> Dr. Pharmacien</span>
								<span class="date" style="color: #dc3545;"><i class="fas fa-calendar"></i> 12 Mai, 2025</span>
							</p>
							<p class="excerpt">Guide pratique pour optimiser l'efficacité de vos traitements et éviter les interactions médicamenteuses.</p>
							<a href="#" class="read-more-btn" style="color: #2c5530;">lire plus <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="#"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="#" style="color: #2c5530;">Nouveautés cosmétiques et soins</a></h3>
							<p class="blog-meta">
								<span class="author" style="color: #1e3a8a;"><i class="fas fa-user"></i> Dr. Pharmacien</span>
								<span class="date" style="color: #dc3545;"><i class="fas fa-calendar"></i> 10 Mai, 2025</span>
							</p>
							<p class="excerpt">Découvrez notre nouvelle gamme de produits cosmétiques et de soins pour votre beauté au quotidien.</p>
							<a href="#" class="read-more-btn" style="color: #2c5530;">lire plus <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{route('frontend.news')}}" class="boxed-btn" style="background-color: #2c5530; border-color: #2c5530;">Plus d'Actualités</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

@endsection
