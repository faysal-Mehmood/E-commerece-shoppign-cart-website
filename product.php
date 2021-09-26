<?php 
require('header.php');

//require('functions.inc.php');
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}

//related product


?>

<script type="text/javascript" src="js/custom.js"></script>
  
<ul class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="categories.php?id=<?php echo $get_product['0']['categories_id']?>"><?php echo $get_product['0']['categories']?></a></li>
    <li><a href="#"><?php echo $get_product['0']['name']?></a></li>
  </ul>
  <h1 class="title page-title"><span><?php echo $get_product['0']['name']?></span></h1>
  <div id="product-product" class="container">
    <div class="row">
      <div id="content" class="">
        <div class="product-info has-extra-button ">
          <div class="product-left">
            <div class="product-image direction-vertical  additional-images-loaded">
              <div class="swiper main-image swiper-has-pages" data-options="{&quot;speed&quot;:0,&quot;autoplay&quot;:false,&quot;pauseOnHover&quot;:false,&quot;loop&quot;:false}" style="width: calc(100% - 80px)">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                  <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                  <div class="swiper-slide swiper-slide-visible swiper-slide-active" class="zoom" data-index="0" style="width: 538px;"> <img  class="zoom"  src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" srcset="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>"  alt="White Long Sleeve Shirt" title="<?php echo $get_product['0']['name']?>" width="550" height="550"></div>
                  <!--
                    <div class="swiper-slide swiper-slide-next" data-gallery=".lightgallery-product-images" data-index="1" style="width: 538px;"> <img src="#" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/hat-550x550.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/hat-1100x1100.jpg.webp 2x" data-largeimg="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/hat-1000x1000.jpg.webp" alt="White Long Sleeve Shirt" title="White Long Sleeve Shirt" width="550" height="550"></div>
                    <div class="swiper-slide" data-gallery=".lightgallery-product-images" data-index="2" style="width: 538px;"> <img src="#" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/te4-550x550.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/te4-1100x1100.jpg.webp 2x" data-largeimg="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/te4-1000x1000.jpg.webp" alt="White Long Sleeve Shirt" title="White Long Sleeve Shirt" width="550" height="550"></div>
                    <div class="swiper-slide" data-gallery=".lightgallery-product-images" data-index="3" style="width: 538px;"> <img src="#" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/te-550x550.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/te-1100x1100.jpg.webp 2x" data-largeimg="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/te-1000x1000.jpg.webp" alt="White Long Sleeve Shirt" title="White Long Sleeve Shirt" width="550" height="550"></div>
                    <div class="swiper-slide" data-gallery=".lightgallery-product-images" data-index="4" style="width: 538px;"> <img src="#" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/c-550x550.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/c-1100x1100.jpg.webp 2x" data-largeimg="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/c-1000x1000.jpg.webp" alt="White Long Sleeve Shirt" title="White Long Sleeve Shirt" width="550" height="550"></div>
                    <div class="swiper-slide" data-gallery=".lightgallery-product-images" data-index="5" style="width: 538px;"> <img src="#" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/tee3-550x550.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/tee3-1100x1100.jpg.webp 2x" data-largeimg="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/additional/tee3-1000x1000.jpg.webp" alt="White Long Sleeve Shirt" title="White Long Sleeve Shirt" width="550" height="550"></div>
                    <div class="swiper-slide" data-gallery=".lightgallery-product-images" data-index="6" style="width: 538px;"> <img src="#" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/e-550x550.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/e-1100x1100.jpg.webp 2x" data-largeimg="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/products/fashion/e-1000x1000.jpg.webp" alt="White Long Sleeve Shirt" title="White Long Sleeve Shirt" width="550" height="550"></div>
                     --> 
                </div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-controls">
                  <div class="swiper-buttons">
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                  </div>
                  <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span></div>
                </div>
                <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
              </div>
              <div class="swiper additional-images swiper-has-pages" data-options="{&quot;slidesPerView&quot;:&quot;auto&quot;,&quot;spaceBetween&quot;:0,&quot;direction&quot;:&quot;vertical&quot;}" style="width: 80px; height: 543px;">
                <div class="swiper-container swiper-container-initialized swiper-container-vertical">
                  <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                  
                </div>
                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-buttons">
                  <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                  <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
              </div>
            </div>
            <div class="lightgallery lightgallery-product-images" data-images="[{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/b-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/b-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;},{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/hat-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/hat-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;},{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/te4-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/te4-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;},{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/te-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/te-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;},{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/c-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/c-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;},{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/tee3-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/additional\/tee3-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;},{&quot;src&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/e-1000x1000.jpg.webp&quot;,&quot;thumb&quot;:&quot;https:\/\/g8g7x7y7.stackpathcdn.com\/5\/image\/cache\/catalog\/journal3\/products\/fashion\/e-80x80.jpg.webp&quot;,&quot;subHtml&quot;:&quot;White Long Sleeve Shirt&quot;}]" data-options="{&quot;thumbWidth&quot;:80,&quot;thumbConHeight&quot;:80,&quot;addClass&quot;:&quot;lg-product-images&quot;,&quot;mode&quot;:&quot;lg-slide&quot;,&quot;download&quot;:true,&quot;fullScreen&quot;:false}"></div>
            <div class="product-blocks blocks-image">
              <div class="product-blocks-image product-blocks-58 grid-rows">
                <div class="grid-row grid-row-58-1">
                  <div class="grid-cols">
                    <div class="grid-col grid-col-58-1-1">
                      <div class="grid-items">
                        <div class="grid-item grid-item-58-1-1-1">
                          <div class="module module-blocks module-blocks-57 blocks-grid">
                            <div class="module-body">
                              <div class="module-item module-item-1 no-expand">
                                <div class="block-body expand-block">
                                  <div class="block-wrapper">
                                    <div class="block-content  block-text"> <script type="text/javascript" src="images/addthis_widget.js.download"></script>
                                      <div class="addthis_inline_share_toolbox" data-url="https://www.journal-theme.com/5/index.php?route=product/product&amp;product_id=300" data-title="White Long Sleeve Shirt" data-description="Product description, along with any other tab can be displayed as tabs, accordion or all-visible blocks in grid format or one under the other.  You can mix and match tabs and blocks in any order and any position. Each tab can also be set up as a link and point to other pages or open popup modul" style="clear: both;">
                                        <div id="atstbx" class="at-resp-share-element at-style-responsive addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-2fef305d-9d20-40b5-a61c-d3298fd6ac1d" role="region"><span id="at-2fef305d-9d20-40b5-a61c-d3298fd6ac1d" class="at4-visually-hidden">AddThis Sharing Buttons</span>
                                          <div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 2px;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                              <title id="at-svg-facebook-1">Facebook</title>
                                              <g>
                                                <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                              </g>
                                            </svg>
                                            </span><span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Facebook</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 2px;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                              <title id="at-svg-twitter-2">Twitter</title>
                                              <g>
                                                <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                                              </g>
                                            </svg>
                                            </span><span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Twitter</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-pinterest_share" style="background-color: rgb(203, 32, 39); border-radius: 2px;"><span class="at4-visually-hidden">Share to Pinterest</span><span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-pinterest_share-3" class="at-icon at-icon-pinterest_share" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                              <title id="at-svg-pinterest_share-3">Pinterest</title>
                                              <g>
                                                <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                                              </g>
                                            </svg>
                                            </span><span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Pinterest</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-email" style="background-color: rgb(132, 132, 132); border-radius: 2px;"><span class="at4-visually-hidden">Share to Email</span><span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-email-4" class="at-icon at-icon-email" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                              <title id="at-svg-email-4">Email</title>
                                              <g>
                                                <g fill-rule="evenodd"></g>
                                                <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                                                <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path>
                                              </g>
                                            </svg>
                                            </span><span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">Email</span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 2px;"><span class="at4-visually-hidden">Share to More</span><span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-5" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 16px; height: 16px;">
                                              <title id="at-svg-addthis-5">AddThis</title>
                                              <g>
                                                <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                                              </g>
                                            </svg>
                                            </span><span class="at-label" style="font-size: 10.2px; line-height: 16px; height: 16px; color: rgb(255, 255, 255);">More</span><span class="at4-share-count-container" style="font-size: 10.2px; line-height: 16px; color: rgb(255, 255, 255);">19</span></a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--
              <div class="tabs-container product_extra product_tabs product_tabs-image">
                <ul class="nav nav-tabs">
                  <li class="active"> <a href="#" data-toggle="tab">Additional Tabs</a></li>
                  <li class=""> <a href="#" data-toggle="tab">Videos</a></li>
                </ul>
                <div class="tab-content">
                  <div class="product_extra-277 tab-pane active" id="product_tabs-5f8ca6d6670eb">
                    <div class="block-body expand-block">
                      <div class="block-wrapper">
                        <div class="block-content "> Unlimited Blocks, Tabs or Accordions with any HTML content can be assigned to any individual product or to certain groups of products, like entire categories, brands, products with specific options, attributes, price range, etc. You can indicate any criteria via the advanced product assignment mechanism and only those products matching your criteria will display the modules.Also, any module can be selectively activated per device (desktop/tablet/phone), customer login status and other criteria. Imagine the possibilities.</div>
                      </div>
                    </div>
                  </div>
                  <div class="product_extra-278 tab-pane" id="product_tabs-5f8ca6d667a44">
                    <div class="block-body expand-block">
                      <div class="block-wrapper">
                        <div class="block-content ">
                          <div class="video-responsive">
                            <div class="video-frame">
                              <iframe width="560" height="315" src="images/Z4uiBxkOZQo.html"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
