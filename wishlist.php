<?php 
require('header.php');
//require('functions.inc.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$uid=$_SESSION['USER_ID'];

$res=mysqli_query($con,"select product.name,product.image,product.price,product.mrp,product.id as pid,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'");
?>

 <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/4.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Wishlist</span>
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
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-name">Remove</th>
											<th class="product-name"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                    <?php
                    
										while($row=mysqli_fetch_assoc($res)){
										?>
											<tr>
												<td class="product-thumbnail"><a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>"  /></a></td>
												<td class="product-name"><a href="#"><?php echo $row['name']?></a>
													<ul  class="pro__prize">
														<li class="old__prize"><?php echo $row['mrp']?></li>
														<li><?php echo $row['price']?></li>
													</ul>
												</td>
												
												<td class="product-remove"><a href="wishlist.php?wishlist_id=<?php echo $row['id']?>"><i class="icon-trash icons"></i></a></td>
												<td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $row['pid']?>','add')">Add to Cart</a></td>
											</tr>
                      <?php }
                      
                     ?>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="<?php echo SITE_PATH?>">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="<?php echo SITE_PATH?>checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        
		<input type="hidden" id="qty" value="1"/>						
<?php require('footer.php')?>        