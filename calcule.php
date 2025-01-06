<!-- Mouad Garroud -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <h1>Advanced Calculator</h1>
        <form method="post">
            <input type="number" name="number1" placeholder="Enter Number 1" required>
            <select name="operator" required>
                <option value="" disabled selected>Select Operator</option>
                <option value="add">Addition (+)</option>
                <option value="sub">Subtraction (-)</option>
                <option value="mul">Multiplication (×)</option>
                <option value="div">Division (÷)</option>
                <option value="mod">Modulo (%)</option>
                <option value="pow">Exponentiation (^)</option>
                <option value="sqrt">Square Root (√)</option>
                <option value="abs">Absolute Value (|x|)</option>
                <option value="and">Bitwise AND (&)</option>
                <option value="or">Bitwise OR (|)</option>
                <option value="xor">Bitwise XOR (^)</option>
                <option value="lshift">Left Shift (<<)</option>
                <option value="rshift">Right Shift (>>)</option>
            </select>
            <input type="number" name="number2" placeholder="Enter Number 2 (if required)">
            <button type="submit">Calculate</button>
        </form>
        <p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['number1'], $_POST['operator'])) {
                    $number1 = (float) $_POST['number1'];
                    $operator = $_POST['operator'];
                    $number2 = isset($_POST['number2']) && $_POST['number2'] !== '' ? (float) $_POST['number2'] : null;
                    $result = '';

                    switch ($operator) {
                        case 'add':
                            $result = $number1 + $number2;
                            break;
                        case 'sub':
                            $result = $number1 - $number2;
                            break;
                        case 'mul':
                            $result = $number1 * $number2;
                            break;
                        case 'div':
                            $result = $number2 == 0 ? 'Cannot divide by zero.' : $number1 / $number2;
                            break;
                        case 'mod':
                            $result = $number2 == 0 ? 'Cannot divide by zero.' : fmod($number1, $number2);
                            break;
                        case 'pow':
                            $result = pow($number1, $number2);
                            break;
                        case 'sqrt':
                            $result = $number1 < 0 ? 'Cannot calculate square root of a negative number.' : sqrt($number1);
                            break;
                        case 'abs':
                            $result = abs($number1);
                            break;
                        case 'and':
                            $result = (int)$number1 & (int)$number2;
                            break;
                        case 'or':
                            $result = (int)$number1 | (int)$number2;
                            break;
                        case 'xor':
                            $result = (int)$number1 ^ (int)$number2;
                            break;
                        case 'lshift':
                            $result = (int)$number1 << (int)$number2;
                            break;
                        case 'rshift':
                            $result = (int)$number1 >> (int)$number2;
                            break;
                        default:
                            $result = 'Invalid operation.';
                    }

                    echo 'The Result is: ' . htmlspecialchars($result);
                }
            }
            ?>
        </p>
    </div>
</body>
</html>
