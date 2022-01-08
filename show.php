<html>
    <head>
        <meta charset="utf-8">
        <title>計算BMI的結果</title>
        
    </head>

<?php
    echo "<link rel='stylesheet' type='text/css' href='c2.css'>";
    echo "<body>";
    $weight = $_POST['w']; //公斤
    $height = $_POST['h']; //公分
    if (is_numeric($weight) && is_numeric($height)){
        $height = $height / 100;
        $bmi = round($weight / ($height * $height),2);
        echo "你的BMI值 : " . $bmi;
        echo "<br/>";
        if ($bmi >= 18.5 && $bmi < 24) {
            echo "是在正常範圍內";
        }
        else{
            echo "不在正常範圍內";
            echo "<br/>";
            if ($bmi > 24){
                echo "你的BMI值高於範圍";           
            }
            else{
                echo "你的BMI值低於範圍";
            }
        }
    }
    else{
        echo "輸入錯誤! 請輸入數字";
    }
    echo "<br/>";
    echo "<a href = 'index.html'>回表單</a>";
    echo "<br/>";
    echo "<img src='ryr5z-7pbnx.gif'>";
    echo "</body>";
?>
    
</html>