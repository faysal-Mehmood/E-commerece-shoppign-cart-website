<?php
 require('header.php');
 //require('functions.inc.php');
 $cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
 $cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
 ?>

<div class="ms-slide-bgcont" style="height: 100%; top: 0px; opacity: 1;"><img src="images/slider.png" alt="" width="100%" height="550" >
  
  </div>

  <!--
  .active:after {
    content: "\2212";
  }
-->    
  
<script type="text/javascript" src="js/custom.js"></script>
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
                          <div class="info-block-title">Free Fast Shipping on orders above 10K</div>
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
   

<div class="grid-row grid-row-bottom-2">
        <div class="grid-cols">
          <div class="grid-col grid-col-bottom-2-1">
            <div class="grid-items">
               <!-- accordion start-->
            <div class="grid-item grid-item-bottom-2-1-1">
                <div class="accordion-menu accordion-menu-19">
                  <h3 class="title module-title">All Categories</h3>
                  <?php
					foreach($cat_arr as $list){
					?>

<button  class="accordion"><a style="color: rgba(48, 56, 65, 1);text-transform: uppercase;" href="categories.php?id=<?php echo $list['id']?>"><span class="links-text"><b><?php echo $list['categories']?></b></span></a></button>
<div class="panel">
                 <?php   
              $cat_id=$list['id'];
              
               $sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
                if(mysqli_num_rows($sub_cat_res)>0){
              ?>
               <ul class="j-menu">
               <?php
                           while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
                           echo '<li class="menu-item menu-item-c125"> <a href="categories.php?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li> ';
                 }
                   ?>  
                </ul>
                <?php
      } ?>
</div>

