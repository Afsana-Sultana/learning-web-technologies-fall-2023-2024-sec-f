<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Search</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>Search using AJAX</h1>
    <input type="text" id="searchInput" placeholder="Search...">
    <div id="searchResults"></div>
</body>
</html>

<?php

$items = array("job", "Trish", "jack", "Pear");

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $results = array();

    foreach ($items as $item) {
        if (stripos($item, $query) !== false) {
            $results[] = $item;
        }
    }

    if (count($results) > 0) {
        foreach ($results as $result) {
            echo "<p>{$result}</p>";
        }
    } else {
        echo "<p>No results found</p>";
    }
}
?>