-->
            </div>
          </div>
          <div class="product-right">
            <div id="product" class="product-details">
              <div class="title page-title">White Long Sleeve Shirt</div>
              <div class="product-blocks blocks-top" style="width:450px;">
                <div class="product-blocks-top product-blocks-247 grid-rows">
                  <div class="grid-row grid-row-247-1">
                    <div class="grid-cols">
                      <div class="grid-col grid-col-247-1-1">
                        <div class="grid-items">
                          <div class="grid-item grid-item-247-1-1-1">
                            <div class="module module-info_blocks module-info_blocks-250">
                              <div class="module-body">
                                <div class="module-item module-item-1 info-blocks info-blocks-icon">
                                  <div class="info-block">
                                    <div class="info-block-content" style="height:40px">
                                      <div  class="info-block-title" style="font-size:14px" ><b>  THIS PRODUCT QUALIFIES FREE SHIPPING</b></div>
                                      <div class="info-block-text" style="font-size:12px">This block is set to appear automatically on products above a certain price, which may qualify for free shipping or other perks.</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs-container product_extra product_tabs product_tabs-top">
                  <ul class="nav nav-tabs">
                    <li class="active"> <a href="https://www.journal-theme.com/5/#product_tabs-5f8ca6d66aa6d" data-toggle="tab">Description</a></li>
                    <li class=""> <a href="https://www.journal-theme.com/5/#product_tabs-5f8ca6d6683be" data-toggle="tab">Specifications</a></li>
                   <!-- <li class=""> <a href="https://www.journal-theme.com/5/#product_tabs-5f8ca6d66a319" data-toggle="tab">Reviews</a></li>
                    <li class=""> <a href="https://www.journal-theme.com/5/#product_tabs-5f8ca6d66b446" data-toggle="tab">Custom Tabs</a></li>-->
                  </ul>
                  <div class="tab-content">
                    <div class="product_extra-275 tab-pane active" id="product_tabs-5f8ca6d66aa6d">
                      <div class="block-body expand-block">
                        <div class="block-wrapper">
                          <div class="block-content expand-content">
                            <p><?php echo $get_product['0']['short_desc']?></p>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product_extra-273 tab-pane" id="product_tabs-5f8ca6d6683be">
                      <div class="block-body expand-block">
                        <div class="block-wrapper">
                          <div class="block-content ">
                            <div id="tab-specification">
                              
                              <?php echo $get_product['0']['description']?>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product_extra-274 tab-pane" id="product_tabs-5f8ca6d66a319">
                      <div class="block-body expand-block">
                        <div class="block-wrapper">
                          <div class="block-content ">
                            <form class="form-horizontal" id="form-review">
                              <div id="review">
                                <p>There are no reviews for this product.</p>
                              </div>
                              <h4>Write a review</h4>
                              <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-name">Your Name</label>
                                <div class="col-sm-10">
                                  <input type="text" name="name" value="" id="input-name" class="form-control">
                                </div>
                              </div>
                              <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-review">Your Review</label>
                                <div class="col-sm-10">
                                  <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                  <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                </div>
                              </div>
                              <div class="form-group required">
                                <label class="col-sm-2 control-label">Rating</label>
                                <div class="col-sm-10 rate"> <span>Bad</span>
                                  <input type="radio" name="rating" value="1">
                                  <input type="radio" name="rating" value="2">
                                  <input type="radio" name="rating" value="3">
                                  <input type="radio" name="rating" value="4">
                                  <input type="radio" name="rating" value="5">
                                  <span>Good</span></div>
                              </div>
                              <div class="buttons clearfix">
                                <div class="pull-right">
                                  <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--
                    <div class="product_extra-276 tab-pane" id="product_tabs-5f8ca6d66b446">
                      <div class="block-body expand-block">
                        <div class="block-wrapper">
                          <div class="block-content ">
                          <?php echo $get_product['0']['meta_desc']?>
                          </div>
                        </div>
                      </div>
                    </div>
                     -->
                  </div>
                </div>
              </div>
              <div class="product-stats">
                <ul class="list-unstyled">
                <?php
										$productSoldQtyByProductId=productSoldQtyByProductId($con,$get_product['0']['id']);
										
										$pending_qty=$get_product['0']['qty']-$productSoldQtyByProductId;
										
										$cart_show='yes';
										if($get_product['0']['qty']>$productSoldQtyByProductId){
											$stock='In Stock';			
										}else{
											$stock='Not in Stock';
											$cart_show='';
										}
										?>
                  <li class="product-stock in-stock"><b>Stock:</b> <span><?php echo $stock?></span></li>
                  <li class="product-model"><b>Model:</b> <span><?php echo $get_product['0']['model_no']?></span></li>
                </ul>
               <!-- <div class="brand-image product-manufacturer"> <a href="https://www.journal-theme.com/5/index.php?route=product/manufacturer/info&amp;manufacturer_id=13"> <img src="images/chic-70x70.jpg.webp" srcset="https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/brands/chic-70x70.jpg.webp 1x, https://g8g7x7y7.stackpathcdn.com/5/image/cache/catalog/journal3/brands/chic-140x140.jpg.webp 2x" alt="Chic D&#39;or"> <span>Chic D'or</span> </a></div>
              -->  
              </div>
              <!--
              <div class="rating rating-page">
                <div class="rating-stars"> <span class="fa fa-stack"> <i class="fa fa-star-o fa-stack-1x"></i> </span> <span class="fa fa-stack"> <i class="fa fa-star-o fa-stack-1x"></i> </span> <span class="fa fa-stack"> <i class="fa fa-star-o fa-stack-1x"></i> </span> <span class="fa fa-stack"> <i class="fa fa-star-o fa-stack-1x"></i> </span> <span class="fa fa-stack"> <i class="fa fa-star-o fa-stack-1x"></i> </span></div>
                <div class="review-links"> <a>Based on 0 reviews.</a> <b>-</b> <a>Write a review</a></div>
              </div>
              -->
              <div class="product-price-group">
                <div class="price-wrapper">
                  <div class="price-group">
                    <div class="product-price">Rs <?php echo $get_product['0']['price']?></div>
                  </div>
                  <div class="product-tax">Old Price: Rs <?php echo $get_product['0']['mrp']?></div>
                </div>
              </div>
              <div class="product-options">
                <h3 class="options-title title">Available Options</h3>
                <!--
                <div class="form-group required  product-option-select ">
                  <label class="control-label" for="input-option643">Size</label>
                  <select name="option[643]" id="input-option643" class="form-control">
                    <option value=""> --- Please Select ---</option>
                    <option value="1459">S</option>
                    <option value="1460">M</option>
                    <option value="1461">L</option>
                    <option value="1462">XL</option>
                  </select>
                </div>
                -->
                <!--
                <div class="form-group required  product-option-radio push-option">
                  <label class="control-label">Color</label>
                  <div id="input-option642">
                    <div class="radio">
                      <label>
                        <input type="radio" name="option[642]" value="1455">
                        <img src="images/13-40x40.png" alt="Yellow " data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="top" title="" data-original-title="Yellow "> <span class="option-value"> Yellow </span> </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="option[642]" value="1457">
                        <img src="images/3-40x40.png" alt="Orange" data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="top" title="" data-original-title="Orange "> <span class="option-value"> Orange </span> </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="option[642]" value="1456">
                        <img src="images/5-40x40.png" alt="Gold " data-toggle="tooltip" data-tooltip-class="push-tooltip" data-placement="top" title="" data-original-title="Gold "> <span class="option-value"> Gold </span> </label>
                    </div>
                  </div>
                </div>
                -->
                <script type="text/javascript" src="js/custom.js"></script>
              </div>
              <div class="button-group-page" >
                <div class="buttons-wrapper">
                  <div class="stepper-group cart-group">
                    <div class="stepper">
                      <label class="control-label" for="product-quantity">Qty</label>
                      <input id="qty" type="text" value="1" data-minimum="1"   name="quantity" class="form-control">
                      <input id="product-id" type="hidden" name="product_id" value="300">
                      <span> <i class="fa fa-angle-up"></i> <i class="fa fa-angle-down"></i> </span></div>
                      
                      <a  href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')" id="button-cart" data-loading-text="Add to Cart" class="btn btn-cart"   ><span class="btn-text">Add to Cart</span></a>
                    <div class="wishlist-compare"  > <a  href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist"   data-toggle="tooltip" data-tooltip-class="pp-wishlist-tooltip" data-placement="top" title=""  data-original-title="Add to Wish List"><span class="btn-text" >Add to wishlist</span></a><a  href="javascript:void(0)" onclick="manage_buy('<?php echo $get_product['0']['id']?>','add')" class="btn btn-compare" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid compare-tooltip" data-placement="top" title=""  data-original-title="Buy Now"><span class="btn-text">Buy Now</span></a></div>
                  </div>
                  <br>
                 </div>
              </div>
            </div>
             
          </div>
        </div>
         
      </div>
     
      <aside id="column-right" class="side-column" style="margin-left:200px">
        <div class="grid-rows">
          <div class="grid-row grid-row-column-right-1">
            <div class="grid-cols">
              <div class="grid-col grid-col-column-right-1-1">
                <div class="grid-items">
                  <div class="grid-item grid-item-column-right-1-1-1">
                    <div class="module module-info_blocks module-info_blocks-244">
                      <div class="module-body">
                        <div class="module-item module-item-1 info-blocks info-blocks-icon">
                          <div class="info-block">
                            <div class="info-block-content">
                              <div class="info-block-title"><b>Free Shipping</b></div>
                              <div class="info-block-text">Free delivery over Rs 10K</div>
                            </div>
                          </div>
                        </div>
                        <div class="module-item module-item-2 info-blocks info-blocks-icon">
                          <div class="info-block">
                            <div class="info-block-content">
                              <div class="info-block-title"><b>Free Returns</b></div>
                              <div class="info-block-text">Hassle free returns</div>
                            </div>
                          </div>
                        </div>
                        <div class="module-item module-item-3 info-blocks info-blocks-icon">
                          <div class="info-block">
                            <div class="info-block-content">
                              <div class="info-block-title"><b>Secured Shopping</b></div>
                              <div class="info-block-text">Best security features</div>
                            </div>
                          </div>
                        </div>
                        <div class="module-item module-item-4 info-blocks info-blocks-icon">
                          <div class="info-block">
                            <div class="info-block-content">
                              <div class="info-block-title"><b>Discount Offers</b></div>
                              <div class="info-block-text">Any product, any sample</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
               $cat_id= $get_product['0']['categories_id'];
              ?>
              <div class="grid-col grid-col-column-right-1-2">
                <div class="grid-items">
                  <div class="grid-item grid-item-column-right-1-2-1">
                    <div class="module module-products module-products-82 module-products-grid carousel-mode">
                      <div class="module-body">
                        <div class="module-item module-item-1 swiper-slide">
                          <h3 class="title module-title">Related Products</h3>
                          <div class="swiper swiper-has-pages" data-items-per-row="{&quot;c0&quot;:{&quot;0&quot;:{&quot;items&quot;:2,&quot;spacing&quot;:0}},&quot;c1&quot;:{&quot;0&quot;:{&quot;items&quot;:2,&quot;spacing&quot;:0}},&quot;c2&quot;:{&quot;0&quot;:{&quot;items&quot;:1,&quot;spacing&quot;:0}},&quot;sc&quot;:{&quot;0&quot;:{&quot;items&quot;:1,&quot;spacing&quot;:0}}}" data-options="{&quot;speed&quot;:500,&quot;autoplay&quot;:false,&quot;pauseOnHover&quot;:true,&quot;loop&quot;:false}">
                            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                              <div class="swiper-wrapper product-grid" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="product-layout swiper-slide has-extra-button swiper-slide-visible swiper-slide-active" style="width: 219px;">
                               
                                  <?php            
                                   $get_product=get_product($con,'4',$cat_id);                        
                                     //prx($get_product);
                                     if(count($get_product)>0){
                                     ?>

                                  <div class="product-thumb">
                                  
                                    <div class="image">
                                      <a href="categories.php?id=<?php echo $get_product['0']['categories_id']?>" class="product-img ">
                                      <div> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['1']['image']?>" width="190" height="190" alt="Riding Pants" title="<?php echo $get_product['1']['name']?>" class="img-responsive img-first lazyload lazyloaded" srcset="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['1']['image']?>" data-ll-status="loaded"></div>
                                      </a>
                                      <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
                                    </div>
                                    <div class="caption">
                                      <div class="name"><a href="#"><?php echo $get_product['1']['name']?></a></div>
                                      <div class="description"><?php echo $get_product['1']['short_desc']?></div>
                                      <div class="price">
                                        <div> <span class="price-normal">Rs <?php echo $get_product['1']['price']?></span></div>
                                        <span class="price-tax">Old Price: Rs <?php echo $get_product['1']['mrp']?></span></div>
                                      <div class="rating no-rating ">
                                        <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                      </div>
                                      <div class="buttons-wrapper">
                                        <div class="button-group">
                                          <div class="cart-group">
                                           
                                           
                                             <a href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['1']['id']?>','add')" id="button-cart" class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-82 module-products-grid cart-tooltip" data-placement="top" title=""  data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Add to Cart&lt;/span&gt;" data-original-title="Add to Cart"><span class="btn-text">Add to Cart</span></a></div>
                                          <div class="wish-group"> <a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-82 module-products-grid wishlist-tooltip" data-placement="top" title=""  data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a> </div>
                                        </div>
                                      </div>
                                   
                                    </div>
                                  </div>
                                </div>


                                <div class="product-layout swiper-slide has-extra-button swiper-slide-next" style="width: 219px;">
                                          <?php if(count($get_product)>1){
                                                 ?>
                                    <div class="product-thumb">
                                    <div class="image">
                            
                                      <a href="categories.php?id=<?php echo $get_product['0']['categories_id']?>"  class="product-img ">
                                      <div> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['2']['image']?>"  data-srcset="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['2']['image']?>"  width="190" height="190" alt="Strech Pants" title="<?php echo $get_product['2']['name']?>" class="img-responsive img-first lazyload"></div>
                                      </a>
                                      <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
                                    </div>
                                    <div class="caption">
                                      <div class="name"><a><?php echo $get_product['2']['name']?></a></div>
                                      <div class="description"><?php echo $get_product['2']['short_desc']?></div>
                                      <div class="price">
                                        <div> <span class="price-normal">PKR <?php echo $get_product['2']['price']?></span></div>
                                        <span class="price-tax">Old Price: <?php echo $get_product['2']['mrp']?></span></div>
                                      <div class="rating no-rating ">
                                        <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                      </div>
                                      <div class="buttons-wrapper">
                                        <div class="button-group">
                                          <div class="cart-group">
                                            
                                             <a  href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['2']['id']?>','add')" class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-82 module-products-grid cart-tooltip" data-placement="top" title=""  data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Add to Cart&lt;/span&gt;" data-original-title="Add to Cart"><span class="btn-text">Add to Cart</span></a></div>
                                          <div class="wish-group"> <a  href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-82 module-products-grid wishlist-tooltip" data-placement="top" title="" data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a></div>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                  <?php
                                      }
                                      else 
                                      {
                                        echo '<p style="text-align:center;margin-top:180px">No other related product is available</p>';
                                      }
                                      ?>
                                </div>
                                   
                                      
                              <div class="product-layout swiper-slide has-countdown has-extra-button" style="width: 219px;">
                                  <?php if(count($get_product)>2){
                                                 ?>
                                  <div class="product-thumb">
                                    <div class="image">
                                       <a href="categories.php?id=<?php echo $get_product['0']['categories_id']?>" class="product-img ">
                                      <div> <img src= "<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['3']['image']?>" data-srcset="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['3']['image']?>" width="190" height="190" alt="Long Sleeve Stripe Shirt" title="<?php echo $get_product['3']['name']?>" class="img-responsive img-first lazyload"></div>
                                      </a>
                                      
                                    </div>
                                    <div class="caption">
                                      <div class="name"><a href="#"><?php echo $get_product['3']['name']?></a></div>
                                      <div class="description"><?php echo $get_product['3']['short_desc']?></div>
                                      <div class="price">
                                        <div> <span class="price-new">PKR <?php echo $get_product['3']['price']?></span> </div>
                                        <span class="price-tax">Old Price <?php echo $get_product['3']['mrp']?></span></div>
                                      <div class="rating no-rating ">
                                        <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                      </div>
                                      <div class="buttons-wrapper">
                                        <div class="button-group">
                                          <div class="cart-group">
                                            
                                             <a  href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['3']['id']?>','add')" class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-82 module-products-grid cart-tooltip" data-placement="top" title=""  data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Add to Cart&lt;/span&gt;" data-original-title="Add to Cart"><span class="btn-text">Add to Cart</span></a></div>
                                          <div class="wish-group"> <a  href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-82 module-products-grid wishlist-tooltip" data-placement="top" title="" data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a></div>
                                                                             
                                        </div>
                                       
                                      </div>

                                       
                                    </div>
                                   
                                  </div>
                                  <?php
                                      }
                                      else 
                                      {
                                        echo '<p style="text-align:center;margin-top:180px">No other related product is available</p>';
                                      }
                                      ?> 
                                  <?php }
else
{
  echo '<p style="text-align:center;margin-top:180px">There is no related product available for this category </p>';
}
?>
                                </div>
                              </div>
                              <br>
                              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <div class="swiper-buttons">
                              <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                              <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
  

  <?php require('footer.php')?>