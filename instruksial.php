<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.jpg'); /* Ganti 'background.jpg' dengan URL gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100vh; /* Tinggi viewport penuh */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: rgba(255, 255, 255, 0.1); /* Warna latar belakang dengan RGBA */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            margin: 50px auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #333;
        }
        .result {
            font-size: 18px;
            margin-top: 10px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .header, .footer {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 8px;
            margin: 20px auto;
        }
    </style>
</head>
<body style="background-color: skyblue";>
    <div class="header">
        <h1>Penghitung Win Rate Mobile Legends</h1>
    </div>
    <div class="container">
        <form method="post">
            <label for="totalMatches">Jumlah Total Pertandingan: </label>
            <input type="number" id="totalMatches" name="totalMatches" required><br><br>

            <label for="wins">Jumlah Kemenangan: </label>
            <input type="number" id="wins" name="wins" required><br><br>

            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalMatches = $_POST['totalMatches'];
            $wins = $_POST['wins'];

            $winRate = ($wins / $totalMatches) * 100;

            if ($winRate >= 70) {
                $category = "Pro Player";
            } elseif ($winRate >= 50) {
                $category = "Intermediate Player";
            } else {
                $category = "Beginner Player";
            }

            echo "<div class='result'>";
            echo "Jumlah Total Pertandingan: $totalMatches<br>";
            echo "Jumlah Kemenangan: $wins<br>";
            echo "Win Rate: " . number_format($winRate, 2) . "%<br>";
            echo "Kategori Pemain: $category";
            echo "</div>";
        }
        ?>
    </div>
    <div class="footer">
        <p>Raffi - &copy; 2023</p>
    </div>
</body>
</html>