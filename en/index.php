<?php
																																																																																																																																																																																			require 'header.php';
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
  <a href="advantage_company.php"><img class="icon_img" src="../images/home/cad_home_icon_1_en.png" ></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6">
	<a href="about_van_island.php"><img src="../images/home/cad_home_icon_2_en.png" class="icon_img" ></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6">
  <a href="recommendation.php"><img src="../images/home/cad_home_icon_3_en.png" class="icon_img" ></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6">
  <a href="service.php#collapse7"><img src="../images/home/cad_home_icon_4_en.png" class="icon_img" ></a>
  </div>
  </div>

</div>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div id="redtext">
	     <span id="back_color">Canada Top Education Group Inc. is a professional service organization registered with the Canadian federal government that specializes in promoting exchanges and cooperation in the field of education and culture between Canada and international countries.
       </span>
     </div>
  </div>
  <div class="col-sm-6">
  <p>Canada Top Education Group has roots that date back to 1993 when Canada Fang Tearoe Cultural Exchange Centre was first established. Since that time Canada Top Education Group has established long-term and stable cooperative relations with universities, middle schools,  primary schools and private schools located on Vancouver Island, British Columbia (BC). Also CTEG acts as the school’s representative in taking charge of all the enrolment work in foreign countries. CTEG has more than 20 years of experience in studying and coaching and has successfully assisted thousands of international students to complete their studies on scenic Vancouver Island. CTEG has cultivated many elite talents for the local community which has garnered deep trust and praise from the families of these international students.</p>
  </div>
  </div>
</div>
<div class="video-wrap">
<iframe height="450" width="100%" src='//player.youku.com/embed/XMzc5Njc5NDkzMg==' frameborder=0 'allowfullscreen'></iframe><BR>
Welcome to our summer camp！
</div>
<div id="box-search" >
          <img src="../images/home/cad_home_btm_banner.jpg" alt="" width="100%" >
          <div id="caption" >
              <p style="letter-spacing: 2pt;">Join us for Developing Education in Vancouver Island?
              </p>
			  <button class="btn" type="button" value="" id="banner-button"><a href="contact.php">Contact Us</a></button>
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
