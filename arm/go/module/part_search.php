<?php 
include("../connect.php");

$v=$_GET['id'];
$i=0;
$stmt = $db->query("select * from part where part_number='$v' OR part_number1='$v'OR part_number2='$v'OR part_number3='$v' ORDER by id DESC  ");
while ($row = $stmt->fetch())
 {
	$i=$row['id'];
    $img=$row['img'];
    $name=$row['name'];

 }
if($i > 0){ ?> 
<img src="https://neds-den.com/images/part/<?php echo $img; ?>" style="width:100px" alt="hi"> 
<h4> <?php echo $v; ?> </h4>
<p><?php echo $name; ?></p>
<?php
}else{}
?>