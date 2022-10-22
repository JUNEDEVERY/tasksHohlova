<h1>Занятие 5</h1>
<?php
echo "<b>Задача 1. Слава КПСС.</b><br>";
echo "Условие: Вывести на странице заданный текст k раз.<br>";
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, maiores.';
$k = 5;
for ($i=0;$i<$k;$i++) {
    echo "$text <br>";
}




echo "<br><br><b>Задача 2. Абзац.</b><br>";
echo "Условие: Вывести k абзацев вида: pАбзац 1/p pАбзац 2/p и т.д.<br>";
for ($i=0;$i<$k;$i++) {
    echo "<p>$text</p>";
}




echo "<br><b>Задача 3. Половина.</b><br>";
echo "Условие: Каждый день розыгрыша призовая сумма делится пополам, выяснить через сколько дней приз станет меньше B рублей, если известно, что в первый день он составлял A рублей.<br>";
$prize = 10000;
$b = 1000;
$dayCount = 0;
echo "В первый день приз составлял $prize рублей<br>";
while ($prize > 1000) {
    $prize = $prize / 2;
    $dayCount++;
}
echo "Приз станет меньше $b рублей через $dayCount<br>";




echo "<br><br><b>Задача 4. Кто есть кто.</b><br>";
echo "Условие: Вывести рейтинг пользователей из массива в виде таблицы.<br>";
$arrRatingUsers = array('Вася' => 37, 'Даша' => 56, 'Оля' => 118, 'Никита' => 99);
echo "<table><thead><tr>Имя</tr><tr>Рейтинг</tr></thead><tbody>";
foreach ($arrRatingUsers as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td><td></td></tr>";
}
echo "</tbody></table>";




echo "<br><br><b>Задача 5. Весь рейтинг.</b><br>";
echo "Условие: Посчитать сумму всех рейтингов пользователей в массиве.<br>";
$ratingSum = 0;
foreach ($arrRatingUsers as $elem) {
    $ratingSum += $elem;
}
echo 'Массив : ';
print_r($arrRatingUsers);
echo "<br>Рейтинг всех пользователей = $ratingSum";




echo "<br><br><b>Задача 6. Средняя по больнице.</b><br>";
echo "Условие: Посчитать средний рейтинг пользователей, не учитывая пользователей с нулевым рейтингом.<br>";
$ratingAverage = 0;
$ratingCount = 0;
$arrRatingUsers['Витя'] = 0;
foreach ($arrRatingUsers as $elem) {
    if ($elem != 0) {
        $ratingAverage += $elem;
        $ratingCount++;
    }
}
echo 'Массив : ';
print_r($arrRatingUsers);
echo "<br>Средний рейтинг пользователей = " . $ratingAverage / $ratingCount;




echo "<br><br><b>Задача 7. Выше крыши 2.</b><br>";
echo "Условие: Для всех пользователей, чей рейтинг больше 100, изменить его на 100.<br>";
$arrRatingUsers['Маша'] = 140;
echo 'Начальный массив : ';
print_r($arrRatingUsers);
foreach(array_keys($arrRatingUsers) as $array_key) {
    if ($arrRatingUsers[$array_key] > 100) {
        $arrRatingUsers[$array_key] = 100;
    }
}
echo '<br>Конечный массив : ';
print_r($arrRatingUsers);




echo "<br><br><b>Задача 8. Второе дно.</b><br>";
echo "Условие: Для всех пользователей, чей рейтинг меньше 0, изменить его на 0.<br>";
$arrRatingUsers['Саша'] = -10;
echo 'Начальный массив : ';
print_r($arrRatingUsers);
foreach(array_keys($arrRatingUsers) as $array_key) {
    if ($arrRatingUsers[$array_key] < 0) {
        $arrRatingUsers[$array_key] = 0;
    }
}
echo '<br>Конечный массив : ';
print_r($arrRatingUsers);




echo "<br><br><b>Задача 9. Экватор.</b><br>";
echo "Условие: Дан массив с рейтингом пользователей: rate = ['Вася'=> 37, 'Даша' => 56, 'Катя'=>12,...] . Вывести пользователей и их рейтинг, если он больше 50.<br>";
echo 'Массив : ';
print_r($arrRatingUsers);
foreach(array_keys($arrRatingUsers) as $array_key) {
    if ($arrRatingUsers[$array_key] > 50) {
        echo "<br>$array_key - $arrRatingUsers[$array_key]";
    }
}




echo "<br><br><b>Задача 10. Данила Мастер 2.</b><br>";
echo "Условие: Вывести рейтинг всех пользователей с указанием их статуса (до 30 включительно – новичок, от 31 до 60 – мастер, более 61 - грандмастер).<br>";
echo 'Массив : ';
print_r($arrRatingUsers);
foreach(array_keys($arrRatingUsers) as $array_key) {
    if ($arrRatingUsers[$array_key] <= 30) {
        echo "<br>$array_key - новичок";
    } elseif ($arrRatingUsers[$array_key] > 30 && $arrRatingUsers[$array_key] <= 60) {
        echo "<br>$array_key - мастер";
    } elseif ($arrRatingUsers[$array_key] > 60) {
        echo "<br>$array_key - грандмастер";
    }
}




