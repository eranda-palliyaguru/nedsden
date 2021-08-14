<?php include('hed.php'); ?>


    <main class="ps-main">

      <div class="ps-product--detail pt-60">
        <div class="ps-container">

            <?php $id=$_GET['id'];
            $stmt = $db->query("SELECT * FROM diagram WHERE id='$id' ");
            while ($row = $stmt->fetch())
            { $product_id=$row['id'];  ?>
            <div class="col-lg-10 col-md-12 col-lg-offset-1">


                <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0">
                  <img class="zoom" src="images/diagram/<?php echo $row['img'] ; ?>" alt="" data-zoom-image="images/diagram/<?php echo $row['img'] ; ?>"alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                  </li>



              <div class="clearfix"></div>



             
   

            </div>
          <?php } ?>
          </div>
        </div>

 <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="6" data-col-sm="2" data-col-xs="2" data-gap="30" data-radio="70%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>

<?php $stmt = $db->query("SELECT * FROM part WHERE action='0' and diagram_id='$id' ORDER by diagram_part_no ASC ");
while ($row = $stmt->fetch())
{ $product_id=$row['id'];  ?>

                <div class="grid-item <?php echo $row['id'] ; ?>">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe mb-30">
                        
                      <div class="ps-shoe__thumbnail">
                          <div class="ps-badge "><span><?php echo $row['diagram_part_no']; ?></span></div>
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

                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $row['part_number']; ?></a> <br>
                          <span style="color: #e60000 ;  font-size: 14px; font-weight: bold;"><?php echo $row['name']; ?></span>
                          <p class="ps-shoe__categories"><a href="#"><?php echo $row['sub_model']; ?></a>,

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<?php } ?>
    </div>
                  </div>
                </div>
    <?php include('foote.php'); ?>
