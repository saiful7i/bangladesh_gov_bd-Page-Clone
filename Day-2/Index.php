<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <?php wp_head(); ?>
    

</head>
<body>
  
<!-- Header part Start -->
<header>
    <div class="container header_cont">
        <div class="row">
            <div class="col-lg-6 header-left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 text-end header-right">
                <p>৭ অগ্রহায়ণ, ১৪২৯ </p>
                <a href="">English</a>
            </div>
        </div>
    </div>   
</header>
<!-- Header part end -->
<!-- Lego Part start -->
<section>
    <div class="container logo">
        <div class="row">
            <div class="col-lg-5 logo-left">
                <a href="">
                  <?php the_custom_logo(); ?>
                  <img src="./images/Header/logo_bn.png" alt="">
                </a>
            </div>
            <div class="col-lg-5 logo-search">
                <input type="text" placeholder="খুঁজুন">
                <button>অনুসন্ধান </button>
            </div>
            <div class="col-lg-2 logo-right d-flex justify-content-end">
                <div class="logo-1">
                <a href=""><img src="./images/Header/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="logo-2">
                    <p>সাথে থাকুন:</p>
                    <a href=""><img src="./images/Header/facebook-icon.png" alt=""></a>
                    <a href=""><img src="./images/Header/twitter-blue-icon.png" alt=""></a>
                    <a href=""><img src="./images/Header/youtube-icon.png" alt=""></a>
                    <a href=""><img src="./images/Header/gplus-icon.png" alt=""></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Lego Part end -->
<!-- Menu Bar Start -->
<section>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">                     
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                                         
                      <li class="nav-item">
                        <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                      </li>                    
                      <li class="nav-item">
                        <a class="nav-link" href="#">সেবাখাত</a>
                      </li>                    
                      <li class="nav-item">
                        <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>                    
                      <li class="nav-item">
                        <a class="nav-link" href="#">বৈদেশিক বিনিয়োগ</a>
                      </li>                    
                      <li class="nav-item">
                        <a class="nav-link" href="#">আইন-বিধি</a>
                      </li>                    
                      <li class="nav-item">
                        <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>                    
                    </ul>                    
                  </div>
                </div>
              </nav>
        </div>
    </div>
