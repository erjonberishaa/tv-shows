<?php include'includes/header.php'; ?>

<?php

if(isset($_GET['show'])){
    $show_id = $_GET['show'];

    $mysqli = new mysqli('localhost', 'root', '', 'seriale') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM `shows` WHERE id='$show_id'") or die($mysqli->error);

}
?>

<section>
<section style="padding: 50px 60px; background-image:url('simpsons.jpg'); background-repeat:no repeat; height: 629px; background-size: 100% 100%; " >

<div style="color:white;"class="container">

<div class="go-back">
<?php
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'> &laquo Go back </a>"; 
while ($row = $result->fetch_assoc()): ?>
</div>

<div class="row justify-content-center">
<h2 style="font-size:45px; letter-spacing: 4px; text-shadow: 2px 2px 5px blue;">TV SHOW</h2>
</div>
        <tr>
            <h3>ID: <?php echo $row['id']; ?></h3>
            <h3>Title: <?php echo $row['title']; ?></h3>
            <h3>Network: <?php echo $row['vendi']; ?></h3>
            <h3>Date: <?php echo $row['date']; ?></h3>
            <h3>Description: <?php echo $row['description']; ?></h3>
        </td>
        <a href="edit.php?edit=<?php echo $row['id']; ?>"
        class="btn btn-primary">Edit</a>
        <a href="allshows.php?delete= <?php echo $row['id']; ?>"
        class="btn btn-danger">Delete</a>

        <?php endwhile ?>   
</div>
</section>
</section>