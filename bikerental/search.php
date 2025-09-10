<?php
// Capture the search query from the GET parameter
$searchTerm = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($searchTerm === '') {
    echo "Please enter a search term.";
    exit;
}

// Simulate fetching results from a database
$fakeDatabase = [
    "Learn PHP Basics",
    "Introduction to React",
    "Build a Website with Laravel",
    "Understanding JavaScript Promises",
    "Advanced CSS Techniques",
    "PHP Search Bar Example",
];

$results = array_filter($fakeDatabase, function ($item) use ($searchTerm) {
    return stripos($item, $searchTerm) !== false;
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c2c34;
            color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #3e3e49;
            border-radius: 8px;
        }
        .result {
            padding: 10px 0;
            border-bottom: 1px solid #555;
        }
        .result:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Search Results for "<?php echo htmlspecialchars($searchTerm); ?>"</h1>

        <?php if (count($results) > 0): ?>
            <?php foreach ($results as $result): ?>
                <div class="result"><?php echo htmlspecialchars($result); ?></div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No results found for "<?php echo htmlspecialchars($searchTerm); ?>"</p>
        <?php endif; ?>
    </div>
</body>
</html>
