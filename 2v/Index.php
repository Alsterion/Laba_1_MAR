<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex Number Addition</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Complex Number Addition</h2>
        <div class="input-container">
            <input type="text" id="real1" placeholder="Real Part 1">
            <input type="text" id="imaginary1" placeholder="Imaginary Part 1">
            <span>+</span>
            <input type="text" id="real2" placeholder="Real Part 2">
            <input type="text" id="imaginary2" placeholder="Imaginary Part 2">
            <button onclick="addComplexNumbers()">Calculate</button>
        </div>
        <div id="result"></div>
    </div>
    <script src="./assets/script/script.js"></script>
    </body>
</html>