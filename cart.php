<?php include('hed.php'); ?>
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                <?php

$i=0;$tot=0;$tot_qty=0;
                 if(isset($_COOKIE["ct"])){
          $cookie_data = stripslashes($_COOKIE['ct']);
          $cart_data = json_decode($cookie_data, true);


          foreach($cart_data as $i => $values ){
        $pro=$values['id'];
            $stmt = $db->query("SELECT * FROM product WHERE id='$pro' ");
           while ($row = $stmt->fetch())
           { $price=$row['sell_price']*$values['qty'];  }
          ?>

                <tr>
                  <td><a class="ps-product__preview" href="product-detail.html"><img class="mr-15" src="images/product/<?php  echo $values['img']; ?>" style="width:180px;" alt=""><?php  echo $values['name']; ?></a></td>
                  <td>Rs.<?php  echo number_format($price,2); ?> </td>
                  <td>
                    <div class="form-group--number">

                      <?php  echo $values['qty']; $price_tot= $values['qty']*$price;?>

                    </div>
                  </td>
                  <td>Rs.<?php  echo number_format($price_tot,2); ?></td>
                  <td>
                  <a href="cart_dll.php?id=<?php echo $i; ?>"><div class="ps-remove"></div></a>
                  </td>
                </tr>

        <?php $i+=1; $tot+=$price_tot; $tot_qty+=$values['qty']; } } ?>
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
                <div class="form-group">
                  <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                    <input class="form-control" type="text" placeholder="Promo Code">
                  </div>
                </div>
                <div class="form-group">
                  <button class="ps-btn ps-btn--gray">Continue Shopping</button>
                </div>
              </div>
              <div class="ps-cart__total">
                <h3>Total Price: <span> Rs.<?php  echo number_format($tot,2); ?> </span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php include('foote.php'); ?>
