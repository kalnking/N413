<?php
include("n413connect.php");
include("head.php");
$sql = "SELECT * FROM `memberships`
            ORDER BY RAND() LIMIT 1";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
?>

<body>

<div class="card text center" style="width: 500px; margin-left: 150px;" >
    <div class="card-img-overlay" align="center">
        <h1 class="display-4">Hello, world!</h1>
        <h2 class="text-info">Are you ready to begin training?</h2>
        <hr class="my-6" width="400px">
        <p>Begin your journey to a healthier lifestyle. Premium weight loos and lifestyle transformation which create long lasing, dramatic results to your health, body and mind. </p>
        <p class="lead">
            <a class="btn btn-info btn-lg" href="list.php" role="button">Learn more</a>
        </p>
    </div>

    </div>
<picture>
<img  height="100%" width="100%" src="images/pexels-karolina-grabowska-4498553.jpg" alt="Card image"
</picture>
</body>
<script>
    var this_page = "home";
    var page_title = "Training With Kyla";
    $(document).ready(function(){
        document.title = page_title;
        //navbar_update(this_page);
    }); //ready
</script>
</html></h1>