<?php include'includes/header.php' ?>

<?php 
$mysqli = new mysqli('localhost', 'root', '', 'seriale' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `shows`") or die($mysqli->error);
// // pre_r($result);
//  pre_r($result->fetch_assoc());
// pre_r($result->fetch_assoc());

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query ("DELETE FROM `shows` WHERE id=$id") or die($mysqli->error());
    
    header('location:allshows.php');
}



function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>

<section style="background-color: #FAF0E6;">

<div class="col-md-12 ">
<div class="row justify-content-center">
<div class="header">
    <h2 style="margin-top: 25px; text-shadow: 2px 2px 5px #696969;"> ALL TV SHOWS </h2>
</div>
</div>
</div>



<section class=" ">
<div class="container">
<div class="row">
<table style="margin-top: 25px; margin-bottom:25px;" class="table table-bordered">
    <thead>
        <tr style="background-color:#A9A9A9;">
            <th>ID</id>
            <th>Emri i Serialit</th>
            <th>Prodhuesi</th>
            <th>Data</th>
            <th>Pershkrimi</th>
            <th colspan="1">Veprimi</th>
        </tr>
    </thead>

    <?php 
        while ($row = $result->fetch_assoc()): ?>
        <tr style="background-color:#97D9DB;" >
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['vendi']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['description']; ?></td>
   

    <td>
    <a href="allshows.php?delete= <?php echo $row['id']; ?>"
        class="btn btn-danger">Delete</a>
    
    <a href="show.php?show=<?php echo $row['id']; ?>"
        class="btn btn-success">Show</a>
    
    <a href="edit.php?edit=<?php echo $row['id']; ?>"
        class="btn btn-primary">Edit</a>
    </td>    
    <?php endwhile ?>
    
</table>
</div>
</div>
</section>
</section>