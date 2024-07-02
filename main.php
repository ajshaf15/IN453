<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require_once 'IN453aController.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Button Click to Display Data</title>
</head>
<body>

    <ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php">Back to the main page</a></li>
        <li><a href="#countContainer">IN453A Count</a></li>
        <li><a href="#nameContainer">IN453B Name</a></li>
        <li><a href="#cCountContainer">IN453C Count</a></li>
        <li><a href="#fullNameContainer">IN453B Full Name</a></li>
    </ol>

    <h1>IN453A Count</h1>

    <div id="countContainer">
        <?php
        if (isset($_POST['in453aCountButton'])) {
            // Call the controller functions to fetch the data and count
            fetchCount();
        }
        ?>
    </div>

    <div>
        <!-- Form with a button to execute PHP -->
        <form method="POST">
            <input type="submit" name="in453aCountButton" value="Get IN453A Count">
        </form>
    </div>

    <h1>IN453B Name</h1>

    <div id="nameContainer">
        <?php
        if (isset($_POST['displayButton'])) {
            // call the controller functions to fetch the data and count
            fetchData();
        }
        ?>
    </div>

    <div>
        <!-- Form with a button to execute PHP -->
        <form method="POST">
            <input type="submit" name="displayButton" value="Get IN453B Name">
        </form>
    </div>

    <h1>IN453C Count</h1>
    <div id="cCountContainer">
        <?php
        if (isset($_POST['in453cCountButton'])) {
            fetchCCount();
        }
        ?>
    </div>
    <form method="POST">
        <input type="submit" name="in453cCountButton" value="Get IN453C Count">
    </form>

    <h1>IN453B Full Name</h1>
    <div id="fullNameContainer">
        <?php
        if (isset($_POST['fullNameButton'])) {
            fetchFullName();
        }
        ?>
    </div>
    <form method="POST">
        <input type="submit" name="fullNameButton" value="Get IN453B Full Name">
    </form>

</body>
</html>
