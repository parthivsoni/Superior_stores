<?php 
require('conn.php');
if(!isset($_SESSION['CUSTOMER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
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
                                            <th class="product-price">price</th>
                                            <th class="product-quantity">quantity</th>
                                            <th class="product-subtotal">total</th>
                                            <th class="product-remove">remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										if(isset($_SESSION['cart'])){
											foreach($_SESSION['cart'] as $key=>$val){
											$productArr=get_porduct($con, '', '', $key);
											$name=$productArr[0]['product_name'];
											$price=$productArr[0]['product_price'];
											$image=$productArr[0]['product_image'];
											$qty=$val['qty'];

										?>
                                        <tr>
                                            <td class="product-thumbnail"  height="200px" width="250px"><a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" alt="product images" /></a></td>
                                            <td class="product-name"><a href="#"><h4><a href="product-details.html"><?php echo $name?></a></h4></a>
                                            <td class="product-price"><span class="amount">₹<?php echo $price?></span></td>
                                            <td class="product-quantity">
                                                <input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>" min="1" max="10"/><br><br>
                                                <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a>
                                            </td>                                            
                                            <td class="product-subtotal">₹<?php echo $qty*$price?>.00</td>
                                            <td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                            <a href="<?php echo SITE_PATH?>">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
										
<?php require('footer.php')?>        