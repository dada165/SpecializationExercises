<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Specialization Activities</title>
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<body class="bg-">
    <div class="container w-25 mt-3 border border-dark border-2  bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 1</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    if (isset($_GET["submit"])) {
                        echo "Your name is  " . $_GET["fname"];
                    }
                    ?>
                </div>
                <form class="text-center mt-2" method="get">
                    <label for="fname">Enter your name</label><br>
                    <input type="text" class="mt-2" id="fname" name="fname" value=""><br>
                    <button type="submit" name="submit" class="btn btn-primary mb-3 mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 2</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    if (isset($_GET["confirm"])) {
                        $num1 = $_GET["firstnum"];
                        $num2 = $_GET["secondnum"];
                        $sum = $num1 + $num2;
                        if ($num1 == $num2) {
                            echo "The answer is  " . $sum * 3;
                        } else {
                            echo "The answer is  " . $sum;
                        }
                    }
                    ?>
                </div>
                <form class="text-center mt-2" method="get">
                    <label for="firstnum">Enter first number</label><br>
                    <input type="number" class="mt-2" id="firstnum" name="firstnum" value=""><br>
                    <label for="secondnum" class="mt-3">Enter second number</label><br>
                    <input type="number" class="mt-2" id="secondnum" name="secondnum" value=""><br>
                    <button type="submit" name="confirm" class="btn btn-primary mb-3 mt-2">Add</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 3</p>
        <div class="card border border-dark">
            <div class="card-body">
                <form class="text-center mt-2" method="get">
                    <label for="number">Input range for the pattern</label><br>
                    <input type="number" class="mt-2" id="number" name="number" value=""><br>
                    <button type="submit" name="proceed" class="btn btn-primary mb-3 mt-2">Confirm</button>
                </form>
                <div class="text-dark">
                    <?php
                    if (isset($_GET['proceed'])) {
                        $number = $_GET['number'];

                        for ($num5 = 1; $num5 <= $number; $num5++) {
                            for ($num4 = 1; $num4 <= ($num5 > $number / 2 ? $number - $num5 : $num5); $num4++) {
                                echo ("♥ ");
                            }
                            echo ("<br>");
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 4</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    if (isset($_GET["check"])) {
                        $prime = $_GET["numberp"];
                        function primeCheck($prime)
                        {
                            if ($prime == 1)
                                return 0;
                            for ($i = 2; $i <= $prime / 2; $i++) {
                                if ($prime % $i == 0)
                                    return 0;
                            }
                            return 1;
                        }
                        $checker = primeCheck($prime);
                        if ($checker == 1)
                            echo $prime . " is a Prime number";
                        else
                            echo $prime . " is not a Prime number";
                    }
                    ?>
                </div>
                <form class="text-center mt-2" method="get">
                    <label for="number">Prime number checker</label><br>
                    <input type="number" class="mt-2" id="numberp" name="numberp" value=""><br>
                    <button type="submit" name="check" class="btn btn-primary mb-3 mt-2">Check</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 5</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    if (isset($_GET["checkstr"])) {
                        $strword = $_GET["word"];

                        if (ctype_lower($strword)) {
                            echo $strword . ' is all lowercase letters.';
                        } else {
                            echo $strword . ' is not all lowercase letters.';
                        }
                    }
                    ?>
                </div>
                <form class="text-center mt-2" method="get">
                    <label for="number">All lowercase or not</label><br>
                    <input type="text" class="mt-2" id="word" name="word" value=""><br>
                    <button type="submit" name="checkstr" class="btn btn-primary mb-3 mt-2">Check</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 6</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    if (isset($_GET["checkpal"])) {
                        $input = $_GET["word"];
                        function Palindrome($input)
                        {
                            if (strrev($input) == $input) {
                                return 1;
                            } else {
                                return 0;
                            }
                        }
                        if (Palindrome($input)) {
                            echo $input . " is a Palindrome";
                        } else {
                            echo $input . " is not a Palindrome";
                        }
                    }
                    ?>
                </div>
                <form class="text-center mt-2" method="get">
                    <label for="number">Palindrome or not</label><br>
                    <input type="text" class="mt-2" id="word" name="word" value=""><br>
                    <button type="submit" name="checkpal" class="btn btn-primary mb-3 mt-2">Check</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 7</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center ">
                    <?php
                    $target_days = mktime(0, 0, 0, 8, 31, 2022);
                    $today = time();
                    $diff_days = ($target_days - $today);
                    $days = (int)($diff_days / 86400);
                    print "Days till next birthday: $days days!" . "\n";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 8</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center ">
                    <?php
                    function dateDiffInDays($date1, $date2)
                    {
                        $diff = strtotime($date2) - strtotime($date1);
                        return abs(round($diff / 86400));
                    }
                    $date1 = "17-08-2021";
                    $date2 = "31-08-2021";
                    $dateDiff = dateDiffInDays($date1, $date2);

                    printf("Difference between two dates: "
                        . $dateDiff . " Days ");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 9</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    if (isset($_GET["romans"])) {
                        function numberToRoman($input)
                        {
                            $n = intval($input);
                            $result = '';
                            $converter = array(
                                'M' => 1000, 'CM' => 900,
                                'D' => 500, 'CD' => 400,
                                'C' => 100, 'XC' => 90,
                                'L' => 50, 'XL' => 40,
                                'X' => 10, 'IX' => 9,
                                'V' => 5, 'IV' => 4,
                                'I' => 1
                            );
                            foreach ($converter as $roman => $value) {
                                $matches = intval($n / $value);
                                $result .= str_repeat($roman, $matches);
                                $n = $n % $value;
                            }
                            return $result;
                        }
                        echo numberToRoman($_GET["roman"]);
                    }

                    ?>
                </div>
                <form class="text-center mt-2" method="get">
                    <label for="number">Arabic into Roman</label><br>
                    <input type="number" class="mt-2" id="roman" name="roman" value=""><br>
                    <button type="submit" name="romans" class="btn btn-primary mb-3 mt-2">Convert</button>
                </form>

            </div>
        </div>
    </div>
    <div class="container w-25 mt-3 border border-dark border-2 bg-dark rounded shadow p-3 mb-5 bg-body rounded">
        <p class="text-center text-dark">Exercise 10</p>
        <div class="card border border-dark">
            <div class="card-body">
                <div class="text-white bg-dark text-center rounded-pill">
                    <?php
                    function Sorted(&$setarray)
                    {
                        $num = sizeof($setarray);
                        for ($k = 0; $k < $num; $k++) {
                            for ($l = 0; $l < $num - $k - 1; $l++) {
                                if ($setarray[$l] > $setarray[$l + 1]) {
                                    $bub = $setarray[$l];
                                    $setarray[$l] = $setarray[$l + 1];
                                    $setarray[$l + 1] = $bub;
                                }
                            }
                        }
                    }
                    $setarray = array(9, 7, 63, 98, 71, 55, 47);
                    $len = sizeof($setarray);
                    Sorted($setarray);
                    echo "Sorted array : \n";
                    for ($k = 0; $k < $len; $k++)
                        echo $setarray[$k] . " ";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>