<?php
                    }
                    
                    ?>

                  
                </div>
              </div>

              <!-- close accordion-->
              <div class="grid-item grid-item-bottom-2-1-2">
                <div id="banners-5f840f4ec660a" class="module module-banners module-banners-204">
                  <div class="module-body">
                    <div class="module-item module-item-1"><a href="#">  <img src="images/addon.png" alt="summer- ad" width="210" height="210"></a></div>
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
                    <div class="tab-container">
                      <ul class="nav nav-tabs" >
                        <li class="tab-1 active"> <a href="https://www.zukhrufmart.com/5/#products-5f840f4ed1e5c-tab-1" data-toggle="tab">Latest</a></li>
                        <li class="tab-2"> <a href="https://www.zukhrufmart.com//5/#products-5f840f4ed1e5c-tab-2" data-toggle="tab">Bestsellers</a></li>
                      <!--  <li class="tab-3"> <a href="https://www.journal-theme.com/5/#products-5f840f4ed1e5c-tab-3" data-toggle="tab">Best Rated</a></li>
                     -->   <li class="tab-4"> <a href="https://www.zukhrufmart.com//5/#products-5f840f4ed1e5c-tab-4" data-toggle="tab">Specials</a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="module-item module-item-1 tab-pane active" id="products-5f840f4ed1e5c-tab-1">
                          
                       
                        <div class="product-grid">
                        <?php
							        $get_product=get_product($con);
							        foreach($get_product as $list){
                      
							         ?>
                            <div class="product-layout  has-extra-button">
                              <div class="product-thumb">
                                <div class="image">
                                <!--  <div class="quickview-button"> <a class="btn btn-quickview" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid quickview-tooltip" data-placement="top" title="" onclick="quickview(#)" data-original-title="Quickview"><span class="btn-text">Quickview</span></a></div>
                                 --> <a href="product.php?id=<?php echo $list['id']?>" ><!--class="product-img has-second-image"-->
                                  <div> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" width="250" height="250" alt="<?php echo $list['name']?>" title="<?php echo $list['name']?>" class="img-responsive img-first lazyload lazyloaded" > </div>
                                  </a>
                                  <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
                                </div>
                                <div class="caption">
                                  <div class="stats"> <span class="stat-1"><span class="stats-label">Brand:</span> <span><a href="#"><?php echo $list['name']?></a></span></span> <span class="stat-2"> <span>Model <?php echo $list['model_no']?></span></span></div>
                                  <div class="name"><a href="#"><?php echo $list['meta_title']?></a></div>
                                 <!-- <div class="description">Product description, along with any other tab can be displayed as tabs, accordion or all-visible blocks in grid format or one under the other.&nbsp; Y..</div> --> 
                                 <div class="price">
                                    <div> <span class="price-normal">Rs <?php echo $list['price']?></span></div>
                                    </div>
                                  <div class="rating no-rating ">
                                    <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                  </div>
                                  <div class="buttons-wrapper">
                                    <div class="button-group">
                                      <div class="cart-group">
                                      <div class="stepper">
                                      
                                      <input id="qty" type="text" value="1" data-minimum="1"   name="quantity" class="form-control">
                                       <input id="product-id" type="hidden" name="product_id" value="300">
                                      <span> <i class="fa fa-angle-up"></i> <i class="fa fa-angle-down"></i> </span></div>
                      
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id']?>','add')" class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid cart-tooltip" data-placement="top" title=""   data-original-title="Add to Cart"  ><span class="btn-text">Add to Cart</span></a></div>
                                      <div class="wish-group"> <a   href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid wishlist-tooltip" data-placement="top" title=""  data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a> <a  href="javascript:void(0)" onclick="manage_buy('<?php echo $list['id']?>','add')" class="btn btn-compare" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid compare-tooltip" data-placement="top" title=""  data-original-title="Buy Now"><span class="btn-text">Buy Now</span></a></div>
                                    </div>
                                  </div>
                                  <div class="extra-group">
                                    <div> <!--<a   href="#" class="btn btn-extra btn-extra-46"  data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Buy Now&lt;/span&gt;"> <span class="btn-text">Buy Now</span> </a>--> <a class="btn btn-extra btn-extra-93" href="contact.php" style="margin-left:70px" data-loading-text="&lt;span class=&#39;btn-text&#39;&gt;Ask Question&lt;/span&gt;"> <span class="btn-text" >Ask Question</span> </a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                                    }
                                    ?>
                          </div>
                        </div>
                        <!-- start best seller-->
                        <div class="module-item module-item-2 tab-pane" id="products-5f840f4ed1e5c-tab-2">
                        
                          <div class="product-grid">
                        <?php
							        $get_product=get_product($con,'','','','','','yes');
							        foreach($get_product as $list){
                      
							         ?>
                            <div class="product-layout  has-extra-button">
                              <div class="product-thumb">
                                <div class="image">
                                  <a href="product.php?id=<?php echo $list['id']?>" ><!--class="product-img has-second-image"-->
                                  <div> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" width="250" height="250" alt="<?php echo $list['name']?>" title="<?php echo $list['name']?>" class="img-responsive img-first lazyload lazyloaded" > </div>
                                  </a>
                                  <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
                                </div>
                                <div class="caption">
                                  <div class="stats"> <span class="stat-1"><span class="stats-label">Brand:</span> <span><a href="#"><?php echo $list['name']?></a></span></span> <span class="stat-2"> <span>Model <?php echo $list['model_no']?></span></span></div>
                                  <div class="name"><a href="#"><?php echo $list['meta_title']?></a></div>
                                 <!-- <div class="description">Product description, along with any other tab can be displayed as tabs, accordion or all-visible blocks in grid format or one under the other.&nbsp; Y..</div> --> 
                                 <div class="price">
                                    <div> <span class="price-normal">Rs <?php echo $list['price']?></span></div>
                                    </div>
                                  <div class="rating no-rating ">
                                    <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                  </div>
                                  <div class="buttons-wrapper">
                                    <div class="button-group">
                                      <div class="cart-group">
                                        <div class="stepper">
                                        <input id="qty" type="text" value="1" data-minimum="1"   name="quantity" class="form-control">
                                         <span> <i class="fa fa-angle-up"></i> <i class="fa fa-angle-down"></i> </span></div>
                      
                                        <a class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid cart-tooltip" data-placement="top" title=""   data-original-title="Add to Cart"   href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')"><span class="btn-text">Add to Cart</span></a></div>
                                        <div class="wish-group"> <a   href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid wishlist-tooltip" data-placement="top" title=""  data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a> <a  href="javascript:void(0)" onclick="manage_buy('<?php echo $list['id']?>','add')" class="btn btn-compare" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid compare-tooltip" data-placement="top" title=""  data-original-title="Buy Now"><span class="btn-text">Buy Now</span></a></div>
                                   
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
                        <!--End best seller-->
                           <!-- start special product-->
                           <div class="module-item module-item-2 tab-pane" id="products-5f840f4ed1e5c-tab-4">
                        
                        <div class="product-grid">
                      <?php
                    $get_product=get_product($con,'','','','','','','','yes');
                    foreach($get_product as $list){
                    
                     ?>
                          <div class="product-layout  has-extra-button">
                            <div class="product-thumb">
                              <div class="image">
                                <a href="product.php?id=<?php echo $list['id']?>" ><!--class="product-img has-second-image"-->
                                <div> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" width="250" height="250" alt="<?php echo $list['name']?>" title="<?php echo $list['name']?>" class="img-responsive img-first lazyload lazyloaded" > </div>
                                </a>
                                <div class="product-labels"> <span class="product-label product-label-29 product-label-default"><b>New</b></span> <span class="product-label product-label-31 product-label-default"><b>Hot</b></span></div>
                              </div>
                              <div class="caption">
                                <div class="stats"> <span class="stat-1"><span class="stats-label">Brand:</span> <span><a href="#"><?php echo $list['name']?></a></span></span> <span class="stat-2"> <span>Model <?php echo $list['model_no']?></span></span></div>
                                <div class="name"><a href="#"><?php echo $list['meta_title']?></a></div>
                               <!-- <div class="description">Product description, along with any other tab can be displayed as tabs, accordion or all-visible blocks in grid format or one under the other.&nbsp; Y..</div> --> 
                               <div class="price">
                                  <div> <span class="price-normal">Rs <?php echo $list['price']?></span></div>
                                  </div>
                                <div class="rating no-rating ">
                                  <div class="rating-stars"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                                </div>
                                <div class="buttons-wrapper">
                                  <div class="button-group">
                                    <div class="cart-group">
                                      <div class="stepper">
                                      <input id="qty" type="text" value="1" data-minimum="1"   name="quantity" class="form-control">
                                       <span> <i class="fa fa-angle-up"></i> <i class="fa fa-angle-down"></i> </span></div>
                                      <a class="btn btn-cart" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid cart-tooltip" data-placement="top" title=""   data-original-title="Add to Cart"   href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')"><span class="btn-text">Add to Cart</span></a></div>
                                      <div class="wish-group"> <a   href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn btn-wishlist" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid wishlist-tooltip" data-placement="top" title=""  data-original-title="Add to Wish List"><span class="btn-text">Add to Wish List</span></a> <a  href="javascript:void(0)" onclick="manage_buy('<?php echo $list['id']?>','add')" class="btn btn-compare" data-toggle="tooltip" data-tooltip-class="module-products-257 module-products-grid compare-tooltip" data-placement="top" title=""  data-original-title="Buy Now"><span class="btn-text">Buy Now</span></a></div>
                                   
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
                      <!--End special product-->
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
  <script>
  var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

  <?php require('footer.php')?>