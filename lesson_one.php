<h1>Занятие 1</h1>
<?php
echo "<b>Задача 1. Фаренгейт.</b><br>";
echo "Условие: Дано значение температуры в градусах Цельсия. Вывести температуру в градусах Фаренгейта.<br>";
$degree = 18;
echo "Ответ: $degree градусов по Цельсию = " . $degree * 1.8 + 32 . " градусов по Фаренгейту.";


echo "<br><br><b>Задача 2. Рубли и копейки 1.</b><br>";
echo "Условие: Известна стоимость товара в рублях r и копейках k. Найти стоимость товара в копейках с.<br>";
$rubles = 25; $kopecks = 67;
echo "Ответ: Стоимость товара в $rubles рублях и $kopecks копейках = " . $rubles * 100 + $kopecks . " копеек.";


echo "<br><br><b>Задача 3. Гонка.</b><br>";
echo "Условие: Известно время победителя и следующего за ним соперника (hours;minutes;seconds). Найти время отставания в секундах.<br>";
$hours_1 = 2; $minutes_1 = 32; $seconds_1 = 87;
$hours_2 = 1; $minutes_2 = 13; $seconds_2 = 4;
echo "Ответ: Время отставания двух соперников со следующим временем: ($hours_1 ч; $minutes_1 мин; $seconds_1 сек) и ($hours_2 ч; $minutes_2 мин; $seconds_2 сек) = " . abs($hours_2 - $hours_1) * 3600 + abs($minutes_2 - $minutes_1) * 60 + abs($seconds_2 - $seconds_1) . " секунд.";


echo "<br><br><b>Задача 4. Скорость.</b><br>";
echo "Условие: Известно время в минутах и расстояние в километрах. Найти скорость в м/с.<br>";
$minutes = 20; $kilometers = 5;
echo "Ответ: Расстояние в $kilometers километров было преодолено за $minutes минут со скоростью равной " . round(($kilometers * 1000) / ($minutes * 60), 2) . " м/с.";


echo "<br><br><b>Задача 5. Катеты.</b><br>";
echo "Условие: Даны катеты прямоугольного треугольника. Найдите площадь, периметр и гипотенузу треугольника.<br>";
$cathetus_1 = 3; $cathetus_2 = 5;
$hypotenuse = round(sqrt($cathetus_1 ** 2 + $cathetus_2 ** 2), 2);
echo "Ответ: Гипотеза треугольника с катетами, равными $cathetus_1 и $cathetus_2, равна " . $hypotenuse . ". Периметр треугольника = " . $cathetus_1 + $cathetus_2 + $hypotenuse . ". Площадь треугольника = " . ($cathetus_1 * $cathetus_2) / 2 . ".";


echo "<br><br><b>Задача 6. Последняя цифра.</b><br>";
echo "Условие: Известно натуральное число, получить его последнюю цифру.<br>";
$num = 567;
echo "Ответ: Последняя цифра цисла $num - " . $num % 10 . ".";


echo "<br><br><b>Задача 7. Десятки 1.</b><br>";
echo "Условие: Известно натуральное двузначное число, вывести число десятков.<br>";
$naturalTwoDigitNum = 49;
echo "Ответ: В числе $naturalTwoDigitNum кол-во десятков = " . floor($naturalTwoDigitNum / 10) . ".";


echo "<br><br><b>Задача 8. Десятки 2.</b><br>";
echo "Условие: Известно натуральное число, вывести число десятков.<br>";
$naturalNum = 9678;
echo "Комментарий: Не совсем поняла суть задачи. <br>";
echo "1. Если рассматривать задачу с точки зрения математики, то решение будет точно таким же, как и в предыдущей задаче:<br>";
echo "Ответ: В числе $naturalNum кол-во десятков = " . floor($naturalNum / 10) . ". <br>";
echo "2. Но если имется ввиду найти цифру, стоящую в разряде десятков, то решение будет следующим: <br>";
echo "Ответ: В числе $naturalNum цифра, стоящая в разряде десятков  = " . (floor($naturalNum / 10)) % 10 . ".";


echo "<br><br><b>Задача 9. Рубли и копейки 2.</b><br>";
echo "Условие: Известна стоимость товара в копейках с. Найти стоимость товара в рублях r и копейках k.<br>";
$price = 2567;
echo "Ответ: Стоимость товара в $price копеек = " . floor($price / 100) . " рублей и " . $price % 100 . " копеек.";


echo "<br><br><b>Задача 10. Покупки.</b><br>";
echo "Условие: Пользователь заказал в интернет магазине n единиц товара стоимостью r рублей и k копеек. Найти стоимость покупки в рублях и копейках.<br>";
$numberProducts = 10; $rub = 59; $kop = 99;
echo "Ответ: Стоимость покупки ($numberProducts товаров стоимостью $rub рублей $kop копеек) = " . ($rub * $numberProducts + floor($kop * $numberProducts / 100)) . " рублей " . $kop * $numberProducts % 100 . " копеек.";


echo "<br><br><b>Задача 11. Квадраты.</b><br>";
echo "Условие: Дан прямоугольник размером n x m. Сколько целых квадратов со сторонов k можно вырезать из него?<br>";
$n = 14; $m = 9; $k = 3;
echo "Ответ: Прямоугольник размером $n x $m можно разрезать на " . floor($m / $k) * floor($n / $k) . " квадратов со стороной $k";
?>