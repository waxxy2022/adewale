<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title> Recipe Web App </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="container-fluid">
         <div class="header_section">
            <div class="container">
               <nav class="navbar navbar-light bg-light justify-content-between">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index1.php">Home</a>
                     
                     <a href="about.php">About</a>
                     <a href="foodrecipes.php">Food Recipes</a>
                     <a href="allergy.php">Allergy Information</a>
                   
                  </div>
                  <form class="form-inline ">
                     <div class="login_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +44776745049</span></a></div>
                  </form>
                  <a class="logo" href="index.html"><img src="images/logode.png" class="kola"></a></a>
                  <span class="toggle" onclick="openNav()"><i class="fa fa-bars"></i></span>
                  <div class="login_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : adewaletairu2020@gmail.com</span></a></div>
               </nav>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- layout main section start -->
      <div class="container-fluid">
         <div class="layout_main">
            <!-- banner section start -->
            <div class="banner_section">
               <div class="container">
                  <div class="menu_main">
                     <div class="custome_menu">
                        <ul>
                           <li class="active"><a href="index1.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="foodrecipes.php">Food Recipes</a></li>
                           <li><a href="allergy.php">Alergy Information</a></li>
                         
                        </ul>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="index.php">Login</a></li>
                           <li><a href="shop.php"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <h1 class="banner_taital">Find The Best Recipe Here  </h1>
                                 <h1 class="banner_text">YOUR CITY</h1>
                                 <div class="banner_main">
                                    <div class="dropdown">
                                       <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="">All Category  -->
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <!-- <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a> -->
                                       </div>
                                    </div>
                                    <div class="main">
                                       <!-- Another variation with a button -->
                                       <div class="input-group">
                                        
                                          <!-- <input type="text" class="form-control" placeholder="What are you buying today" > -->
                                          <div class="input-group-append">
                                             <!-- <button class="btn btn-secondary" type="button" style="background-color: #ffffff; border-color:#ffffff ">
                                             <i class="fa fa-search" style="color: #191919;"></i> -->
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="ordernow_bt"><a href="shop.html">Order Now</a></div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <h1 class="banner_taital">Find The Best Recipe Here </h1>
                                 <h1 class="banner_text">YOUR CITY</h1>
                                 <div class="banner_main">
                                    <div class="dropdown">
                                       <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category  -->
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <!-- <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a> -->
                                       </div>
                                    </div>
                                    <div class="main">
                                       <!-- Another variation with a button -->
                                       <div class="input-group">
                                      

                                          <!-- <input type="text" class="form-control" placeholder="What are you buying today"> -->
                                          <div class="input-group-append">
<!--                                              
                                              <button class="btn btn-secondary" type="button" style="background-color: #ffffff; border-color:#ffffff ">
                                             <i class="fa fa-search" style="color: #191919;"></i>  -->
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="ordernow_bt"><a href="shop.html">Order Now</a></div> -->
                              </div>
                           </div>
                        </div>
                     </div>

            <!-- banner section end -->
            <!-- service section start -->
            <div class="service_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="service_taital">Quick Searches</h1>
                     </div>
                  </div>
                  <div class="service_section_2">
                     <div class="row">
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/breakfast-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Breakfast</h4>
                           <div class="seemore_bt"><a href="foodrecipes.php">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/delivery-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Delivery</h4>
                           <div class="seemore_bt"><a href="foodrecipes.php">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/dinner-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Dinner</h4>
                           <div class="seemore_bt"><a href="foodrecipes.php">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/coffee-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Coffee</h4>
                           <div class="seemore_bt"><a href="foodrecipes.php">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/alcohol-img.png"></div>
                           </div>
                           <h4 class="breakfast_text"> Strawberry</h4>
                           <div class="seemore_bt"><a href="foodrecipes.php">See More</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="images/diningtable-img.png"></div>
                           </div>
                           <h4 class="breakfast_text">Tea</h4>
                           <div class="seemore_bt"><a href="foodrecipes.php">See More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- service section end -->
            <!-- blog section start -->
            <div class="blog_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="blog_taital">Collections of Recipes In city</h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog_section_2 layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="blog_img"><img src="Mexican Green Sauce Recipe.avif"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text">Whole Wheat Methi Garlic Naan Recipe</h1>
                           <p class="lorem_text">A simple delectable wholesome and absolutely soft and delicious Whole Wheat Naan packed with flavours of methi and garlic and fermented with yeast to bring out the delicious flavours. Serve it along with Matar Paneer and Dal Makhani for a wholesome lunch or dinner.</p>
                           <div class="readmore_btn"><a href="foodrecipes.php">Learn More</a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_img"><img src="Karwar Style Dali Thoy Recipe - Toor dal Curry.avif"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text">Thakkali Gotsu Recipe</h1>
                           <p class="lorem_text">Thakkali Curry that is packed with simple flavours from roasted baby onions simmered along with tamarind and sambar powder giving it that delectable taste. Serve it along with Pongal or any Khichdi for breakfast lunch or dinner.