</section>
<!-- Menu Bar End -->
<!-- Main Part Start -->
<div class="container ps-0 pe-0">
    <div class="row">
        <div class="col-lg-9">
            <div class="main-image">
              <a href="">
              <?php dynamic_sidebar('banner'); ?>  
              <img src="./images/Silder/padmabanner.jpeg" class="d-block w-100" alt="">
              </a>
            </div>
            <div class="marqu">
                <div class="marqu-1">
                    <marquee><h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, autem!</h3></marquee>
                </div>
                <div class="marqu-2">
                    <marquee><h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, quia.</h3>
                    </marquee>
                </div>
            </div>
            <!-- slider S -->
            <div class="slider">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/Silder/Banner-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Silder/Banner-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/Silder/banner-renew-your-passport.png" class="d-block w-100" alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!-- Slider E -->

            <!-- Tab Part S -->
            <div class="tabs">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/agriculture.png" alt=""> <p>কৃষি</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/mobile_service.png" alt=""> <p>মোবাইল সেবা</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/call_center.png" alt=""> <p>কল সেন্টার</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/helpdesk.png" alt=""> <p>হেল্পডেস্ক</p></a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="row">
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/agriculture.png" alt=""> <p>কৃষি</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/mobile_service.png" alt=""> <p>মোবাইল সেবা</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/call_center.png" alt=""> <p>কল সেন্টার</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/helpdesk.png" alt=""> <p>হেল্পডেস্ক</p></a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="row">
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/agriculture.png" alt=""> <p>কৃষি</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/mobile_service.png" alt=""> <p>মোবাইল সেবা</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/call_center.png" alt=""> <p>কল সেন্টার</p></a>
                    </div>
                    <div class="col-lg-2">
                      <a href=""><img src="./images/Silder/helpdesk.png" alt=""> <p>হেল্পডেস্ক</p></a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- Tab Part E -->

            <!-- Initiative Part Start -->
            <h5 class="mt-3">উদ্যোগ</h5>
            <?php dynamic_sidebar('list'); ?> 
            <ul>
              <li><a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০) (১৩-০৬-২০১৬)</a></li>
              <li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a></li>
              <li><a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। (০৭-০৪-২০১৫)</a></li>
              <li><a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)। (০৭-০৪-২০১৫)</a></li>
              <li><a href="">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫। (০৭-০৪-২০১৫)</a></li>
            </ul>
            
            <!-- Initiative Part End -->

            <!-- All Information Start -->
            <div class="all_information">
              <div class="row text-center">
                <p><button class="btn btn-secondary mt-2">সকল</button></p>
              </div>
              <div class="row">
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/ebook_bangla (1).png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/forms_portal_logo (1).png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/infokosh-logo (1).png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/Konnect Logo.png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/logo_0_0.png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/MP logo.png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/services_portal_bn.png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/TP main-logo.png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/vision_2021_bn.png" class="d-block w-100" alt=""></a>
                </div>
                <div class="col-lg-4 inform">
                  <a href=""><img src="./images/Body/visit-bangladesh-logo (1).png" class="d-block w-100" alt=""></a>
                </div>
              </div>
            </div>
            <!-- All Information end -->

            <div class="others"></div>

        </div>
        <!--Sidebar S-->
        <div class="col-lg-3">
            <div class="siderbar-image">
            <?php dynamic_sidebar('sidebar_img'); ?>  
              <a href=""><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/discount_bn.jpg" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/mygov_bn.jpg" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/Tamplate_Apps_bn (5).png" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/Tamplate_Dictonary_bn.png" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/Bangladesh-Directory.jpg" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/discount_bn.jpg" class="d-block w-100" alt=""></a>
              <a href=""><img src="./images/Sidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" class="d-block w-100" alt=""></a>
             
            </div>
            <!-- Side bar E -->
            <div class="siderbar-video">
              <h5>সকল বাতায়ন </h5>
             <form action="">
              <select class="selector-1" >
                <option selected>ওয়েবসাইট বাছাই করুন</option>
                <option value="1">মন্ত্রণালয়</option>
                <option value="2">অধিদপ্তর </option>
                <option value="3">ঢাকা বিভাগ</option>
                <option value="3">চট্টগ্রাম বিভাগ</option>
                
              </select>
              <button class="bt-01">চলুন</button>
             </form>
              <h5 class="video-text-1">মুজিব১০০ আ্যাপ </h5>
              <div class="side_video">
              <?php dynamic_sidebar('sidebar_video'); ?>  
                <!-- <iframe width="310" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
              </div>
              <h5 class="mask">মাস্ক পরুন সেবা নিন </h5>
              <a href=""><img src="./images/Silder/mask-bd-portal (1).jpeg" class="d-block w-100" alt=""></a>
            <h5 class="mt-2">ডেঙ্গু প্রতিরোধে করণীয় </h5>
            <a href=""><img src="./images/Sidebar/dengu.jpg" class="d-block w-100" alt=""></a>
              <h5 class="mt-3">ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর </h5>
              <iframe width="310" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
           </div>
        
        </div>
    </div>
</div>
<!-- Main Part End-->

<!-- Footer Part S -->
<footer>
  <div class="container ps-0 pe-0" >
    <div class="row"><img src="./images/Footer/footer_top_bg.png" class="d-block w-100" alt=""></div>
    <div class="row">
      <div class="col-lg-8 ps-0 pe-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">                     
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                </li>
                                 
                <li class="nav-item">
                  <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                </li>                    
                <li class="nav-item">
                  <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                </li>                    
                <li class="nav-item">
                  <a class="nav-link" href="#">সাইট ম্যাপ</a>
                </li>                    
                <li class="nav-item">
                  <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                </li>                         
              </ul> 
                               
            </div>

          </div>
        </nav>
        <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p> 
      </div>
      
      <div class="col-lg-4" text-end>
        <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
        <a href=""><img src="./images/Footer/np-logo-set.png" alt=""></a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Part E -->
<?php wp_footer();?>
<script src="./JS/bootstrap.bundle.min.js"></script>  
</body>
</html>