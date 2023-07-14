<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM kategoriler WHERE kategori_durum = 1 AND kategori_seo = '{$_GET["url"]}' AND dil_id = '$lang' ")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
  <title><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?> - Op. Dr. Mehmet Yılmaz</title>
  <meta name="description" content="<?php echo 	$tekil_veri_cek["kategori_kisaaciklama"]; ?>">
  <?php include 'css.php'; ?>
</head>
<body>
  <?php include 'ust.php'; ?>
  <main>
    <section class="page__title p-relative pt-200 pb-200" data-background="<?php echo $ayarlar["strURL"]; ?>/assets/img/page-title/page-title2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="page__title-inner text-center">
              <div class="page__title-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/index"><?php echo LANG("Anasayfa",$lang); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/hastaliklar"><?php echo LANG("Hastalıklar",$lang); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?></li>
                  </ol>
                </nav>
              </div>
              <h1><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services__area pb-120 pt-120">
      <div class="container">
        <div class="row">
          <?php
           $altkatlar = $db->query("SELECT * FROM kategoriler WHERE altkategori_id = ".$tekil_veri_cek["kategori_ust_id"]." AND dil_id = 'tr'");
         foreach($altkatlar as $tekil_veri_cek2){   ?>

          <div class="col-xl-3 col-lg-3 col-md-3 grid-item cat1 cat4 cat3">
            <div class="case__item-2 p-relative mb-30">
              <div class="case__thumb-2 w-img">
              <a href="<?php echo $ayarlar["strURL"]; ?>/alt-kategori/<?php echo $tekil_veri_cek2["kategori_seo"]; ?>">  <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/categories/<?php echo $tekil_veri_cek2["kategori_resim"]; ?>" alt="<?php echo $tekil_veri_cek2["haber_baslik"]; ?>"> </a>
              </div>
              <div class="case__content-2 transition-3 grey-bg-3 p-relative">
                <h3><a href="<?php echo $ayarlar["strURL"]; ?>/alt-kategori/<?php echo $tekil_veri_cek2["kategori_seo"]; ?>"><?php echo $tekil_veri_cek2["kategori_baslik"]; ?></a></h3>
                <p><?php echo $tekil_veri_cek2["haber_kisaaciklama"]; ?> </p>
                <a href="<?php echo $ayarlar["strURL"]; ?>/alt-kategori/<?php echo $tekil_veri_cek2["kategori_seo"]; ?>" class="link-btn"><?php echo LANG("Devamını Oku",$lang); ?></a>
              </div>
            </div>
          </div>

          <?php
        }

        ?>

<div class="col-xl-12 col-lg-12 col-md-12">
  <div class="case__item-2 p-relative mb-30">
    <div class="case__thumb-2 w-img">
    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/categories/<?php echo $tekil_veri_cek["kategori_resim"]; ?>" alt="<?php echo $tekil_veri_cek2["kategori_Baslik"]; ?>"> </a>
    </div>
    <div style="padding:30px" class=" transition-3 grey-bg-3 p-relative">
      <h3><?php echo 	$tekil_veri_cek["kategori_baslik"]; ?></h3>
      <p><?php echo 	$tekil_veri_cek["kategori_aciklama"]; ?> </p>
     </div>
  </div>
</div>

        </div>
      </div>
    </section>

  </main>
  <?php include 'alt.php'; ?>
</body>

</html>