echo "<br><br><b>Задача 11. Выйди вон.</b><br>";
echo "Условие: Даны два массива пользователей, удалить из первого массива всех пользователей, которые встречаются во втором массиве. Считать все имена уникальными.<br>";
$arrUsersOne = ['Оля','Саша','Андрей','Света'];
$arrUsersTwo = ['Андрей','Катя','Оля','Витя'];
echo '<i>Было:</i>: <br>';
echo 'Первый массив: ';
print_r($arrUsersOne);
echo ' | Второй массив: ';
print_r($arrUsersTwo);
foreach ($arrUsersOne as $elemOne) {
    foreach ($arrUsersTwo as $elemTwo) {
        if ($elemOne == $elemTwo) {
            unset($arrUsersOne[array_search($elemTwo, $arrUsersOne)]);
        }
    }
}
echo '<br><i>Стало:</i>:';
echo '<br>Первый массив: ';
print_r($arrUsersOne);
echo ' | Второй массив: ';
print_r($arrUsersTwo);




echo "<br><br><b>Задача 12. Зебра.</b><br>";
echo "Условие: Написать скрипт, который генерирует таблицу из одного столбца, строки которой чередуются по цвету и пронумерованы с 1. Количество строк хранить в переменной row_count.<br>";
$numRows = 12;
echo "<table><tbody>";
for ($i = 1;$i <= $numRows;$i++) {
    if ($i % 2 == 0) {
        echo "<tr><td style='background-color: #d470db; width: 100px; text-align: center'>$i</td></tr>";
    } else {
        echo "<tr><td style='background-color: lightskyblue; width: 100px; text-align: center'>$i</td></tr>";
    }
}
echo "</tbody></table>";




echo "<br><br><b>Задача 13. Меню.</b><br>";
echo "Условие: Сгенерировать с помощью цикла ссылки на веб-страницы так, чтобы заголовки ссылок и названия страниц брались из массива.<br>";
$pages = ['Главная' => 'main.html',
    'О компании' => 'about_company.html',
    'Каталог' => 'catalog.html',
    'Корзина' => 'basket.html',
    'Избранное' => 'favourites.html',
    'Контакты' => 'contacts.html'];
foreach ($pages as $title => $link) {
    echo "<a href='$link' style='color: #d470db'>$title</a>" . '---';
}




echo "<br><br><b>Задача 14. Меню 2.</b><br>";
echo "Условие: Дано название текущей страницы, например: page='Главная' . Доработать решение задачи 'Меню' так, чтобы текущая страница выделялась стилем (например, цветом).<br>";
$page = 'Главная';
foreach ($pages as $title => $link) {
    if ($title == $page) {
        echo "<a href='$link' style='color: #87cefa'>$title</a>" . '---';
    } else {
        echo "<a href='$link' style='color: #d470db'>$title</a>" . '---';
    }
}




echo "<br><br><b>Задача 15. Итог.</b><br>";
echo "Условие: Двумерный массив корзины интернет магазина хранит информацию о наименовании товара, его цене и количестве заказанных единиц. Написать скрипт, который выводит покупки в виде таблицы и подсчитывает итоговую стоимость корзины.<br>";
$cart = [1 => ['name' => 'роза', 'count' => 5, 'price' => 200],
         2 => ['name' => 'пион', 'count' => 11, 'price' => 550],
         3 => ['name' => 'ромашка', 'count' => 13, 'price' => 180],
         4 => ['name' => 'гортензия', 'count' => 9, 'price' => 600],
         5 => ['name' => 'хризантема', 'count' => 15, 'price' => 270]];
$sum_price = 0;
echo "<table style='border: 1px solid black'>
        <tr style='border: 1px solid black'>
            <th style='border: 1px solid black'> Товар </th>
            <th style='border: 1px solid black'> Кол-во </th>
            <th style='border: 1px solid black'> Цена </th>
        </tr>";
foreach ($cart as ["name" => $name, "count" => $count, "price" => $price,]){
    echo "<tr style='border: 1px solid black'>
            <td style='border: 1px solid black'>$name</td>
            <td style='border: 1px solid black; text-align: center'>$count</td>
            <td style='border: 1px solid black; text-align: right'>$price</td>
        </tr>";
    $sum_price += $price * $count;
}
echo "</table>";
echo "Итоговая стоимость: $sum_price";




echo "<br><br><b>Задача 16. Шах.</b><br>";
echo "Условие: Сгенерировать с помощью вложенных циклов таблицу изображающую шахматное поле.<br>";
echo "<table style='width: 200px; height: 200px; border: black 1px solid' cellspacing='0px'>";
    $value = 0;
    for($col = 0; $col < 8; $col++) {
        echo "<tr>";
        $value = $col;
        for($row = 0; $row < 8; $row++) {
            if ($value%2 == 0) {
                echo "<td style='width: 25px; height: 25px; background-color: black'></td>";
                $value++;
            } else {
                echo "<td style='width: 25px; height: 25px; background-color: white'></td>";
                $value++;
            }
        }
        echo "</tr>";
    }
echo "</table>";
?>