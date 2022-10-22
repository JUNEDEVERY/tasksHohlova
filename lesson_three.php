<h1>Занятие 3</h1>
<?php
echo "<b>Задача 1. Артикул.</b><br>";
echo "Условие: Дано целое число, вывести его в шестизначном формате, при необходимости дополнить слева незначащими нулями.<br>";
$num = 45;
printf($num . "=> %'06d", $num);


echo "<br><br><b>Задача 2. Часы.</b><br>";
echo "Условие: Дано количество секунд с начала суток, получить время в формате hh:mm:ss.<br>";
$seconds = 12345;
printf('%02d:%02d:%02d', floor($seconds / 3600), floor(($seconds % 3600) / 60), ($seconds % 3600) % 60);


echo "<br><br><b>Задача 3. ФИО.</b><br>";
echo "Условие: Известны ФИО полностью (три переменные), сформировать фамилию и инициалы.<br>";
$name = 'Ольга'; $surname = 'Хохлова'; $patronymic = 'Сергеевна';
echo "$surname $name $patronymic" . ' => ';
echo $surname . ' ' . mb_substr($name, 0, 1) . '.' . mb_substr($patronymic, 0, 1) . '.';


echo "<br><br><b>Задача 4. Короткий пароль.</b><br>";
echo "Условие: Дана строка пароля, убедиться, что длина пароля не меньше 8 символов, в противном случае вывести предупреждение: 'Слишком короткий пароль!'.<br>";
$strPassTask4 = 'qwerty';
echo $strPassTask4 . ' => ';
if (mb_strlen($strPassTask4) < 8) {
    echo 'Слишком короткий пароль!';
} else {
    echo 'Пароль надежный';
}


echo "<br><br><b>Задача 5. Пробел.</b><br>";
echo "Условие: Дана строка пароля, убедиться, что пароль не содержит пробелов, в противном случае вывести предупреждение.<br>";
$strPassTask5 = 'qw ert y';
echo $strPassTask5 . ' => ';
if (mb_strpos($strPassTask5, ' ')) {
    echo 'Пароль содержит пробелы!!!';
} else {
    echo 'Пароль надежный';
}


echo "<br><br><b>Задача 6. Ровно.</b><br>";
echo "Условие: Проверить совпадает ли количество букв в двух данных строковых переменных.<br>";
$firstStrTask6 = 'оля';
$secondStrTask6 = 'юля';
echo "Строки '$firstStrTask6' и '$secondStrTask6' ";
if (mb_strlen($firstStrTask6) == mb_strlen($secondStrTask6)) {
    echo "содержат одинаковое количество букв";
} else {
    echo "содержат разное количество букв";
}


echo "<br><br><b>Задача 7. Подробнее.</b><br>";
echo "Условие: Обрезать текст до 50 символов, если он длиннее 100 символов и добавить ссылку 'подробнее'.<br>";
$strTask7 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, sit temporibus? Adipisci blanditiis deserunt dolore earum, obcaecati quae voluptate. Ducimus, eos, maiores. Aperiam deleniti, dolorem enim exercitationem explicabo fugiat harum laboriosam modi natus omnis optio, reiciendis sed sit totam ullam vel voluptate? Aliquam commodi cupiditate delectus dolore error eum necessitatibus neque qui vel. Eius illo minus nostrum officiis saepe sed, sint suscipit voluptas. Accusamus aperiam consectetur cum dolor dolorum, id illum ipsam iusto optio pariatur quidem ratione repellat reprehenderit sequi unde? Adipisci amet beatae corporis deserunt distinctio doloribus dolorum eius laboriosam, magnam natus provident quaerat ullam. A, ad animi delectus dignissimos dolores ea eligendi enim esse et ex facilis laborum maiores molestias nulla porro quaerat quo ratione recusandae repellendus, sapiente similique ut vero voluptate! Aperiam assumenda beatae consectetur id laborum magnam minus natus nihil quia quidem ratione reiciendis, sapiente voluptatem? Dolores, est tempore! Adipisci alias aliquam aperiam at beatae consectetur culpa cupiditate deleniti dolor dolorem dolorum error est eum eveniet impedit ipsum iusto laborum molestiae nihil nisi non nulla obcaecati perspiciatis placeat provident quae repellat, sapiente suscipit vel velit! Ab accusantium ad aperiam delectus deleniti dolor dolores esse, maxime minima nesciunt nulla omnis praesentium quaerat qui quibusdam ullam vel voluptate?';
if (mb_strlen($strTask7) > 100) {
    echo mb_substr($strTask7, 0, 50) . " <a href='#' style='color: blueviolet; text-decoration: underline'>подробнее</a>";
} else {
    echo $strTask7;
}


echo "<br><br><b>Задача 8. Короче.</b><br>";
echo "Условие: Дано слово. Слова длиннее 7 букв сокращать следующим образом: Обороноспособность Обор-ть. Слова не превосходящие по длине 7 букв выводить без изменения.<br>";
$strTask8 = 'Разработка';
echo $strTask8 . ' => ';
if (mb_strlen($strTask8) > 7) {
    echo mb_substr($strTask8, 0, 4) . "-" . mb_substr($strTask8, -2);
} else {
    echo $strTask8;
}


