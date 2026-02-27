<!--
Arellano, Lady Anthea (Front-End)
Gicana, Daniela (Business Analyst)
Gungon, Khalif (Back-End)
-->
<!DOCTYPE html>
<html>
<head>
    <title>Chinese New Year - Activity</title>
    <!-- Arellano -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #8B0000, #b22222, #ff3c3c);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        /* Peach Main Container */
        .main-container {
            width: 1000px;
            max-width: 95%;
            background: #f7c9a9;
            border-radius: 30px;
            padding: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 30px 60px rgba(0,0,0,0.25);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Left Section */
        .left-section {
            width: 45%;
            color: #7a0000;
        }

        .left-section h1 {
            font-size: 52px;
            line-height: 1.2;
            letter-spacing: 2px;
        }

        .left-section span {
            font-size: 72px;
            font-weight: bold;
            display: block;
        }

        .left-section p {
            margin-top: 20px;
            font-size: 16px;
            opacity: 0.8;
        }

        /* White Floating Card */
        .form-card {
            width: 380px;
            background: #ffffff;
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.25);
            transition: transform 0.3s ease;
        }

        .form-card:hover {
            transform: translateY(-5px);
        }

        label {
            font-size: 13px;
            font-weight: 600;
            color: #7a0000;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0 18px 0;
            border-radius: 30px;
            border: 1px solid #ddd;
            background: #f9f9f9;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #d10000;
            box-shadow: 0 0 8px rgba(209,0,0,0.4);
            background: #fff;
        }

        /* Modern Button */
        button {
            width: 100%;
            padding: 12px;
            border-radius: 30px;
            border: none;
            background: linear-gradient(45deg, #d10000, #ff3c3c);
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        /* Ripple effect */
        button span {
            position: absolute;
            background: rgba(255,255,255,0.6);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* Results */
        .results {
            margin-top: 20px;
            padding: 18px;
            background: #fff5ef;
            border-radius: 18px;
            font-size: 14px;
            color: #7a0000;
            animation: fadeIn 0.5s ease;
        }

        .results h2 {
            margin-bottom: 10px;
        }

        @media(max-width: 900px) {
            .main-container {
                flex-direction: column;
                text-align: center;
            }
            .left-section {
                width: 100%;
                margin-bottom: 40px;
            }
        }
    </style>
</head>
<body>
<div class="main-container">
    <div class="left-section">
        <h1>
            HAPPY
            <span>CHINESE</span>
            NEW YEAR
        </h1>
        <p>Celebrate prosperity, luck, and fortune this festive season 🧧</p>
    </div>

    <div class="form-card">
    <form method="POST">
        <label>Name: </label><br>
        <input type="text" name="username" required><br><br>

        <label>Food Expenses: </label><br>
        <input type="number" name="foodExpenses" required><br><br>

        <label>Lucky Number (1-10): </label><br>
        <input type="number" name="luckyNumber" min="1" max="1000" required><br><br>

        <button type="submit">Calculate</button>
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
</div>

</div>

<script>
    // Ripple effect for button
    const button = document.querySelector("button");

    button.addEventListener("click", function (e) {
        const circle = document.createElement("span");
        const diameter = Math.max(this.clientWidth, this.clientHeight);
        const radius = diameter / 2;

        circle.style.width = circle.style.height = `${diameter}px`;
        circle.style.left = `${e.clientX - this.offsetLeft - radius}px`;
        circle.style.top = `${e.clientY - this.offsetTop - radius}px`;

        this.appendChild(circle);

        setTimeout(() => circle.remove(), 600);
    });
</script>
</body>
</html>
