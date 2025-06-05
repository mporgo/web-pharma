<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-10 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{route('frontend.index')}}" class="mil-logo">
                            <img src="{{asset('assets/img/logos.png')}}" alt="Web Pharma" width="95" height="95">
                        </a>
                    </div>
                    <!-- logo end -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="{{route('frontend.index')}}" style="color: #2c5530;">Accueil</a>
                            </li>
                            <li><a href="{{route('frontend.about')}}" style="color: #2c5530;">À Propos</a></li>
                            <li><a href="#" style="color: #2c5530;">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('frontend.services')}}">Nos Services</a></li>
                                    <li><a href="{{route('frontend.offres')}}">Nos Offres</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('frontend.news')}}" style="color: #2c5530;">Actualités</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('frontend.news')}}">Actualités</a></li>
                                    <li><a href="#">Article Simple</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('frontend.contact')}}" style="color: #2c5530;">Contact</a></li>
                            <li><a href="{{route('frontend.shop')}}" style="color: #2c5530;">Pharmacie</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('frontend.shop')}}">Nos Produits</a></li>
                                    <li><a href="#">Commande</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="header-icons">
                                    <a href="#" class="mil-btn mil-sm" style="color: #2c5530;"><i class="fas fa-user-circle"></i></a>
                                    <a class="shopping-cart" href="#" style="color: #dc3545;"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="mobile-hide search-bar-icon" href="#" style="color: #2c5530;"><i class="fas fa-search"></i></a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#" style="color: #2c5530;"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Rechercher :</h3>
                        <input type="text" placeholder="Médicaments, produits...">
                        <button type="submit" style="background-color: #2c5530; border-color: #2c5530;">Rechercher <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
