<?php
    $nickname=" Alexandr";
    $hello="Привет";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP цикл foreach</title>
</head>
<body>
    <header class="">
        <h2 class="subtitle">Массив и цикл foreach.</h2>
    </header>
    <div class="step__first">
        <p>
            Цикл - <span>foreach</span>, осуществляет последовательный перебор всех элементов массива.<br>
            Пример:<br>
            Создадим массив arr и выведем его значения на экран.
            <ul>
                <li>$arr [0] = "Продукты";</li>
                <li>$arr [1] = "Бутылка с водой";</li>
                <li>foreach($arr as $key => $ value){</li>
                <li>echo $value."br>";</li>
                <li>}</li>
            </ul>
            <ul>
                <li>$value -  это непосредственно значение массива, в данном случаи массива arr;</li>
                <li>$key - это ключ/индекс значения массива, в данном случаи массива arr.</li>
            </ul>
            Ниже видим как выводятся значения массива arr.
        </p>
        <div class="code__php">
            <?php
                $arr[0] = "Продукты";
                $arr[1] = "Бутылка с водой";
                foreach($arr as $key => $value){
                    echo $value. "<br>";
                }
            ?>
        </div>
        <p>
            Также можно вывести ключ/индекс каждого значения используя $key, для этого нужно добавить данную переменную в вывод, а именно:
            <ul>
                <li>$arr [0] = "Продукты";</li>
                <li>$arr [1] = "Бутылка с водой";</li>
                <li>foreach($arr as $key => $ value){</li>
                <li>echo "Ключ к массиву - ".$key. " - Значение массива -".$value."br>";</li>
                <li>}</li>
            </ul>
            Ниже смотрим как работает данный код.
        </p>
            <div class="code__php">
                <?php
                    $arr[0] = "Продукты";
                    $arr[1] = "Бутылка с водой";
                    foreach($arr as $key => $value){
                        echo "Ключ к массиву - ".$key. " | Значение массива -".$value."<br>";
                    }
                ?>
            </div>
            <p>
                Также можно изменять индекс/кдюч массива с числового на строковый.<br>
                Пример:
                <ul>
                    <li>$arr ["products"] = "Продукты";</li>
                    <li>$arr ["water"] = "Бутылка с водой";</li>
                    <li>foreach($arr as $key => $ value){</li>
                    <li>echo "Ключ к массиву - ".$key. " - Значение массива -".$value."br>";</li>
                    <li>}</li>
                </ul>
                Теперь смотрим ниже как преобразился наш код.
            </p>
            <div class="code__php">
                <?php
                    $ars["products"] = "Продукты";
                    $ars["water"] = "Бутылка с водой";
                    foreach($ars as $key => $value){
                        echo "Ключ к массиву - ".$key. " | Значение массива -".$value."<br>";
                    }
                ?>
            </div>
        <div class="home__work">
            <p>
                По данной теме нужно было вывести только индексы/ключи от значений массива.<br>
                Вот так нужно написать код для вывода только ключей/индексов массива.<br>
                Пример:
                <ul>
                    <li>$arc ["products"] = "Продукты";</li>
                    <li>$arc ["water"] = "Бутылка с водой";</li>
                    <li>foreach($arc as $key => $ value){</li>
                    <li>echo "Ключ к массиву - ".$key."br>";</li>
                    <li>}</li>
                </ul>
                Теперь ниже смотрим как выглядит данный код.
            </p>
            <div class="code__php">
                <?php 
                
                    $arc["product"] = "продукты";
                    $arc["water"] = "бутылка с водой";
                    
                    foreach($arc as $key=>$value) {
                        echo "Ключ к массиву - ".$key.'<br>';
                    }

                ?>
        </div>

        </div>
    </div>
    
</body>
</html>