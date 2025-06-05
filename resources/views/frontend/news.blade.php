@extends('layout.frontend')

@section('contentPage')

    <x-menu_navigation />

    <!-- Hero Section -->
    <div class="hero-area hero-bg" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle" style="color: #ffffff;">Obtenez une assistance </p>
                            <h1 style="color: #ffffff;">Actualités</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
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
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Précédent</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Suivant</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

@endsection
