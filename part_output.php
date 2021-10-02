<?php include("connect.php"); ?>
<?php $id=$_GET['id']; ?>

<div class="grid-sizer"></div>
<?php $stmt = $db->query("SELECT * FROM part WHERE action='0' AND sub_model_id='$id' ORDER by id DESC limit 0,25");
while ($row = $stmt->fetch())
{ $product_id=$row['id'];  ?>
<div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                      <div class="ps-shoe__thumbnail">
                        <img src="images/part/<?php echo $row['img']; ?>" alt=""><a class="ps-shoe__overlay" href="product-view?id=<?php echo $row['id']; ?>"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants"> <br>

                          <form  action="add_cart.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                            <input type="number" class="ps-btn ps-btn--gray" style="width:100px;" name="qty" value="1">
                            <input type="submit" class="ps-btn" value="ADD CART">
                          </form>


                        </div>

                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $row['name']; ?></a> <br>
                          <span style="color: #e60000 ;  font-size: 20px; font-weight: bold;"><?php echo $row['part_number']; ?></span>
                          <p class="ps-shoe__categories"><a href="#"><?php echo $row['sub_model']; ?></a>,

                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>