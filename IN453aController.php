<?php
require_once 'IN453U3Model.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['server'] = $_POST['server'];
    $_SESSION['database'] = $_POST['database'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}

// Create an instance of the model with dynamic connection data
$model = new IN453U3Model($_SESSION['server'], $_SESSION['database'], $_SESSION['username'], $_SESSION['password']);

function fetchData()
{
    global $model;
    // Fetch the data from the Model
    $data = $model->fetchIN453bName();

    // Prepare the HTML output
    $output = "<ul>";
    foreach ($data as $row) {
        $output .= "<li>Name: " . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . "</li>";
    }
    $output .= "</ul>";

    // Send the HTML output back as the response
    echo $output;
}

function fetchCount()
{
    global $model;
    // Fetch the count from the Model
    $count = $model->fetchIN453aCount();

    // Check if the query was successful
    if ($count !== false) {
        // Display the total count
        echo "Total count for IN453A: " . $count;
    } else {
        echo "Failed to fetch count.";
    }
}

function fetchCCount()
{
    global $model;
    $count = $model->fetchIN453cCount();

    if ($count !== false) {
        echo "Total count for IN453C: " . $count;
    } else {
        echo "Failed to fetch count.";
    }
}

function fetchFullName()
{
    global $model;
    $data = $model->fetchIN453bFullName();

    $output = "<ul>";
    foreach ($data as $name) {
        $output .= "<li>Full Name: " . htmlspecialchars($name) . "</li>";
    }
    $output .= "</ul>";

    echo $output;
}
?>
