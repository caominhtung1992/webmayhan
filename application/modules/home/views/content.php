<section id="main-body">
      <div class="new-product">
        <div class="new-pro-main">
          <div class="row">
            <div class="col-24">
              <div class="new-pro-title">
                <p>Sản phẩm mới</p>
                <a href="<?php echo base_url(); ?>san-pham-moi/">Xem tất cả >></a>
              </div>
            </div>
          </div>
          <div class="slider-product">
            <ul class="owl-carousel jcarousel-skin-tango1" id="mycarousel1">
            <?php 
              if(isset($pro_new) && $pro_new != NULL){
                $stt = 0;
                foreach($pro_new as $value){
                  @$images = unserialize($value['pro_images']);
                  //var_dump($value);die();
                  $stt++;
              ?>
                  <li class="iteam_slider">
                    <div class="iteam_slider_top"><img src="<?php echo base_url()."uploads/products/thumb/".$images[0]."" ?>" /></div>
                    <div class="iteam_slider_bot">
                        <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><?php echo $value['pro_name']; ?></a>
                        <p><?php echo $value['pro_market']; ?></p>
                        <span><?php echo $value['pro_price']; ?></span>
                      </div>
                  </li>
                <?php 
                  }
                } 
                ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="main-content">
        <div class="row">
          <div class="col-5">
            <div class="title-pro-content">
              <h2>
                SẢN Phẩm
              </h2>
            </div>
            <div class="left-pro-content">
            <?php
              if(isset($listall['cate']) && $listall['cate'] != NULL){
                foreach($listall['cate'] as $k => $v){
            ?>
              <div class="left-pro-iteam">
                <p> <?php echo $v['cate_name']; ?> </p>
                <?php 
                  if($listall['sub'][$k] != NULL){
                ?>
                <ul>
                <?php
                  if(isset($listall['sub']) && $listall['sub'] != NULL){
                    foreach($listall['sub'][$k] as $key => $value){
                      echo "<li><a class='sub_1' href='".base_url()."".$value['cate_rewrite']."/c".$value['cate_id'].".html'>".$value['cate_name']."</a></li>";
                              }
                  }
                  ?>
                </ul>
                <?php } ?>
              </div>
              <?php
              }
            }
            ?>         
            </div>
            <div class="left-content-video">
              <div class="title-new-left">
                <p>video</p>
              </div>
              <div class="left-main-video">
                <iframe width="100%" height="150px" src="https://www.youtube.com/embed/7QF_QRMyeds" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="left-content-commitment">
              <div class="left-commitment-t">
                <p class="abc">Cam kết</p>
                <ul>
                  <li><a href="#">Bán đúng giá đăng</a></li>
                  <li><a href="#">Bán hàng đúng như miêu tả</a></li>
                  <li><a href="#">Giao hàng thu tiền tận nhà</a></li>
                  <li><a href="#">Đổi trả hàng trong 7 ngày</a></li>
                  <li><a href="#">Bảo hành bảo trì tận nơi</a></li>
                  <li><a href="#">Hàng mới 100%</a></li>
                </ul>
              </div>
              <div class="left-commitment-b">
                <img src="<?php echo base_url();?>public/images/images-adv.jpg" alt="">
              </div>
            </div>
            <div class="left-content-partner">
              <p class="left-title-partner">
                Đối tác
              </p>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/img-parten01.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/img-parten02.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/img-parten01.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/img-parten02.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/img-parten01.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-14 main-content-mid">
            <div class="main-product">
              <div class="title-main-product">
                <p>Máy cắt</p>
              </div>
              <div class="grouptop-main-pro">
               <?php
                if(isset($list_pro_cutting) && $list_pro_cutting != NULL){
                  foreach($list_pro_cutting as $value){
                  //echo '</pre>'.var_dump($value);die();
                  @$images = unserialize($value['pro_images']);
              ?>
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>">
                      <img src="<?php echo base_url()."uploads/products/thumb/".$images[0]."" ?>" alt="">
                      <div class="sale">
                        <p>Giảm</p>
                        <span class="sale-number">-<?php echo round(( $value["pro_market"] - $value["pro_price"] ) / $value["pro_market"] * 100) ?></span><span>%</span>
                      </div>
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><?php echo $value["pro_name"]; ?></a>
                    <p><?php echo $value["pro_market"] ?> vnđ</p>
                    <span><?php echo $value["pro_price"] ?> vnđ</span>
                  </div>
                  <div class="product-info">
                    <div class="product-info-top">
                      <p><?php echo $value["pro_info"] ?></p>
                    </div>
                    <div class="product-info-bot">
                      <a class="detail-pro" href="#">Chi Tiết</a>
                      <a class="comparison-pro" href="#">So Sánh</a>
                    </div>
                  </div>
                </div>
                <?php 
                  }
                }
                ?>
              </div>   
            </div>
            <div class="main-product">
              <div class="title-main-product">
                <p>Máy Hàn</p>
              </div>
              <?php
                if(isset($list_pro_hate) && $list_pro_hate != NULL){
                  foreach($list_pro_hate as $value){
                   @$images = unserialize($value['pro_images']);
              ?>
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>">
                      <img src="<?php echo base_url()."uploads/products/thumb/".$images[0]."" ?>" alt="">
                    </a>
                    <div class="sale">
                        <p>Giảm</p>
                        <span class="sale-number">-<?php echo round(( $value["pro_market"] - $value["pro_price"] ) / $value["pro_market"] * 100) ?></span><span>%</span>
                      </div>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><?php echo $value["pro_name"] ?></a>
                     <p><?php echo $value["pro_market"] ?> vnđ</p>
                    <span><?php echo $value["pro_price"] ?> vnđ</span>
                  </div>
                </div>
              <?php 
                } 
              }
             ?>
            </div>
            <div class="main-product">
              <div class="title-main-product">
                <p>Máy cắt uốn</p>
              </div>
                <?php
                if(isset($list_pro_curling) && $list_pro_curling != NULL){
                  foreach($list_pro_curling as $value){
                   @$images = unserialize($value['pro_images']);
              ?>
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>">
                      <img src="<?php echo base_url()."uploads/products/thumb/".$images[0]."" ?>" alt="">
                    </a>
                    <div class="sale">
                        <p>Giảm</p>
                        <span class="sale-number">-<?php echo round(( $value["pro_market"] - $value["pro_price"] ) / $value["pro_market"] * 100) ?></span><span>%</span>
                      </div>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><?php echo $value["pro_name"] ?></a>
                     <p><?php echo $value["pro_market"] ?> vnđ</p>
                    <span><?php echo $value["pro_price"] ?> vnđ</span>
                  </div>
                </div>
              <?php 
                } 
              }
             ?>
            </div>
            <div class="main-product">
              <div class="title-main-product">
                <p>Phụ Kiện máy hàn</p>
              </div>
                <?php
                if(isset($list_pro_pkhan) && $list_pro_pkhan != NULL){
                  foreach($list_pro_pkhan as $value){
                   @$images = unserialize($value['pro_images']);
              ?>
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>">
                      <img src="<?php echo base_url()."uploads/products/thumb/".$images[0]."" ?>" alt="">
                    </a>
                    <div class="sale">
                        <p>Giảm</p>
                        <span class="sale-number">-<?php echo round(( $value["pro_market"] - $value["pro_price"] ) / $value["pro_market"] * 100) ?></span><span>%</span>
                      </div>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><?php echo $value["pro_name"] ?></a>
                     <p><?php echo $value["pro_market"] ?> vnđ</p>
                    <span><?php echo $value["pro_price"] ?> vnđ</span>
                  </div>
                </div>
              <?php 
                } 
              }
             ?>
            </div>
          </div>
          <div class="col-5 right-merit">
            <div class="right-content-merit">
              <p>BẰNG KHEN  </p>
              <SPAN>& CHỨNG NHẬN </SPAN>
              <div class="right-main-merit">
                <div class="iteam-right-merit">
                  <img src="<?php echo base_url();?>public/images/merit01.jpg" alt="">
                </div>
                <div class="iteam-right-merit">
                  <img src="<?php echo base_url();?>public/images/merit02.jpg" alt="">
                </div>
                <div class="iteam-right-merit">
                  <img src="<?php echo base_url();?>public/images/merit03.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="right-main-new">
              <div class="title-main-new-right">
                <p>Tin tức sự kiện</p>
              </div>
              <?php
              if(isset($list_news) && $list_news != NULL){
                foreach($list_news as $value){
            ?>
              <div class="iteam-main-new-right">
                <a href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>" alt="<?php echo $value['news_title']; ?>" /><img src="<?php echo base_url()."uploads/news/thumb/".$value['news_images']."";?>" alt=""></a>
                <a class="link-new-right" href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>"><?php echo $value['news_title']; ?></a>
              </div>
            <?php
              }
            } 
            ?>
            </div>
          </div>
        </div>
      </div>
    </section>