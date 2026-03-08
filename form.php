<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $myfile = fopen("data.txt", "a");

        $name = htmlspecialchars($_POST["name"]);
        $sat_bf = htmlspecialchars($_POST["sat_breakfast"]);

        $txt = "Name: $name\n Sat breakfast: $sat_bf\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        header("Location: https://aellaainsley.github.io/Mappy/");

        exit;
    }
?>
