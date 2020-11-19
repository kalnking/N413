<?php
include("n413connect.php");
include("head.php");
$id = intval($_GET["id"]);
$sql = "SELECT * FROM `memberships` WHERE id = '".$id."'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
?>

    <?php
    if($row){
        echo '  


  <div class="card text-white bg-info" style="width: 40rem; margin-top: 20px; padding: 10px; margin-left: 400px; ">
  <img src="images/'.$row["photo"].'" class="card-img-top"/>
  <div class="card-body">
    <h5 class="card-title">'.$row["name"].'</h5>
    <p class="card-text">'.$row["description"].'</p>
  </div>

  <div class="card-body">
    <a href="addtocart.php" class="card-link" style="color: white">Add To Cart</a>
    <a href="form.php" class="card-link" style="color: white">Sign Up</a>
    <a href="list.php" class="card-link" style="color: white">Back to Memberships</a>
  </div>
</div


               ';
    }
    ?>


</body>
</html>