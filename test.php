
            <?php   if(isset($_COOKIE["ct"])){
    $cookie_data = stripslashes($_COOKIE['ct']);
    $cart_data = json_decode($cookie_data, true);
    $i=0;
    foreach($cart_data as $i => $values )
    {
      ?>
                <?php  echo $values['name']; ?>__<?php  echo $values['id']; ?><br><br>

<?php  $i+=1; } }

$base = $cart_data;

$id= $_GET['id'];

$replacements = array($id => "");
$basket = array_replace($base, $replacements);


$cart_data= array_filter($basket);
$item_data = json_encode($cart_data);

 setcookie("ct", $item_data, time() + (65 * 24 * 60 * 60));


header("location:cart");
?>
