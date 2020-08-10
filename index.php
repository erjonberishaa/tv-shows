<?php include'includes/header.php' ?>

<?php

$title = "";
$network = "" ;
$date = "";
$description = "";
$id = 0;

$db = mysqli_connect('localhost', 'root', '', 'tvshows');

if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $network = $_POST['network'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $query = "INSERT INTO new (title, network, date, description) VALUES ('$title', '$network', '$date', '$description')";
    mysqli_query($db, $query);
    header('location: index.php');
      
}

?>


<section style="padding: 60px 60px; " class="bg-light">

    <div class="container">
        <div class="row">
        <form>        
        <div class="header">
        <h4> ADD A NEW SHOW</h4>
        <hr>
        </div>
        <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="network">Network</label>
      <input type="text" class="form-control" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4">Release date</label>
      <input type="date" class="form-control" >
    </div>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control"  placeholder="">
  </div>
  <div class="form-row">
  <div class="form-group">
  </div>
  <button type="create" class="btn btn-primary">Create</button>
</form>
        </div>
    </div>
</section>