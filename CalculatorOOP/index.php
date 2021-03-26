<?php
include_once "calc.php";
$cal = new calc();
//$cal->setInfo(2,2,1);
//echo $cal->doCalc();
?>

<html>
<title>Calculator | Abdulrahman Othman</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" >Coded by Abdulrahman Othman | Gazixq@gmail.com  2021</a>
    </div>
</nav>


<center>
    <br>
    <form class="form" action="" method="post">

        <div class="mb-4">

            <input type="text" class="form-control" name="n1" placeholder="Die erste Nummer | الرقم الأول"style="width:500px";>
        </div>
        <div class="mb-3">

            <input type="text" class="form-control" name="n2" placeholder="Die zweite Nummer | الرقم الثاني"style="width:500px";>
            <br>

            <select class="form-select" style="width:200px"; name="op">
                <option>Operation</option>
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select>

            <br>
            <button type="submit" name="check" class="btn btn-secondary">Berechne | إحسب</button>
        </div>

    </form>

    <?php

    if(isset($_POST['check'])){
        $cal->setInfo($_POST['n1'],$_POST['n2'],$_POST['op']);
        echo $cal->doCalc();
    }{

    }
    ?>
</center>


</body>
</html>
<?php
