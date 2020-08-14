<?php include'includes/header.php' ?>
<?php include'includes/navbar.php' ?>

<?php 
$mysqli = new mysqli('localhost', 'root', '', 'seriale' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `shows`") or die($mysqli->error);
// // pre_r($result);
//  pre_r($result->fetch_assoc());
// pre_r($result->fetch_assoc());

function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="style.css">

<section class="p-1" style="background-color: #4e94a4;">
    <div class="titleNetflix">
      <h6 >NETFLIX DEMO</h6>
    </div>
    <div class="container fluid">
    <div class="row "style="display:flex; justify-content:center;">
    <?php while ($row = $result->fetch_assoc()): ?>
      
    <!-- Card -->
<div style="background:#F5DEB3" class="card card-cascade wider col-md-3 m-2 p-2">
<!-- Card image -->
<div class="view view-cascade overlay" >
  <img class="card-img-top"  src="./admin/uploads/<?php  echo $row['image']; ?>"
    alt="Card image cap" style="width:100%; height:250px; object-fit:cover;">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body card-body-cascade text-center">
<!-- Subtitle -->
<h6 class="font-weight-bold indigo-text py-2 text-right text-muted"><?php echo $row['date'];?> :Released date </h6>
  <!-- Title -->
  <h4 class="card-title"><strong><?php echo $row['title']; ?></strong></h4>
  <!-- Text -->
  <p class="card-text"> <?php echo $row['description']; ?></p>
  <button class="btn btn-primar"><a href="showuser.php?show=<?php echo $row['id']; ?>"
  class="btn btn-light">Show</a></button>
</div>
</div>
<?php endwhile ?>
<!-- Card -->
</div>
</div>
</section>