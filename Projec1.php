<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Electricity Cost Calculator</title>

<style>
body{
    font-family: Arial;
    background:#0f172a;
    color:white;
}
.box{
    width:400px;
    margin:60px auto;
    background:#1e293b;
    padding:25px;
    border-radius:10px;
}
input,button{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:none;
    border-radius:6px;
}
button{
    background:#22c55e;
    color:white;
    font-size:16px;
}
.result{
    background:#020617;
    padding:15px;
    margin-top:15px;
    border-radius:6px;
}
</style>
</head>
<body>

<div class="box">
<h2>⚡ Electricity Cost Calculator</h2>

<form method="post">
    Old Reading (kWh)
    <input type="number" name="old" required>

    Price per kWh (៛)
    <input type="number" name="price" required>

    <button type="submit">Calculate</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $old = $_POST["old"];
    $price = $_POST["price"];

    $used = $old;
    $total = $used * $price;

    echo "<div class='result'>";
    echo "Used Electricity: <b>$used kWh</b><br>";
    echo "Total Cost: <b>$total ៛</b>";
    echo "</div>";
}
?>

</div>
</body>
</html>