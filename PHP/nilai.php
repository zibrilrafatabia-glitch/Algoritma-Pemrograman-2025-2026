<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung Nilai Akhir</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
        }
        input[type="number"] {
            width: 80%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .hasil {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Nilai Akhir</h2>
        <form method="POST" action="">
            <label>Nilai Tugas:</label><br>
            <input type="number" name="tugas" step="0.01" required><br>
            <label>Nilai UTS:</label><br>
            <input type="number" name="uts" step="0.01" required><br>
            <label>Nilai UAS:</label><br>
            <input type="number" name="uas" step="0.01" required><br><br>
            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tugas = (float) $_POST["tugas"];
            $uts = (float) $_POST["uts"];
            $uas = (float) $_POST["uas"];

            $nilaiAkhir = (0.3 * $tugas) + (0.3 * $uts) + (0.4 * $uas);

            echo "<div class='hasil'>";
            echo "Nilai Akhir = " . number_format($nilaiAkhir, 2) . "<br>";

            if ($nilaiAkhir >= 60) {
                echo "Status: <span style='color:green;'>LULUS</span>";
            } else {
                echo "Status: <span style='color:red;'>TIDAK LULUS</span>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
