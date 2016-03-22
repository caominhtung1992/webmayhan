<section id="main-body">
      <div class="new-product">
        <div class="new-pro-main">
          <div class="row">
            <div class="col-24">
              <div class="new-pro-title">
                <p>Sản phẩm mới</p>
                <a href="#">Xem tất cả >></a>
              </div>
            </div>
          </div>
          <div class="slider-product">
            <ul class="owl-carousel jcarousel-skin-tango1" id="mycarousel1">
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                      <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
                        <li class="iteam_slider">
                          <div class="iteam_slider_top"><img src="images/pro-home-02.png" /></div>
                          <div class="iteam_slider_bot">
                              <a href="#">Máy cắt CUT-40M</a>
                              <p>11.180.000đ</p>
                  <span>10.500.000</span>
                            </div>
                        </li>
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
                  <!--li><a href="#">Máy Cắt Thép</a></li>
                  <li><a href="#">Máy Cắt Bê Tông</a></li>
                  <li><a href="#">Máy Cắt Gạch</a></li-->
                </ul>
                <?php } ?>
              </div>
              <?php
              }
            }
            ?>
              <!--div class="left-pro-iteam">
                <p>Máy Hàn</p>
                <ul>
                  <li><a href="#">Máy Hàn TIG</a></li>
                  <li><a href="#">Máy Hàn</a></li>
                  <li><a href="#">Máy Hàn</a></li>
                  <li><a href="#">Máy Hàn</a></li>
                </ul>
              </div>
              <div class="left-pro-iteam">
                <p>Phụ Kiện Máy Hàn</p>
                <ul>
                  <li><a href="#">Máy Cắt Thép</a></li>
                  <li><a href="#">Máy Cắt Bê Tông</a></li>
                  <li><a href="#">Máy Cắt Gạch</a></li>
                </ul>
              </div>
              <div class="left-pro-iteam">
                <p>Máy Cắt Uốn</p>
                <ul>
                  <li><a href="#">Máy Cắt Thép</a></li>
                  <li><a href="#">Máy Cắt Bê Tông</a></li>
                  <li><a href="#">Máy Cắt Gạch</a></li>
                </ul>
              </div-->
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
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="#">
                      <img src="images/pro-home-02.png" alt="">
                      <div class="sale">
                        <p>Giảm</p>
                        <span class="sale-number">-20</span><span>%</span>
                      </div>
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="#">Máy cắt CUT-40M</a>
                    <p>11.500.000</p>
                    <span>10.500.000</span>
                  </div>
                  <div class="product-info">
                    <div class="product-info-top">
                      <p>TIỆN DỤNG VỚI NGUỒN ĐIỆN 220V CẮT NHANH, ĐẸP, CƠ ĐỘNG, KINH TẾ SỬ DỤNG KHI CẮT TỪ MÁY NÉN KHÍ (>4.5Kg) CHINH PHỤC ĐỘ DÀY</p>
                    </div>
                    <div class="product-info-bot">
                      <a class="detail-pro" href="#">Chi Tiết</a>
                      <a class="comparison-pro" href="#">So Sánh</a>
                    </div>
                  </div>
                </div>

                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="#">
                      <img src="images/pro-home-03.png" alt="">
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="#">Máy cắt CUT-40M</a>
                    <p>11.500.000</p>
                    <span>10.500.000</span>
                  </div>
                  <div class="product-info">
                    <div class="product-info-top">
                      <p>TIỆN DỤNG VỚI NGUỒN ĐIỆN 220V CẮT NHANH, ĐẸP, CƠ ĐỘNG, KINH TẾ SỬ DỤNG KHI CẮT TỪ MÁY NÉN KHÍ (>4.5Kg) CHINH PHỤC ĐỘ DÀY</p>
                    </div>
                    <div class="product-info-bot">
                      <a class="detail-pro" href="#">Chi Tiết</a>
                      <a class="comparison-pro" href="#">So Sánh</a>
                    </div>
                  </div>
                </div>
                <div class="iteam-main-pro pro-border-none">
                  <div class="iteam-pro-img">
                    <a href="#">
                      <img src="images/pro-home-01.jpg" alt="">
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="#">Máy hàn TIG-400AM-D</a>
                    <p>11.500.000</p>
                    <span>10.500.000</span>
                  </div>
                  <div class="product-info">
                    <div class="product-info-top">
                      <p>TIỆN DỤNG VỚI NGUỒN ĐIỆN 220V CẮT NHANH, ĐẸP, CƠ ĐỘNG, KINH TẾ SỬ DỤNG KHI CẮT TỪ MÁY NÉN KHÍ (>4.5Kg) CHINH PHỤC ĐỘ DÀY</p>
                    </div>
                    <div class="product-info-bot">
                      <a class="detail-pro" href="#">Chi Tiết</a>
                      <a class="comparison-pro" href="#">So Sánh</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grouptop-main-pro01">
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="#">
                      <img src="images/pro-home-01.jpg" alt="">
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="#">Máy cắt CUT-40M</a>
                    <p>11.500.000</p>
                    <span>10.500.000</span>
                  </div>
                </div>
                <div class="iteam-main-pro">
                  <div class="iteam-pro-img">
                    <a href="#">
                      <img src="images/pro-home-01.jpg" alt="">
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="#">Máy cắt CUT-40M</a>
                    <p>11.500.000</p>
                    <span>10.500.000</span>
                  </div>
                </div>
                <div class="iteam-main-pro pro-border-none">
                  <div class="iteam-pro-img">
                    <a href="#">
                      <img src="images/pro-home-01.jpg" alt="">
                    </a>
                  </div>
                  <div class="iteam-pro-info">
                    <a href="#">Máy cắt CUT-40M</a>
                    <p>11.500.000</p>
                    <span>10.500.000</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-product">
              <div class="title-main-product">
                <p>Máy Hàn</p>
              </div>
              <div class="iteam-main-pro">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
              <div class="iteam-main-pro">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
              <div class="iteam-main-pro pro-border-none">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
            </div>
            <div class="main-product">
              <div class="title-main-product">
                <p>Máy cắt uốn</p>
              </div>
              <div class="iteam-main-pro">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
              <div class="iteam-main-pro">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
              <div class="iteam-main-pro pro-border-none">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
            </div>
            <div class="main-product">
              <div class="title-main-product">
                <p>Phụ Kiện máy hàn</p>
              </div>
              <div class="iteam-main-pro">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
              <div class="iteam-main-pro">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
              <div class="iteam-main-pro pro-border-none">
                <div class="iteam-pro-img">
                  <a href="#">
                    <img src="images/pro-home-01.jpg" alt="">
                  </a>
                </div>
                <div class="iteam-pro-info">
                  <a href="#">Máy cắt CUT-40M</a>
                  <p>11.500.000</p>
                  <span>10.500.000</span>
                </div>
              </div>
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
              <!--div class="iteam-main-new-right">
                <a href="#"><img src="images/img-new01.jpg" alt=""></a>
                <a class="link-new-right" href="#">So sánh cắt plasma với cắt Axetylen Oxy</a>
              </div>
              <div class="iteam-main-new-right">
                <a href="#"><img src="images/img-new01.jpg" alt=""></a>
                <a class="link-new-right" href="#">So sánh cắt plasma với cắt Axetylen Oxy</a>
              </div>
              <div class="iteam-main-new-right">
                <a href="#"><img src="images/img-new01.jpg" alt=""></a>
                <a class="link-new-right" href="#">So sánh cắt plasma với cắt Axetylen Oxy</a>
              </div>
              <div class="iteam-main-new-right">
                <a href="#"><img src="images/img-new01.jpg" alt=""></a>
                <a class="link-new-right" href="#">So sánh cắt plasma với cắt Axetylen Oxy</a>
              </div>
              <div class="iteam-main-new-right">
                <a href="#"><img src="images/img-new01.jpg" alt=""></a>
                <a class="link-new-right" href="#">So sánh cắt plasma với cắt Axetylen Oxy</a>
              </div-->
            </div>
          </div>
        </div>
      </div>
    </section>