<?php
// go to FLAGISHERE.php
if (isset($_GET['page'])) {
   $page = $_GET['page'];

    if (strpos($page, '..') !== false || strpos($page, '/') === 0) {
        http_response_code(403);
        exit('Access denied.');
    }

    include($page . '.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color Picker</title>
    <style>
        body {
            background-color: #1a1a1a;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #ffffff;
            margin-bottom: 40px;
        }
        .btn-container {
            display: flex;
            gap: 30px;
        }
        a.btn {
            display: inline-block;
            padding: 20px 50px;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
            transition: opacity 0.2s;
        }
        a.btn:hover {
            opacity: 0.8;
        }
        .red  { background-color: #c0392b; }
        .blue { background-color: #2980b9; }
    </style>
</head>
<body>
    <h1>Pick a Color</h1>
    <div class="btn-container">
        <a class="btn red"  href="?page=red">Red</a>
        <a class="btn blue" href="?page=blue">Blue</a>
    </div>
</body>
</html>
<?php } ?>
