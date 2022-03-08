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
            .button2 {
                background-color: lightseagreen;
                border: none;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 8px;
                }
            .sub_buttonpos{
                position: absolute;
                top: 50%;
                right: 40%;
            }
            .succes{
                position: absolute;
                top: 56%;
                right: 50%;
                font-size: x-large;
            }
        </style>
        <div>
            <div class="topnav">
                <button type="button" class="button" onclick="window.location.href = 'download.php';">Download</button>
                <button type="button" onclick="window.location.href = 'upload.php';" class="button">Upload</button>
            </div>
            <div class="sub_buttonpos">
                <form action="processfiles.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file" class="button2"> 

                    <input type="submit" value="upload" name="submit" class="button2">
                </form>
            </div>
            <?php
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if (strpos($url, 'uploadsuccess') !== false){
                echo "<div class=\"succes\">Upload succes!</div>";
            };
            ?>
        </div>
    </body>
</html>
