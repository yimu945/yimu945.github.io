
<html>
<head>
    <meta charset="utf-8">
    <title>影片網頁</title>
    <link rel="stylesheet" type="text/css" href="c1.css">
</head>



<?php
echo "<body>";

$passwd = $_POST['pwd'];
if ($passwd == 860804){
    echo "<a href = 'index.html' >回表單</a>";
    echo "<h3>林襄抖音</h3>";
    echo "<video src='video/Snaptik_6965153650943462658_tiktok.mp4' controls  autoplay muted loop width='480'>瀏覽器無法載入影片</video>";
    echo "<video src='video/Snaptik_6965154790275910913_tiktok.mp4' controls  autoplay muted loop width='480'>瀏覽器無法載入影片</video>";
    echo "<video src='video/Snaptik_6972431002710854914_tiktok.mp4' controls autoplay muted loop width='480'>瀏覽器無法載入影片</video>";
    echo "<br/>";
    echo "<h3>打手槍</h3>";
    echo "<video src='video/下載 (4).mp4' controls autoplay muted loop width='480'>瀏覽器無法載入影片</video>";
    echo "<video src='video/Snaptik_6941962307010317569_tiktok.mp4' controls autoplay muted loop width='480'>瀏覽器無法載入影片</video>";
    echo "<video src='video/下載.mp4' controls autoplay muted loop width='480'>瀏覽器無法載入影片</video>";
    echo "<br/>";
    echo "<h3>本本</h3>";
    echo "<video src='video/bunbun.mp4' controls autoplay muted loop width='1920'>瀏覽器無法載入影片</video>";
  
    
    echo "<br/>";
    echo "<br/>";
    
}
else{
    echo "密碼錯誤";
    echo "<br/>";
    
}

    echo "<a href = 'index.html' >回表單</a>";
    echo "</body>";
    ?>
    
    </html>