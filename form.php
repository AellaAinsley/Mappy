<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

        $name = htmlspecialchars($_GET["name"]);
        $sat_bf = htmlspecialchars($_GET["sat_breakfast"]);

        $txt = "Name: $name\n Sat breakfast: $sat_bf\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        header("Location: /index.html");
    }
?>
