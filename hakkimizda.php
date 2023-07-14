<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
    <head>
      <title><?php echo LANG("Hakkımızda",$lang); ?> - Op. Dr. Mehmet Yılmaz</title>
      <?php include 'css.php'; ?>
    </head>
    <body>
 <?php include 'ust.php'; ?>
        <main>
             <section class="page__title p-relative pt-200 pb-200" data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/page-title/page-title3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="page__title-inner text-center">
                                <div class="page__title-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo LANG("Hakkımızda",$lang); ?></li>
                                        </ol>
                                        </nav>
                                </div>
                                <h1><?php echo LANG("Hakkımızda",$lang); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="team__details pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="team__sidebar">
                                <div class="team__item mb-30">
                                    <div class="team__thumb w-img fix p-relative">
                                        <img class="transition-3" src="assets/img/team/03/team-01.jpg" alt="team-1">
                                    </div>
                                    <div class="team__content text-center white-bg transition-3">
                                        <div class="team__name">
                                            <h3><a href="team-details.html">Mehmet Yılmaz</a></h3>
                                            <span><?php echo LANG("Operatör Doktor",$lang); ?></span>
                                        </div>
                                        <div class="team__info">
                                            <p><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></p>
                                            <p><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></p>
                                             <div class="team__social-2 social transition-3 mt-20">
                                                <ul>
                                                    <li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="team__details-wrapper">
                                <div class="team__details-item mb-30">
                                    <div class="team__details-title mb-20">
                                        <h2><?php echo LANG("Eğitim",$lang); ?></h2>
                                    </div>
                                    <div class="team__details-content">
                                        <div class="team__biography">
                                          <?php echo  $ayarlar["egitim_".$lang];  ?>
                                         </div>
                                    </div>
                                </div>
                                <div class="team__details-item mb-30">
                                    <div class="team__details-title mb-25">
                                      <h2><?php echo LANG("Deneyim",$lang); ?></h2>
                                    </div>
                                    <div class="team__details-content">
                                        <div class="team__experience">
                                    <?php echo  $ayarlar["deneyim_".$lang];  ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__details-item">
                                    <div class="team__details-title mb-30">
                                      <h2><?php echo LANG("Sertifikalar",$lang); ?></h2>
                                    </div>
                                    <div class="team__details-content">
                                        <div class="team__experience-area">
                             <?php echo  $ayarlar["sertifikalar_".$lang];  ?>
                                        </div>
                                    </div>
                                </div>
                                   </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team details area end -->

        </main>
        <?php include 'alt.php'; ?>
    </body>
</html>
