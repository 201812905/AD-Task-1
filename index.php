<!DOCTYPE html>
<html>

    <head>
        <title>Cat Facts!!!</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #fff0f5;
                padding: 20px;
            }

            h1 {
                color: #8b008b;
            }

            .fact {
                background: #fbeffb;
                padding: 10px;
                margin: 10px 0;
                border-left: 4px solid #da70d6;
            }
        </style>
    </head>

    <body>
        <h1>🐱 Welcome to Cat Facts!</h1>
        <p>Here are some purr-fect facts about cats:</p>

        <?php
        $catFacts = [
            "Cats sleep for 70% of their lives.",
            "A group of cats is called a clowder.",
            "Cats have five toes on their front paws, but only four on the back ones.",
            "Cats can rotate their ears 180 degrees.",
            "A cat's nose is as unique as a human fingerprint."
        ];

        $dayOfWeek = date("N");

        for ($i = 0; $i < count($catFacts); $i++) {
            if ($i % 2 == 0) {
                echo "<div class='fact'><strong>Fact " . ($i + 1) . ":</strong> $catFacts[$i]</div>";
            }
        }

        if ($dayOfWeek == 6 || $dayOfWeek == 7) {
            echo "<p><em>It's the weekend! Time to cuddle with your kitty 🐾</em></p>";
        } else {
            echo "<p><em>Weekday grind? Let these cat facts brighten your day 🐱</em></p>";
        }
        ?>

        <p><a href="facts.php">→ See today's cat care tasks</a></p>
    </body>

</html>
