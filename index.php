<?php include('hed.php'); ?>

    <main class="ps-main">

      <div class="ps-home-testimonial bg--parallax pb-80" data-background="images/slider/back.jpeg">
        <div class="ps-testimonial">
          <div class="ps-testimonial__thumbnail"></div>
          <header>
            <h1 style="color:#e60000">SELECT YOUR BIKE </h1>
            <p style="color:#e60000">ඔබගේ බයිසිකල් මොඩල් එක තෝරාගන්න </p>
          </header>
          <footer style="font-size:20px;">
            <div class="col-md-4">
            <label style="color:#ffffff">COMPANY</label>

            <select class="ps-btn ps-btn--gray" name="" style="width:220px" onchange="showRSS(this.value)">
              <option>select a Make</option>
<?php $stmt = $db->query("SELECT * FROM make WHERE action='0' ORDER by id DESC ");
while ($row = $stmt->fetch())
{ ?>  <option value="<?php echo $row['id']; ?>"><?php echo $row['name'];; ?></option> <?php } ?>
            </select>
            </div>

<div id="modelOutput"></div>



            </footer>
        </div>
      </div>

   
        
        <?php if(isset($_COOKIE["model"])){ include('diagram_list.php');  ?>    
                       
<?php }else{ ?>
      <div id="diagramOutput"><?php include('select_mack_img.php'); ?></div>    

     
      <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="images/slider/i.jpg" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="images/slider/Bike-Spare-Parts.png" alt=""></a></div>
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

<?php } ?>

<?php include('foote.php'); ?>
<script>
function showRSS(str) {
  if (str.length==0) {
    document.getElementById("modelOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    xmlhttp1=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modelOutput").innerHTML=this.responseText;
    }
  }

  xmlhttp1.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {   
      document.getElementById("diagramOutput").innerHTML=this.responseText;
    }
  }

  xmlhttp.open("GET","select_model.php?id="+str,true);
  xmlhttp.send();

  xmlhttp1.open("GET","select_model_img.php?id="+str,true);
  xmlhttp1.send();
}


function model_rss(str) {
  if (str.length==0) {
    document.getElementById("subOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
    xmlhttp1=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("subOutput").innerHTML=this.responseText;
    }
  }

  xmlhttp1.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("diagramOutput").innerHTML=this.responseText;
    }
  }

  xmlhttp.open("GET","select_sub_model.php?id="+str,true);
  xmlhttp.send();

  xmlhttp1.open("GET","select_sub_model_img.php?id="+str,true);
  xmlhttp1.send();
}

function sub_rss(str) {
  if (str.length==0) {
    document.getElementById("diagramOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("diagramOutput").innerHTML=this.responseText;
    }
  }

  window.location.href = "model_cookie.php?id="+str;

}
</script>
