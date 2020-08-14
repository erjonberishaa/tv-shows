<?php include'includes/header.php' ?>

<?php
$mysqli = new mysqli('localhost', 'root', '', 'seriale') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){

    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $name = $_FILES['file']['name'];
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

       // Upload file
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);}


    $mysqli->query("INSERT INTO `shows` (title, vendi, date, description, image) VALUES ('$title', '$vend', '$date', '$description', '$name')");
      // if(mysqli_query($mysqli->query)){
      //  echo "poban";
      // }
     
     // header ('location:index.php');

}
?>
<section style="padding: 50px 60px; background-image:url('stranger.jpg'); background-repeat:no repeat; height: 629px; background-size: 100% 100%; " >
<section>

<div class="container ">

<div class="row justify-content-center">

<div class="row">
            <div class="text-center text-light">
            <h1 style="text-shadow: 2px 2px 5px red">Add a New TV Show</h1>
            </div>
</div>
</div>
</section>

<section style="color: white;">
    <div class="container">
        <div class="row">
    <form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="title" style="text-shadow: 2px 2px 5px red";>Title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4" style="text-shadow: 2px 2px 5px red">Network</label>
      <input type="text" class="form-control" name="vendi" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4" style="text-shadow: 2px 2px 5px red">Release Data</label>
      <input type="date" class="form-control" name="date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="text-shadow: 2px 2px 5px red">Description </label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  <div class="form-group text-light col">
      <label for="image">Choose image</label>
      <input type="file" class="form-control" name="file" id="image">
    </div>
  <div style="padding-left: 5px;" class="form-row">
  <div class="form-group">
  </div>
  <button type="create" name="send" class="btn btn-primary" >Create </button>
</form>
        </div>        
    </div>
</section>


