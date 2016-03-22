<!--div class="content_full">
<style type="text/css">
.box_column_right{width: 97.6%;}
</style>
  <?php $this->load->view("column_left"); ?>
  
  <div class="column_right">
    <div id="location">
    <a href="/" title="Trang chủ">Trang chủ</a> » <a href=""><?php echo $title; ?></a>
    </div>
    <div class="clear"></div>
    <div class="box_column_right" style="padding:10px;">
      <div id="detail_page">
        <h1><?php echo $detail_page['page_title']; ?></h1>
        <div class="time"><?php echo $detail_page['page_date']; ?></div>
        <div class="clear space2"></div>
        <div class="title_box_right" style="height:26px;">
          <div class="l"> 
            <div class="addthis_toolbox addthis_default_style " style="width: 201px;">
            <a class="addthis_button_preferred_1"></a>
            <a class="addthis_button_preferred_2"></a>
            <a class="addthis_button_preferred_3"></a>
            <a class="addthis_button_preferred_4"></a>
            <a class="addthis_button_compact"></a>
            <a class="addthis_counter addthis_bubble_style"></a>
            </div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-523824bb471c1b61"></script>
          </div>
          <div class="r">
            <div class="l" style="margin-right:10px;"><a href="javascript:window.print();" target="_blank"><i class="bg icon_print"></i> <span class="blue">In trang</span></a></div>
            <div class="l"><a href="http://www.freetellafriend.com/tell/?heading=Share+This+Article&amp;bg=1&amp;option=email&amp;url=http://dochoikts.hurasoft.com/nikon-sua-ong-kinh-bang-cach-dun-soi/a31.html" target="_blank"><i class="bg icon_email_small"></i> <span class="blue">Gửi cho bạn bè</span></a></div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="article">
          <?php
		  	if($detail_page['page_status'] == 0){
				echo "Nội dung đang chờ cập nhật và chỉnh sửa";
			}else{
				echo $detail_page['page_full'];
			}
		   ?>
        </div>
      </div>
      <div class="bg_border_page_detail"></div>
      <div class="clear"></div>
    </div>
  </div>
</div-->


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
                    if($detail_page['page_status'] == 0){
                    echo "Nội dung đang chờ cập nhật và chỉnh sửa";
                  }else{
                    echo $detail_page['page_full'];
                  }
               ?>
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
            </div>
          </div>
          <div class="col-24 cate-news">
            <div class="cate-r-title-news">
              <p class="cate-title-info">Tin tức sự kiện</p>
              <a href="#">Xem tất cả &nbsp >></a>
            </div>
            <div class="cate-news-iteam">
              <img src="<?php echo base_url();?>public/images/cate-images-news.jpg" alt="">
              <a href="#">Máy hàn inverter và những tính năng ưu điểm vượt trội</a>
            </div>
            <div class="cate-news-iteam">
              <img src="<?php echo base_url();?>public/images/cate-images-news.jpg" alt="">
              <a href="#">Máy hàn inverter và những tính năng ưu điểm vượt trội</a>
            </div>
            <div class="cate-news-iteam">
              <img src="<?php echo base_url();?>public/images/cate-images-news.jpg" alt="">
              <a href="#">Máy hàn inverter và những tính năng ưu điểm vượt trội</a>
            </div>
            <div class="cate-news-iteam">
              <img src="<?php echo base_url();?>public/images/cate-images-news.jpg" alt="">
              <a href="#">Máy hàn inverter và những tính năng ưu điểm vượt trội</a>
            </div>
            <div class="cate-news-iteam">
              <img src="<?php echo base_url();?>public/images/cate-images-news.jpg" alt="">
              <a href="#">Máy hàn inverter và những tính năng ưu điểm vượt trội</a>
            </div>
          </div>
        </div>
      </div>
    </section>