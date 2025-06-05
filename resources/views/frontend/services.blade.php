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
                            <h1 style="color: #ffffff;">Nos Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Nos Services -->
    <div class="pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2 class="main-color">Nos differentes services</h2>
                        <p>Une gamme complète de services pour répondre à tous vos besoins</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-feature-text">
                        <div class="s-feature-icon">
                            <i class="fas fa-bullhorn" style="color: #2c5530;"></i>
                        </div>
                        <h3>Commercialisation et Marketing</h3>
                        <ul class="text-left">
                            <li>Stratégie de lancement de nos produits</li>
                            <li>Promotion auprès des professionnels de santé</li>
                            <li>Gestion des campagnes publicitaires</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-feature-text">
                        <div class="s-feature-icon">
                            <i class="fas fa-truck" style="color: #dc3545;"></i>
                        </div>
                        <h3>Ventes et Distribution</h3>
                        <ul class="text-left">
                            <li>Réseau de distribution national et international</li>
                            <li>Gestion des commandes et livraison</li>
                            <li>Support aux clients et partenaires</li>
                            <li>Représentation des laboratoires</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-feature-text">
                        <div class="s-feature-icon">
                            <i class="fas fa-user-md" style="color: #007bff;"></i>
                        </div>
                        <h3>Support Médical et Scientifique</h3>
                        <ul class="text-left">
                            <li>Équipes de Medical Affairs</li>
                            <li>Formation des professionnels de santé</li>
                            <li>Éducation et communication scientifique</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="single-feature-text">
                        <div class="s-feature-icon">
                            <i class="fas fa-leaf" style="color: #28a745;"></i>
                        </div>
                        <h3>Responsabilité Sociétale</h3>
                        <ul class="text-left">
                            <li>Gestion de l'impact environnemental</li>
                            <li>Initiatives sociales et éthiques</li>
                            <li>Création d'emploi</li>
                            <li>Renforcement de l'offre de soins</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
