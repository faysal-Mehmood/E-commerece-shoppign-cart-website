<?php
 require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
//require('cart.php');

$wishlist_count=0;

if(isset($_SESSION['USER_LOGIN'])){
	$uid=$_SESSION['USER_ID'];
	
	if(isset($_GET['wishlist_id'])){
		$wid=get_safe_value($con,$_GET['wishlist_id']);
		mysqli_query($con,"delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count=mysqli_num_rows(mysqli_query($con,"select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

if(isset($_SESSION['cart'])){
  foreach($_SESSION['cart'] as $key=>$val){
  $productArr=get_product($con,'','',$key);
  $pname=$productArr[0]['name'];
  $mrp=$productArr[0]['mrp'];
  $price=$productArr[0]['price'];
  $image=$productArr[0]['image'];
  $qty=$val['qty'];
  }
}

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
//get categories
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
 $cat_arr[]=$row;	
}

//for meta description
$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$meta_title="Zukhruf Mart";
$meta_desc="Zukhruf Shopping Mart";
$meta_keyword="Zukhruf Mart";
if($mypage=='product.php'){
	$product_id=get_safe_value($con,$_GET['id']);
	$product_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from product where id='$product_id'"));
	$meta_title=$product_meta['meta_title'];
	$meta_desc=$product_meta['meta_desc'];
	$meta_keyword=$product_meta['meta_keyword'];
}if($mypage=='contact.php'){
	$meta_title='Contact Us';
}


?>
<!DOCTYPE html>
<!-- saved from url=(0032)https://www.journal-theme.com/5/ -->
<html dir="ltr" lang="en" class="desktop win chrome chrome86 webkit oc30 is-guest route-common-home store-0 skin-1 desktop-header-active mobile-sticky layout-1 two-column column-left column-right flexbox no-touchevents" data-jb="a199dc5e" data-jv="3.1.4.2" data-ov="3.0.2.0">
<head typeof="og:website">
<style>
	.htc__shopping__cart a span.htc__wishlist {
		background: #c43b68;
		border-radius: 100%;
		color: #fff;
		font-size: 9px;
		height: 17px;
		line-height: 19px;
		position: absolute;
		right: 18px;
		text-align: center;
		top: -4px;
		width: 17px;
		margin-right:15px;
	}
  </style>
  <link rel="icon" href="images/favicon.jfif" type="image/jfif" sizes="16x16">
 <title><?php echo $meta_title?></title>
    <meta name="description" content="<?php echo $meta_desc?>">
	<meta name="keywords" content="<?php echo $meta_keyword?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/custom.js"></script>

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Theme shortcodes/elements style -->
   
    <link rel="stylesheet" href="css/stylee.css">
 
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""> 
  
<script>window['Journal'] = {"isPopup":false,"isPhone":false,"isTablet":false,"isDesktop":true,"filterScrollTop":false,"filterUrlValuesSeparator":",","countdownDay":"Day","countdownHour":"Hour","countdownMin":"Min","countdownSec":"Sec","globalPageColumnLeftTabletStatus":false,"globalPageColumnRightTabletStatus":false,"scrollTop":true,"scrollToTop":false,"notificationHideAfter":"2000","quickviewPageStyleCloudZoomStatus":true,"quickviewPageStyleAdditionalImagesCarousel":false,"quickviewPageStyleAdditionalImagesCarouselStyleSpeed":"500","quickviewPageStyleAdditionalImagesCarouselStyleAutoPlay":false,"quickviewPageStyleAdditionalImagesCarouselStylePauseOnHover":true,"quickviewPageStyleAdditionalImagesCarouselStyleDelay":"3000","quickviewPageStyleAdditionalImagesCarouselStyleLoop":false,"quickviewPageStyleAdditionalImagesHeightAdjustment":"5","quickviewPageStyleProductStockUpdate":false,"quickviewPageStylePriceUpdate":false,"quickviewPageStyleOptionsSelect":"none","quickviewText":"Quickview","mobileHeaderOn":"tablet","subcategoriesCarouselStyleSpeed":"500","subcategoriesCarouselStyleAutoPlay":false,"subcategoriesCarouselStylePauseOnHover":true,"subcategoriesCarouselStyleDelay":"3000","subcategoriesCarouselStyleLoop":false,"productPageStyleCloudZoomStatus":true,"productPageStyleCloudZoomPosition":"inner","productPageStyleAdditionalImagesCarousel":false,"productPageStyleAdditionalImagesCarouselStyleSpeed":"500","productPageStyleAdditionalImagesCarouselStyleAutoPlay":true,"productPageStyleAdditionalImagesCarouselStylePauseOnHover":true,"productPageStyleAdditionalImagesCarouselStyleDelay":"3000","productPageStyleAdditionalImagesCarouselStyleLoop":false,"productPageStyleAdditionalImagesHeightAdjustment":"5","productPageStyleProductStockUpdate":false,"productPageStylePriceUpdate":false,"productPageStyleOptionsSelect":"none","infiniteScrollStatus":true,"infiniteScrollOffset":"2","infiniteScrollLoadPrev":"Load Previous Products","infiniteScrollLoadNext":"Load Next Products","infiniteScrollLoading":"Loading...","infiniteScrollNoneLeft":"You have reached the end of the list.","checkoutUrl":"https:\/\/www.journal-theme.com\/5\/index.php?route=checkout\/checkout","headerHeight":"100","headerCompactHeight":"60","mobileMenuOn":"","searchStyleSearchAutoSuggestStatus":true,"searchStyleSearchAutoSuggestDescription":true,"searchStyleSearchAutoSuggestSubCategories":true,"headerMiniSearchDisplay":"default","stickyStatus":true,"stickyFullHomePadding":false,"stickyFullwidth":true,"stickyAt":"300","stickyHeight":"45","headerTopBarHeight":"35","topBarStatus":true,"headerType":"classic","headerMobileHeight":"60","headerMobileStickyStatus":true,"headerMobileTopBarVisibility":true,"headerMobileTopBarHeight":"45","notification":[{"m":137,"c":"1a2039cc"}],"headerNotice":[{"m":56,"c":"bddc5671"}],"columnsCount":2};</script>

 
 
 
<link href="css/14dd76a4b516f1fb83aa44aec67e8a73.css" type="text/css" rel="stylesheet" media="all"> 
 <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
 <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all">

<script src="js/9f4d4ec5d57d26ceedbf0b9dbbb6439b.js" defer=""></script>
</head>
<body class="">
  
<div class="site-wrapper">
   
  <header class="header-classic">
    <div class="header header-classic header-lg">
      <div class="top-bar navbar-nav">
        <div class="top-menu top-menu-2">
          <ul class="j-menu">
             
            <li class="menu-item top-menu-item top-menu-item-2 icon-only"> <a><span class="links-text">Twitter</span></a></li>
            <li class="menu-item top-menu-item top-menu-item-3 icon-only"> <a><span class="links-text">Facebook</span></a></li>
            <li class="menu-item top-menu-item top-menu-item-4 icon-only"> <a><span class="links-text">Whatsapp</span></a></li>
            <li class="menu-item top-menu-item top-menu-item-5 icon-only"> <a><span class="links-text">Pinterest</span></a></li>
             
            <li class="menu-item top-menu-item top-menu-item-11"> <a><span class="links-text">Free shipping over 1OK</span></a></li>
          </ul>
        </div>
        <!--
        <div class="language-currency top-menu">
          <div class="desktop-language-wrapper"></div>
          <div class="desktop-currency-wrapper">
            <div id="currency" class="currency">
              <form action="#" method="post" enctype="multipart/form-data" id="form-currency">
                <div class="dropdown drop-menu">
                  <button type="button" class="dropdown-toggle" data-toggle="dropdown"> <span class="currency-symbol-title"> <span class="symbol">$</span> <span class="currency-title">US Dollar</span> <span class="currency-code">USD</span> </span> </button>
                  <div class="dropdown-menu j-dropdown">
                    <ul class="j-menu">
                      <li> <a class="currency-select" data-name="EUR"> <span class="currency-symbol">€</span> <span class="currency-title-dropdown">Euro</span> <span class="currency-code-dropdown">EUR</span> </a></li>
                      <li> <a class="currency-select" data-name="GBP"> <span class="currency-symbol">£</span> <span class="currency-title-dropdown">Pound Sterling</span> <span class="currency-code-dropdown">GBP</span> </a></li>
                      <li> <a class="currency-select" data-name="USD"> <span class="currency-symbol">$</span> <span class="currency-title-dropdown">US Dollar</span> <span class="currency-code-dropdown">USD</span> </a></li>
                    </ul>
                  </div>
                </div> 
              </form>
            </div>
          </div>
        </div>
        -->
        <div class="third-menu"></div>
      </div>
      <div class="mid-bar navbar-nav">
        <div class="desktop-logo-wrapper">
          <div id="logo"> <a href="<?php echo SITE_PATH?>"> <img src="images/logo6-white-1x-220x63.png.png" width="220" height="63" alt=" "> </a></div>
        </div>
      
        <div class="desktop-search-wrapper full-search default-search-wrapper">
          <div id="search" class="dropdown">
            
            <button class="dropdown-toggle search-trigger" data-toggle="" aria-expanded="false"></button>
            <div class="dropdown-menu j-dropdown">
            <form action="search.php" method="get">
              <div class="header-search">
                <div class="search-categories dropdown drop-menu">
                  <div  style="height:36.5px" class="search-categories-button dropdown-toggle" data-toggle="dropdown">All</div>
                  <div class="dropdown-menu j-dropdown">
                    <ul class="j-menu">
                      <li data-category_id="0" class="category-level-1"><a>All</a></li>
                      <?php
										foreach($cat_arr as $list){
											?>
                      <li style="text-transform: uppercase" data-category_id="1" class=" category-level-1"><a><?php echo $list['categories']?></a></li>
                    <?php  }?>
                      </ul>
                  </div>
                </div>
                
               
                <input style="height:37px" type="text" name="str" value="" placeholder="Search here..." class="search-input tt-input" data-category_id="0" autocomplete="off" spellcheck="false" dir="auto" >
                  
                <button type="submit" class="search-button" style="height:37px" data-search-url="#"></button>
               
              </div>
             
            </div>
            </form>
          </div>
        </div>
        
        <div class="classic-cart-wrapper">
          <div class="top-menu secondary-menu">
            <div class="top-menu top-menu-14">
              <ul class="j-menu">
             <!--   <li class="menu-item top-menu-item top-menu-item-1"> <a href="faqs.php"><span class="links-text">FAQ</span></a></li>
               <li class="menu-item top-menu-item top-menu-item-2"> <a href="#"><span class="links-text">Blog</span></a></li>
               --> <li class="menu-item top-menu-item top-menu-item-3"> <a href="contact.php"><span class="links-text">Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="desktop-main-menu-wrapper menu-default has-menu-2 navbar-nav">
        <div class="menu-trigger menu-item main-menu-item">
          <ul class="j-menu">
            <li><a>Menu</a></li>
          </ul>
        </div>
        <div id="main-menu" class="main-menu main-menu-3">
          <ul class="j-menu">
           <li class="menu-item main-menu-item main-menu-item-1 dropdown flyout drop-menu  first-dropdown"> <a  class="dropdown-toggle" data-toggle="dropdown"> <span class="links-text">Shopping Mall</span> <span class="open-menu collapsed" data-toggle="collapse" data-target="#collapse-5f89743b4a986"><i class="fa fa-plus"></i></span> <span class="menu-label">Sale</span> </a>
            </li>
            
            <li class="menu-item main-menu-item multi-level dropdown drop-menu "> <a href="index.php"> <span class="links-text">HOME</span> </a></li>
            
            <li style="text-transform: uppercase; " class="menu-item main-menu-item  multi-level dropdown drop-menu "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="links-text">OUR PRODCUTS</span> <span class="open-menu collapsed" data-toggle="collapse" data-target="#collapse-5f89743b4c04f"></span> </a>
              <div class="dropdown-menu j-dropdown " id="collapse-5f89743b4c04f">
              <?php
            
										foreach($cat_arr as $list){
											?>
              <ul class="j-menu">
													<li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
 
                          
                </ul>
                    <?php }?>




              </div>
            </li>
            


             <li class="menu-item main-menu-item multi-level dropdown drop-menu "> <a href="about.php"> <span class="links-text">ABOUT US</span> </a></li>           
             <li class="menu-item main-menu-item multi-level dropdown drop-menu "> <a href="policy.php"> <span class="links-text">PRIVACY POLICY</span> </a></li>           
         
             
             <li class="menu-item main-menu-item multi-level dropdown drop-menu "> <a href="faqs.php"> <span class="links-text">FAQS</span> </a></li>           
             
           </ul>
        </div>
        <div id="main-menu-2" class="main-menu main-menu-64">
          <ul class="j-menu">
          <?php if(isset($_SESSION['USER_LOGIN'])){
											?>
            <li class="menu-item main-menu-item main-menu-item-1 multi-level dropdown drop-menu "> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="links-text">Hi <?php echo $_SESSION['USER_NAME']?></span> <span class="open-menu collapsed" data-toggle="collapse" data-target="#collapse-5f89743b4c04f"><i class="fa fa-plus"></i></span> </a>
              <div class="dropdown-menu j-dropdown " id="collapse-5f89743b4c04f">
                <ul class="j-menu">
                  <li class="menu-item main-menu-item-3 drop-menu"> <a href="profile.php"><span class="links-text">Profile</span></a></li>
                  <li class="menu-item main-menu-item-2 drop-menu"> <a href="logout.php"><span class="links-text">Logout</span></a></li>
                </ul>
              </div>
            </li>
            <li class="menu-item main-menu-item main-menu-item-9 multi-level dropdown drop-menu "> <a href="my_order.php"> <span class="links-text">My Order</span> </a></li>
            <li class="menu-item main-menu-item main-menu-item-5 multi-level dropdown drop-menu "> <a href="wishlist.php"> <span class="links-text">Wishlist</span><span class="count-badge wishlist-badge count-zero"><span class="htc__wishlist"><?php echo $wishlist_count?></span></span> </a></li>
           
          </ul>
          <?php 
          }else
          {
            echo '<li class="menu-item main-menu-item main-menu-item-1 multi-level dropdown drop-menu "> <a href="login.php" class="dropdown-toggle" data-toggle="dropdown"> <span class="links-text">Sign/SignUp</span> <span class="open-menu collapsed" data-toggle="collapse" data-target="#collapse-5f89743b4c04f"><i class="fa fa-plus"></i></span> </a>';
          }
          ?>
        </div>

        <div class="desktop-cart-wrapper default-cart-wrapper" >
       
        <div id="cart" class="dropdown" style="background-color:#3a4750" > <a data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle cart-heading" href="cart.php">  <i  class="fa fa-shopping-cart" style="backgrounf-color:#3a4750" > </i> <span id="cart-items"  class="count-badge count-zero"><span class="htc__qua"><?php echo $totalProduct?></span></span> </a>
           <!--
            <div id="cart-content" class="dropdown-menu cart-content j-dropdown">
              <ul>
                <li>
                  <p class="text-center cart-empty">Your shopping cart is empty!</p>
                </li>
              </ul>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-header mobile-default mobile-2">
      <div class="mobile-top-bar">
        <div class="mobile-top-menu-wrapper">
          <div class="top-menu top-menu-13">
            <ul class="j-menu">
              <li class="menu-item top-menu-item top-menu-item-1"> <a href="javascript:open_login_popup()"><span class="links-text">Login</span></a></li>
              <li class="menu-item top-menu-item top-menu-item-2"> <a href="javascript:open_register_popup()"><span class="links-text">Register</span></a></li>
            </ul>
          </div>
        </div>
        <div class="language-currency top-menu">
          <div class="mobile-currency-wrapper"></div>
          <div class="mobile-language-wrapper"></div>
        </div>
      </div>
      <div class="mobile-bar sticky-bar">
        <div class="menu-trigger">
          <button><span>Menu</span></button>
        </div>
        <div class="mobile-logo-wrapper"></div>
        <div class="mobile-cart-wrapper mini-cart"></div>
      </div>
      <div class="mobile-bar-group mobile-search-group">
        <div class="mobile-search-wrapper full-search"></div>
      </div>
    </div>
  </header>
  </body>
  </html>
 