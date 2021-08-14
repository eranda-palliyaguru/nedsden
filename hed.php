<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<?php include("connect.php"); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/hed.jpeg" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title style="color:red;">NED's DEN</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style_dark.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>

  <style media="screen">

    .price{
      color: #22940F;
    }
  </style>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">


    <div class="header--sidebar"></div>
    <header class="header">

      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>359/A Main St, Negombo 11500  -  Hotline: <a href="tel:+94312222123">+94 31-2222123</a></p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
<?php session_start();
if (isset($_SESSION["name"]))
{ ?>
                    <a href="#">hello <i  style="color:red; font-size: 18px"> <?php echo $_SESSION['name']; ?></i> </a>
<?php }else { ?> <a href="login">Login and Register</a> <?php } ?>
                    <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SL Rs.<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> SL Rs.</a></li>

                      </ul>
                    </div>

                  </div>
                </div>
          </div>
        </div>
      </div>

      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="dashboard"><img src="images/nedsden.JPG" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="dashboard">Home</a>
                       
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                    <div class="mega-menu">
                      <div class="mega-wrap">
                        <div class="mega-column">
                          <ul class="mega-item mega-features">
                            <li><a href="#">NEW RELEASES</a></li>
                            <li><a href="#">BEST SELLERS</a></li>
                            <li><a href="#">NOW TRENDING</a></li>

                          </ul>
                        </div>



                        <div class="mega-column">
                          <h4 class="mega-heading">BRAND</h4>
                          <ul class="mega-item">
                            <?php $stmt = $db->query("SELECT * FROM brand WHERE action='0' ORDER by id DESC limit 0,11");
                            while ($row = $stmt->fetch())
                            { $product_id=$row['id'];  ?>
                            <li><a href="#"><?php echo $row['name']; ?></a></li>
        <?php } ?>
                          </ul>
                        </div>

                        <div class="mega-column">
                          <h4 class="mega-heading">COMPANY</h4>
                          <ul class="mega-item">
                            <?php $stmt = $db->query("SELECT * FROM make WHERE action='0' ORDER by id DESC limit 0,11");
                            while ($row = $stmt->fetch())
                            { $product_id=$row['id'];  ?>
                            <li><a href="#"><?php echo $row['name']; ?></a></li>
        <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>



                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>

            <?php   if(isset($_COOKIE["ct"])){
    $cookie_data = stripslashes($_COOKIE['ct']);
    $cart_data = json_decode($cookie_data, true); ?>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i><?php echo count($cart_data); ?></i></span><i class="ps-icon-shopping-cart"></i></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">

            <?php
    $i=0;$tot=0;$tot_qty=0;
    foreach($cart_data as $i => $values ){
  $pro=$values['id'];
      $stmt = $db->query("SELECT * FROM product WHERE id='$pro' ");
     while ($row = $stmt->fetch())
     { $price=$row['sell_price']*$values['qty'];  }
     ?>

                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="cart_dll.php?id=<?php echo $i; ?>"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/product/<?php  echo $values['img']; ?>" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html"><?php  echo $values['name']; ?></a>
                      <p><span>Quantity:<i><?php  echo $values['qty']; ?></i></span><span>Total:<i>Rs.<?php echo $price; ?></i></span></p>
                    </div>
                  </div>
<?php $i+=1; $tot+=$price; $tot_qty+=$values['qty']; }  ?>
                </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span><?php echo $tot_qty; ?></span></p>
                  <p>Item Total:<span>Rs.<?php echo number_format($tot,2); ?></span></p>
                </div>
                <div class="ps-cart__footer"><a class="ps-btn" href="cart">Check out<i class="ps-icon-arrow-left"></i></a></div>
              </div>
            </div>
            <div class="menu-toggle"><span></span></div> <?php } ?>


          </div>

        </div>
      </nav>
    </header>
