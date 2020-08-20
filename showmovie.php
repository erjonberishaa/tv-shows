<?php include'includes/header.php'; ?>

<?php
if(isset($_GET['show'])){
    $show_id = $_GET['show'];

    $mysqli = new mysqli('localhost', 'root', '', 'seriale') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM `shows` WHERE id='$show_id'") or die($mysqli->error);
    $row = $result->fetch_assoc();
}
?>

<!-- <style>
body{
    padding: 50px 60px; background-image:url('assets/images/avatar.jpg'); background-repeat:no repeat; height: 629px; background-size: 100% 100%;"
    /* background-image:url('assets/images/avatar.jpg'); background-repeat:no repeat; height: 629px; background-size: 100% 100%; object-fit:cover;  */
}
/* body{
    background-color: #4e94a4
} */
</style> -->
<section style="padding: 50px 60px;z-index:40; background-image:url('./admin/uploads-bg/<?php  echo $row['background']; ?>'); background-repeat:no repeat; height: 629px; background-size: 100% 100%; " >

<div style="color:white;" class="container">

<div class="go-back">
<?php
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'> &laquo Go back </a>"; 
?>
</div>

<div class="row justify-content-center">
<h2 style="font-size:45px; letter-spacing: 4px; text-shadow: 2px 2px 5px blue;"><?php echo $row['title'];?></h2>
</div>
        <iframe class="embed-responsive embed-responsive-21by9" style=" width:500px; height:285px;" src="<?php echo $row['src']; ?>"></iframe>

        <tr>
            <h3>ID: <?php echo $row['id']; ?></h3>
            <h3>Title: <?php echo $row['title']; ?></h3>
            <h3>Network: <?php echo $row['vendi']; ?></h3>
            <h3>Date: <?php echo $row['date']; ?></h3>
            <h3>Description: <?php echo $row['description']; ?></h3>   
            </video>
        </td>
      
</div>

</section>