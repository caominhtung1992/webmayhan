<header id="header">
      <div class="top-head">
        <div class="row">
          <div class="col-9">
            <a href="<?php echo base_url();?>">
              <img src="<?php echo base_url();?>public/images/logo-top.png" />
            </a>              
          </div>
          <div class="col-15 banner-top">
            <a href="#">
              <img src="<?php echo base_url();?>public/images/banner-top.png" />
            </a>
          </div>
        </div>
      </div>
      <div class="mid-head">
        <div class="row">
          <div class="col-19 menu-top">
            <ul>
              <li><a href="<?php echo base_url();?>">Trang chủ</a></li>
              <li><a href="<?php echo base_url();?>">Giới thiệu</a></li>
              <li class="cap1"><a href="<?php echo base_url();?>">Sản phẩm</a>
                  <ul class="cap2">
                    <?php
                      if(isset($listall['cate']) && $listall['cate'] != NULL){
                        foreach($listall['cate'] as $k => $v){
                    ?>
                    <li><a class="color-cap2" href="<?php echo base_url()."".$v['cate_rewrite']."/c".$v['cate_id'].".html"; ?>" ><?php echo $v['cate_name']; ?></a></li>
                    <?php }} ?>
                  </ul>
              </li>
              <li><a href="<?php echo base_url(); ?>tin-tuc/">Tin tức</a></li>
              <li><a href="<?php echo base_url();?>">Liên hệ</a></li>
            </ul>               
          </div>
          <div class="col-5 hotline-top">
            <p>0948 856 889 </p><span>Hotline :</span>        
          </div>
        </div>
      </div>
      <div class="bt-head">
        <ul class="bxslider">
            <li><img src="<?php echo base_url();?>public/images/slider/img-slider01.jpg" /></li>
            <li><img src="<?php echo base_url();?>public/images/slider/img-slider01.jpg" /></li>
            <li><img src="<?php echo base_url();?>public/images/slider/img-slider01.jpg" /></li>
        </ul>
      </div>
    </header>