<!--style type="text/css">
  .column_right{
  float: left;
  width: 697px;
  margin:0px 10px;
  }
  .box_column_right .list_product li{
  width: 209px;
  }
  .box_column_right .img_pro img {
  max-width: 200px;
  }
  #banner_product_list {
  width: 697px;
  float: left;
  }
  #banner_product_list img {
  width: 745px;
  }
  .img_pro {
  width: 209px;
  display: table-cell;
  height: 150px;
  vertical-align: middle;
  }
</style>
<div class="content_full">
  <?php $this->load->view("column_left"); ?>
  <div class="column_right"> 
    <div id="location"><a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> » <a href=""><?php echo $title; ?></a> </div>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="box_column_right">
      <div class="title_box_right">
        <h1><?php echo $title; ?></h1>
        <div class="r" style="float: left !important;width:100%">
          <div class="paging r" style="float: left !important;margin: 10px 0px auto !important;position: relative;left: 10%;">
          </div>
          <div id="sort" class="l" style="float: right !important;">
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <hr size="1" color="#ccc" style="margin:0;">
      <div class="list_product">
        <?php
			if(isset($config) && $config['cate_display'] == 'static_html'){
				echo '<div id="comment_fb" style="margin-top:10px;padding:0px 10px;">
                <div id="cmt_face" class="fb-comments" data-href="'.base_url().uri_string().'.html" data-width="677" data-num-posts="100"></div>
              </div>';
			}else{
		?>
        <ul id="style_grid">
        <?php 
			if(isset($list_pro) && $list_pro != NULL){
				$stt = 0;
				foreach($list_pro as $value){
					@$images = unserialize($value['pro_images']);
					$stt++;
		  ?>
          <li style="height:auto" class="">
            <div class="tooltip">
              <div class="protip-title"> 
              	<span class="cssName"><?php echo $value['pro_name']; ?></span> 
              </div>
              <div class="protip-content">
                <p class="price_product">Giá: <b class="red"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></b> </p>
                <p><strong>Bảo hành: </strong><span><?php if($value['pro_war'] == NULL){echo "Liên hệ";}else{echo $value['pro_war']; }?></span></p>
                <p><b>Tình trạng: <?php if($value['pro_qty'] == 0){echo "Hết hàng";}else{echo "Còn hàng";}?></b></p>
                <p> <?php if($value['pro_info'] == NULL){}else{echo "<b>Thông tin sản phẩm</b><br />";echo $value['pro_info'];}?></p>
              </div>
            </div>
            <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="img_pro"> 
            <img class="lazy" alt="<?php echo $value['pro_name']; ?>" src="<?php echo base_url(); ?>public/images/grey.gif" data-original="<?php if($value['pro_images'] == NULL){echo base_url()."public/images/no-images.jpg";}else{echo base_url()."uploads/products/thumb/".$images[0]."";}?>" />
            <?php
				if($value['pro_market'] != 0){
					$temp = 100 - ($value['pro_price']*100/(int)$value['pro_market']);
					$percent = round($temp);
					echo '<span class="is_saleoff bg"><span>-'.$percent.'%</span></span>';
				}
			?>
            </a>
            <h3 class="h3_pro_name">
            	<a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>" class="name_pro"><?php echo $this->string->cut($value['pro_name'],90); ?></a>
            </h3>
            <p class="price_pro"><?php if($value['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($value['pro_price'])." đ"; }?></p>
            <p class="old_price"><?php if($value['pro_market'] == 0){echo "";}else{echo @number_format($value['pro_market'])." đ"; }?></p>
            <a href="<?php echo base_url()."home/cart/addcart/".$value['pro_id'].""; ?>" class="btn_datmua"></a> 
            </li>
            <?php
			if($stt % 3 == 0){
				echo '<div class="clear"></div>';
			}
			}
			}else{
				echo "<div style='width:96.9%;padding:10px;'>Sản phẩm chưa được cập nhật</div>";
			}
			?>
        </ul>
        <?php
			}
		?>
      </div>
      <div class="clear"></div>
      <hr size="1" color="#ccc" style="margin:0;">
      <div class="pagination page-top">
      <div id="pagination" class=""><?php  echo $this->pagination->create_links();?></div>
		</div>
    </div>
  </div>
  <?php $this->load->view("column_right"); ?>
</div-->


<section id="main-body">
      <div class="main-content">
        <div class="row">
          <div class="col-24 cate-breadcrumbs">
            <a href="">Trang chủ </a>>><a href=""> <?php echo $title; ?></a>
          </div>
          <div class="col-5 cate-left">
            <div class="cate-left-menu">
              <p class="cate-left-menu-title"><?php echo $title; ?></p>
              <ul>
              <?php
                  if(isset($list_cate_menu) && $list_cate_menu != NULL){
                    foreach($list_cate_menu as $k => $v){
                      //var_dump($v);
                      //die();
                  ?>
                  <li><a href="<?php echo base_url()."".$v['cate_rewrite']."/c".$v['cate_id'].".html"; ?>""><?php echo $v['cate_name'] ?></a></li>
                  <?php
                    }
                  }
                ?>
              </ul>
            </div>
            <div class="cate-left-trademark">
              <p class="cate-left-menu-title">Thương Hiệu</p>
              <ul>
                <li><a href="#">Máy hàn LINCOLN - MỸ </a></li>
                <li><a href="#">MÁY HÀN MILLER - MỸ</a></li>
                <li><a href="#">MÁY HÀN ESAB - THỤY ĐIỂN</a></li>
                <li><a href="#"> MÁY HÀN KEMPPI - PHẦN LAN</a></li>
                <li><a href="#">Máy hàn LINCOLN - MỸ </a></li>
                <li><a href="#">MÁY HÀN MILLER - MỸ</a></li>
                <li><a href="#">MÁY HÀN ESAB - THỤY ĐIỂN</a></li>
                <li><a href="#"> MÁY HÀN KEMPPI - PHẦN LAN</a></li>
                <li><a href="#">Máy hàn LINCOLN - MỸ </a></li>
                <li><a href="#">MÁY HÀN MILLER - MỸ</a></li>
                <li><a href="#">MÁY HÀN ESAB - THỤY ĐIỂN</a></li>
                <li><a href="#"> MÁY HÀN KEMPPI - PHẦN LAN</a></li>
                <li><a href="#">Máy hàn LINCOLN - MỸ </a></li>
                <li><a href="#">MÁY HÀN MILLER - HÀN QUỐC</a></li>
                <li><a href="#">MÁY HÀN ESAB - TRUNG QUỐC</a></li>
              </ul>
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
              <div class="left-commitment-t cate-left-commitent">
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
                  <img src="<?php echo base_url();?>public/images/destail-01.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/destail-01.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/destail-05.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/destail-01.jpg" alt="">
                </a>
              </div>
              <div class="left-img-partner">
                <a href="#">
                  <img src="<?php echo base_url();?>public/images/destail-05.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-19 cate-right">
            <div class="cate-r-banner">
              <img src="<?php echo base_url();?>public/images/cateloger-banner.jpg" alt="">
            </div>
            <div class="cate-r-title">
              <p class="cate-title-info"><?php echo $title; ?></p>
            </div>
            <?php 
            if(isset($list_pro) && $list_pro != NULL){
              $stt = 0;
              foreach($list_pro as $value){
                @$images = unserialize($value['pro_images']);
                $stt++;
                //var_dump($value);die();
            ?>
            <div class="cate-iteam-pro">
              <div class="cate-iteam-main">
                <div class="cate-iteam-img">
                  <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><img src="<?php echo base_url()."uploads/products/thumb/".$images[0]."" ?>" alt=""></a>
                </div>
                <div class="cate-iteam-info">
                  <a href="<?php echo base_url()."".$value['pro_name_rewrite']."/p".$value['pro_id'].".html"; ?>"><?php echo $value['pro_name']; ?></a>
                  <p><?php echo $value['pro_market'] ?></p>
                  <span><?php echo $value['pro_price'] ?></span>
                </div>
                <?php if($value['pro_saleoff'] == 1){ ?>
                <div class="sale">
                  <p>Giảm</p>
                  <span class="sale-number">-<?php echo round(( $value["pro_market"] - $value["pro_price"] ) / $value["pro_market"] * 100) ?></span><span>%</span>
                </div>
                <?php } ?>              
              </div>
            </div>
            <?php } }  ?>
            <div class="pagination page-top">
              <div id="pagination" class=""><?php  echo $this->pagination->create_links();?></div>
            </div>
          </div>
          <div class="col-24 cate-news">
            <div class="cate-r-title-news">
              <p class="cate-title-info">Tin tức sự kiện</p>
              <a href="<?php echo base_url(); ?>tin-tuc/">Xem tất cả &nbsp >></a>
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
    </section>