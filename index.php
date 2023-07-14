<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
  <title><?php echo LANG("Anasayfa",$lang); ?> - Op. Dr. Mehmet Yılmaz</title>
  <?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
        <main>
             <div class="slider-area p-relative">
                <div class="slider-arrow p-absolute bounce smooth-scroll">
                    <a href="#altkisim" class="slider-arrow-btn"><i class="fal fa-long-arrow-down"></i></a>
                </div>
                <div class="slider-active slider-active-2">
                  <?php
                      $veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 AND dil_id = '{$lang}' ORDER BY slayt_ust_id ASC LIMIT 999");
                      if ($veri_cek->rowCount()){
                      foreach($veri_cek as $veri_listele){
                ?>
                    <div class="single-slider slider-height-2 slider-overlay p-relative slider-height d-flex align-items-center" data-background="<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-9">
                                    <div class="slider-content slider-content-2">
                                        <span data-animation="fadeInUp" data-delay=".2s">Op. Dr. Mehmet Yılmaz</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo 	$veri_listele["slayt_baslik"]; ?> </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s"><?php echo 	$veri_listele["slayt_aciklama"]; ?></p>
                                        <div class="slider-btn" data-animation="fadeInUp" data-delay=".8s">
                                            <a href="<?php echo $ayarlar["strURL"]; ?>/<?php echo 	$veri_listele["slayt_butonlink"]; ?>" class="s-btn s-btn-sm s-btn__square"><?php echo 	$veri_listele["slayt_buton"]; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                            }
                          }else{
                            "Listelenecek veri bulunamadı.";
                          }
                    ?>
                </div>
            </div>
            <section class="sychologist__area p-relative" data-background="assets/img/bg/pattern-2.jpg" id="altkisim" style="background-image: url(&quot;assets/img/bg/pattern-2.jpg);">
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-5 col-lg-5">
                              <div class="sychologist__person">
                                  <img src="assets/img/sychologist/sychologist-person.png" alt="sychologist-person">
                              </div>
                          </div>
                          <div class="col-xl-7 col-lg-7">
                              <div class="sychologist__content pt-125   p-relative">
                                  <h1>Op. Dr. Mehmet Yılmaz</h1>
                                  <h3><?php echo LANG("Ortopedi ve Travmatoloji Uzmanı",$lang); ?></h3>
                                  <div class="team__details-wrapper">
                                <div class="team__details-item mb-30">
                                    <div class="team__details-title mb-20">
                                        <h2>Eğitim</h2>
                                    </div>
                                    <div class="team__details-content">
                                        <div class="team__biography">
                                          <p>Gaziantep Fitnat-Nuri Tekerekoğlu Anadolu Lisesi<br>
Erzurum İbrahim Hakkı Fen Lisesi<br>
Gaziantep Üniversitesi Tıp Fakültesi<br>
Elazığ Fırat Üniversitesi Tıp Fakültesi Ortopedi ve Travmatoloji AD</p>                                         </div>
                                    </div>
                                </div>
                                <div class="team__details-item mb-30">
                                    <div class="team__details-title mb-25">
                                      <h2>Deneyim</h2>
                                    </div>
                                    <div class="team__details-content">
                                        <div class="team__experience">
                                    <p>2009-2010 - Gaziantep Karkamış İlçe Sağlık Ocağı<br>
