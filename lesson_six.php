<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Занятие 6</title>
</head>
<body>
<h1>Занятие 6</h1>
<p><b>Задача 1. Гость.</b></p>
<p>Условие: Выводить на странице приветствие пользователю, если в массиве GET элемент с ключом name не пустой. Приветствовать гостя в противном случае.</p>
<form action="lesson_six.php" method="get">
    <input type="text" name="name" placeholder="Введите имя">
    <button type="submit">Поприветствовать</button>
    <?php
    if (isset($_GET['name']) && $_GET['name'] !== '') {
        echo $_GET['name'] . ", Здравствуйте!";
    } else {
        echo "<p style='color: #d470db'>Гость, Здравствуйте!</p>";
    }
    ?>
</form>


<p><b>Задача 2. Снова глоссарий.</b></p>
<p>Условие: Написать скрипт, который выводит на страницу определение термина, при передаче его по URL. Пример: index.php?term=Глоссарий . Термины и их определения хранятся в одномерном массиве.</p>
<p>Выберите из предложенных терминов тот, определение которого хотите узнать: </p>
<div style="display: flex; justify-content: flex-start">
    <a href="?term=математика" style="margin-right: 20px">Математика</a>
    <a href="?term=информатика" style="margin-right: 20px">Информатика</a>
    <a href="?term=физика" style="margin-right: 20px">Физика</a>
    <a href="?term=химия" style="margin-right: 20px">Химия</a>
</div>
<?php
$arrDictionary = array(
    'математика' => ' - точная наука, первоначально исследовавшая количественные отношения и пространственные формы.',
    'информатика' => ' - наука о методах и процессах сбора, хранения, обработки, передачи, анализа и оценки информации с применением компьютерных технологий, обеспечивающих возможность её использования для принятия решений.',
    'физика' => ' - естественная наука, изучающая материю, ее фундаментальные составляющие, ее движение и поведение в пространстве и времени, а также связанные с ними сущности энергии и силы.',
    'химия' => ' - научное изучение свойств и поведения материи.'
);
if (isset($_GET['term'])) {
    echo "<p style='color: #d470db'>" . $arrDictionary[$_GET['term']] . "</p>";
}
?>


<p><b>Задача 3. О нас.</b></p>
<p>Условие: Сгенерировать с помощью цикла меню сайта index.php из четырех страниц. Ссылки имеют вид <a href=index.php?page=home> Главная</a> Текст ссылок и содержимое страниц хранится в двумерном массиве. При вызове скрипта без параметров, открывается содержимое главной страницы. </p>
<?php
$routes = array(
    'home' => [
            'title' => 'Главная',
            'content' => 'Это текст главной страницы'
    ],
    'about' => [
        'title' => 'О нас',
        'content' => 'Это текст страницы с информацией о компании'
    ],
    'catalog' => [
        'title' => 'Каталог',
        'content' => 'Это страница с товарами'
    ],
    'contacts' => [
        'title' => 'Контакты',
        'content' => 'Это страница с контактами компании'
    ]
);
foreach ($routes as $key => $value) {
    echo "<a href='?page=$key' style='margin-right: 20px'>" . $value['title'] . "</a>";
}
if (isset($_GET['page'])) {
    foreach ($routes as $key => $value) {
        if ($_GET['page'] == $key) {
            echo "<p style='color: #d470db'>" . $value['content'] . "</p>";
        }
    }
} else{
    $homePage = $routes['home'];
    echo "<p style='color: #d470db'>" . $homePage['content'] . "</p>";
}
?>


<p><b>Задача 4. Опять глоссарий.</b></p>
<p>Условие: В заданном тексте заменить все слова из заданного массива на ссылки. При переходе по ссылке отображать термин и его определение. </p>
<?php
$text = 'Основная наука, которую должен знать программист - это информатика. Но без знаний такой, науки, как математика, программисту будет трудно. Также необходимы знания таких наук, как физика и химия, но уже в меньшей мере, чем две предыдущих.';
foreach ($arrDictionary as $key => $value) {
        $text = str_replace($key, "<a href='?key=$key'>$key</a>", $text);
}
echo $text;
if (isset($_GET['key'])) {
    echo "<p style='color: #d470db'>" . $_GET['key'] . $arrDictionary[$_GET['key']] . "</p>";
}
?>


<p><b>Задача 5. Калькулятор.</b></p>
<p>Условие:  Создать форму и написать скрипт для онлайн калькулятора, вычисляющего количество секций радиатора отопления исходя из площади помещения и мощности одной секции. (Норма: 100 Вт/кв. м.)</p>
<form action="lesson_six.php" method="get">
    <input type="text" name="radiator_power" placeholder="Введите мощность одного радиатора (Вт)">
    <input type="text" name="room_area" placeholder="Введите площадь помещения (кв.м.)">
    <button type="submit">Рассчитать</button>
    <?php
    if (isset($_GET['radiator_power']) && $_GET['radiator_power'] !== '' && isset($_GET['room_area']) && $_GET['room_area'] !== '') {
        echo "<p style='color: #d470db'>" . "Исходя из площади помещения (" . $_GET['room_area'] . "кв.м.) и мощности одной секции радиатора (". $_GET['radiator_power'] ."Вт) необходимое количество секций радиатора отопления = " . (100/$_GET['radiator_power'])*$_GET['room_area'] . "</p>";
    } else {
        echo "<p style='color: #d470db'>Заполните все поля!</p>";
    }
    ?>
</form>


<p><b>Задача 6. Подсветка.</b></p>
<p>Условие: В заданном тексте подсветить красным шрифтом все слова из фразы, введенной пользователем. Для ввода фразы использовать форму. Данные из формы обрабатываются тем же скриптом.</p>
<form action="lesson_six.php" method="get">
    <input type="text" name="phrase" placeholder="Введите фразу">
    <button type="submit">Подсветить</button>
    <?php
    $application = "Программирование в узком смысле — это написание программ, а в широком — создание инструкций для любой системы, способной их воспринять.";
    if (isset($_GET['phrase'])){
        $arrWords = explode(' ', $_GET['phrase']);
        foreach ($arrWords as $key){
            $application = str_replace($key, "<span style='color: #d470db'>$key</span>", $application);
        }
    }
    echo "<p>" . $application . "</p>";
    ?>
</form>
</body>
</html>
