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
            background: radial-gradient(circle at top, #b30000, #800000 70%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            overflow-x: hidden;
        }

.lantern {
    position: absolute;
    width: 90px;
    height: 130px;
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: float 4s ease-in-out infinite;
}

/* Lantern Body */
.lantern .body {
    width: 90px;
    height: 100px;
    background: radial-gradient(circle at center, #ff3c3c 0%, #b30000 70%);
    border-radius: 50% 50% 45% 45%;
    position: relative;
    box-shadow:
        0 0 30px rgba(255,215,0,0.6),
        inset 0 0 20px rgba(0,0,0,0.3);
    overflow: hidden;
}

/* Gold Ribs */
.lantern .ribs {
    position: absolute;
    width: 100%;
    height: 100%;
    background: repeating-linear-gradient(
        to right,
        rgba(255,215,0,0.4) 0px,
        rgba(255,215,0,0.4) 2px,
        transparent 2px,
        transparent 12px
    );
}

/* Top & Bottom Caps */
.lantern .cap {
    width: 70px;
    height: 15px;
    background: linear-gradient(45deg, gold, #d4af37);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255,215,0,0.8);
}

.lantern .top {
    margin-bottom: -5px;
}

.lantern .bottom {
    margin-top: -5px;
}

/* Chinese Symbol */
.lantern .symbol {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 35%;
    font-size: 28px;
    font-weight: bold;
    color: gold;
    text-shadow: 0 0 15px rgba(255,215,0,0.8);
}

/* Tassel */
.lantern .tassel {
    width: 4px;
    height: 35px;
    background: gold;
    margin-top: -2px;
    position: relative;
}

.lantern .tassel::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: -6px;
    width: 16px;
    height: 12px;
    background: gold;
    border-radius: 50%;
}

/* Positioning */
.lantern-left {
    top: 60px;
    left: 100px;
}

.lantern-right {
    top: 80px;
    right: 120px;
    animation-delay: 2s;
}

/* Floating Animation */
@keyframes float {
    0%,100% { transform: translateY(0px); }
    50% { transform: translateY(-18px); }
}

        /* Main Container */
        .main-container {
            width: 1050px;
            max-width: 95%;
            background: #f7c9a9;
            border-radius: 30px;
            padding: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 30px 80px rgba(0,0,0,0.35);
            position: relative;
            border-top: 8px solid gold;
        }

        /* Left Section */
        .left-section {
            width: 45%;
            color: #7a0000;
        }

        .left-section h1 {
            font-size: 55px;
            line-height: 1.1;
            letter-spacing: 3px;
        }

        .left-section span {
            font-size: 78px;
            font-weight: bold;
            display: block;
            color: #b30000;
            text-shadow: 0 0 15px rgba(255,215,0,0.7);
        }

        .left-section p {
            margin-top: 25px;
            font-size: 17px;
            opacity: 0.9;
        }

        /* Angpao Form Card */
        .form-card {
            width: 420px;
            background: linear-gradient(145deg, #ff1a1a, #b30000);
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
            border: 3px solid gold;
            color: white;
            position: relative;
        }

        .form-card::before {
            content: "福";
            position: absolute;
            top: -30px;
            right: 20px;
            font-size: 60px;
            color: gold;
            text-shadow: 0 0 20px rgba(255,215,0,0.8);
        }

        label {
            font-size: 13px;
            font-weight: 600;
            color: #ffeaa7;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0 18px 0;
            border-radius: 30px;
            border: none;
            background: #fff;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 10px gold;
        }

        /* Premium Gold Button */
        button {
            width: 100%;
            padding: 14px;
            border-radius: 30px;
            border: none;
            background: linear-gradient(45deg, gold, #ffd700);
            color: #800000;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255,215,0,0.5);
        }

        /* Results */
        .results {
            margin-top: 25px;
            padding: 20px;
            background: #fff5e6;
            border-radius: 20px;
            font-size: 14px;
            color: #7a0000;
            border-left: 5px solid gold;
            animation: fadeIn 0.6s ease;
        }

        .results h2 {
            margin-bottom: 10px;
            color: #b30000;
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

<div class="lantern lantern-left">
    <div class="cap top"></div>
    <div class="body">
        <div class="ribs"></div>
        <div class="symbol">福</div>
    </div>
    <div class="cap bottom"></div>
    <div class="tassel"></div>
</div>

<div class="lantern lantern-right">
    <div class="cap top"></div>
    <div class="body">
        <div class="ribs"></div>
        <div class="symbol">福</div>
    </div>
    <div class="cap bottom"></div>
    <div class="tassel"></div>
</div>
    
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

        echo "<div class='results'>";
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
        echo "</div>";
    }
    ?>
</div>

</div>

</body>
</html>
