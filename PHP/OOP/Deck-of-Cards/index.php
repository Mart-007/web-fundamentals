<?php
    require('process.php');
?>

<html>
<head>
<meta NAME="description" CONTENT="A full deck of Playing Card Icons">
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
<meta NAME="keywords" CONTENT="Playing Cards, deck of cards, deck, cards, icons, images">
<title>Playing Cards</title>
</head>
<body BGCOLOR=#006633  TEXT=#e1ffd7 LINK=#FFFFFF VLINK=#FFFFFF>
<center>
        <table border=0 cellspacing=10 cellpadding=10>
        <tr>
            <td>
                <img src='Cards/b1fv.png'/>
            </td>
            <td valign=center><strong>Playing Cards</strong></td>
            <td>
                <img src='Cards/b2fv.png'/>
            </td>
        </tr>
        <tr></tr>
        </table>

        <table id='row' border=1 cellspacing=0 cellpadding=10>
            <?php

                $deck = new Deck();

                echo "<div id='row'>". $deck->shuffle(0,0). "</div><br><br>";

                echo $deck->shuffle(0, 0);

            ?>
        </table>

        <?php

        $player = new Player();

        echo "<a href=" .$player->discard() . ">DRAW</a>";

        ?>
        <?php
        $page = $_SERVER['PHP_SELF'];
        echo "<a href=\"$page\">RESET</a>";
        ?>


        <table border=0 cellspacing=10>
            <tr>
                <td align=center>
                    <font size=2></br>
                    These images were created using <a href='http://www.mindworkshop.com/alchemy/alchemy.html'>gifcon</a>.
                    </font>
                </td>
            </tr>
        </table>
</BODY>
</html>
