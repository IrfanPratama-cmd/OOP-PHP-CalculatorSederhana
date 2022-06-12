<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>Kalkulator OOP</title>


</head>

<body>


    <h2>Kalkulator OOP</h2>
    <br>

    <!-- Input angka -->
    <form action="kalkulator.php" method="POST">
        <input type="hidden" name="timestamp" value="<?= date("d/m/Y h:i:s"); ?>">
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