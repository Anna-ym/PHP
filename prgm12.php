<?php
$name = $_GET["name"];
$class = $_GET["class"];
$m1 = $_GET["m1"];
$m2 = $_GET["m2"];
$m3 = $_GET["m3"];
$total = $_GET["xy"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Progress Report</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f7f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .report-container {
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            color: #2b6777;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info {
            margin-bottom: 25px;
        }

        .info p {
            font-size: 16px;
            margin: 6px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #2b6777;
            color: white;
        }

        .total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            color: #2b6777;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="report-container">
        <h1>Progress Report</h1>

        <div class="info">
            <p><strong>Name of the Student:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>Class of the Student:</strong> <?= htmlspecialchars($class) ?></p>
        </div>

        <h3>Subject-wise Marks</h3>
        <table>
            <tr>
                <th>Subject</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td>Data Structures</td>
                <td><?= htmlspecialchars($m1) ?></td>
            </tr>
            <tr>
                <td>Advanced Software Engineering</td>
                <td><?= htmlspecialchars($m2) ?></td>
            </tr>
            <tr>
                <td>Mathematics</td>
                <td><?= htmlspecialchars($m3) ?></td>
            </tr>
        </table>

        <p class="total">Total Marks Awarded: <?= htmlspecialchars($total) ?></p>

        <div class="footer">Generated automatically by the Student Portal</div>
    </div>
</body>
</html>
