<?php
$con = mysqli_connect('localhost', 'root', '', 'sqlform');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle update request
if (isset($_POST['update'])) {
    $selected_rollno = $_POST['rollno'];
    $update_query = "UPDATE Form SET Mark1 = '45' WHERE Rollno = '$selected_rollno'";
    mysqli_query($con, $update_query);
    echo "<p>✅ Record updated successfully for Rollno: $selected_rollno</p>";
}

// Handle search request
if (isset($_POST['search'])) {
    $selected_rollno = $_POST['rollno'];
    $query = "SELECT * FROM Form WHERE Rollno = '$selected_rollno'";
    $results = mysqli_query($con, $query);

    if (mysqli_num_rows($results) > 0) {
        echo "<h3>Student Details</h3>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Rollno</th><th>Name</th><th>Mark1</th><th>Mark2</th></tr>";

        while ($row = mysqli_fetch_assoc($results)) {
            echo "<tr>
                    <td>{$row['Rollno']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Mark1']}</td>
                    <td>{$row['Mark2']}</td>
                  </tr>";
        }

        echo "</table>";
        // Now include update form
        echo "
        <form method='POST'>
            <input type='hidden' name='rollno' value='$selected_rollno'>
            <input type='submit' name='update' value='Update'>
            <input type='reset' value='Reset'>
        </form>";
    } else {
        echo "No record found for Rollno: $selected_rollno";
    }
}

// Dropdown form
$sq = "SELECT Rollno FROM Form";
$result = mysqli_query($con, $sq);

if (mysqli_num_rows($result) > 0) {
    echo "<form method='POST'>";
    echo "<label>Rollno:</label><br><br>";
    echo "<select name='rollno'>";
    while ($rows = mysqli_fetch_assoc($result)) {
        echo "<option value='{$rows['Rollno']}'>{$rows['Rollno']}</option>";
    }
    echo "</select><br><br>";
    echo "<input type='submit' value='Search' name='search'>";
    echo "</form>";
}
?>