2010-2011 - Gaziantep Cengiz Gökçek Devlet Hastanesi Acil Servis, Gaziantep Aralık Devlet Hastanesi Acil Servisi<br>
2012-2017 - Fırat Üniversitesi Tıp Fakültesi Araştırma Hastanesi Ortopedi Kliniği<br>
2017-2019 - Gaziantep Şehitkamil Devlet Hastanesi Ortopedi Kliniği<br>
2019-Halen - Gaziantep Özel Deva Hastanesi</p>                                        </div>
                                    </div>
                                </div>

                                   </div> 
                              </div>
                          </div>
                      </div>
                  </div>
              </section>

              <section class="project__area pt-110 pb-130"  data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/bg/pattern-2.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-7">
                                        <div class="section__title mb-80">
                                            <div class="section__icon mb-10">
                                                <span class="section__sub-title section__sub-title-2 section__sub-title-3">Op. Dr. Mehmet Yılmaz</span>
                                            </div>
                                            <h1 class="mb-100"><?php echo LANG("Hastalıklar",$lang); ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid p-0">
                                <div class="project__slider">
                                    <div class="project__slider-active owl-carousel">
                        <?php
                      	$veri_cek = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0 AND dil_id = '{$lang}' ORDER BY kategori_ust_id ASC LIMIT 999");
                        if ($veri_cek->rowCount()){
                				foreach($veri_cek as $veri_listele){
                          ?>
                                        <div class="project__item ">
                                            <div class="project__thumb w-img p-relative">
                                                <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/categories/<?php echo $veri_listele["kategori_resim"]; ?>" alt="<?php echo $veri_listele["kategori_baslik"]; ?>">
                                                <div class="project__icon transition-3 p-absolute">
                                                    <a href="<?php echo $ayarlar["strURL"]; ?>/hastalik-kategori/<?php echo $veri_listele["kategori_seo"]; ?>" ><i class="fal fa-plus"></i></a>
                                                </div>
                                                <div class="project__content p-absolute transition-3">
                                                     <h3><a href="<?php echo $ayarlar["strURL"]; ?>/hastalik-kategori/<?php echo $veri_listele["kategori_seo"]; ?>"> <?php echo $veri_listele["kategori_baslik"]; ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                  }
                                                }else{
                                                  "Listelenecek veri bulunamadı.";
                                                }
                                        ?>
                                        </div>
                                </div>
                            </div>
                        </section>




            <section class="contact__area pb-355 box-pl-105 pt-120 p-relative  "  data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/bg/pattern-3.jpg">
                            <div class="container-fluid">
                                <div class="row ">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact__wrapper">
                                            <div class="section__title section__title-white mb-65 pr-100">
                                                <div class="section__icon mb-20">
                                                    <img src="assets/img/icon/sec-icon-2.png" alt=""><span class="section__sub-title ml-15 white-color">Op. Dr. Mehmet Yılmaz</span>
                                                </div>
                                                <h1><?php echo LANG("Bir sorunuz mu var? Hemen sorun",$lang); ?></h1>
                                            </div>
                                            <div class="contact__form">
                                                <form action="assets/mail.php" id="contact-form" method="POST">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <input name="name" class="contact__input" type="text" placeholder="<?php echo LANG("İsminiz",$lang); ?>">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <input name="email" class="contact__input" type="email" placeholder="<?php echo LANG("Eposta Adresiniz",$lang); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <input name="subject" class="contact__input" type="text" placeholder="<?php echo LANG("Telefon",$lang); ?>">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <select class="contact__input">
                                                                <option value=""><?php echo LANG("Konu",$lang); ?></option>
                                                                <?php
                                                                      									$list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0 AND dil_id= '{$lang}'");
                                                                      									foreach($list as $row){
                                                                      					?>
                                                                 <option value="<?php echo $row["kategori_baslik"]; ?>"><?php echo $row["kategori_baslik"]; ?></option>
                                                                 <?php
                                                                                        }
                                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <textarea name="message" class="contact__input txt-area" cols="30" rows="10" placeholder="<?php echo LANG("Mesajınız",$lang); ?>"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <button class="s-btn s-btn__pink" type="submit"><?php echo LANG("Gönder",$lang); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <p class="ajax-response"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 pr-0">
                                        <div class="contact__map-wrapper">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d795.9281899535082!2d37.394367382768614!3d37.06432764609714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x678ff5b02e34b59!2sDeva%20Hastanesi!5e0!3m2!1str!2str!4v1666713039347!5m2!1str!2str"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- contact us area end -->

                        <!-- testimonial area start -->
                        <section class="testimonial__area p-relative mt--230 box-105 mb-120">
                            <div class="testimonial__inner pt-130" data-background="assets/img/bg/pattern-2.jpg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7 col-md-10">
                                            <div class="section__title mb-60">
                                                <div class="section__icon mb-20">
                                                    <img src="assets/img/icon/sec-icon-1.png" alt=""><span class="section__sub-title ml-15">Op. Dr. Mehmet Yılmaz</span>
                                                </div>
                                                <h1><?php echo LANG("Hastalarımız Bizim Hakkımızda ne dedi?",$lang); ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="testimonial__slider mb--120 owl-carousel">

                                              <?php
                                                  $veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                                                  if ($veri_cek->rowCount()){
                                                  foreach($veri_cek as $veri_listele){
                                            ?>
                                                <div class="testimonial__item p-relative white-bg">
                                                    <div class="testimonial__quote p-absolute">
                                                        <img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/testimonial/quote.png" alt="Müşteri Yorumları">
                                                    </div>
                                                    <div class="testimonial__content">
                                                        <div class="rating mb-15">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                             </ul>
                                                        </div>
                                                      <?php echo 	$veri_listele["haber_aciklama"]; ?>
                                                    </div>
                                                    <div class="testimonial__person d-flex align-items-center">
                                                        <div class="testimonial__avater">
                                                            <img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/testimonial/person-1.png" alt="">
                                                        </div>
                                                        <div class="testimonial__info">
                                                            <h3><?php echo 	$veri_listele["haber_baslik"]; ?></h3>
                                                            <span><?php echo LANG("Hasta",$lang); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                        }
                                                      }else{
                                                        "Listelenecek veri bulunamadı.";
                                                      }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- testimonial area end -->

                        <!-- blog area start -->
                        <section class="blog__area box-105 pt-10 pb-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12">
                                        <div class="section__title mb-70 text-center pl-50 pr-50 ">
                                            <div class="section__icon mb-20">
                                                <img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/icon/sec-icon-1.png" alt="Basında Biz">
                                            </div>
                                            <h1><?php echo LANG("Basında Biz",$lang); ?></h1>
                                            <span class="section__sub-title">Op. Dr. Mehmet Yılmaz</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                  <?php
                                      $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
                                      if ($veri_cek->rowCount()){
                                      foreach($veri_cek as $veri_listele){
                                ?>

                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="blog__item mb-30">
                                            <div class="blog__thumb w-img fix">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $veri_listele["haber_seo"]; ?>"><img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"> </a>
                                            </div>
                                            <div class="blog__content pink-soft-bg p-relative mr-65">
                                                <div class="blog__meta fix">
                                                    <span class="f-left"><a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $veri_listele["haber_seo"]; ?>"><i class="far fa-user"></i>Op. Dr. Mehmet Yılmaz</a></span>
                                                    <div class="blog__date p-absolute">
                                                        <h6><?php echo turkcetarih_formati('j' , $veri_listele["haber_tarih"] );  ?></h6>
                                                        <span><?php echo turkcetarih_formati(' F ' , $veri_listele["haber_tarih"] );  ?></span>
                                                    </div>
                                                </div>
                                                <h2><a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h2>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                            }
                                          }else{
                                            "Listelenecek veri bulunamadı.";
                                          }
                                    ?>
                                </div>
                            </div>
                </section>
        </main>

      <?php include 'alt.php'; ?>
    </body>
</html>
