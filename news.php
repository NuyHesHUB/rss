<?php
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, "https://www.chosun.com/arc/outboundfeeds/rss/category/sports/?outputType=xml");
    $url_source=curl_exec($ch);
    curl_close($ch); //닫아야함

    //php 구문을 나타나게하는
    echo $url_source;
?>