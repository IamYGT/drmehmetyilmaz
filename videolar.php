<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
    <head>
      <title><?php echo LANG("Videolar",$lang); ?> - Op. Dr. Mehmet Yılmaz</title>
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
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo LANG("Videolar",$lang); ?></li>
                                        </ol>
                                        </nav>
                                </div>
                                <h1><?php echo LANG("Videolar",$lang); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services__area pb-40 pt-40">
                <div class="container-fluid">
                    <div class="row">

                      <?php
                          $veri_cek = $db->query("SELECT * FROM videolar WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 999");
                          if ($veri_cek->rowCount()){
                          foreach($veri_cek as $veri_listele){
                      ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="services__item p-relative mb-30">
                                <div class="services__thumb w-img p-relative">
                                  <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $veri_listele["haber_description"]; ?>" title="<?php echo 	$veri_listele["haber_baslik"]; ?>" frameborder="1"   allowfullscreen></iframe>
                                 </div>

                                <div class="services__overlay p-absolute transition-3 text-center">
                                    <h3><?php echo 	$veri_listele["haber_baslik"]; ?></h3>
                                     <a href="https://www.youtube.com/watch?v=<?php echo $veri_listele["haber_description"]; ?>" class="s-btn s-btn__white-2"><?php echo LANG("İncele",$lang); ?></a>
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
