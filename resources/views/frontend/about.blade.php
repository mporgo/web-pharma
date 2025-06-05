@extends('layout.frontend')

@section('title', 'À Propos - WED-PHARMA')

@section('contentPage')

<x-menu_navigation />

<!-- Hero Section -->
<div class="hero-area hero-bg" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle" style="color: #ffffff;">Depuis 2016</p>
                        <h1 style="color: #ffffff;">WED-PHARMA</h1>
                        <div class="hero-btns">
                            <p style="color: #cccccc; font-size: 1.2rem;">Notre Action la Disponibilité</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Présentation de la Société -->
<div class="pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2 class="main-color">Présentation de la Société</h2>
                    <p>Découvrez WED-PHARMA, votre partenaire santé de confiance</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="single-feature-text text-center">
                    <p class="mb-4">Notre société, nommée <strong>WED-PHARMA</strong> créée en décembre 2016, vise à se positionner sur le marché de la vente en détail et en gros de consommables et dispositifs médicaux, des équipements hospitaliers et des réactifs et appareils de laboratoire dans la ville de Bobo-Dioulasso.</p>

                    <p class="mb-4">Nous sommes alors convaincus que notre entreprise est un acteur majeur dans ce secteur de santé grâce à notre expertise et notre savoir-faire durant ces années.</p>

                    <p>Nous avons choisi la ville de Bobo-Dioulasso et ses environs comme lieu d'implantation pour plusieurs raisons stratégiques : son emplacement et sa proximité avec les pays côtiers de la région, création d'emploi pour les jeunes, sa forte demande en produits de santé, sa forte croissance démographique et sa stabilité économique. Nos partenariats avec des fournisseurs locaux et internationaux, et nos collaborations clientèle (professionnels de santé, des ONG, des entreprises privées, des officines pharmaceutiques et des structures de santé…) ont permis de développer notre activité rapidement et de répondre efficacement aux besoins de santé de la population.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Directeur Général -->
<div class="testimonial-section pt-100 pb-100" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2 class="main-color">Direction</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="single-testimonial-item">
                    <h3 class="secondary-color">Innocent OUEDRAOGO</h3>
                    <h4 class="main-color">Directeur Général</h4>
                    <div class="contact-info mt-4">
                        <p><i class="fas fa-phone accent-color"></i> 75.04.72.07 / 70.81.91.21</p>
                        <p><i class="fas fa-envelope secondary-color"></i> iouedraogo@wedpharma23.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Organigramme -->
<div class="team-section pt-100 pb-100" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2 class="main-color">Notre Équipe</h2>
                    <p>Une équipe de professionnels expérimentés à votre service.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-structure text-center">
                    <div class="hierarchy-level">
                        <div class="position-box bg-main text-white">
                            <h4>Directeur Général</h4>
                        </div>
                    </div>
                    <div class="hierarchy-level mt-4">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="position-box bg-secondary text-white">
                                    <h5>Secrétaire Général</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="position-box bg-accent text-white">
                                    <h5>Comptabilité</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="position-box bg-main text-white">
                                    <h5>Directeur Commercial</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hierarchy-level mt-4">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="position-box" style="background: #6c757d; color: white;">
                                    <h6>Visiteurs Médicaux</h6>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="position-box" style="background: #6c757d; color: white;">
                                    <h6>Chauffeur</h6>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="position-box" style="background: #6c757d; color: white;">
                                    <h6>Magasinier</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
.position-box {
    padding: 15px;
    border-radius: 8px;
    margin: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.position-box:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

.hierarchy-level {
    margin: 20px 0;
}

.s-feature-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.single-feature-text ul {
    list-style: none;
    padding: 0;
}

.single-feature-text ul li {
    padding: 5px 0;
    position: relative;
    padding-left: 20px;
}

.single-feature-text ul li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #2c5530;
    font-weight: bold;
}
</style>
@endsection