</p>
                           <div class="readmore_btn"><a href="foodrecipes.php">Learn More</a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_img"><img src="Matar Butter Masala Recipe.avif"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="blog_taital_main">
                           <h1 class="blog_text">Spicy Grilled Pineapple Salsa Recipe</h1>
                           <p class="lorem_text">Spicy Grilled Pineapple Salsa Recipe is a finger licking good salsa packed with a flavor punch. Sweet and tart pineapple is tossed along with simple seasoning to make this salsa. Serve as a condiment alongside your Mexican meal.</p>
                           <div class="readmore_btn"><a href="foodrecipes.php">Learn More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- blog section end -->
            <!-- shop section start -->
            <!-- <div class="shop_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <h1 class="shop_taital">Get the <br><span style="color: #18191a;">Food Finda App</span></h1>
                        <p class="shop_text">Long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as</p>
                        <div class="app_icon_main">
                           <div class="app_icon"><img src="images/icon-1.png"></div>
                           <div class="app_icon"><img src="images/icon-2.png"></div>
                        </div>
                        <div class="download_bt"><a href="#">Download Now</a></div>
                     </div>
                     <div class="col-md-6">
                        <div class="mobile_img"><img src="images/mobile-img.png"></div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- shop section end -->
            <!-- testimonial section start -->
            <!-- <div class="testimonial_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="testimonial_taital">Customers Says</h1>
                     </div>
                  </div>
                  <div id="my_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="testimonial_section_2">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Loliy Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Den Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Jonshon Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial_section_2">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Loliy Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Den Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Jonshon Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="testimonial_section_2">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Loliy Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Den Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h4 class="customer_text">Jonshon Mark</h4>
                                    <p class="many_text">Now use Lorem Ipsum as their default model text, and a search for 'loremnow use Lorem Ipsum as their default model text, and a search for 'lorem</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                     <i class="fa fa-arrow-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                     <i class="fa fa-arrow-right"></i>
                     </a>
                  </div>
               </div>
            </div> -->
            <!-- testimonial section end -->
            <!-- contact section start -->
            <!-- <div class="contact_section layout_padding">
               <div class="container">
                  <div class="contact_section_2">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="contact_taital">Get In Touch</h1>
                           <form action="">
                              <div class="mail_section_1">
                                 <input type="text" class="mail_text" placeholder="Name" name="Name">
                                 <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                                 <input type="text" class="mail_text" placeholder="Email" name="Email">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                                 <div class="send_bt"><a href="#">SEND</a></div>
                              </div>
                           </form>
                        </div>
                     </div> -->
                     <!-- order section start -->
                     <!-- <div class="order_section">
                        <div class="order_taital_main">
                           <h1 class="order_taital">Order Best food at time</h1>
                           <div class="order_bt"><a href="#">Order Now</a></div>
                        </div>
                     </div>
                     <!-- order section end -->
                  <!-- </div>
               </div>
            </div> --> -->
            <!-- contact section end -->
            <!-- footer section start -->
            <div class="footer_section">
               <div class="container">
                  <div class="footer_sectio_2">
                     <div class="row">
                        <div class="col-lg-3 col-md-6">
                           <h2 class="footer_logo"> Recipe Website </h2>
                           <p class="footer_text">Finding Dishes that fit your preference  </p>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Links </h2>
                           <div class="footer_menu">
                              <ul>
                                 <li class="active"><a href="index1.php">Home</a></li>
                                 <li><a href="about.php">About</a></li>
                               
                                 <li><a href="foodrecipes.php">Food Recipes</a></li>
                                 <li><a href="allergy.php"> Allergy Information</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <h2 class="useful_text">Contact Info</h2>
                           <p class="address_text">Office Address</p>
                           <div class="map_icon"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left15">Robert Gordon University</span></a></div>
                           <p class="address_text">Connect With Us </p>
                           <div class="map_icon"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left15">( +44 7776 745049)</span></a></div>
                           <div class="map_icon"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left15">adewaletairu2020@gmail.com</span></a></div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                        
                           </div>
                           <div class="social_icon">
                              <ul>
                                 <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer section end -->
         </div>
      </div>
      <!-- layout main section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by Tairu Adewale Bamidele<a href=""> MSC PROJECT </a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>