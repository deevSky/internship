<?php
// task 1

echo 'Task 1' . "<br><br>";

$array = [];
for ($i = 0; $i < rand(1, 100); $i++) {
    array_push($array, rand(1, 100));
    $array = array_unique($array);
    rsort($array);
}
?>

    <table style="border: 1px solid;border-collapse: separate ">
        <tr>
            <th>Index</th>
            <th>Element</th>
        </tr>

        <?php
        foreach ($array as $key => $item) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $item . "</td>";
            echo "</tr>";
        }
        ?>

    </table>


    <br><br><br><br>
    <p>Task 2</p>  <br>


    <div style="width: 180px; height: 190px; border: 1px solid black">
        <form method="post">
            <input type="number" name="length" placeholder="Length"> <br><br>
            <p>Choose type</p>
            <select name="type" id="">
                <option value="number">number</option>
                <option value="letter">letter</option>
                <option value="number-letter">number and letter</option>
            </select> <br><br>
            <button type="submit" name="submit">Submit</button>
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
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';

    if ($type == 'number') {
        for ($i = 0; $i < $length; $i++) {
            $string .= $numbers[mt_rand(0, strlen($numbers) - 1)];
        }
        echo $string;
    } elseif ($type == 'letter') {
        for ($i = 0; $i < $length; $i++) {
            $string .= $letters[mt_rand(0, strlen($letters) - 1)];
        }
        echo $string;
    } elseif ($type == 'number-letter' && $length > 2) {
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
            if (strpos($numbers, $string[$i]) !== false) {
                echo  $string[$i] . " ";
            }
        }
        echo "<br>";
        echo $string;
    } elseif
    ($type == 'number-letter' && $length = 2) {
        $string[0] = $numbers[mt_rand(0, strlen($numbers) - 1)];
        $string[1] = $letters[mt_rand(0, strlen($letters) - 1)];
        echo $string[0], $string[1];
    }
}



getRandomString($length, $type);

echo "<br><br><br><br>";


//Abstract classes- task 3
echo  'Task 3' . "<br><br><br>";
abstract class Car
{
    public $name;
    public $color;
    public $year;

    public function __construct($name, $color, $year)
    {
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
    }

    abstract public function introduce();
}


class Kia extends Car
{
    public function introduce()
    {
        return "$this->name $this->color
        $this->year";
    }
}

class BMW extends Car
{
    public function introduce()
    {
        return "$this->name $this->color
        $this->year";
    }
}


$kia = new Kia("Kia", "blue", 2015);
echo $kia->introduce();
echo "<br>";

$bmw = new BMW("BMW", "white", 2019);
echo $bmw->introduce();
echo "<br>";