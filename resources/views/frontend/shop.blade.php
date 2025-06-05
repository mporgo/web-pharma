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
                            <p class="subtitle" style="color: #ffffff;">Obtenez une assistance</p>
                            <h1 style="color: #ffffff;">Boutique</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span style="color: #2c5530;">Nos</span> Produits Pharmaceutiques</h3>
                        <p>Découvrez notre large gamme de médicaments et produits de santé de qualité, disponibles avec ou sans ordonnance.</p>
                    </div>
                </div>
            </div>

            <!-- Product Filters -->
            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters text-center mb-4">
                        <ul style="list-style: none; display: inline-flex; gap: 15px; padding: 0;">
                            <li class="active filter-btn" data-filter="*" style="padding: 8px 20px; background: #2c5530; color: white; border-radius: 25px; cursor: pointer;">Tous</li>
                            <li class="filter-btn" data-filter=".antidouleur" style="padding: 8px 20px; background: #f8f9fa; color: #2c5530; border-radius: 25px; cursor: pointer; border: 1px solid #2c5530;">Antidouleurs</li>
                            <li class="filter-btn" data-filter=".vitamines" style="padding: 8px 20px; background: #f8f9fa; color: #2c5530; border-radius: 25px; cursor: pointer; border: 1px solid #2c5530;">Vitamines</li>
                            <li class="filter-btn" data-filter=".digestif" style="padding: 8px 20px; background: #f8f9fa; color: #2c5530; border-radius: 25px; cursor: pointer; border: 1px solid #2c5530;">Digestifs</li>
                            <li class="filter-btn" data-filter=".ordonnance" style="padding: 8px 20px; background: #f8f9fa; color: #2c5530; border-radius: 25px; cursor: pointer; border: 1px solid #2c5530;">Sur Ordonnance</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row product-lists">
                <!-- Paracétamol -->
                <div class="col-lg-4 col-md-6 text-center antidouleur">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/produit_1.jpg')}}" alt="Paracétamol">
                            </a>
                            <div class="product-badge disponible">DISPONIBLE</div>
                        </div>
                        <h3>Paracétamol 500mg</h3>
                        <p class="product-description">Antalgique et antipyrétique - Boîte de 20 comprimés</p>
                        <p class="product-price"><span>Boîte</span> 1000 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Vitamine C -->
                <div class="col-lg-4 col-md-6 text-center vitamines">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/image_1.jpg')}}" alt="Vitamine C">
                            </a>
                            <div class="product-badge promo">-15%</div>
                        </div>
                        <h3>Vitamine C 1000mg</h3>
                        <p class="product-description">Complément alimentaire - Boîte de 30 comprimés effervescents</p>
                        <p class="product-price">
                            <span class="old-price">2100 FCFA</span>
                            <span>Boîte</span> 1800 FCFA
                        </p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Aspirine -->
                <div class="col-lg-4 col-md-6 text-center antidouleur">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/image_3.jpg')}}" alt="Aspirine">
                            </a>
                            <div class="product-badge bestseller">POPULAIRE</div>
                        </div>
                        <h3>Aspirine 325mg</h3>
                        <p class="product-description">Anti-inflammatoire et antalgique - Boîte de 20 comprimés</p>
                        <p class="product-price"><span>Boîte</span> 900 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Amoxicilline -->
                <div class="col-lg-4 col-md-6 text-center ordonnance">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/produit_1.jpg')}}" alt="Amoxicilline">
                            </a>
                            <div class="product-badge ordonnance-required">ORDONNANCE</div>
                        </div>
                        <h3>Amoxicilline 500mg</h3>
                        <p class="product-description">Antibiotique - Boîte de 12 gélules</p>
                        <p class="product-price"><span>Boîte</span> 2500 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-prescription-bottle"></i> Sur Ordonnance
                        </a>
                    </div>
                </div>

                <!-- Oméprazole -->
                <div class="col-lg-4 col-md-6 text-center digestif">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/image_1.jpg')}}" alt="Oméprazole">
                            </a>
                            <div class="product-badge nouveau">NOUVEAU</div>
                        </div>
                        <h3>Oméprazole 20mg</h3>
                        <p class="product-description">Antiulcéreux - Boîte de 14 gélules gastro-résistantes</p>
                        <p class="product-price"><span>Boîte</span> 3200 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Multivitamines -->
                <div class="col-lg-4 col-md-6 text-center vitamines">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/image_3.jpg')}}" alt="Multivitamines">
                            </a>
                            <div class="product-badge famille">FAMILLE</div>
                        </div>
                        <h3>Multivitamines Famille</h3>
                        <p class="product-description">Complexe vitaminé pour toute la famille - Boîte de 60 comprimés</p>
                        <p class="product-price"><span>Boîte</span> 4500 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Ibuprofène -->
                <div class="col-lg-4 col-md-6 text-center antidouleur">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/produit_1.jpg')}}" alt="Ibuprofène">
                            </a>
                            <div class="product-badge stock-limite">STOCK LIMITÉ</div>
                        </div>
                        <h3>Ibuprofène 400mg</h3>
                        <p class="product-description">Anti-inflammatoire non stéroïdien - Boîte de 20 comprimés</p>
                        <p class="product-price"><span>Boîte</span> 1500 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Sirop pour la toux -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/image_1.jpg')}}" alt="Sirop pour la toux">
                            </a>
                            <div class="product-badge enfant">ENFANT</div>
                        </div>
                        <h3>Sirop Antitussif</h3>
                        <p class="product-description">Sirop contre la toux sèche - Flacon de 125ml</p>
                        <p class="product-price"><span>Flacon</span> 2800 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>

                <!-- Magnésium -->
                <div class="col-lg-4 col-md-6 text-center vitamines">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="{{asset('assets/img/produits/produit_1.jpg')}}" alt="Magnésium">
                            </a>
                            <div class="product-badge bio">NATUREL</div>
                        </div>
                        <h3>Magnésium Marin</h3>
                        <p class="product-description">Anti-stress et anti-fatigue - Boîte de 30 gélules</p>
                        <p class="product-price"><span>Boîte</span> 3800 FCFA</p>
                        <a href="#" class="cart-btn" style="background-color: #2c5530; border-color: #2c5530;">
                            <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS Styles for pharmaceutical products -->
    <style>
    .single-product-item {
        background: white;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(44, 85, 48, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        border: 1px solid #f0f0f0;
    }

    .single-product-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(44, 85, 48, 0.2);
    }

    .product-image {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .product-image img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .single-product-item:hover .product-image img {
        transform: scale(1.05);
    }

    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: bold;
        color: white;
        z-index: 2;
        text-transform: uppercase;
    }

    .product-badge.disponible { background: #4CAF50; }
    .product-badge.promo { background: #FF5722; }
    .product-badge.bestseller { background: #FF9800; }
    .product-badge.ordonnance-required { background: #E91E63; }
    .product-badge.nouveau { background: #2196F3; }
    .product-badge.famille { background: #9C27B0; }
    .product-badge.stock-limite { background: #FF5722; }
    .product-badge.enfant { background: #00BCD4; }
    .product-badge.bio { background: #8BC34A; }

    .product-description {
        color: #666;
        font-size: 14px;
        margin: 15px 0;
        min-height: 50px;
        line-height: 1.4;
    }

    .product-price {
        font-size: 18px;
        font-weight: bold;
        color: #2c5530;
        margin: 20px 0;
    }

    .product-price span {
        font-size: 14px;
        color: #999;
        font-weight: normal;
    }

    .old-price {
        text-decoration: line-through;
        color: #999;
        font-size: 16px;
        margin-right: 10px;
    }

    .cart-btn {
        display: inline-block;
        padding: 12px 25px;
        color: white;
        text-decoration: none;
        border-radius: 25px;
        transition: all 0.3s ease;
        font-weight: 500;
        border: 2px solid transparent;
    }

    .cart-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(44, 85, 48, 0.3);
        color: white;
        text-decoration: none;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: #2c5530 !important;
        color: white !important;
    }

    .section-title h3 {
        font-size: 36px;
        margin-bottom: 15px;
    }

    .section-title p {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .product-filters ul {
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-btn {
            margin: 5px !important;
        }
    }
    </style>
    <!-- end product section -->

@endsection
