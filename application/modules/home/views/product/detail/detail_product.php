<!--link rel="stylesheet" href="<?php echo base_url(); ?>public/styles/magiczoom.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/magiczoom.js"></script> 
<script type="text/javascript">
  MagicZoom.options = {
    'disable-zoom' : false,
    'selectors-change' : 'mouseover',
    'zoom-align' : 'center'
  }
</script> 
<script>
$(document).ready(function(e) {
$("#tab_detail_product .title_tab a").click(function(){
  $("#tab_detail_product .title_tab a").removeClass("current");
  $(this).addClass("current");
  $("#tab_detail_product .content_tab .cf").hide();
  $($(this).attr("href")).show();
  
  return false;
});
  $(".show_lightbox_img a").lightBox(); 
});
</script>
<div class="content_full">
  <?php $this->load->view("column_left"); ?>
  <div class="column_right">
    <div id="location">
    <a href="<?php echo base_url(); ?>" title="Trang chủ">Trang chủ</a> &raquo; <a href=""><?php echo $detail['pro_name']; ?></a></div>
    <div class="clear"></div>
    <div class="box_column_right" style="padding:10px;">
      <div id="detail_product">
        <div class="clear"></div>
        <p>&nbsp;</p>
        <div id="img_product">
          <div id="img_large" style="border: 1px solid #ccc;width: 348px;">
          <?php
			@$images = unserialize($detail['pro_images']);
		  ?>
            <div class='zoomp' style="height:309px; width:317px; display:table-cell; vertical-align:middle;"> 
            <a class="MagicZoom" id="Zoomer" rel="selectors-effect-speed: 600" href="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" title="<?php echo $detail['pro_name']; ?>" > 
            <img src="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" title="<?php echo $detail['pro_name']; ?>" alt="<?php echo $detail['pro_name']; ?>" /> 
            </a> 
            </div>
          </div>
          
          
          <div class="show_lightbox_img"> 
          <a id="view_large" class="bg" href="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>"></a> 
          	<?php
				if($detail['pro_images'] != NULL){
					foreach($images as $value){
						echo "<a  href='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$value."'></a> ";
					}
				}
			?>
          </div>
          <div id="rate"> </div>
         
          <div class="clear space2"></div>
          <ul id="img_thumb">
          	<?php
				if($detail['pro_images'] != NULL){
					foreach($images as $img){
						echo "<li> ";
						echo "<a class='img_thumb'  href='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$img."' title='".$detail['pro_name']."' rel='zoom-id:Zoomer;' rev='".base_url()."uploads/products/".$detail['pro_folderimg']."/".$img."'>";
							echo "<img src= '".base_url()."uploads/products/thumb/".$img."' alt='".$detail['pro_name']."' /> ";
						echo "</a> ";
						echo "</li>";
					}
				}
			?>
            
          </ul>
        </div>
      
        <div id="overview_product">
          <h1 class="detail_title"><?php echo $detail['pro_name']; ?></h1>
          <p class="detail_des">
          	<?php echo $detail['pro_info']; ?>
          </p>


          <p class="right_pro_pro_code" style="width:323px"><span style="color:black;font-weight:bold">Mã sp: </span><?php if($detail['pro_code'] == NULL){echo $detail['pro_id'];}else{echo $detail['pro_code'].""; } ?></p>
          <p class="warranty"><span style="font-weight:bold;">Bảo hành:</span> <?php if($detail['pro_war'] == NULL){echo " - ";}else{echo $detail['pro_war'].""; } ?></p>
          <p class="promotions"><span style="text-decoration:underline;font-weight:bold;">Khuyến mãi:</span> <?php if($detail['pro_promotion'] == NULL){echo " - ";}else{echo $detail['pro_promotion'].""; } ?></p>
          <p class="status">Trạng thái: <span style="color:#f00;"> <?php if($detail['pro_qty'] == NULL){echo "Hết hàng";}else{echo "Còn hàng";}?></span></p>
          <p class="price">Giá: <span style="color:#f00;font-size:16px;"> <?php if($detail['pro_price'] == 0){echo "Liên hệ";}else{echo @number_format($detail['pro_price'])." đ"; } ?></span></p>
          <p class="market_price">Giá thị trường: <span style="text-decoration:line-through;color:#666;"> <?php if($detail['pro_market'] == 0){echo "";}else{echo @number_format($detail['pro_market'])." đ"; } ?> </span></p>
          <p class="market_price" style="margin-top:0px;">
          	<a style="color:#0a62ac" href="javascript:user_like_content(<?php echo $detail['pro_id']; ?>,'pro');">Thêm vào yêu thích <img style="max-width: 25px;position: relative;top: 5px;" src="<?php echo base_url(); ?>public/images/icons_user_like.png" alt="Thêm vào yêu thích" title="Thêm vào yêu thích"></a>
          </p>
          
          <div class="synthesis">
          <form action="<?php echo base_url()."home/cart/addcart/".$detail['pro_id'].""; ?>" method="post">
            <div class="cssOrder" style="float:left;"><span style="font-size:14px">Số lượng</span>
              <select id="s_quantity" name="s_quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <div class="cssOrder" style="float:right;"> 
            <input style="position:relative;left:17px;top:-5px;border: none;cursor:pointer;" type="submit" value="" class="btn_datmua_to bg" />
            </div>
            </form>
          </div>
          <div class="share_this"> <span class='st_facebook' displayText=''></span> <span class='st_twitter' displayText=''></span> <span class='st_googleplus' displayText=''></span> <span class='st_sharethis' displayText=''></span> 
            <script type="text/javascript">var switchTo5x=true;</script> 
            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
            <script type="text/javascript">stLight.options({publisher: "a7e862b4-2800-4bf5-9a3a-015522fcf16b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
          </div>
        </div>
        
        <div class="clear"></div>
      </div>
      
      <div class="clear"></div>
      <div id="tab_detail_product">
        <div class="title_tab">
        <a href="#dacdiem" class="nobdr_l current">Đặc điểm</a>
        <a href="#thongsokythuat" class="">Thông số kỹ thuật</a> 
        <a href="#binhluan" class="">Bình luận</a>
        </div>
       
        <div class="content_tab">
          <div id="dacdiem" class="cf current">
            <?php if($detail['pro_info'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_info'].""; } ?>
          </div>
          
          <div id="thongsokythuat" class="cf">
            <?php if($detail['pro_full'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_full'].""; } ?>
          </div>
          
          <div id="binhluan" class="cf">
          	<div id="comment_fb" style="margin-top:10px;">
                <div id="cmt_face" class="fb-comments" data-href="<?php echo base_url().uri_string().".html";?>" data-width="651" data-num-posts="100"></div>
            </div>
          </div>
          
        </div>
     
      </div>
     
      <div class="clear"></div>
      <p>&nbsp;</p>
      <div class="clear"></div>
    </div>
    
  </div>
  
  <?php $this->load->view("column_right"); ?>
</div>
<script type="text/javascript">
// User like product
function user_like_content(a,b){
	$.post("<?php echo base_url()."home/users/user_like_content"; ?>",{pro_id:a,user_id:b},
		function(c){
			//alert(c);
			//return false;
			if(c == 1){
				if(confirm("Để sử dụng chức năng này bạn cần đăng nhập. Click OK để đăng nhập")){
					window.location="/dang-nhap.html?returnTo="+window.location
				}
			}else{
				if(c == 2){
					alert("Bạn đã lưu rồi")
				}else{
					alert("Bạn đã lưu thành công")
				}
			}
		}
	)
}
</script-->


<section id="main-body">
      <div class="main-content">
        <div class="row">
          <div class="col-24 de-breadcrumbs">
            <a href="<?php echo base_url(); ?>">Trang chủ </a>>><a href=""> <?php echo $detail['pro_name']; ?></a>
          </div>
          <div class="col-24">
            <div class="de-product-l">
              <div class="de-left-img">
              <?php
              @$images = unserialize($detail['pro_images']);
              ?>
                <img src="<?php echo base_url()."uploads/products/".$detail['pro_folderimg']."/".$images[0].""; ?>" alt="">
              </div>
              <div class="de-left-info">
                <div class="col-24 de-info-title">
                  <p><?php echo $detail['pro_name']; ?></p>
                </div>
                <div class="col-24">    
                  <div class="col-8 de-info-price">                 
                    <p>Giá: Liên hệ</p>
                  </div>
                  <div class="col-16 de-info-status">                 
                    <span>Trạng thái:</span>
                    <?php if($detail['pro_qty'] > 0){ ?>
                    <span class="status-color">Còn hàng</span>
                    <?php }else{ ?>
                     <span class="status-color">Hết hàng</span>
                    <?php } ?>
                  </div>                
                </div>
                <div class="col-24 de-info-guarantee">  
                  <div class="col-8 ">                  
                    <p>Bảo hành:</p>
                  </div>
                  <div class="col-16">                  
                    <p>12 tháng</p>
                  </div>                  
                </div>
                <div class="col-24 de-info-producer">
                  <div class="col-8">                 
                    <p>Nhà sản xuất:</p>
                  </div>
                  <div class="col-16">                  
                    <p><?php echo $detail['pro_producer'] ?></p>
                  </div>                  
                </div>
                <div class="col-24 de-info-contact">    
                  <div class="col-8">                 
                    <p>Liên hệ ngay:</p>
                  </div>
                  <div class="col-16">                  
                    <span>Hotline: </span><span>0921 345 169</span>
                  </div>                
                </div>
                <div class="col-24 de-info-email">    
                  <div class="col-8">                 
                    <p>Email:</p>
                  </div>
                  <div class="col-16 de-email-color">                 
                    <p>dacatinox01@gmail.com</p>
                  </div>                
                </div>
                <div class="col-24 de-info-email01">    
                  <div class="col-8">                 
                    <p>Hoặc</p>
                  </div>
                  <div class="col-16 de-email-color">                 
                    <p>salem@dacatinox.vn</p>
                  </div>                
                </div>
                <div class="col-24 de-info-cart">
                  <div class="col-12 de-buy">                 
                    <a href="http://local.webmayhan.vn/gio-hang.html?step=2">Mua hàng</a>
                  </div>
                  <!--div class="col-12 de-cart">                  
                    <a href="">Giỏ hàng</a>
                  </div--> 
                  <form action="<?php echo base_url()."home/cart/addcart/".$detail['pro_id'].""; ?>" method="post">
                    <div class="cssOrder" style="float:left;"> 
                    <input style="position:relative; width: 196px;
                      height: 56px;
                      left: 17px;
                      top: 0px;;border: none;cursor:pointer;color:#fff;" type="submit" value="Giỏ hàng" class="btn_datmua_to bg" />
                    </div>
                    </form>                 
                </div>
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
          <div class="col-24 " id="tab_detail_product">
                <div class="title_tab">
                  <a href="#dacdiem" class="nobdr_l current">Mô tả sản phẩm</a>
                  <a href="#thongsokythuat" class="">Thông số kỹ thuật</a> 
                  <a href="#binhluan" class="">Bình chọn</a>
                </div>
                <div class="content_tab">
                <div id="dacdiem" class="cf current">
                  <div class="dacdiem-content">
                  <?php if($detail['pro_description'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_description'].""; } ?>
                  </div>
                </div>
                
                <div id="thongsokythuat" class="cf">
                  <?php if($detail['pro_full'] == NULL){echo "Thông tin chưa cập nhật";}else{echo $detail['pro_full'].""; } ?>
                </div>
                
                <div id="binhluan" class="cf">
                  <div id="comment_fb" style="margin-top:10px;">
                      <div id="cmt_face" class="fb-comments" data-href="<?php echo base_url().uri_string().".html";?>" data-width="651" data-num-posts="100"></div>
                  </div>
                </div>
          
        </div>
          </div>
          <div class="col-24 cate-news">
              <div class="cate-r-title-news">
                <p class="cate-title-info" style="padding-left: 15px;">Sản phẩm cùng loại</p>
                <a href="#">Xem tất cả &nbsp >></a>
              </div>
               <?php
              if(isset($get_related_products) && $get_related_products != NULL){
                foreach($get_related_products as $value){
                  @$images = unserialize($value['pro_images']);
                  //var_dump($images);die();
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
            <?php 
              }
            } 
            ?>
          </div>
          <div class="col-24 cate-detail-doitac">
            <div class="col-5 cate-detail-doitacimg"><img src="<?php echo base_url();?>public/images/destail-01.jpg" alt=""></div>
             <div class="col-5 cate-detail-doitacimg">  <img src="<?php echo base_url();?>public/images/destail-02.jpg" alt=""></div>
              <div class="col-5 cate-detail-doitacimg"><img src="<?php echo base_url();?>public/images/destail-03.jpg" alt=""></div>
               <div class="col-5 cate-detail-doitacimg"> <img src="<?php echo base_url();?>public/images/destail-04.jpg" alt=""></div>
                <div class="col-4 cate-detail-doitacimg"><img src="<?php echo base_url();?>public/images/destail-05.jpg" alt=""></div> 
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
      </div>
    </section>
    <script>
      $(document).ready(function(e) {
      $("#tab_detail_product .title_tab a").click(function(){
        $("#tab_detail_product .title_tab a").removeClass("current");
        $(this).addClass("current");
        $("#tab_detail_product .content_tab .cf").hide();
        $($(this).attr("href")).show();
        
        return false;
      });
        $(".show_lightbox_img a").lightBox(); 
      });
    </script>