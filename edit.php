<?php include'includes/header.php'; ?>






<section class="bg-light ">
<div class="container ">
<div class="row">
            <div class="text-center">
            <h1>Edit Show</h1>
            </div>
</div>
</div>
</section>
<section class="bg-light">
    <div class="container">
        <div class="row">
    <form action="index.php" method="POST">
    <div class="form-group">
    <label for="title">Titte</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4">Network</label>
      <input type="text" class="form-control" name="vendi" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4">Release Data</label>
      <input type="date" class="form-control" name="date">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Description </label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  <div class="form-row">
  <div class="form-group">
  </div>
  <button type="create" name="update" href class="btn btn-primary"> Update </button>
</form>
        </div>
    </div>
</section>