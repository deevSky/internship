<?php


$array = [];
for ($i = 0; $i < rand(1, 100); $i++) {
    array_push($array, rand(1, 100));
}

$array = array_unique($array);
rsort($array);

?>

<table style='border: 1px solid; border-collapse: separate'>
    <tr>
        <th>Index</th>
        <th>Element</th>
    </tr>

    <?php
    foreach ($array as $key => $item) {
        echo '<tr>';
        echo '<td>' . ($key + 1) . "</td>";
        echo '<td>' . $item . '</td>';
        echo '</tr>';
    }
    ?>

</table>

