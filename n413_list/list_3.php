 <?php
        include("n413connect.php");
        $sql = "SELECT id, item, description, image FROM `list`";
        $result = mysqli_query($link, $sql);
        $things = array();
        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
        $things[] = $row;
		
//		array(  "id" 		=> $row["id"],
//                            "item" 		=> $row["item"],
//                            "description" 	=> $row["description"],
//                            "image" 		=> $row["image"] );
                        }
    ?>
    <DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
            <title>Full Stack Amp Jam List Project</title>
            <style>
                body  { font-family:Arial; }
                img   { display:inline-block;vertical-align:top;height:75px;margin-left:50px;margin-right:20px;margin-bottom:10px; }
                .desc { display:inline-block;width:60%;font-family:Arial;margin-bottom:10px; }
            </style>
        </head>
        <body>
            <h2>Full Stack Amp Jam List Project</h2>
            <?php
            foreach ($things as $thing){
                echo '
				<div>
                <img src="images/'.$thing["image"].'" />
				<div class="desc"> <b>'.$thing["item"].'</b> '.$thing["description"].'</div>
				</div>';
            }
            ?>
        </body>
    </html>        