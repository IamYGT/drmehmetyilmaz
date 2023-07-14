<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
    <head>
      <title><?php echo LANG("İletişim",$lang); ?> - Op. Dr. Mehmet Yılmaz</title>
      <?php include 'css.php'; ?>
    </head>
    <body>
 <?php include 'ust.php'; ?>
        <main>
             <section class="page__title p-relative pt-200 pb-200" data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/page-title/page-title-7.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="page__title-inner text-center">
                                <div class="page__title-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo LANG("İletişim",$lang); ?></li>
                                        </ol>
                                        </nav>
                                </div>
                                <h1><?php echo LANG("İletişim",$lang); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <section class="contact__area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">
                            <div class="contact__info-head mb-40">
                                <div class="section__title mb-25">
                                    <div class="section__icon mb-10">
                                        <span class="section__sub-title section__sub-title-2 section__sub-title-3"><?php echo LANG("İletişim Bilgileri",$lang); ?></span>
                                    </div>
                                    <h1><?php echo LANG("Herhangi bir soru veya öneriniz varsa bizimle iletişime geçin.",$lang); ?></h1>
                                </div>
                                <p><?php echo LANG("İletişim formuyla bizimle iletişime geçebilir veya numaramızdan bizlere ulaşabilirsiniz.",$lang); ?> </p>
                            </div>
                        </div>
                        <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                            <div class="contact__form">
                                <form id="contact-form" action="assets/mail.php" method="POST">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input name="name" class="contact__input contact__input-3 contact__input-4" type="text" placeholder="<?php echo LANG("İsminiz",$lang); ?>">
                                        </div>
                                        <div class="col-xl-6">
                                            <input name="email" class="contact__input contact__input-3 contact__input-4" type="email" placeholder="<?php echo LANG("Eposta Adresiniz",$lang); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input name="subject" class="contact__input contact__input-3 contact__input-4" type="text" placeholder="<?php echo LANG("Telefon",$lang); ?>">
                                        </div>
                                        <div class="col-xl-6">
                                            <input name="subject" class="contact__input contact__input-3 contact__input-4" type="text" placeholder="<?php echo LANG("Konu",$lang); ?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <textarea name="message" class="contact__input contact__input-3 contact__input-4 txt-area " cols="30" rows="10" placeholder="<?php echo LANG("Mesajınız",$lang); ?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button class="s-btn s-btn__square" type="submit"><?php echo LANG("Gönder",$lang); ?></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <section class="contact__info p-relative">
                <div class="container">
                    <div class="contact__info-inner green-bg-2">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact__info-item text-center text-sm-left d-sm-flex justify-content-lg-center mb-30">
                                    <div class="contact__icon mr-20">
                                        <span class="icon flaticon-house"></span>
                                    </div>
                                    <div class="contact__info-content">
                                        <h3><?php echo LANG("Adres",$lang); ?></h3>
                                        <span><?php echo $ayarlar["strAddress"]; ?></span>
                                     </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact__info-item text-center text-sm-left d-sm-flex justify-content-lg-center mb-30">
                                    <div class="contact__icon mr-20">
                                        <span class="icon flaticon-support-1"></span>
                                    </div>
                                    <div class="contact__info-content">
                                        <h3><?php echo LANG("Telefon",$lang); ?></h3>
                                         <span><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="contact__info-item text-center text-sm-left d-sm-flex justify-content-lg-center mb-30">
                                    <div class="contact__icon mr-20">
                                        <span class="icon flaticon-email"></span>
                                    </div>
                                    <div class="contact__info-content">
                                        <h3><?php echo LANG("Email",$lang); ?></h3>
                                        <span><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></span>

                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <section class="contact__map-area mt--120">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="contact__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12734.870621814807!2d37.394704!3d37.064211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x678ff5b02e34b59!2sDeva%20Hastanesi!5e0!3m2!1str!2str!4v1665064035681!5m2!1str!2str"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact map area end -->
        </main>
        <?php include 'alt.php'; ?>
    </body>
</html>
