


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>front-end/css/responsive.css">
    <title>BEMAX</title>
</head>

<body>
    <div class="main">
        <section class="header">
            <div class="container">
                <div class="wraper">
                    <div class="header-cont">
                        <div class="logo">
                            <a href="#"><img src="<?php echo base_url('/back-end/uploads/') . $header_logo; ?>" alt="logo"></a>
                        </div>
                        <div class="menuItem">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="#"><?php echo $header_home; ?></a></li>
                                    <li><a href="#"><?php echo $header_features; ?></a></li>
                                    <li><a href="#"><?php echo $header_pages; ?></a></li>
                                    <li><a href="#"><?php echo $header_portfolio; ?></a></li>
                                    <li><a href="#"><?php echo $header_blog; ?> </a></li>
                                    <li><a href="#"><?php echo $header_contact; ?></a></li>
                                    <li class="topbar-divider">|</li>
                                    <li> <a href="#"><i class="fas fa-search"></i></a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </section>
        <div class="headerFix">
      


            <!-- ############################### Slider Show HTML ################## -->
            <div class="slider-area">

           
                <div class="slider-active owl-carousel">
               
                <?php  foreach($slider_area_from_db as $valu) {   ?>
                    <div class="single-slide" style="background-image:url(<?php echo base_url('back-end/uploads/') . $valu['slider_image'];  ?>)">
                        <h4>
                            <?php echo  $valu['heading_sml']; ?>
                        </h4>
                        <h2>
                            <?php echo  $valu['heading_big']; ?>
                        </h2>
                        <a href="<?php echo $valu['btn_link']; ?>"><?php echo $valu['btn_txt']; ?></a>
                    </div>

                    <?php }?>
                </div>
            </div>

            <!-- /* ################################ Heir Us HTML ################################## */ -->
            <section class="heirUsBox">
                <div class="container">
                    <div class="wraper">
                        <div class="col-8">
                            <div class="heirUsTxt">
                                <p><?php echo  $side_txt; ?></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="cta-button">
                                <a href="<?php echo  $hireUs_btn_link; ?>"><?php echo  $hireUs_btn_txt; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ################################### Icon Box #################################  -->

            
            <section id="img-container-All">
                <div class="container">
                    <div class="wraper">

                        <div class="imagesContAll">
                        <?php  foreach($iconbox_data_from_db as $valu) {   ?>
                            <div class="col-4">
                            <div class="img-container">
                            
                                <img src="<?php echo base_url('back-end/uploads/') . $valu['iconbox_img'];  ?>" alt="">
                                <div class="imghovertxt">
                                    <div class="img-content">
                                        <div class="iconAllDesign">
                                       <h1><i class="<?php echo $valu['iconbox_icon'];?>" ></i></h1>
                                        
                                        </div>
                                        <div class="iconAllTxt">
                                            <p><?php echo $valu['iconbox_Htext'];  ?></p>
                                           
                                        </div>
                                    </div>
                                    <div class="iconAllTxt1">
                                        <p><?php echo $valu['iconbox_Ptext'];  ?></p>
                                        <h2> <i class="<?php echo $valu['iconbox_Picon'];?>" ></i> &nbsp;&nbsp;<?php echo $valu['iconbox_Ptxt'];  ?></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- /* ############################## bemaxItems Design ########################  */ -->
            <section class="bemaxItems">
                <div class="container">
                    <div class="wraper">
                        <div class="bemaxHeader">
                            <h1><?php echo $bemaxitems_heading;  ?></h1>
                            <div class="underline">
                                <h1></h1>
                            </div>
                        </div>
                        <div class="all-services">
                        <?php foreach ($bemaxitems_data_from_db as $valu) {   ?>
                            <div class="col-4">
                                <div class="single-service">
                               
                                    <div class="icon-service">
                                        <i class="<?php echo $valu['bemaxitems_icon'];  ?>"></i>
                                    </div>
                                    <div class="service-txt">
                                        <a href="#"><?php echo $valu['bemaxitems_sub_heading'];  ?></a>
                                        <p><?php echo $valu['bemaxitems_text'];  ?>
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ############################### latest Project Design ############################## -->
            <section class="latestProject">
                <div class="container">
                    <div class="wraper">
                        <div class="bemaxHeader1">
                            <h1><?php echo $latestProject_heading ;?></h1>
                            <div class="underline">
                                <h1></h1>
                            </div>
                        </div>
                        <div class="latestProject-active owl-carousel">
                        <?php foreach ($latestproject_data_from_db as $valu) {   ?>
                            <div class="project-wrap">
                                <div class="project-img">
                                    <img src="<?php echo base_url('back-end/uploads/') .$valu['latestProject_img'];  ?>" alt="">
                                </div>
                                <div class="project-txt">
                                    <h4><a href="<?php echo $valu['latestProject_link'];  ?>"><?php echo $valu['latestProject_subHeading'];  ?></a> </h4>
                                    <span><?php echo $valu['latestProject_text'];  ?></span>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- /* ################################ Choose Us Design ######################### */ -->
            <section class="chooseUs pb-95">
                <div class="container">
                    <div class="wraper">
                        <div class="bemaxHeader pbh-55">
                            <h1><?php echo $chooseUs_heading ;?></h1>
                            <div class="underline">
                                <h1></h1>
                            </div>
                        </div>
                        <div class="chooseUscon-active ">
                            <div class="col-6">
                                <div class="vedio-us">
                                    <img src="<?php echo base_url('back-end/uploads/') . $chooseUs_img ;?>" alt="Vedio">
                                    <a href="<?php echo $chooseUs_imglink ;?>"><i class="<?php echo $choseUs_vIcon ;?>"></i></a>
                                </div>
                            </div>
                            <div class="col-6">
                            <?php foreach ($chooseUs_data_from_db as $valu) {   ?>
                                <div class="chose-list">
                                    <div class="chose-title">
                                        <i class="<?php echo $valu['chooseUs_icon'] ;?>"></i>
                                        <h3> <a href="<?php echo $valu['chooseUs_subHLink'] ;?>"><?php echo $valu['chooseUs_subHeading'] ;?></a> </h3>
                                    </div>
                                    <p><?php echo $valu['chooseUs_text'] ;?> </p>
                                </div>

                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- /* ############################### CTA Design ####################################  */ -->
            <div class="cta" style="background-image: url(./images/cta_01.jpg);">
                <div class="container">
                    <div class="wraper">
                        <div class="meadia">
                            <div class="col-6">
                                <div class=" Working-text">
                                    <div class="cta-title">
                                        <h3><?php echo $cta_heading;?></h3>
                                        <div class="underline">
                                            <h1></h1>
                                        </div>
                                        <p><?php echo $cta_text;?></p>
                                        <a href="<?php echo $cta_textLink;?>"><?php echo $cta_linkText;?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="cta-image">
                                    <img src="<?php echo base_url('back-end/uploads/') . $cta_img;?>" alt="hireUs">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ########################### Latest Blog HTML ####################################  -->
            <section class="latestBlog">
                <div class="container">
                    <div class="wraper">
                        <div class="col-6">
                            <div class=" bemaxHeader2">
                                <h3><?php echo $blog_heading;?></h3>
                                <div class="underline1">
                                    <h1></h1>
                                </div>
                                <div class="txtCon">
                                </div>
                            </div>
                            <div class="blog-active owl-carousel">
                            <?php foreach ($blog_data_from_db as $valu) {   ?>
                                <div class="blog-wrapper">
                                    <div class="blog-img">
                                        <img src="<?php echo base_url('back-end/uploads/') .$valu['blog_img'];?>" alt="Blog">
                                        <span><?php echo $valu['blog_date'];?></span>
                                    </div>
                                    <div class="blog-content">
                                        <h3><?php echo $valu['blog_subHeading'];?></h3>
                                        <p><?php echo $valu['blog_text'];?></p>
                                        <div class="meta">
                                            <span> <a href="<?php echo $valu['blog_devLink'];?>"><i class="<?php echo $valu['blog_devIcon'];?>"></i> <?php echo $valu['blog_develop'];?></a>,<a href="<?php echo $valu['blog_marLink'];?>"><?php echo $valu['blog_mark'];?></a> </span>
                                            <span> <a href="<?php echo $valu['blog_rmoreLink'];?>"><i class="<?php echo $valu['blog_rmoreIcon'];?>"></i><?php echo $valu['blog_rmore'];?></a></span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class=" bemaxHeader2">
                                <h3><?php echo $testimonial_heading;?></h3>
                                <div class="underline1">
                                    <h1></h1>
                                </div>
                                <div class="txtCon">
                                </div>
                            </div>
                            <div class="blog-active owl-carousel">
                            <?php foreach ($testimonial_data_from_db as $valu) {   ?>
                                <div class="blog-wrapper1">
                                    <div class="blog-content1">
                                        <p><?php echo $valu['testimonial_text'];?></p>
                                    </div>
                                    <div class="profile">
                                        <div class="testprofilefig">
                                            <img src="<?php echo base_url('back-end/uploads/') . $valu['testimonial_img'];?>" alt="User Photo">
                                        </div>
                                        <div class="profile-content">
                                            <a href="<?php echo $valu['testimonial_mlink'];?>">
                                            <?php echo $valu['testimonial_mname'];?>
                                            </a>
                                            <p><?php echo $valu['testimonial_discr'];?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ################################ Client HTML #####################################  -->
            <section class="client">
                <div class="container">
                    <div class="wraper">
                        <div class="client-active owl-carousel">

                        <?php foreach ($client_data_from_db as $valu) {   ?>
                            <div class="clientCol">
                                <img src="<?php echo base_url('back-end/uploads/') .$valu['client_img']?>" alt="Partner1">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ############################### Footer HTML ##################################  -->
            <section class="footer">
                <div class="container">
                    <div class="wraper">
                        <div class="col-3">
                            <div class="footer-all">
                               <img src="<?php echo  base_url('back-end/uploads/') .$smedia_logo; ?>" alt="logo">
                                <p><?php echo $smedia_text; ?></p>
                                <div class="social-media">
                                    <a href="<?php echo $smedia_fblink; ?>">
                                        <i class="<?php echo $smedia_fbicon; ?>"></i>
                                    </a>
                                    <a href="<?php echo $smedia_twlink; ?>">
                                        <i class="<?php echo $smedia_twicon; ?>"></i>
                                    </a>
                                    <a href="<?php echo $smedia_golink; ?>">
                                        <i class="<?php echo $smedia_goicon; ?>"></i>
                                    </a>
                                    <a href="<?php echo $smedia_ldlink; ?>">
                                        <i class="<?php echo $smedia_ldicon; ?>"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="footerColList">
                                <div class="footerHeading">
                                    <h1><?php echo $feature_heading;?></h1>
                                </div>
                                <div class="featuresList">
                                    <ul class="list-style">
                                        <a href="<?php echo $feature_aLink;?>">
                                            <li><?php echo $feature_about;?></li>
                                        </a>
                                        <a href="<?php echo $feature_sLink;?>">
                                            <li><?php echo $feature_story;?></li>
                                        </a>
                                        <a href="<?php echo $feature_cLink;?>">
                                            <li><?php echo $feature_Conditon;?></li>
                                        </a>
                                        <a href="<?php echo $feature_pLink;?>">
                                            <li><?php echo $feature_policy;?></li>
                                        </a>
                                        <a href="<?php echo $feature_mLink;?>">
                                            <li><?php echo $feature_map;?></li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="footerColList">
                                <div class="footerHeading">
                                    <h1><?php echo $contact_heading;?></h1>
                                </div>
                                <div class="contactTxt">
                                    <p><?php echo $contact_adds;?></p>
                                    <p><?php echo $contact_phone;?></p>
                                    <p><?php echo $contact_fax;?></p>
                                    <p><?php echo $contact_email;?>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="footerHeading">
                                <h1><?php echo $newslleter_heading;?></h1>
                            </div>
                            <div class="footerContent">
                                <p><?php echo $newslleter_text;?></p>
                                <form class="footerForm">
                                    <input type="text" placeholder="Your Email">
                                    <input type="submit" value="<?php echo $newslleter_btnText;?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footerCopyR">
                <p>Copyright © 2018 Designed by AuThemes. All rights reserved.</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>front-end/js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>front-end/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>front-end/js/jquery.meanmenu.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>front-end/js/active.js"></script>

</body>

</html>