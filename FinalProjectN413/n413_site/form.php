
<?php
include("n413connect.php");
include("head.php");
?>

<div class="container-fluid">
    <div id="headline" class="row mt-5">
        <div class="col-12 text-center">
            <h2>Sign Up Now</h2>
            <h3>Get started in 30 seconds. Try free for 14 days!</h3>
        </div> <!-- /col-12 -->
    </div> <!-- /row -->

    <form method="POST" action="n413post.php">
        <div class="row mt-5">
            <div class="col-4"></div>  <!-- spacer -->
            <div id="form-container" class="col-4">
                First Name: <input type="text" id="firstname" name="firstname" class="form-control" value="" placeholder="Enter First Name" required/><br/>
                Last Name: <input type="text" id="lastname" name="lastname" class="form-control" value="" placeholder="Enter Last Name" required/><br/>
                E-mail: <input type="email" id="email" name="email" class="form-control" value="" placeholder="Enter E-mail" required/><br/>
                Password: <input id="password" name="password" class="form-control" value="" placeholder="Password"><br/>
                <button type="submit" id="submit" class="btn btn-primary float-right">Submit</button>
            </div>  <!-- /#form-container -->
        </div>  <!-- /.row -->
    </form>
</div>
    </body>
    <script>
        var this_page = "contact";
        var page_title = 'AMP JAM Site | Contact Form';

        $(document).ready(function(){
            document.title = page_title;
            navbar_update(this_page);
        }); //document.ready
    </script>
    </html>