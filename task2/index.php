<div style='width: 180px; height: 190px; border: 1px solid black'>
    <form method="post">
        <input type='number' name='length' placeholder=Length> <br><br>
        <p>Choose type</p>
        <select name='type'>
            <option value='number'>number</option>
            <option value='letter'>letter</option>
            <option value='number-letter'>number and letter</option>
        </select> <br><br>
        <button type='submit' name='submit'>Submit</button>
    </form>
</div>


<br><br><br>

<?php

if (isset($_POST['submit'])) {
    $length = $_POST['length'];
    $type = $_POST['type'];
}

function getRandomString($length, $type)
{
    $numberLetter = array_merge(range(0, 9), range('A', 'Z'), range('a', 'z'));
    $numbers = range(0, 9);
    $letters = array_merge(range('A', 'Z'), range('a', 'z'));
    $arr = '';

    if ($type == 'number') {
        for ($i = 0; $i < $length; $i++) {
            $arr .= $numbers[mt_rand(0, count($numbers) - 1)];
        }
        echo $arr;
    } elseif ($type == 'letter') {
        for ($i = 0; $i < $length; $i++) {
            $arr .= $letters[mt_rand(0, count($letters) - 1)];
        }
        echo $arr;
    } elseif ($type == 'number-letter' && $length > 2) {
        for ($i = 0; $i < $length; $i++) {
            $arr .= $numberLetter[mt_rand(0, count($numberLetter) - 1)];
        }
        echo "<br>";
        echo $arr;
    } elseif ($type == 'number-letter' && $length = 2) {
        $arr[0] = $numberLetter[mt_rand(0, count($numberLetter) - 1)];
        if (in_array($arr[0], $letters)) {
            $arr[1] = $numbers[mt_rand(0, count($numbers) - 1)];
        } else {
            $arr[1] = $letters[mt_rand(0, count($letters) - 1)];
        }
        echo $arr[0], $arr[1];
    }
}


getRandomString($length, $type);