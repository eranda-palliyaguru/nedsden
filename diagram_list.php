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
                          <select style="background-color: black; color:red; width:260px; font-size: 20px;" name="product" >
              
<?php $stmt1 = $db->query("SELECT * FROM products  ORDER by id ASC LIMIT 4 ");
while ($row1 = $stmt1->fetch())
{ ?>  <option value="<?php echo $row1['id']; ?>">Rs.<?php echo $row1['price']; ?></option> <?php } ?>
            </select>
                            <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                            <input type="number" class="ps-btn ps-btn--gray" style="width:100px;" name="qty" value="1">
                            <input type="submit" class="ps-btn" value="ADD CART">
                          </form>
                        </div>

                        <div class="ps-shoe__detail">
               <br> 
                        <a class="ps-shoe__name" href="#"><?php echo $row['name']; ?></a> <br>
                          <span style="color: #e60000 ;  font-size: 20px; font-weight: bold;"><?php echo $row['part_number']; ?></span>
                          

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


      <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                  </div>
            </div>
          </div>
          <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">

              <?php $stmt = $db->query("SELECT * FROM products WHERE action='2' ORDER by id ASC limit 5");
              while ($row = $stmt->fetch())
              { $product_id=$row['id'];  ?>

                              <div class="grid-item <?php // echo $row['brand'] ; ?>">
                                <div class="grid-item__content-wrapper">
                                  <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                      <img src="images/product/<?php echo $row['img'] ; ?>" alt=""><a class="ps-shoe__overlay" href="product-view?id=<?php echo $row['id']; ?>"></a>
                                    </div>


                                      <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $row['product_name'] ; ?> (<?php // echo $row['size'] ; ?>)</a> <br>
                                        <span style="color: #2BB60F ;  font-size: 20px; font-weight: bold;">Rs <?php echo $row['sell_price']; ?></span>
                                        <p class="ps-shoe__categories"><a href="#"><?php // echo $row['brand']; ?></a>,

                                      </div>
                                      <div class="ps-shoe__content">
                                    </div>
                                  </div>
                                </div>
                              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>



