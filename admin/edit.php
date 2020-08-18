<?php include'includes/header.php'; ?>

<?php 
if(isset($_GET['edit'])){
  $show_id = $_GET['edit'];
  
  $mysqli = new mysqli('localhost', 'root', '', 'seriale' ) or die(mysqli_error($mysqli));
    if(isset($_POST['update']))
    {
      $title = $_POST['title'];
      $vend = $_POST['vendi'];
      $date = $_POST['date'];
      $description = $_POST['description'];
      $sql = "UPDATE `shows` SET title = '$title', vendi = '$vend', `date` = '$date', `description` = '$description' WHERE id ='$show_id'";
      // echo $sql;
      $mysqli->query($sql) or die($mysqli->error);
    }

  $result = $mysqli->query("SELECT * FROM `shows` WHERE id ='$show_id'") or die($mysqli->error);
  $row = $result -> fetch_assoc();
    // print_r( $row);
 }
?>

<section style="padding: 50px 60px; background-image:url('breaking.jpg'); background-repeat:no repeat; height: 629px; background-size: 100% 100%; " >
<section>

<div class="container ">
<div class="row justify-content-center">
<div class="row">
  <div class="text-center text-light">
  <h1 style="text-shadow: 2px 2px 5px blue">Edit Show</h1>
  </div>
</div>
</div>
</section>

<section style="color:white">
    <div class="container">
        <div class="row">
    <form action="?edit=<?php echo $row['id'];?>" method="POST">


    <div class="form-group">
    <label for="title" style="text-shadow: 2px 2px 5px blue";>Title</label>
    <input type="text" class="form-control" value="<?php echo $row['title'];?>" name="title" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4" style="text-shadow: 2px 2px 5px blue";>Vendi</label>
      <input type="text" class="form-control" class="form-control" value="<?php echo $row['vendi'];?>" name="vendi" >
    </div>
    <div class="form-group col">
      <label for="inputEmail4" style="text-shadow: 2px 2px 5px blue">Videoja</label>
      <input type="text" class="form-control" class="form-control" value="<?php echo $row['src'];?>" name="src" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4" style="text-shadow: 2px 2px 5px blue";>Release Date</label>
      <input type="date" class="form-control" class="form-control" value="<?php echo $row['date'];?>" name="date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="text-shadow: 2px 2px 5px blue";>Description </label>
    <textarea type="text" class="form-control" class="form-control" value="<?php echo $row['description'];?>" name="description"><?php echo $row['description'];?></textarea>
  </div>
  <div style="padding-left: 5px;" class="form-row">
  <div class="form-group">
  </div>
  <button type="create" name="update" class="btn btn-primary"> Update </button>
</form>
        </div>
    </div>
</section>
