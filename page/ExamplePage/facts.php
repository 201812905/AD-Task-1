<!DOCTYPE html>
<html>

    <head>
        <title>Cat Care Tasks</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5dc;
                padding: 20px;
            }

            h1 {
                color: #cd5c5c;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                margin: 10px 0;
                padding: 10px;
                border-left: 5px solid;
            }

            .done {
                border-color: #32cd32;
                background-color: #f0fff0;
            }

            .pending {
                border-color: #ffa07a;
                background-color: #fff5f0;
            }
        </style>
    </head>

    <body>
        <h1>🐾 Today's Cat Care Tasks</h1>

        <?php

        $tasks = [
            ["Refill food bowl", true],
            ["Clean litter box", false],
            ["Brush your cat", true],
            ["Play for 15 minutes", true]
        ];

        echo "<ul>";

        for ($i = 0; $i < count($tasks); $i++) {
            $taskName = $tasks[$i][0];
            $isDone = $tasks[$i][1];
            if ($isDone) {
                echo "<li class='done'>✔️ " . $taskName . "</li>";
            } else {
                echo "<li class='pending'>❗ " . $taskName . "</li>";
            }
        }

        echo "</ul>";
        ?>

        <p><a href="index.php">← Back to Cat Facts</a></p>
    </body>

</html>