
<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2019-04-02
 * Time: 오후 3:57
 */
$connect = mysql_connect("localhost", "myname", "1111");//mysql -p -u db
mysql_select_db("phpprogram", $connect); //use database

$sql = "select *from boardz where title like '%$_POST[search]%'";
$result = mysql_query($sql);
$records = mysql_num_rows($result);

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Boardz Demo</title>
    <meta name="description" content="Create Pinterest-like boards with pure CSS, in less than 1kB.">
    <meta name="author" content="Burak Karakan">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <link rel="stylesheet" href="src/boardz.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wingcss/0.1.8/wing.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<div class="seventyfive-percent  centered-block">
    <!-- Sample code block -->
    <div>
        <hr class="seperator">

        <!-- Example header and explanation -->
        <div class="text-center">
            <h2>Beautiful <strong>Boardz</strong></h2>
            <div style="display: block; width: 50%; margin-right: auto; margin-left: auto; position: relative;">
                <form class="example" action="board.php" method = "post">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <!--<hr class="seperator fifty-percent">-->

        <!-- Example Boardz element. -->
        <div class="boardz centered-block beautiful">

            <ul>
            <?php
            $num = 0;
            $records = mysql_num_rows($result);
            $mod = round($records / 3);

            while($row = mysql_fetch_array($result)) {
                if($num != 0 && ($num == $mod || $num == 2*$mod)) {
                    echo "</ul>";
                    echo "<ul>";
                }

                echo "<li>";
                if($row[title] != NULL){
                    echo "<h1>$row[title]</h1>";
                }
                if($row[contents] != NULL) {
                    echo "$row[contents] <br />";
                }
                echo "<img src='$row[image_url]' alt =\"demo image\"/>";
                echo "</li>";
                $num++;
            }
            ?>
            </ul>
        </div>
        </div>
    </div>

    <hr class="seperator">

</div>
</body>