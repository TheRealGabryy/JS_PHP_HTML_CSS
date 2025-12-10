<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do list</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Zalando+Sans+SemiExpanded:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

</head>
<body>

<header class="header">
    <p class="header-title" id="testJS">
        Test text
    </p>
</header>
<main class="main">
    <div class="container">
        <p class="title">
            To Do list
        </p>

        <form action="PHP/config.php" method="post">
            <label for="input">
                <input type="text" name="text" placeholder="Enter a new Task Here" id="input">
                <button type="submit" id="submit" class="submit-button">Submit</button>
            </label>
        </form>
    </div>

</main>
<footer class="footer">
</footer>


<script src = "JS/index.js"></script>
</body>
</html>
