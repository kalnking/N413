<?php
include("n413connect.php");
require_once ('head.php');
?>

<h1>Checkout</h1>

<h4>Thank you for shopping with us!</h4>

<script>
    var this_page = "contact";
    var page_title = 'AMP JAM Site | Checkout';

    $(document).ready(function(){
        document.title = page_title;
        navbar_update(this_page);
    }); //document.ready
</script>
