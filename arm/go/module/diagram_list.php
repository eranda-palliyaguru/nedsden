<?php include("../connect.php"); ?>
<?php $id=$_GET['id']; ?>




<div class="col-md-12">
<?php $stmt = $db->query("SELECT * FROM diagram WHERE sub_model_id='$id' AND action='0' ORDER by id DESC ");
while ($row = $stmt->fetch())
{ $product_id=$row['id'];  ?>
<div class="col-md-2">
          <div class="grid-item <?php echo $row['brand'] ; ?>">
            <div class="grid-item__content-wrapper">
              <div class="ps-shoe mb-500">
                <div class="ps-shoe__thumbnail">
                  <img src="images/product/<?php echo $row['img'] ; ?>" alt=""><a class="ps-shoe__overlay" href="diagram.php?id=<?php echo $row['id'] ; ?>"></a>
                </div>
                <div >


                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="diagram.php?id=<?php echo $row['id'] ; ?>"><?php echo $row['name'] ; ?> </a> <br>
                    <span style="color: #e60000 ;  font-size: 20px; font-weight: bold;"><?php echo $row['sub_model']; ?></span>


                  </div>
                </div>
              </div>
            </div>
          </div></div>
<?php } ?>
</div>
