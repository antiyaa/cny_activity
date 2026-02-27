<!--
Arellano, Lady Anthea (Front-End)
Gicana, Daniela (Back-End)
Gungon, Khalif (Business Analyst)
-->
<!DOCTYPE html>
<html>
<head>
    <title>Chinese New Year - Activity</title>
    <!-- Put yo' part here nogga -->
    <style>
        
    </style>
</head>
<body>
    <form method="POST">
        <label>Name: </label><br>
        <input type="text" name="username" required><br><br>

        <label>Food Expenses: </label><br>
        <input type="number" name="foodExpenses" required><br><br>

        <label>Lucky Number (1-10): </label><br>
        <input type="number" name="luckyNumber" min="1" max="1000" required><br><br>

        <input type="submit" value="Calculate">
    </form>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Initialize Variables
        $username = $_POST['username']; 
        $foodExpenses = (float)$_POST['foodExpenses']; 
        $userLuckyNumber = (int)$_POST['luckyNumber']; 

        $angpao1 = rand(5, 100) * 100; 
        $angpao2 = rand(5, 100) * 100; 
        $angpao3 = rand(5, 100) * 100; 
        $luckyNumber = 8;

        // Check if current year is Year of the Dragon
        $currentYear = date("Y");
        $dragonYears = [2000, 2012, 2024, 2036]; // Known Dragon years
        $isDragonYear = in_array($currentYear, $dragonYears);

        // Arithmetic Operators
        $totalAngPao = $angpao1 + $angpao2 + $angpao3;
        $remainingMoney = $totalAngPao - $foodExpenses;

        if ($isDragonYear) {
            $remainingMoney *= 2; // Multiply by 2 if Dragon Year
        }

        // Assignment Operators
        $remainingMoney += 500;
        $remainingMoney -= 200;

        // Comparison Operators
        $isMoneyGreaterThan5000 = $remainingMoney > 5000;
        $isLuckyNumberEight = $luckyNumber == 8; 
        $isExpenseHigherThanAngPao = $foodExpenses > $totalAngPao; 

        // Logical Operators
        $moneyAndLucky = $isMoneyGreaterThan5000 && $isLuckyNumberEight; 
        $moneyOrDragon = $isMoneyGreaterThan5000 || $isDragonYear; 
        $notDragonYear = !$isDragonYear; 

        // Increment / Decrement
        $userLuckyNumber++;
        $foodExpenses--;

        // Check if total money is NOT enough for expenses
        $isMoneyInsufficient = $totalAngPao < $foodExpenses;

        // Step 4: Display Results
        echo "<h2>Happy Chinese New Year, $username!</h2>";
        echo "Total Ang Pao: $totalAngPao <br>";
        if ($remainingMoney <= 0) {
            echo "Remaining After Expenses: <span style='color:red;'><strong>$remainingMoney</strong></span><br>";
        } else {
            echo "Remaining After Expenses: $remainingMoney <br>";
        }

        if ($isDragonYear) {
            echo "Dragon Bonus Applied!<br>";
        } else {
            echo "Dragon Bonus NOT Applied!<br>";
        }

        if ($moneyAndLucky) {
            echo "You are super lucky this year! <br>";
        } elseif ($moneyOrDragon) {
            echo "You are lucky this year! <br>";
        } else {
            echo "Better luck next year! <br>";
        }

        if ($isMoneyInsufficient) {
            echo "<p style='color:red;'><strong>Warning: Your total Ang Pao is not enough to cover your expenses!</strong></p>";
        }
    }
    ?>
</body>
</html>
