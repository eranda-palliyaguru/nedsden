<br><br><br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">


<div class="wrapper">

  <?php include("connect.php");
  $id=$_GET['id'];
   $stmt = $db->query("SELECT * FROM model WHERE make_id='$id' AND action='0' ORDER by id DESC ");
while ($row = $stmt->fetch())
{ ?>

    <img class="selactr" onclick="model_rss(<?php echo $row['id']; ?>)"  src="images/model/<?php echo $row['img']; ?>" alt="">

<?php } ?>

</div>
