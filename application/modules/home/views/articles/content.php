<section id="main-body">
      <div class="main-content">
        <div class="row">
          <div class="col-24 de-breadcrumbs">
            <a href="<?php echo base_url();?>">Trang chủ </a>>><a href=""> <?php echo $title; ?></a>
          </div>
          <div class="col-24">
            <div class="de-product-l">
            <h1 style="margin:20px 0px; font-weight: bold;"><?php echo $title; ?></h1>
              <?php
                if(isset($list_new) && $list_new != NULL){
                  foreach($list_new as $value){
                  //var_dump($value);die();
                  @$images = unserialize($value['news_images']);
              ?>
                <div class="cate-news-list-iteam">
                  <img src="<?php echo base_url()."uploads/news/thumb/".$value['news_images']."" ?>" alt="">
                  <div class="cate-news-list-info">
                    <a href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>"><?php echo $value["news_title"]; ?></a>
                    <p><?php echo $value['news_info']; ?></p>
                  </div>
                </div>
            <?php 
                }
              }
             ?>   
            <div class="pagination page-top">
              <div id="pagination" class=""><?php  echo $this->pagination->create_links();?></div>
            </div>        
            </div>
            <div class="de-product-r">
              <div class="left-content-video">
                <div class="title-new-left">
                  <p>video</p>
                </div>
                <div class="left-main-video">
                  <iframe width="100%" height="150px" src="https://www.youtube.com/embed/7QF_QRMyeds" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="left-content-commitment">
                <div class="left-commitment-t de-left-commitent">
                  <p class="abc">Cam kết</p>
                  <ul class="camket-phu">
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
            </div>
          </div>
          <div class="col-24 cate-news">
            <div class="cate-r-title-news">
              <p class="cate-title-info">Tin tức sự kiện</p>
              <a href="#">Xem tất cả &nbsp >></a>
            </div>
            <?php
                if(isset($list_news_invole) && $list_news_invole != NULL){
                  foreach($list_news_invole as $value){
                  //var_dump($value);die();
                  @$images = unserialize($value['news_images']);
              ?>
            <div class="cate-news-iteam">
              <img src="<?php echo base_url()."uploads/news/thumb/".$value['news_images']."" ?>" alt="">
              <a href="<?php echo base_url()."tin-tuc/".$value['news_rewrite']."/".$value['news_id'].".html"; ?>"><?php echo $value["news_title"]; ?></a>
            </div>
        <?php 
            }
          }
         ?>          
          </div>
        </div>
      </div>
    </section>