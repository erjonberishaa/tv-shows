<?php include'includes/header.php' ?>
<?php include'includes/navbar.php' ?>	

<!-- Page Content  -->

<?php
$mysqli = new mysqli('localhost', 'root', '', 'seriale') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){

    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $src = $_POST['src'];
    $description = $_POST['description'];
	
    $name = $_FILES['file']['name'];
    $target_dir = "./uploads/";
  	$target_file = $target_dir . basename($_FILES["file"]["name"]);
  	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  	$extensions_arr = array("jpg","jpeg","png","gif");
    if( in_array($imageFileType,$extensions_arr) ){
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);}
     



    $name1 = $_FILES['background']['name'];
    $target_dir1 = "./uploads-bg/";
    $target_file1 = $target_dir1 . basename($_FILES["background"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $extensions_arr1 = array("jpg","jpeg","png","gif");
    if( in_array($imageFileType1,$extensions_arr1) ){
	   move_uploaded_file($_FILES['background']['tmp_name'],$target_dir1.$name1);}
	   
//        $v_name = $_FILES['video']['name'];
// 	   $target_dir = "./uploadsvideo/";
	   
// 	   $target_file = $target_dir . basename($_FILES["video"]["name"]);
	   
//          // Select file type
//   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//   // Valid file extensions
//   if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
//  {
//   echo "File Format Not Suppoted";

//  }else{
//   move_uploaded_file($_FILES["video"]["tmp_name"],$target_dir.$v_name);

   $hello = $mysqli->query("INSERT INTO `shows` (title, vendi, date, description, image, src, background) VALUES ('$title', '$vend', '$date', '$description', '$name', '$src', '$name1' )");
     if($hello){
	  echo "poban";
	  
	  header ('location: indexadmin.php');
     }
 }

?>

<div id="content" class="p-0 p-md-0 pt-0">
<section style="padding: 50px 60px; background-image:url('stranger.jpg'); background-repeat:no repeat; height: 629px; background-size: 100% 100%; " >
<section>

<div class="container ">

<div class="row justify-content-center">

<div class="row">
            <div class="text-center text-light">
            <h1 style="text-shadow: 2px 2px 5px red">Add a New Movie or TV Show</h1>
            </div>
</div>
</div>
</section>

<section style="color: white;">
    <div class="container">
        <div class="row">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="title" style="text-shadow: 2px 2px 5px red";>Title</label>
    <input required type="text" class="form-control" name="title" value='<?php echo isset($_POST['title']) ? $_POST['title'] : ""; ?>'  >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4" style="text-shadow: 2px 2px 5px red">Network</label>
      <input required type="text" class="form-control" name="vendi" value='<?php echo isset($_POST['vendi']) ? $_POST['vend'] : ""; ?>' >
    </div>
    <div class="form-group col">
      <label for="inputEmail4" style="text-shadow: 2px 2px 5px red">Video Link</label>
      <input required type="text" class="form-control" name="src" value='<?php echo isset($_POST['src']) ? $_POST['src'] : ""; ?>'  >
    </div>

    <div class="form-group col">
      <label for="inputPassword4" style="text-shadow: 2px 2px 5px red">Release Date</label>
      <input required type="date" class="form-control" name="date" value='<?php echo isset($_POST['date']) ? $_POST['date'] : ""; ?>' >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="text-shadow: 2px 2px 5px red">Description </label>
    <textarea required type="text" class="form-control" name="description" value='<?php echo isset($_POST['description']) ? $_POST['description'] : ""; ?>'></textarea>
  </div>
  <div class="form-group">
      <label for="image" style="text-shadow: 2px 2px 5px red">Choose image</label>
      <input required type="file" class="form-control" name="file" id="image" value='<?php echo isset($_POST['image']) ? $_POST['image'] : ""; ?>'>
	</div>
  <div class="form-group">
      <label for="background" style="text-shadow: 2px 2px 5px red">Choose background</label>
      <input required type="file" class="form-control" name="background" id="background" value='<?php echo isset($_POST['background']) ? $_POST['background'] : ""; ?>'>
	</div>
	<!-- <div class="form-group">
      <label for="file" style="text-shadow: 2px 2px 5px red">Choose video</label>
      <input type="file" class="form-control" name="video" id="video">
    </div> -->
  <div style="padding-left: 5px;" class="form-row">
  <div class="form-group">
  </div>
  <button type="create" name="send" class="btn btn-primary" >Create </button>
</form>
        </div>
    </div>
</section>

    </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>