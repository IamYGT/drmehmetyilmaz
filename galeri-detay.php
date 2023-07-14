<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");

$tekil_veri_cek = $db->query("SELECT * FROM galeriler WHERE galeri_durum = 1 AND galeri_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);
$ustid = $tekil_veri_cek["galeri_ust_id"];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<head>
  <title><?php echo $tekil_veri_cek["galeri_baslik"]; ?> - Op. Dr. Mehmet Yılmaz</title>
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
                    <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/galeri"><?php echo LANG("Galeri",$lang); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $tekil_veri_cek["galeri_baslik"]; ?></li>
                  </ol>
                </nav>
              </div>
              <h1><?php echo $tekil_veri_cek["galeri_baslik"]; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="project__area pt-110">
      <div class="container">
        <div class="row">
          <div class="col-xl-7">
            <div class="section__title mb-30">
              <div class="section__icon mb-10">
                <span class="section__sub-title section__sub-title-2 section__sub-title-3">Op. Dr. Mehmet Yılmaz</span>
              </div>
              <h1 class="mb-100"><?php echo $tekil_veri_cek["galeri_baslik"]; ?></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid pb-40 pt-40">
        <div class="row">
          <?php
           $list = $db->query("SELECT * FROM files WHERE ustid =  '{$ustid}'  AND itable = 1");
             foreach($list as $row){
          ?>
          <div class="project__item col-md-3 mb-20 ">
            <div class="project__thumb w-img p-relative">
              <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" alt="project-1">
              <div class="project__icon transition-3 p-absolute">
                <a href="<?php echo $ayarlar["strURL"]; ?>/uploads/files/<?php echo $row["name"]?>" data-fancybox="images"> <i class="fal fa-plus"></i></a>
              </div>
              <div class="project__content p-absolute transition-3">
              </div>
            </div>
          </div>
          <?php
}
?>
        </div>
      </div>
      </div>
    </section>

  </main>
  <?php include 'alt.php'; ?>
</body>

</html>
