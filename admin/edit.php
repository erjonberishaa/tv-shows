<?php include'includes/header.php'; ?>


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
    <form action="index.php" method="POST">
    <div class="form-group">
    <label for="title" style="text-shadow: 2px 2px 5px blue";>Title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4" style="text-shadow: 2px 2px 5px blue";>Network</label>
      <input type="text" class="form-control" name="vendi" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4" style="text-shadow: 2px 2px 5px blue";>Release Date</label>
      <input type="date" class="form-control" name="date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="text-shadow: 2px 2px 5px blue";>Description </label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  <div style="padding-left: 5px;" class="form-row">
  <div class="form-group">
  </div>
  <button type="create" name="update" href class="btn btn-primary"> Update </button>
</form>
        </div>
    </div>
</section>