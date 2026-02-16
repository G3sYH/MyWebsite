<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Calculator | G3sYH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../stylecss_project/stylecss_project_calculator.css">
</head>
<body>

<div class="container">
    <div class="card animate-card">

        <h1 class="title animate-item">Calculator</h1>
        <p class="subtitle animate-item">Kalkulator sederhana</p>

        <input type="text" id="display" class="display animate-item" disabled>

        <div class="buttons animate-buttons">
            <button onclick="clearDisplay()" class="btn action">C</button>
            <button onclick="append('/')" class="btn operator">÷</button>
            <button onclick="append('*')" class="btn operator">×</button>
            <button onclick="append('-')" class="btn operator">−</button>

            <button onclick="append('7')" class="btn">7</button>
            <button onclick="append('8')" class="btn">8</button>
            <button onclick="append('9')" class="btn">9</button>
            <button onclick="append('+')" class="btn operator">+</button>

            <button onclick="append('4')" class="btn">4</button>
            <button onclick="append('5')" class="btn">5</button>
            <button onclick="append('6')" class="btn">6</button>

            <button onclick="append('1')" class="btn">1</button>
            <button onclick="append('2')" class="btn">2</button>
            <button onclick="append('3')" class="btn">3</button>

            <button onclick="append('0')" class="btn zero">0</button>
            <button onclick="append('.')" class="btn">.</button>
            <button onclick="calculate()" class="btn equal">=</button>
        </div>

        <a href="../menu/menu_project.php" class="btn-back animate-item">
            ← Back to Project
        </a>

    </div>
</div>

<script>
let display = document.getElementById("display");

function append(value) {
    display.value += value;
}

function clearDisplay() {
    display.value = "";
}

function calculate() {
    try {
        display.value = eval(display.value);
    } catch {
        display.value = "Error";
    }
}
</script>

</body>
</html>