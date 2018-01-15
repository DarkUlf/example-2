<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <title>Bonton event agency</title>
    <meta charset="UTF-8">
    <meta http-equiv="charset" content="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= config('title') ?>">
    <meta property="og:title" content="Организация мероприятий в Республике Коми">
    <meta property="og:url" content="http://<?= DOMAIN ?>/index.php">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="http://<?= DOMAIN ?>/imgs/logo.png">
    <meta property="og:image:width" content="891">
    <meta property="og:image:height" content="283">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Организация мероприятий в Республике Коми">
    <meta name="twitter:image:src" content="http://<?= DOMAIN ?>/imgs/logo.png">
    <meta name="twitter:url" content="http://<?= DOMAIN ?>/index.php">
    <meta name="twitter:domain" content="<?= DOMAIN ?>">
    
    <link rel="shortcut icon" href="/imgs/favikon.png">
        
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div id="loading-scrin" class="activ">
    <img src="/imgs/logo.png" alt="bonton">
</div>    
<?php
require_once '_page.php';
require_once '_widgets.php';
?>

<script src="/js/jquery-3.1.1.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/swiper.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/main.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47114553 = new Ya.Metrika({
                    id:47114553,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47114553" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>