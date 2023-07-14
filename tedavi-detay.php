<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
    <head>
      <title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Op. Dr. Mehmet Yılmaz</title>
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
                                            <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/tedaviler"><?php echo LANG("Tedaviler",$lang); ?></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $tekil_veri_cek["haber_baslik"]; ?></li>
                                        </ol>
                                        </nav>
                                </div>
                                <h1><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services__details pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="services__details-wrapper">
                                <div class="services__details-list grey-bg-3 sidebar-wrapper mb-30">
                                    <div class="sidebar-title">
                                        <h3><?php echo LANG("Diğer Tedaviler",$lang); ?></h3>
                                    </div>
                                    <div class="sidebar-list">
                                        <ul>
                                          <?php
                                              $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                                              if ($veri_cek->rowCount()){
                                              foreach($veri_cek as $veri_listele){
                                      ?>
                                             <li><a href="<?php echo $ayarlar["strURL"]; ?>/tedavi/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
                                             <?php
                                                       }
                                                     }else{
                                                       "Listelenecek veri bulunamadı.";
                                                     }
                                             ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="services__support p-relative text-center mb-30" data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/services/services-support.jpg">
                                    <div class="services__support-inner p-relative">
                                        <h1><?php echo LANG("Bir Sorunuz mu var?",$lang); ?></h1>
                                        <a href="<?php echo $ayarlar["strURL"]; ?>/iletisim" class="s-btn s-btn__square s-btn__square-white"><?php echo LANG("İletişim",$lang); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="services__des-wrapper">
                                <div class="services__details-img w-img mb-35">
                                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
                                </div>
                                <div class="services__des-title mb-30">
                                    <h1><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
                                    <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services details area end -->
        </main>
          <?php include 'alt.php'; ?>
    </body>
</html>
