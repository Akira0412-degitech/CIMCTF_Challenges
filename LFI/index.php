<?php
// go to FLAGISHERE.php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    echo '<a href="index.php" style="position:fixed;top:20px;left:20px;padding:10px 20px;background:#333;color:#fff;text-decoration:none;border-radius:6px;font-family:Arial,sans-serif;font-size:0.9rem;">&#8592; Back</a>';
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
