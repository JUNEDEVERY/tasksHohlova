<h1>Занятие 4</h1>
<?php
echo "<b>Задача 1. Просто.</b><br>";
echo "Условие: Создать массив с репутацией пользователей ('Вася'=> 37, 'Даша' => 56 и т.д.) и вывести его на страницу с помощью print_r.<br>";
$arrReputation = array('Вася' => 37, 'Даша' => 56, 'Оля' => 118, 'Никита' => 99);
print_r($arrReputation);


echo "<br><br><b>Задача 2. Поиск данных.</b><br>";
echo "Условие: Дан массив и ключ, вывести элемент массива по ключу, если такой ключ в массиве есть, в противном случае вывести «Данные не найдены».<br>";
$keyTask2 = 'Оля';
echo 'Массив: ';
print_r($arrReputation);
echo '<br>Ключ: '. $keyTask2 . ' => ';
if (isset($arrReputation[$keyTask2])) {
    echo $arrReputation[$keyTask2];
} else {
    echo 'Данные не найдены';
}


echo "<br><br><b>Задача 3. Глоссарий.</b><br>";
echo "Условие: По заданному слову вывести это слово и его определение, если имеется. В противном случае: 'Данные не найдены'.<br>";
$arrDictionary = array(
        'математика ' => ' - точная наука, первоначально исследовавшая количественные отношения и пространственные формы.',
        'информатика' => ' - наука о методах и процессах сбора, хранения, обработки, передачи, анализа и оценки информации с применением компьютерных технологий, обеспечивающих возможность её использования для принятия решений.',
        'физика' => ' - естественная наука, изучающая материю, ее фундаментальные составляющие, ее движение и поведение в пространстве и времени, а также связанные с ними сущности энергии и силы.',
        'химия' => ' - научное изучение свойств и поведения материи.'
);
$givenWord = 'информатика';
if (isset($arrDictionary[$givenWord])) {
    echo $givenWord . $arrDictionary[$givenWord];
} else {
    echo 'Данные не найдены';
}


echo "<br><br><b>Задача 4. Выше крыши.</b><br>";
echo "Условие: Дан массив с репутацией пользователей ('Вася'=> 37). Если пользователь name имеет рейтинг больше 100, изменить его на 100.<br>";
echo 'Начальный массив : ';
print_r($arrReputation);
$userNameTask4 = 'Оля';
echo "<br>Пользователь : $userNameTask4";
if ($arrReputation[$userNameTask4] > 100) {
    $arrReputation[$userNameTask4] = 100;
}
echo '<br>Конечный массив : ';
print_r($arrReputation);


echo "<br><br><b>Задача 5. Данила Мастер.</b><br>";
echo "Условие: Дан массив с репутацией пользователей (имя => репутация от 0 до 100). Определить по имени пользователя его статус (до 30 включительно – новичок, от 31 до 60 – мастер, более 61 - грандмастер).<br>";
echo 'Массив : ';
print_r($arrReputation);
$userNameTask5 = 'Оля';
if ($arrReputation[$userNameTask5] <= 30) {
    echo "<br>$userNameTask5 - новичок";
} elseif ($arrReputation[$userNameTask5] > 30 && $arrReputation[$userNameTask5] <= 60) {
    echo "<br>$userNameTask5 - мастер";
} elseif ($arrReputation[$userNameTask5] > 60) {
    echo "<br>$userNameTask5 - грандмастер";
}


echo "<br><br><b>Задача 6. Рейтинг +1.</b><br>";
echo "Условие: Если пользователь имеется в массиве, то увеличить его рейтинг на 1, в противном случае добавить пользователя с рейтингом 0.<br>";
echo 'Массив : ';
print_r($arrReputation);
$userNameTask6 = 'Ксюша';
echo "<br>Пользователь : $userNameTask6<br>";
if (array_key_exists($userNameTask6,$arrReputation)) {
    $arrReputation[$userNameTask6]++;
} else {
    $arrReputation[$userNameTask6] = 0;
}
print_r($arrReputation);


echo "<br><br><b>Задача 7. Бан.</b><br>";
echo "Условие: Дан массив с репутацией пользователей (Вася => 37). Если пользователь name имеет рейтинг меньше 0, удалить пользователя из массива.<br>";
$arrReputation['Саша'] = -10;
$userNameTask7 = 'Саша';
echo 'Начальный массив : ';
print_r($arrReputation);
if ($arrReputation[$userNameTask7] < 0) {
    unset($arrReputation[$userNameTask7]);
}
echo '<br>Конечный массив : ';
print_r($arrReputation);


