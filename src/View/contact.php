<?php
include_once("../../public/inc/header.php");
include_once("../../public/inc/nav.php");
?>
    <div class="jumbotron jumbotron-single d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-2 mb-4">Contact</h1>
        </div>
    </div>        <!-- Contact Form Section -->
    <section id="contact-form" class="bg-white">
        <div class="container">
            <div class="section-content">
                <!-- Section Title -->
                <div class="title-wrap" data-aos="fade-up">
                    <h2 class="section-title">Me contacter</h2>
                    <p class="section-sub-title">Vous avez des questions à mon sujet?
                        <br> N'hésitez pas à me joindre.</p>
                </div>
                <!-- End of Section Title -->
                <div class="row">
                    <!-- Contact Form Holder -->
                    <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                        <form method="post" name="contact-us" action="../Controller/envoiemsge.php">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                                           placeholder="Numéro de téléphone">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="object" name="object"
                                           placeholder="Objet">
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" id="message" name="message" rows="6"
                                              placeholder="Votre Message ..."></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Envoyer un Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End of Contact Form Holder -->
                </div>
            </div>
            <div class="section-content pt-0">
                <div class="title-wrap" data-aos="fade-up">
                    <h2 class="section-title">Où me trouver ?</h2>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-md-3" data-aos="fade-up">
                        <span class="lnr lnr-location fs-40 py-4 d-block"></span>
                        <h5>LOCALISATION</h5>
                        <p>Lyon, France</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <span class="lnr lnr-clock fs-40 py-4 d-block"></span>
                        <h5>HORAIRES DE TRAVAIL</h5>
                        <p>Lundi - Vendredi</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                        <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                        <h5>APPELEZ-MOI</h5>
                        <p>+33 781904396</p>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="600">
                        <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                        <h5>EMAIL</h5>
                        <p>brugereaugustin@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Form Section -->
<?php
include_once("../../public/inc/footer.php");
?>