<?php include("../connect.php"); ?>
<?php $id=$_GET['id']; ?>

  <div class="form-group">
    <label>SUB Model</label>
  <select class="form-control select2bs4" name="sub_model" onchange="sub_rss(this.value)">
    <option> MODEL TYPE </option>
    <?php $stmt = $db->query("SELECT * FROM sub_model WHERE model_id='$id' AND action='0' ORDER by id DESC ");
    while ($row = $stmt->fetch())
    { ?>  <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option> <?php } ?>
  </select>
  </div>
