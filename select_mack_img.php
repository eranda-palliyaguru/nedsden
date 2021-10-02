<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

<div class="wrapper">

  <?php include("connect.php");
   $stmt = $db->query("SELECT * FROM make ");
while ($row = $stmt->fetch())
{ ?>

    <img class="selactr" onclick="showRSS(<?php echo $row['id']; ?>)"  src="images/company/<?php echo $row['img']; ?>" alt="">

<?php } ?>

</div>
