<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Controller\TVSeriesController;

$title = "";
$time = "";
$date = "";
$btnFind = "";
$btnClear = "";


if(!empty($_POST)){
    //var_dump($_POST);
    $title = $_POST['title'] ?? '';
    $time = $_POST['time'] ?? '';
    $date = $_POST['date'] ?? '';
    $btnFind = $_POST['btn_find'] ?? '';
    $btnClear = $_POST['btn_clear'] ?? '';

    if(isset($btnClear) && !empty($btnClear)){
        $title = "";
        $time = "";
        $date = "";
        $btnFind = "";
        $btnClear = "";
    }
}

$tvSeries = new TVSeriesController();


$series = $tvSeries->getNextSeries($date, $time, $title);

?>
<html lang="en">
<head>
    <title>Exercise 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Find the series</h1>
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title; ?>" aria-label="Title">
                </div>
                <div class="col">
                    <input type="date" class="form-control" name="date" id="date" placeholder="Date"  value="<?php echo $date; ?>" aria-label="Date">
                </div>
                <div class="col">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time" aria-label="Time"  value="<?php echo $time; ?>" step="3600" max='23:00' min='00:00'>
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="btn_find" id="btn_find" value="Find">
                    <input type="submit" class="btn btn-light" name="btn_clear" id="btn_clear" value="Clear">
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Channel</th>
                <th>Gender</th>
                <th>Show Time</th>
                <th>Week Day</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($series as $value) {
                echo "<tr>" .
                    "<td>" . $value['id'] . "</td>" .
                    "<td>" . $value['title'] . "</td>" .
                    "<td>" . $value['channel'] . "</td>" .
                    "<td>" . $value['gender'] . "</td>" .
                    "<td>" . $value['show_time'] . "</td>" .
                    "<td>" . $value['week_day'] . "</td>" .
                    "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
