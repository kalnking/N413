<?php
include("n413connect.php");
include("head.php");
$sql = "SELECT id, photo, name, description FROM `memberships`";
$result = mysqli_query($link, $sql);
$records = array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    $records[] = $row;
}
?>
<style>
    .cursor-pointer {cursor:pointer;}
</style>
<div class="container-md">
    <div id="headline" class="row mt-5">
        <div class="col-12 text-center">
            <h2 class="text-info">Memberships</h2>
        </div> <!-- /.col-12 -->
    </div> <!-- /.row -->
    <?php
    foreach ($records as $record){
        echo '
                <div class="row record-item mt-3 cursor-pointer" data-id="'.$record["id"].'" data-item="'.$record["name"].'">
                    <div class="col-2"></div> <!-- spacer -->
                    <div class="col-4" class="rounded"><img src="images/'.$record["photo"].'" width="100%"/></div><br>
                    <div class="col-3 text-info" ><b>'.$record["name"].'</b> '.$record["description"].'</div>
                </div>  <!-- /.row -->';
    } //foreach
    ?>
</div> <!-- /.container-fluid -->
</body>
<script>
    var this_page = "list";
    var page_title = 'Workouts With Kyla';

    $(document).ready(function(){
        $("#"+this_page+"_item").addClass('active');
        $("#"+this_page+"_link").append(' <span class="sr-only">(current)</span>');
        document.title = page_title;

        $(".record-item").on("click", function(){
            var id = $(this).data('id');
            show_detail(id);
        }); //on()
    }); //document.ready

    function show_detail(id){
        window.location.assign("detail.php?id="+id);
    } //document.ready

    function show_alert(id,item){
        alert("You have clicked Item "+id+", "+item+".");
    }
</script>
</html>