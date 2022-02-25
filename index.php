<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id=293785&apikey=d17261d51ff7046b760bd95b4ce781ac");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        echo $response;
        ?>
    </body>
</html>
