<?php include("connect.php"); ?>
<?php if(isset($_COOKIE["model"])){ $id= stripslashes($_COOKIE['model']); } ?>



<div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="DIAGRAM"></h3>

                  </div>  <br><br>
                 <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="5" data-col-sm="2" data-col-xs="2" data-gap="30" data-radio="100%">
                  <div class="ps-masonry">
                <div class="grid-sizer"></div>

                <?php $stmt = $db->query("SELECT * FROM diagram WHERE sub_model_id='$id' AND action='0' ORDER by id DESC LIMIT 8 ");
while ($row = $stmt->fetch())
{ $product_id=$row['id'];  ?>
<div class="col-md-3">
         
         
            
               
                 <a class="ps-shoe__overlay" href="diagram.php?id=<?php echo $row['id'] ; ?>"> <img style="width:100%;" src="images/diagram/<?php echo $row['img'] ; ?>" alt=""></a>
                
                <div >


                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="diagram.php?id=<?php echo $row['id'] ; ?>"><?php echo $row['name'] ; ?> </a> <br>
                    <span style="color: #e60000 ;  font-size: 20px; font-weight: bold;"><?php echo $row['sub_model']; ?></span>


                  </div>
                </div>
              </div>
           
         
<?php } ?> 

              </div><center> <BUtton style="width: 50%;" class="ps-btn">SEE MORE</BUtton></center>
            </div>
          </div>
        </div>

        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="PARTS"></h3>
          </div>  <br><br>
          <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="5" data-col-sm="2" data-col-xs="2" data-gap="30" data-radio="100%">
              <div class="ps-masonry" >
                <div class="grid-sizer"></div>

                
<?php $stmt = $db->query("SELECT * FROM part WHERE sub_model_id='$id' ORDER by id DESC limit 0,15");
while ($row = $stmt->fetch())
{ $product_id=$row['id'];  ?>

                <div class="grid-item <?php echo $row['id'] ; ?>" >
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
                </div>
<?php } ?> 

              </div>
            </div>
          </div>
          <center> <BUtton style="width: 50%;" class="ps-btn">SEE MORE</BUtton></center>
        </div>
      </div>



