<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $myfile = fopen("data.txt", "a");

        $name = htmlspecialchars($_GET["name"]);
        $sat_bf = htmlspecialchars($_GET["sat_breakfast"]);

        $txt = "Name: $name\n Sat breakfast: $sat_bf\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        $redirect = "/index.html"
        header("Location: ".$redirect);
    }
?>
