<?php include'includes/header.php'; ?>

<?php

if(isset($_GET['show'])){
    $show_id = $_GET['show'];

    $mysqli = new mysqli('localhost', 'root', '', 'seriale') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM `shows` WHERE id='$show_id'") or die($mysqli->error);

}
?>

<section>
<div class="container">
<?php
while ($row = $result->fetch_assoc()): ?>
<div>
<h2>TV SHOW</h2>
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