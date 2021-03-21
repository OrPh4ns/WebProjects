<?php
include_once "calc.php";
$cal = new calc();

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

            <input type="text" class="form-control" name="n1" placeholder="Die erste Nummer | الرقم الأول">
        </div>
        <div class="mb-3">

            <input type="text" class="form-control" name="n2" placeholder="Die zweite Nummer | الرقم الثاني">
            <br>




            <select class="form-select" aria-label="Default select example">
                <option selected name="op">Wähle die Nummer und die Operation | إختار الارقام والعمليه الحسابيه</option>
                <option name="1" value="1">+</option>
                <option name="2" value="2">-</option>
                <option name="3" value="3">*</option>
                <option name="4" value="4">/</option>
            </select>

            <br>
            <button type="submit" name="check" class="btn btn-secondary">Berechne | إحسب</button>
        </div>

    </form>

    <?php

    if(isset($_POST['check'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $op = $_POST['op'];
        //echo $cal->setInfo($n1,$n2,$op);
        echo '<div class="alert alert-success" role="alert">'.$cal->setInfo($n1,$n2,$op).'</div>';
    }{

    }
    ?>
</center>


</body>
</html>
<?php
