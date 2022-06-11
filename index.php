<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>PHP Calculator</title>


</head>

<body>


    <h2>OOP calculator</h2>
    <br>
    <form action="kalkulator.php" method="POST">
        <input type="text" name="bil1">
        <input type="text" name="bil2">
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
            <option value="pangkat">^</option>
            <option value="modulo">%</option>
        </select>
        <button type="submit">Hitung</button>
    </form>


</body>

</html>