echo "<br><br><b>Задача 9. Коровы.</b><br>";
echo "Условие: Посчитать, сколько раз символ встречается в строке.<br>";
$symbolTask8 = 'а';
echo "В слове '$strTask8' символ '$symbolTask8' встречается " . mb_substr_count($strTask8, $symbolTask8) . ' раз(а)';


echo "<br><br><b>Задача 10. Caps Lock.</b><br>";
echo "Условие: Дана строка пароля, проверить совпадает ли она со строкой 'qwerty123'. В случае если совпадает, вывести 'Добро пожаловать!', если пароль введен в верхнем регистре, то выводить 'Возможно нажата клавиша Caps Lock...', во всех остальных случаях сообщать об ошибке.<br>";
$strPassTask10 = 'QWERTY123';
echo "Введенный пароль $strPassTask10 => ";
if ($strPassTask10 == 'qwerty123') {
    echo "Добро пожаловать!";
} elseif ($strPassTask10 == mb_convert_case('qwerty123', MB_CASE_UPPER)) {
    echo "Возможно нажата клавиша Caps Lock...";
} else {
    echo "Ошибка";
}


echo "<br><br><b>Задача 11. Регистронезависимые коровы.</b><br>";
echo "Условие: Посчитать, сколько раз символ встречается в строке, без учета регистра, т.е. А и а считаются одинаковыми символами.<br>";
$strTask11 = 'Регистронезависимые коРовы';
$symbolTask11 = 'р';
echo "В строке '$strTask11' символ '$symbolTask11' встречается " . mb_substr_count(mb_convert_case($strTask11, MB_CASE_LOWER), $symbolTask11) . ' раз(а)';


echo "<br><br><b>Задача 12. Курсив.</b><br>";
echo "Условие:  заданном тексте подсветить курсивным шрифтом все вхождения заданного слова в любом регистре. Вывести текст до и после преобразования.<br>";
$strTask12 = 'оля собирала грибы в лесу, чтобы потом их пожарить. грибы оказались вкусными.';
echo "строка до преобразования: $strTask12 <br>";
echo "строка после преобразования: " . str_replace('грибы', "<i>грибы</i>",mb_convert_case($strTask12, MB_CASE_LOWER));


echo "<br><br><b>Задача 13. Тег.</b><br>";
echo "Условие: Дана строка содержащая парный тег. Получить из парного тега его содержимое.<br>";
$strTask13 = "<a href='#'>ссылка</a>";
echo htmlspecialchars($strTask13) . ' => ';
echo mb_substr($strTask13, mb_strpos($strTask13, '>') + 1, mb_strpos($strTask13, '>', -1) - mb_strpos($strTask13, '>'));


echo "<br><br><b>Задача 14. Без комментариев.</b><br>";
echo "Условие: Исключить из строки группу символов, расположенных между символами « /* », « */ » включая границы. Предполагается, что нет вложенных скобок.<br>";
$strTask14 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. /*Aspernatur at blanditiis*/ ducimus earum fugiat laboriosam";
echo '<i> Было: </i>' . $strTask14 . '<br>';
echo '<i> Стало: </i>' . strstr($strTask14, '/*', true) . substr(strstr($strTask14, '*/', false), 2);


echo "<br><br><b>Задача 15. Поиск.</b><br>";
echo "Условие: Найти в заданном тексте первое предложение содержащее данное ключевое слово. Найденное предложение и ключевое слово выделить шрифтом или начертанием в исходном тексте.<br>";
$strTask15 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci beatae dolore ex harum modi necessitatibus quos, ullam. Blanditiis deleniti dolor dolorem eaque est ipsam nesciunt, optio perferendis qui, temporibus ut.';
$keyword = 'elit';
$application = '';
$arrStr = preg_split("/[.?!]/", $strTask15);
echo '<i> Было: </i>'. $strTask15 . '<br>';
echo '<i> Ключевое слово: </i>'. $keyword . '<br>';
foreach ($arrStr as $str) {
    if (mb_strpos($str, $keyword)) {
        $application = $str;
    }
}
echo '<i> Стало: </i>' . str_replace($application, ('<b>' . $application . '</b>'), $strTask15);


echo "<br><br><b>Задача 16. MVC.</b><br>";
echo "Условие: Каждому имени страницы page_name (например: page_name = Main ) соответствуют два файла вида main_model.php и main_view.php . Если переменная page_name не пустая, то генерировать соответствующие имена файлов, в противном случае, оставить имя по умолчанию ( Main ). Для проверки пустоты переменной использовать функцию empty() . Обратите внимание, что имена файлов должны быть в нижнем регистре.<br>";
$page_name = 'Navbar';
echo 'page_name = ' . $page_name . ' => ';
if (empty($page_name)) {
    $page_name = 'Main';
}
echo mb_convert_case($page_name, MB_CASE_LOWER) . '_model.php' . ' , ' . mb_convert_case($page_name, MB_CASE_LOWER) . '_view.php';
?>