<!DOCTYPE html>
<html>
    <body>
        <style>
                body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background-image: url(bgimage.png);
                }
            .pos{
                text-align: right;
            }
            .topnav {
                overflow: hidden;
                background-color: #333;
            }
            .button {
                background-color: paleturquoise;
                border: none;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 8px;
                }
            .width{
                width: 50px;
            }
            .output{
                color: white;
            }
        </style>
        <div class="topnav">
            <img src="advieslab.png" alt="advieslab" align="right">
            <button type="button" class="button" onclick="window.location.href = 'download.php';">Download</button>
            <button type="button" onclick="window.location.href = 'upload.php';" class="button">Upload</button>
        </div>
        <?php
        $myfiles = array_diff(scandir("files"), array('.', '..')); 
        $sorted = "<div align= \"center\" class=\"output\"> Alle bestanded die zijn ge-upload zijn: <br>";
        foreach ($myfiles as &$value){
            $sorted .= "<a href=\"files/$value\", download=\"myimage\">$value</a><br>";
        };
        $sorted .= "</div>";
        echo $sorted
          
        ?>
    </body>
</html>