echo "<br><br><b>Задача 8. Файл.</b><br>";
echo "Условие: Дано полное имя файла, получить название файла и название папки в которой он содержится.<br>";
$path = 'C:\\Windows\\dirname\\file.exe';
echo "Полное имя файла: $path <br>";
$path_fold = explode("\\", $path);
$file_name = $path_fold[count($path_fold) - 1];
unset($path_fold[count($path_fold) - 1]);
$dir_name = implode('\\', $path_fold);
echo "Имя файла: $file_name". PHP_EOL . '<br>';
echo "Папка: $dir_name". PHP_EOL;


echo "<br><br><b>Задача 9. Царь горы.</b><br>";
echo "Условие: Найти пользователя с наибольшей репутацией. Циклы не использовать. Как получить трех пользователей с наибольшей репутацией?<br>";
echo 'Начальный массив : ';
print_r($arrReputation);
echo '<br>Первый пользователь с наибольшей репутацией => ' . array_keys($arrReputation, max($arrReputation))[0];
unset($arrReputation[array_keys($arrReputation, max($arrReputation))[0]]);
echo '<br>Второй пользователь с наибольшей репутацией => ' . array_keys($arrReputation, max($arrReputation))[0];
unset($arrReputation[array_keys($arrReputation, max($arrReputation))[0]]);
echo '<br>Третий пользователь с наибольшей репутацией => ' . array_keys($arrReputation, max($arrReputation))[0];
echo '<br>*Сначала был найден пользователь с наибольшей репутаций, выведен, а затем удален из массива. Далее измененном массиве опять был найден пользователь с наибольшей репутаций, также выведен, а затем удален из массива. И тд.';


echo "<br><br><b>Задача 10. День недели.</b><br>";
echo "Условие: Заменить в тексте все английские названия дней недели на русские. Использовать str_replace вместе с массивами.<br>";
$strWeekday = 'I had coffee on monday. On tuesday I drank juice. I had tea on wednesday. On thursday I drank compote. On friday I drank wine. On saturday I drank cocoa. On sunday I drank lemonade.';
$arrWeekday = ['monday'=>'понедельник','tuesday'=>'вторник','wednesday'=>'среда','thursday'=>'четверг','friday'=>'пятница','saturday'=>'суббота','sunday'=>'воскресенье'];
echo "<i>Было:</i> $strWeekday <br>";
foreach(array_keys($arrWeekday) as $array_key) {
    $strWeekday = str_replace($array_key,$arrWeekday[$array_key],$strWeekday);
}
echo "<i>Стало:</i> $strWeekday";


echo "<br><br><b>Задача 11. Лето.</b><br>";
echo "Условие: Дано название месяца, определить время года. Для хранения данных использовать массив.<br>";
$arrMonths = [
        'зима'=>['декабрь','январь','февраль'],
        'весна'=>['март','апрель','май'],
        'лето'=>['июнь','июль','август'],
        'осень'=>['сентябрь','октябрь','ноябрь']
];
$nameMonth = 'октябрь';
foreach($arrMonths as $months) {
    foreach ($months as $elem) {
        if ($elem == $nameMonth) {
            echo "Месяц: $nameMonth => Время года: " . array_search($months,$arrMonths);
        }
    }
}


echo "<br><br><b>Задача 12. Корзина.</b><br>";
echo "Условие: Получить стоимость товара в корзине, по его id.<br>";
$cart = [
        1 => ['name'=>'роза', 'count'=>'1', 'price'=>'200'],
        2 => ['name'=>'пион', 'count'=>'1', 'price'=>'550'],
        3 => ['name'=>'ромашка', 'count'=>'1', 'price'=>'180'],
        4 => ['name'=>'гортензия', 'count'=>'1', 'price'=>'600'],
        5 => ['name'=>'хризантема ', 'count'=>'1', 'price'=>'270']
];
echo "Корзина: ";
print_r($cart);
echo "<br>";
$idProduct = 4;
if (isset($cart[$idProduct])) {
    $product = $cart[$idProduct];
    echo "Стоимость товара с id $idProduct => " . $product['price'];
}
?>