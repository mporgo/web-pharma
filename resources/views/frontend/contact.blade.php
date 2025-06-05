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
                            <p class="subtitle" style="color: #ffffff;">Obtenez une assistance 24h/24 et 7j/7 </p>
                            <h1 style="color: #ffffff;">Contactez Nous</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Vous avez une question ?</h2>
                    <p>N'hésitez pas à nous contacter pour toute demande d'information ou assistance. Notre équipe vous répondra dans les plus brefs délais. Nous sommes là pour vous accompagner pour tous vos besoins.</p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                        <p>
                            <input type="text" placeholder="Nom complet" name="name" id="name" required>
                            <input type="email" placeholder="Adresse email" name="email" id="email" required>
                        </p>
                        <p>
                            <input type="tel" placeholder="Téléphone" name="phone" id="phone">
                            <input type="text" placeholder="Sujet" name="subject" id="subject" required>
                        </p>
                        <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message..." required></textarea></p>
                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                        <p><input type="submit" value="Envoyer le message" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%); color: white; border: none; padding: 12px 30px; border-radius: 5px; cursor: pointer;"></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> Notre Adresse</h4>
                        <p>Secteur 21 <br>Bobo-Dioulasso <br>Burkina Faso</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> Horaires d'ouverture</h4>
                        <p>LUNDI - VENDREDI: 8h à 17h<br>SAMEDI: 8h à 11h<br>DIMANCHE: Fermé</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Téléphone: +226 75 04 72 07<br>Email:iouedraogo@wedpharma23.com</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fab fa-whatsapp"></i> WhatsApp</h4>
                        <p>+226 70 81 91 21 <br>Réponse rapide garantie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->

<!-- find our location -->
<div class="find-location blue-bg" style="background: linear-gradient(135deg, #2c5530 0%, #1e3d22 100%); padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p style="color: white; font-size: 18px; margin: 0;"><i class="fas fa-map-marker-alt"></i> Trouvez Notre Localisation</p>
            </div>
        </div>
    </div>
</div>
<!-- end find our location -->

<!-- google map section -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.874161129331!2d2.2944813156743073!3d48.85837007928746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1638360000000!5m2!1sen!2sfr"
           width="600"
           height="450"
           frameborder="0"
           style="border:0;"
           allowfullscreen=""
           class="embed-responsive-item">
    </iframe>
</div>
<!-- end google map section -->

@endsection
