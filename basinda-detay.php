<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");
$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = '{$lang}' ")->fetch(PDO::FETCH_ASSOC);?>
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
                                            <li class="breadcrumb-item"><a href="<?php echo $ayarlar["strURL"]; ?>/basinda-biz"><?php echo LANG("Basında Biz",$lang); ?></a></li>
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
            <section class="blog__area pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="blog_details-wrapper">
                                <article class="postbox mb-40">
                                    <div class="postbox__thumb w-img">
                                        <a href="#">
                                            <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
                                        </a>
                                    </div>
                                    <div class="postbox__content postbox__content-2">
                                        <div class="blog__meta blog__meta-2 blog__meta-4 mb-15">
                                            <span><i class="far fa-calendar-check"></i> <?php echo date("d/m/Y", strtotime($tekil_veri_cek["haber_tarih"])); ?></span>
                                            <span><a href="#"><i class="far fa-user"></i> Op. Dr. Mehmet Yılmaz</a></span>
                                         </div>
                                        <h3 class="postbox__title postbox__title-2 mb-20">
                                            <a href="#"><?php echo $tekil_veri_cek["haber_baslik"]; ?></a>
                                        </h3>
                                        <div class="postbox__text mb-15">
                                           <?php echo $tekil_veri_cek["haber_aciklama"]; ?>
                                            <div class="row mt-50">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mb-15">
                                                    <div class="blog-share-icon text-left text-md-left">
                                                        <span><?php echo LANG("Paylaş",$lang); ?>: </span>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $tekil_veri_cek["haber_seo"]; ?>"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?url=<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $tekil_veri_cek["haber_seo"]; ?>&text=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><i class="fab fa-twitter"></i></a>
                                                        <a href="http://pinterest.com/pin/create/button/?url=<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $tekil_veri_cek["haber_seo"]; ?>&media=<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>&description=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><i class="fab fa-pinterest"></i></a>
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $tekil_veri_cek["haber_seo"]; ?>&title=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><i class="fab fa-linkedin"></i></a>
                                                        <a href="http://www.tumblr.com/share?v=3&u=<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $tekil_veri_cek["haber_seo"]; ?>&t=<?php echo $tekil_veri_cek["haber_baslik"]; ?>"><i class="fab fa-tumblr"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="author mt-80 mb-40 grey-bg">
                                        <div class="author__img text-center mb-30">
                                            <img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/blog/author/author.jpg" alt="Op. Dr. Mehmet Yılmaz">
                                        </div>
                                        <div class="author__text text-center">
                                            <h3>Op. Dr. Mehmet Yılmaz</h3>
                                            <div class="author__icon">
                                                <a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a>
                                                <a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a>
                                                <a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
                                                <a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a>
                                             </div>
                                           
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="blog__sidebar-wrapper">
                                <div class="widget sidebar-wrapper mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3><?php echo LANG("Son Haberler",$lang); ?></h3>
                                    </div>
                                    <ul class="recent-posts">
                                      <?php
                                          $veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND dil_id = '{$lang}' ORDER BY haber_ust_id ASC LIMIT 3");
                                          if ($veri_cek->rowCount()){
                                          foreach($veri_cek as $veri_listele){
                                    ?> <li class="d-flex">
                                            <div class="rc-thumb mr-15">
                                                <a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $veri_listele["haber_seo"]; ?>"><img style="width: 60px;" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>"></a>
                                            </div>
                                            <div class="rc-text">
                                                <h6><a href="<?php echo $ayarlar["strURL"]; ?>/basin/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h6>
                                                <div class="rc-meta"><span><?php echo date("d/m/Y", strtotime($veri_listele["haber_tarih"])); ?></span> </div>
                                            </div>
                                        </li>
                                        <?php
                                                }
                                              }else{
                                                "Listelenecek veri bulunamadı.";
                                              }
                                        ?>
                                    </ul>
                                </div>
                                <div class="widget sidebar-wrapper mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3><?php echo LANG("Instagram",$lang); ?></h3>
                                    </div>
                                    <ul id="Instafeed">
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-6.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-8.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?php echo $ayarlar["strURL"]; ?>/assets/img/insta/insta-9.jpg" alt=""></a></li>
                                    </ul>
                                </div>

                                <div class="widget sidebar-wrapper mb-40">
                                    <div class="sidebar-title mb-25">
                                        <h3><?php echo LANG("Sosyal Medya",$lang); ?></h3>
                                    </div>
                                    <div class="social-profile">
                                        <a href="<?php echo $ayarlar["strFacebook"]; ?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?php echo $ayarlar["strTwitter"]; ?>"><i class="fab fa-twitter"></i></a>
                                        <a href="<?php echo $ayarlar["strInstagram"]; ?>"><i class="fab fa-instagram"></i></a>
                                        <a href="<?php echo $ayarlar["strYoutube"]; ?>"><i class="fab fa-youtube"></i></a>
                                    </div>
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
