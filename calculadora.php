<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>Calculadora</title>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" class="display" disabled>
        <div class="buttons">
            <button class="btn gray" onclick="clearDisplay()">C</button>
            <button class="btn gray" onclick="appendToDisplay('/')">/</button>
            <button class="btn orange" onclick="appendToDisplay('*')">*</button>
            <button class="btn orange" onclick="appendToDisplay('-')">-</button>
            <button class="btn" onclick="appendToDisplay('7')">7</button>
            <button class="btn" onclick="appendToDisplay('8')">8</button>
            <button class="btn" onclick="appendToDisplay('9')">9</button>
            <button class="btn orange" onclick="appendToDisplay('+')">+</button>
            <button class="btn" onclick="appendToDisplay('4')">4</button>
            <button class="btn" onclick="appendToDisplay('5')">5</button>
            <button class="btn" onclick="appendToDisplay('6')">6</button>
            <button class="btn eq" onclick="calculate()">=</button>
            <button class="btn" onclick="appendToDisplay('1')">1</button>
            <button class="btn" onclick="appendToDisplay('2')">2</button>
            <button class="btn" onclick="appendToDisplay('3')">3</button>
            <button class="btn zero" onclick="appendToDisplay('0')">0</button>
            <button class="btn" onclick="appendToDisplay('.')">.</button>
        </div>
    </div>
    <script src="calculadora.js"></script>
</body>
</html>
