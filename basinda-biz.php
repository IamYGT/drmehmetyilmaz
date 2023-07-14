<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$sayfa = (isset($q) ? $q : 1);
$toplam_veri_sayisi = $db->query("SELECT COUNT(*) FROM haberler WHERE dil_id = '{$lang}' ")->fetchColumn();
$limit = 6; //gösterilecek veri sayısı
$sonSayfa = ceil($toplam_veri_sayisi/$limit);
$baslangic = ($sayfa-1)*$limit;
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<head>
  <title><?php echo LANG("Basında Biz",$lang); ?> - Op. Dr. Mehmet Yılmaz</title>
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
                    <li class="breadcrumb-item active" aria-current="page"><?php echo LANG("Basında Biz",$lang); ?></li>
                  </ol>
                </nav>
              </div>
              <h1><?php echo LANG("Basında Biz",$lang); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog__area pt-120 pb-75">
      <div class="container">
        <div class="row">
          <?php
        		$list = $db->query("SELECT * FROM haberler WHERE  dil_id = '{$lang}' ORDER BY haber_ust_id DESC LIMIT $baslangic,$limit");
      			if ($list->rowCount()){
    				foreach($list as $row){
            ?>
          <div class="col-xl-4 col-lg-4">
            <div class="blog__wrapper">
              <article class="postbox mb-40">
                <div class="postbox__thumb w-img">
                  <a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $row["haber_seo"]; ?>">
                    <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $row["haber_resim"]; ?>" alt="<?php echo $row["haber_baslik"]; ?>">
                  </a>
                </div>
                <div class="postbox__content postbox__content-3 grey-bg">
                  <h3 class="postbox__title mb-10">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $row["haber_seo"]; ?>"><?php echo $row["haber_baslik"]; ?></a>
                  </h3>
                  <div class="postbox__text mb-10">
                    <p><?php echo $row["haber_kisaaciklama"]; ?></p>
                  </div>
                  <div class="read-more">
                    <a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $row["haber_seo"]; ?>" class="link-btn"><?php echo LANG("Devamını Oku",$lang); ?></a>
                  </div>
                </div>
              </article>

            </div>
          </div>
          <?php
                                }
                              }else{
                                echo 'Listelenecek veri bulunamadı.';
                              }
                        ?>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <?php if($toplam_veri_sayisi > $limit){ ?>
            <div class="basic-pagination mb-40 text-center">
              <ul>
                <?php
                                $x = 2;
                                if($sayfa > 1){
                                  $onceki = $sayfa-1;
                                  echo '<li><a href="?q='.$onceki.'" ><i class="fas fa-angle-double-left"></i></a></li>';
                                }
                                if($sayfa==1){
                                  echo '<li  class="active" ><a   >1</a></li>';
                                } else {
                                  echo '<li><a href="?q=1" class="">1</a></li>';
                                }
                                if($sayfa-$x > 2){
                                  echo '...';
                                  $i = $sayfa-$x;
                                } else {
                                  $i = 2;
                                }
                                for($i; $i<=$sayfa+$x; $i++) {
                                  if($i==$sayfa){
                                    echo '<li class="active" ><a href="#">'.$i.'</a></li>';
                                  } else {
                                    echo '<li><a href="?q='.$i.'" class=" ">'.$i.'</a></li>';
                                  }
                                  if($i==$sonSayfa) break;
                                }
                                if($sayfa < $sonSayfa){
                                  $sonraki = $sayfa+1;
                                  echo '<li><a href="?q='.$sonraki.'"  ><i class="fas fa-angle-double-right"> </i></a> </li>';
                                }
                            ?>
              </ul>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'alt.php'; ?>
</body>

</html>
