<?php 
require('header.php');
//require('functions.inc.php');
$str=mysqli_real_escape_string($con,$_GET['str']);
if($str!=''){
	$get_product=get_product($con,'','','',$str);
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}										
?>
<div class="body__overlay"></div>
        
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/4.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Search</span>
								  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active"><?php echo $str?></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
        <!-- End Bradcaump area -->
        <div id="bottom" class="bottom top-row">
    <div class="grid-rows">
      <div class="grid-row grid-row-bottom-1">
        <div class="grid-cols">
          <div class="grid-col grid-col-bottom-1-1">
            <div class="grid-items">
              <div class="grid-item grid-item-bottom-1-1-1">
                <div class="module module-info_blocks module-info_blocks-260">
                  <div class="module-body">
                    <div class="module-item module-item-1 info-blocks info-blocks-icon">
                      <div class="info-block">
                        <div class="info-block-content">
                          <div class="info-block-title">Free Fast Shipping on orders above 10k</div>
                          <div class="info-block-text"></div>
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
      
		<div class="grid-col grid-col-bottom-2-2" >
            <div class="grid-items">
              <div class="grid-item grid-item-bottom-2-2-1" >
                <div class="module module-products module-products-257 module-products-grid">
                  <div class="module-body" >
                    <div class="tab-container" >
                    <ul class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-home"></i></a></li>
    <li><a href="">Search Results</a></li>
    
 
  </ul>
                      <div class="tab-content">
                        <div class="module-item module-item-1 tab-pane active" id="products-5f840f4ed1e5c-tab-1">
                        <?php if(count($get_product)>0){?>
                       
                        <div class="product-grid">
                        <?php
							       
							        foreach($get_product as $list){
                      
							         ?>
                            <div class="product-layout  has-extra-button">
                              <div class="product-thumb">
                                <div class="image">
                                  <a href="product.php?id=<?php echo $list['id']?>" class="product-img has-second-image">
                                  <div> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" width="250" height="250" alt="<?php echo $list['name']?>" title="<?php echo $list['name']?>" class="img-responsive img-first lazyload lazyloaded" > </div>
                                  </a>
                                  <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
                                </div>
                                <div class="caption">
                                  <div class="stats"> <span class="stat-1"><span class="stats-label">Brand:</span> <span><a href="#"><?php echo $list['name']?></a></span></span> <span class="stat-2"> <span>Model <?php echo $list['mrp']?></span></span></div>
                                  <div class="name"><a href="#"><?php echo $list['meta_title']?></a></div>
                                 <!-- <div class="description">Product description, along with any other tab can be displayed as tabs, accordion or all-visible blocks in grid format or one under the other.&nbsp; Y..</div> --> 
                                 <div class="price">
                                    <div> <span class="price-normal">Rs: <?php echo $list['price']?></span></div>
                                    </div>
                                  <div class="rating no-rating ">
                                    <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                  </div>
                                  <div class="buttons-wrapper">
                                    <div class="button-group">
                                      <div class="cart-group">
                                        <div class="stepper">
                                          <input type="text" name="quantity" value="1" data-minimum="1" class="form-control">
                                          
                                          <span> <i class="fa fa-angle-up"></i> <i class="fa fa-angle-down"></i> </span></div>
                                        <a class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid cart-tooltip" data-placement="top" title="" onclick="cart.add(&#39;299&#39;, $(this).closest(&#39;.product-thumb&#39;).find(&#39;.button-group input[name=\&#39;quantity\&#39;]&#39;).val());" data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Add to Cart&lt;/span&gt;" data-original-title="Add to Cart"><span class="btn-text">Add to Cart</span></a></div>
                                      <div class="wish-group"> <a class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid wishlist-tooltip" data-placement="top" title="" onclick="wishlist.add(&#39;299&#39;)" data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a> <a class="btn btn-compare" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid compare-tooltip" data-placement="top" title="" onclick="compare.add(&#39;299&#39;)" data-original-title="Compare this Product"><span class="btn-text">Compare this Product</span></a></div>
                                    </div>
                                  </div>
                                  <div class="extra-group">
                                    <div>  <a class="btn btn-extra btn-extra-93" href="contact.php" style="margin-left:70px" data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Ask Question&lt;/span&gt;"> <span class="btn-text">Ask Question</span> </a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                                    }
                                    ?>
                          </div>
                        </div>
                        <?php } else { 
						echo "There is no product available for this search result.";
					} ?>
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
  <br>
        <!-- End Banner Area -->
		<input type="hidden" id="qty" value="1"/>
<?php require('footer.php')?>        