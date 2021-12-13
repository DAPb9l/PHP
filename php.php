// 1
<?php
    $name = 'Иван';
    $age = 20;
    echo $name, $age
?>

// 2.1
<?php
// Cоздаем таблицу
$cols = 8;
$rows = 8;
?>
<style>
table { border: 0; }
td { padding: 5px; text-align: center; }
</style>

<table>
<?php
// Проходим по всем строкам
for ($tr = 1; $tr <= $rows; $tr++)
{
    echo '<tr>';
    // Проходим по каждой ячейке строки
    for($td = 1; $td <= $cols; $td++)
    {
        $background = 'white';

        echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
    }
    echo "</tr>";
}
?>

// 3.1


// 3.2
<?php
$a=20;
$b=10;
$c=1;
// сравниваем число А
if($a>$b && $a>$c)
{
echo "Greater value is a=".$a;
}
// сравниваем число Б, если А не подошло
else if($b>$a && $b>$c)
{
echo "Greater value is b=".$b;
}
// сравниваем число С, если остальные два не подошли
else if($c>$a && $c>$b)
{
echo "Greater value is c=".$c;
}
else // если числа одинаковые, выводим следующие
{
echo"Dont Enter Equal Values";
}
?>

//4.1
<?php
for ($i = 1; $i <10; $i++) {
    echo $i * $i."</br>";
}
?>

//4.3
<?php
    $days = array();
    for ($i = 0; $i < 7; $i++) {
        $days[$i] = jddayofweek($i,1);
    }
?>

//4.4
<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
foreach ($numbers as $index=>$value) {
if ($value % 2 == 0)
echo "$value <br>";
}
?>

//4.5
<?php
foreach ($arr as $a) {
    if ($a < 0) {
        echo 'есть';
        return;
    }
}
echo 'нет';
?>