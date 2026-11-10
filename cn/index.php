<?php require 'header.php';
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/home/cad_home_slider_1.jpg" >
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="../images/home/cad_home_slider_2.jpg">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="../images/home/cad_home_slider_3.jpg">
      <div class="carousel-caption">
      </div>
    </div>

	<div class="item">
      <img src="../images/home/cad_home_slider_4.jpg">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container icon-container">
  <div class="row" id="icon">
  <div class="col-md-3 col-sm-6 col-xs-6">
  <a href="advantage_company.php"><img class="icon_img" src="../images/home/cad_home_icon_1.png" ></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6" >
	<a href="about_van_island.php"><img src="../images/home/cad_home_icon_2.png" class="icon_img" ></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6" >
  <a href="recommendation.php"><img src="../images/home/cad_home_icon_3.png" class="icon_img" ></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6" >
  <a href="service.php#collapse7"><img src="../images/home/cad_home_icon_4.png" class="icon_img" ></a>
  </div>
  </div>
</div>

<div class="container">
<div class="row">
  <div class="col-sm-6" >
    <div id="redtext">
    	<span id="back_color">
      加拿大优胜教育集团有限公司Canada Top Education Group Inc.是一家在加拿大联邦政府注册，专注于从事促进中加两国间教育文化领域的交流与合作的专业化服务机构。
    	</span>
    </div>
  </div>
  <div class="col-sm-6">
  <p>
  公司前身加拿大枫达文化交流中心自1993年成立伊始，与加拿大英属哥伦比亚省(简称BC省或卑诗省)温哥华岛上的各所大学、中学和小学建立起长期稳定的合作关系，并作为校方代表负责中国大陆地区的招生工作。时至今日，我们已经拥有20多年丰富的留学辅导经验，成功协助数以千计的留学生来到加拿大气候宜人、风景秀丽的温哥华岛完成学业，为当地社会培育了诸多精英人才，同时我们的服务也深受家长和留学生的信赖与好评。
  </p>
  </div>
  </div>
</div>
<div class="video-wrap">
<iframe height="450" width="100%" src='//player.youku.com/embed/XMzc5Njc5NDkzMg==' frameborder=0 'allowfullscreen'></iframe><BR>
欢迎参加我们的夏令营！
</div>
<div id="box-search" >
          <img src="../images/home/cad_home_btm_banner.jpg" alt="" width="100%">
          <div id="caption" >
              <p style="letter-spacing: 4pt;">有兴趣与我们合作共同发展温哥华岛的教育事业?</p>
			  <button class="btn" type="button" value="" id="banner-button"><a href="contact.php">联系我们</a></button>
          </div>
</div>
<script>
 $(function() {
   updateDivsMargins();
   $(window).resize(updateDivsMargins);

   function updateDivsMargins() {
     $('.navbar-heading').each(function() {
       $(this).css({
         'margin-left': $("#redtext").margin-left(),
       });
     });
   }
 })

 </script>
<?php require 'footer.php';
?>
