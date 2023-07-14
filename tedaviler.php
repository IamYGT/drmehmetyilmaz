<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
  <title><?php echo LANG("Tedaviler",$lang); ?> - Op. Dr. Mehmet Yılmaz</title>
  <?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
  <main>
    <section class="page__title p-relative pt-200 pb-200" data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/page-title/page-title.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="page__title-inner text-center">
              <div class="page__title-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo LANG("Tedaviler",$lang); ?></li>
                  </ol>
                </nav>
              </div>
              <h1><?php echo LANG("Tedaviler",$lang); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services__area pb-120 pt-120">
      <div class="container">
        <div class="row">
          <?php
                         $veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 99");
                         if ($veri_cek->rowCount()){
                         foreach($veri_cek as $veri_listele){
                   ?>

          <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat1 cat4 cat3">
            <div class="case__item-2 p-relative mb-30">
              <div class="case__thumb-2 w-img">
              <a href="<?php echo $ayarlar["strURL"]; ?>/tedavi/<?php echo $veri_listele["haber_seo"]; ?>">  <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>"> </a>
              </div>
              <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                <h3><a href="<?php echo $ayarlar["strURL"]; ?>/tedavi/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></h3>
                <p><?php echo $veri_listele["haber_kisaaciklama"]; ?> </p>
                <a href="<?php echo $ayarlar["strURL"]; ?>/tedavi/<?php echo $veri_listele["haber_seo"]; ?>" class="link-btn"><?php echo LANG("Devamını Oku",$lang); ?></a>
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
