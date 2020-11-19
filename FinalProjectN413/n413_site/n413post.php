<?php
include("n413connect.php");
include("head.php");

function sanitize($item){
    global $link;
    $item = html_entity_decode($item);
    $item = trim($item);
    $item = stripslashes($item);
    $item = strip_tags($item);
    $item = mysqli_real_escape_string( $link, $item );
    return $item;
}

$firstname = "";
$lastname = "";
$email = "";
$password = "";

if(isset($_POST["firstname"])) { $firstname = sanitize($_POST["firstname"]); }
if(isset($_POST["lastname"])) { $lastname = sanitize($_POST["lastname"]); }
if(isset($_POST["email"])) { $email = sanitize($_POST["email"]); }
if(isset($_POST["password"])) { $password = sanitize($_POST["password"]); }



$sql = "INSERT INTO `form_responses` (`id`, `firstname`, `lastname`, `email`, `password`, `timestamp`) 
        	VALUES (NULL, '".$firstname."','".$lastname."', '".$email."', '".$password."', CURRENT_TIMESTAMP)";


$result = mysqli_query($link, $sql);
?>

<div class="container-fluid">
    <div id="headline" class="row mt-5">
        <div class="col-12 text-center">
            <h2>Training With Kyla</h2>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->
    <div class="row mt-5">
        <div class="col-4"></div>  <!-- spacer -->
        <div id="message-container" class="col-4 text-center">
            <?php
            if($result){
                echo '<p>Thank you for creating an account. <br/>';
            }else{
                echo '<p>Sorry, but something went wrong.  Please try again later. <br/>';
            }
            ?>


        </div> <!-- /.message-container -->
    </div> <!-- /.row -->
</div>  <!-- /.container-fluid -->
</body>
<script>
    var this_page = "contact";
    var page_title = 'Workouts With Kyla | Sign Up';

    $(document).ready(function(){
        document.title = page_title;
        navbar_update(this_page);
    }); //document.ready
</script>
</html>