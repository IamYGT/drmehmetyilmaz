 <div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div>
 <header>
    <div class="header-area">
        <div class="header__top box-105">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 d-none d-sm-block">
                        <div class="header__top-left">
                            <div class="social">
                                <ul>
                                    <li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                        <div class="header__top-right d-flex justify-content-end">
                          <div class="header__info d-none d-md-flex">

                              <div style="    padding-top: 7px;" class="header__info-text">
                                   <span><div class="btn-group">
  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="flag-icon flag-icon-<?php echo $lang?> icon-2x"></i> Türkçe
   </a>
  <ul class="dropdown-menu">
    <?php
                       $dilq = $db->query("select * from dil where dil_kod != '".$secili_dil["dil_kod"]."' and dil_durum = '1' order by dil_id ASC");
                       if ($dilq->rowCount() > 0) {
                       ?>
                       <?php
                       foreach ($dilq AS $dil) {
                       ?>
                       <li style="    margin-left: 12px;    margin-bottom: 6px;"><a href="<?php echo $ayarlar["strURL"]; ?>/lang.php?l=<?php echo $dil["dil_kod"]; ?>&return=<?php echo @$_SERVER["SCRIPT_URL"];?>"><i class="flag-icon flag-icon-<?php echo $dil["dil_kod"]; ?> icon-2x iconduzenle"></i> <?php echo $dil["dil_baslik"]; ?></a></li>
                       <?php
                       }  }
                       ?>  </ul>
</div></span>
                              </div>
                          </div>
                            <div class="header__info d-none d-md-flex">
                                <div class="header__info-icon">
                                    <span class="icon flaticon-24-hours-support"></span>
                                </div>
                                <div class="header__info-text">
                                    <span><?php echo LANG("Telefon",$lang); ?>:</span>
                                    <span><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></span>
                                </div>
                            </div>
                            <div class="header__info d-none d-sm-flex">
                                <div class="header__info-icon">
                                    <span class="icon flaticon-envelope"></span>
                                </div>
                                <div class="header__info-text">
                                  <span><?php echo LANG("Email",$lang); ?>:</span>
                                  <span><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header__bottom box-105">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-8">
                        <div class="logo-2 text-md-center">
                            <a href="<?php echo $ayarlar["strURL"]; ?>/index"><img style="width: 85%;" src="<?php echo $ayarlar["strURL"]; ?>/assets/img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-6 col-4">
                        <div class="header__bottom-right pink-soft-bg d-flex justify-content-end justify-content-lg-between align-items-center">
                            <div class="main-menu main-menu-2 d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a> </li>
                                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda"><?php echo LANG("Hakkımızda",$lang); ?></a> </li>
                                         <li><a href="<?php echo $ayarlar["strURL"]; ?>/hastaliklar"><?php echo LANG("Hastalıklar",$lang); ?></a>
                                            <ul class="submenu">
                                              <?php
                                              									$list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0  AND dil_id='{$lang}'");
                                              									foreach($list as $row){
                                              					?>

                                                 <li><a style="padding: 5px 23px;" href="<?php echo $ayarlar["strURL"]; ?>/hastalik-kategori/<?php echo $row["kategori_seo"]; ?>"> <?php echo $row["kategori_baslik"]; ?>  <span style="float: right;"> <i class="far fa-chevron-right"> </i>  </span></a>

                                                   <ul class="submenu">
                                                     <?php

                   $listPage = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '".$row["kategori_ust_id"]."' AND dil_id='{$lang}'");
                   foreach($listPage as $rowPage){
       ?>   <li><a style="padding: 0px 23px;" href="<?php echo $ayarlar["strURL"]; ?>/alt-kategori/<?php echo $rowPage["kategori_seo"]; ?>"> <?php echo $rowPage["kategori_baslik"]; ?></a>

                                                          <?php
                                                          											}
                                                          					?> </li> </ul>   </li> <?php
                                                   			 	}
                                           					?>
                                                </ul>
                                        </li>

                                         <li><a href="#"><?php echo LANG("Medya",$lang); ?></a>
                                            <ul class="submenu">
                                              <li><a href="<?php echo $ayarlar["strURL"]; ?>/galeri"><?php echo LANG("Galeri",$lang); ?></a> </li>
                                              <li><a href="<?php echo $ayarlar["strURL"]; ?>/videolar"><?php echo LANG("Videolar",$lang); ?></a> </li>
                                            </ul>
                                        </li>


                                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/basinda-biz"><?php echo LANG("Basında Biz",$lang); ?></a> </li>
                                        <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim",$lang); ?></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-bar info-toggle-btn d-lg-none f-right">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="header__btn d-none d-xl-block">
                                <a href="https://www.doktortakvimi.com/mehmet-yilmaz-28/ortopedi-ve-travmatoloji/gaziantep" class="s-btn s-btn__square"><?php echo LANG("Online Randevu",$lang); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 <section class="info__area transition-3">
    <div class="info__area-inner">
         <nav class="side-mobile-menu">
            <div class="info__close-icon text-right mb-20">
                <button class="info-close-btn"><i class="fal fa-times"></i></button>
            </div>
            <ul id="mobile-menu-active">
              <li><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a> </li>
              <li><a href="<?php echo $ayarlar["strURL"]; ?>/hakkimizda"><?php echo LANG("Hakkımızda",$lang); ?></a> </li>


              <li class="has-dropdown" ><a href="<?php echo $ayarlar["strURL"]; ?>/hastaliklar"><?php echo LANG("Hastalıklar",$lang); ?></a>
                 <ul class="submenu">
                   <?php
                                     $list = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = 0  AND dil_id='{$lang}'");
                                     foreach($list as $row){
                             ?>

                      <li><a style="padding: 5px 23px;" href="<?php echo $ayarlar["strURL"]; ?>/hastalik-kategori/<?php echo $row["kategori_seo"]; ?>"> <?php echo $row["kategori_baslik"]; ?>  <span style="float: right;"> <i class="far fa-chevron-right"> </i>  </span></a>

                        <ul class="submenu">
                          <?php

    $listPage = $db->query("SELECT * FROM kategoriler WHERE kategori_durum='1' AND altkategori_id = '".$row["kategori_ust_id"]."' AND dil_id='{$lang}'");
    foreach($listPage as $rowPage){
    ?>   <li><a style="padding: 0px 23px;" href="<?php echo $ayarlar["strURL"]; ?>/alt-kategori/<?php echo $rowPage["kategori_seo"]; ?>"> <?php echo $rowPage["kategori_baslik"]; ?></a>

                               <?php
                                                     }
                                         ?> </li> </ul>   </li> <?php
                               }
                         ?>
                     </ul>
             </li>



                                  <li  class="has-dropdown" ><a href="#"><?php echo LANG("Medya",$lang); ?></a>
                                     <ul class="submenu">
                                       <li><a href="<?php echo $ayarlar["strURL"]; ?>/galeri"><?php echo LANG("Galeri",$lang); ?></a> </li>
                                       <li><a href="<?php echo $ayarlar["strURL"]; ?>/videolar"><?php echo LANG("Videolar",$lang); ?></a> </li>
                                     </ul>
                                 </li>



          <li><a href="<?php echo $ayarlar["strURL"]; ?>/basinda-biz"><?php echo LANG("Basında Biz",$lang); ?></a> </li>
          <li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><?php echo LANG("İletişim",$lang); ?></a></li>




            </ul>
        </nav>
     </div>
</section>
<div class="body-overlay transition-3"></div>
<div class="scroll-up" id="scroll" style="display: none;">
    <a href="javascript:void(0);"><i class="far fa-angle-up"></i></a>
</div>
