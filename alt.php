<footer>
    <div class="footer__area pt-130 footer-bg box-105">
        <div class="container-fluid">
            <div class="footer__bottom pb-50">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-50">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-15">
                                <div class="logo">
                                    <a href="<?php echo $ayarlar["strURL"]; ?>/index"><img style="width: 70%;" src="<?php echo $ayarlar["strURL"]; ?>/assets/img/logo/logo.png" alt="Op. Dr. Mehmet Yılmaz"></a>
                                </div>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__logo-area">
                                    <?php echo  $ayarlar["bizitani_".$lang];  ?>
                                    <div class="social">
                                        <h4><?php echo LANG("Sosyal Medya",$lang); ?></h4>
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
                    <div class="col-xl-2 col-lg-6 col-md-6 offset-xl-1 mb-50">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-25">
                                <h2><?php echo LANG("Hastalıklar",$lang); ?></h2>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__services">
                                    <ul>
                                      <?php
                                     $veri_cek = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0 AND dil_id = '{$lang}' ORDER BY kategori_ust_id ASC LIMIT 9");
                                      if ($veri_cek->rowCount()){
                                     foreach($veri_cek as $veri_listele){
                                        ?>


                                         <li><a href="<?php echo $ayarlar["strURL"]; ?>/hastalik-kategori/<?php echo $veri_listele["kategori_seo"]; ?>"><?php echo $veri_listele["kategori_baslik"]; ?></a></li>
                                         <?php
                                                   }
                                                 }else{
                                                   "Listelenecek veri bulunamadı.";
                                                 }
                                         ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 mb-50">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-25">
                                <h2><?php echo LANG("İletişim Bilgileri",$lang); ?></h2>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__contact-info">
                                    <ul>
                                        <li>
                                            <div class="footer__contact-address">
                                                <span><?php echo $ayarlar["strAddress"]; ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer__contact-item">
                                                <h6><?php echo LANG("Email",$lang); ?>:</h6>
                                                <p><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?></a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer__contact-item">
                                                <h6><?php echo LANG("Telefon",$lang); ?>:</h6>
                                                <p><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?></a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer__contact-item">
                                                <h6><?php echo LANG("Website",$lang); ?>:</h6>
                                                <p> <a href="https://www.mehmetyilmaz.com.tr"> www.mehmetyilmaz.com.tr </a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 offset-xl-1 mb-50">
                        <div class="footer__widget">
                            <div class="footer__widget-title mb-25">
                                <h2><?php echo LANG("Instagram",$lang); ?></h2>
                            </div>
                            <div class="footer__widget-content">
                                <div class="footer__subscribe">
                                  <ul id="Instafeed2">
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-6.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-8.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="http://localhost/assets/img/insta/insta-9.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer__copyright-text">
                            <p>Copyright ©  <?php echo date("Y"); ?> <a href="https://www.memsidea.com" rel="dofollow"> Memsidea Group</a> Her Hakkı Saklıdır.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/vendor/waypoints.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/popper.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/metisMenu.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/slick.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.fancybox.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/ajax-form.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo $ayarlar["strURL"]; ?>/assets/js/main.js"></script>
