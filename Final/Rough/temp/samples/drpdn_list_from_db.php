<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data from db</title>
</head>
<body>
    <form>
    Option:
    <select>
    <option disabled selected> Select option</option>
    <?php
    include "../assets/conn/conn.php";
    $records = mysqli_query($con, "SELECT tcode From tests");
    while ($data = mysqli_fetch_array($records))
    {
        echo "<option value'". $data['tcode']."'>".$data['tcode']."</option>";

    }
    ?>
    </select>
    </form>
</body>
</html>