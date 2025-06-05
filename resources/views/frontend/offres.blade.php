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
                            <h1 style="color: #ffffff;">Nos Offres</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Offers Section -->
    <div class="offers-section mt-150 mb-150">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span style="color: #2c5530;">Nos</span> Offres de Services</h3>
                        <p>Des solutions complètes pour répondre à tous vos besoins pharmaceutiques et médicaux avec excellence et professionnalisme.</p>
                    </div>
                </div>
            </div>

            <!-- Offers Grid -->
            <div class="row offers-grid">
                <!-- Offre 1: Fourniture de produits médicaux -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-offer-item">
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <h4>Fourniture de Produits Médicaux de Qualité</h4>
                        </div>
                        <div class="offer-content">
                            <p>Une gamme complète de produits médicaux certifiés pour répondre à tous vos besoins professionnels.</p>
                            <ul class="offer-features">
                                <li><i class="fas fa-check"></i> Consommables et dispositifs médicaux</li>
                                <li><i class="fas fa-check"></i> Matériel médico-technique</li>
                                <li><i class="fas fa-check"></i> Équipements hospitaliers</li>
                                <li><i class="fas fa-check"></i> Appareils de laboratoire et réactifs</li>
                                <li><i class="fas fa-check"></i> Appareils d'imagerie médicale</li>
                                <li><i class="fas fa-check"></i> Produits d'hygiène et de désinfection</li>
                            </ul>
                            <a href="#" class="offer-btn">Découvrir nos produits</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 2: Services logistiques -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-offer-item">
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <h4>Services Logistiques et Gestion des Stocks</h4>
                        </div>
                        <div class="offer-content">
                            <p>Une logistique optimisée pour garantir la disponibilité et la qualité de vos produits médicaux.</p>
                            <ul class="offer-features">
                                <li><i class="fas fa-check"></i> Approvisionnement rapide</li>
                                <li><i class="fas fa-check"></i> Gestion de stocks et inventaire</li>
                                <li><i class="fas fa-check"></i> Livraison en temps voulu et en qualité</li>
                                <li><i class="fas fa-check"></i> Gestion de la traçabilité</li>
                            </ul>
                            <a href="#" class="offer-btn">En savoir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 3: Conseil et accompagnement -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-offer-item">
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4>Offres de Conseil et d'Accompagnement</h4>
                        </div>
                        <div class="offer-content">
                            <p>Un accompagnement personnalisé par nos experts pour optimiser votre activité pharmaceutique.</p>
                            <ul class="offer-features">
                                <li><i class="fas fa-check"></i> Information sur la disponibilité des produits</li>
                                <li><i class="fas fa-check"></i> Conseils réglementaires et documentation</li>
                                <li><i class="fas fa-check"></i> Support pour la gestion des stocks</li>
                                <li><i class="fas fa-check"></i> Formation du personnel pharmaceutique</li>
                            </ul>
                            <a href="#" class="offer-btn">Nous contacter</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 4: Solutions numériques -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-offer-item featured-offer">
                        <div class="offer-badge">POPULAIRE</div>
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h4>Solutions Numériques et E-commerce</h4>
                        </div>
                        <div class="offer-content">
                            <p>Des outils numériques innovants pour moderniser et simplifier vos commandes et votre gestion.</p>
                            <ul class="offer-features">
                                <li><i class="fas fa-check"></i> Plateforme de commande en ligne sécurisée</li>
                                <li><i class="fas fa-check"></i> Gestion électronique des stocks</li>
                                <li><i class="fas fa-check"></i> Alertes de réapprovisionnement</li>
                                <li><i class="fas fa-check"></i> Catalogues numériques actualisés</li>
                            </ul>
                            <a href="#" class="offer-btn featured">Essayer gratuitement</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 5: Services financiers -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-offer-item">
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <h4>Services Financiers et de Crédit</h4>
                        </div>
                        <div class="offer-content">
                            <p>Des solutions de financement flexibles adaptées aux besoins de votre établissement pharmaceutique.</p>
                            <ul class="offer-features">
                                <li><i class="fas fa-check"></i> Conditions de paiement avantageuses</li>
                                <li><i class="fas fa-check"></i> Crédit fournisseur approprié</li>
                                <li><i class="fas fa-check"></i> Facturation simplifiée et normalisée</li>
                                <li><i class="fas fa-check"></i> Paiements flexibles</li>
                            </ul>
                            <a href="#" class="offer-btn">Demander un devis</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 6: Produits spécialisés -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-offer-item">
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-microscope"></i>
                            </div>
                            <h4>Produits Spécialisés et Innovants</h4>
                        </div>
                        <div class="offer-content">
                            <p>Accès exclusif aux produits médicaux rares et solutions pour les ruptures d'approvisionnement.</p>
                            <ul class="offer-features">
                                <li><i class="fas fa-check"></i> Produits médicaux rares ou difficiles à obtenir</li>
                                <li><i class="fas fa-check"></i> Résolution des ruptures d'approvisionnement</li>
                                <li><i class="fas fa-check"></i> Produits innovants en avant-première</li>
                                <li><i class="fas fa-check"></i> Solutions sur mesure</li>
                            </ul>
                            <a href="#" class="offer-btn">Voir le catalogue</a>
                        </div>
                    </div>
                </div>

                <!-- Offre 7: Conformité et documentation -->
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="single-offer-item full-width">
                        <div class="offer-header">
                            <div class="offer-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h4>Services de Conformité et de Documentation</h4>
                        </div>
                        <div class="offer-content">
                            <p>Un accompagnement complet pour garantir la conformité réglementaire de vos produits et activités pharmaceutiques.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="offer-features">
                                        <li><i class="fas fa-check"></i> Certificats de conformité</li>
                                        <li><i class="fas fa-check"></i> Gestion des rappels de produits</li>
                                        <li><i class="fas fa-check"></i> Support pour la conformité réglementaire</li>
                                        <li><i class="fas fa-check"></i> Respect des normes de stockage et conservation</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="compliance-info">
                                        <h5><i class="fas fa-shield-alt"></i> Garantie de Conformité</h5>
                                        <p>Tous nos produits respectent les normes internationales et les réglementations en vigueur. Notre équipe de spécialistes vous accompagne dans toutes vos démarches de conformité.</p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="offer-btn">Consultation gratuite</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="cta-section">
                        <h3>Prêt à découvrir nos solutions ?</h3>
                        <p>Contactez-nous dès aujourd'hui pour une consultation personnalisée et un devis adapté à vos besoins.</p>
                        <div class="cta-buttons">
                            <a href="#" class="boxed-btn primary" style="background-color: #2c5530; border-color: #2c5530; margin-right: 15px;">
                                <i class="fas fa-phone"></i> Nous Appeler
                            </a>
                            <a href="#" class="boxed-btn secondary" style="background: transparent; color: #2c5530; border: 2px solid #2c5530;">
                                <i class="fas fa-envelope"></i> Demander un Devis
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS Styles for Offers Section -->
    <style>
    .offers-section {
        background: #f8f9fa;
        padding: 100px 0;
    }

    .section-title h3 {
        font-size: 42px;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .section-title p {
        font-size: 18px;
        color: #666;
        line-height: 1.6;
        margin-bottom: 50px;
    }

    .single-offer-item {
        background: white;
        border-radius: 15px;
        padding: 40px 30px;
        box-shadow: 0 10px 30px rgba(44, 85, 48, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        border: 1px solid #e9ecef;
    }

    .single-offer-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(44, 85, 48, 0.15);
    }

    .single-offer-item.featured-offer {
        border: 2px solid #2c5530;
        position: relative;
    }

    .offer-badge {
        position: absolute;
        top: -15px;
        right: 30px;
        background: #FF9800;
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .offer-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .offer-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        transition: all 0.3s ease;
    }

    .offer-icon i {
        font-size: 32px;
        color: white;
    }

    .single-offer-item:hover .offer-icon {
        transform: scale(1.1);
    }

    .offer-header h4 {
        font-size: 24px;
        color: #2c5530;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
    }

    .offer-content p {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .offer-features {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }

    .offer-features li {
        padding: 8px 0;
        color: #555;
        font-size: 15px;
        display: flex;
        align-items: center;
    }

    .offer-features li i {
        color: #2c5530;
        margin-right: 12px;
        font-size: 14px;
    }

    .offer-btn {
        display: inline-block;
        background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .offer-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(44, 85, 48, 0.3);
        color: white;
        text-decoration: none;
    }

    .offer-btn.featured {
        background: #FF9800;
        box-shadow: 0 5px 15px rgba(255, 152, 0, 0.3);
    }

    .offer-btn.featured:hover {
        box-shadow: 0 8px 25px rgba(255, 152, 0, 0.4);
    }

    .single-offer-item.full-width {
        background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);
        color: white;
    }

    .single-offer-item.full-width .offer-header h4,
    .single-offer-item.full-width .offer-content p,
    .single-offer-item.full-width .offer-features li {
        color: white;
    }

    .single-offer-item.full-width .offer-icon {
        background: white;
    }

    .single-offer-item.full-width .offer-icon i {
        color: #2c5530;
    }

    .single-offer-item.full-width .offer-features li i {
        color: #4CAF50;
    }

    .single-offer-item.full-width .offer-btn {
        background: white;
        color: #2c5530;
    }

    .single-offer-item.full-width .offer-btn:hover {
        background: #f8f9fa;
        color: #2c5530;
    }

    .compliance-info {
        background: rgba(255, 255, 255, 0.1);
        padding: 25px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .compliance-info h5 {
        color: white;
        margin-bottom: 15px;
        font-size: 18px;
    }

    .compliance-info h5 i {
        color: #4CAF50;
        margin-right: 10px;
    }

    .cta-section {
        background: white;
        padding: 60px 40px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(44, 85, 48, 0.1);
        margin-top: 50px;
    }

    .cta-section h3 {
        font-size: 32px;
        color: #2c5530;
        margin-bottom: 15px;
    }

    .cta-section p {
        font-size: 18px;
        color: #666;
        margin-bottom: 30px;
    }

    .cta-buttons .boxed-btn {
        padding: 15px 35px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .cta-buttons .boxed-btn:hover {
        transform: translateY(-3px);
        text-decoration: none;
    }

    .cta-buttons .boxed-btn.primary:hover {
        box-shadow: 0 10px 30px rgba(44, 85, 48, 0.3);
        color: white;
    }

    .cta-buttons .boxed-btn.secondary:hover {
        background: #2c5530;
        color: white;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .section-title h3 {
            font-size: 32px;
        }

        .single-offer-item {
            padding: 30px 25px;
            margin-bottom: 30px;
        }

        .offer-header h4 {
            font-size: 20px;
        }

        .cta-section {
            padding: 40px 25px;
        }

        .cta-buttons .boxed-btn {
            display: block;
            margin: 10px 0;
            text-align: center;
        }
    }
    </style>
    <!-- end offers section -->

@endsection
