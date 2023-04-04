<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kasir</title>
    
    <style> 
    body { 
    font-family: Arial, sans-serif;
    background-color: #f2f2f2; 
    } 
    h1, h2 { 
    text-align: center; 
    color: #333; 
    } 
    table { 
    border-collapse: collapse; 
    margin: 0 auto;
    } 
    th { background-color: #333; 
    color: #fff; 
    padding: 10px; 
    text-align: center; 
    } 
    td { border: 1px solid #333; 
    padding: 10px; 
    text-align: center; 
    } 
    input[type="text"], input[type="number"],
    input[type="submit"] { 
    font-family: Arial, sans-serif; 
    font-size: 14px; 
    padding: 5px; 
    border-radius: 5px; 
    border: none; 
    margin-bottom: 5px; 
    } 
    input[type="submit"] { 
    background-color: #333; 
    color: #fff; 
    cursor: pointer; 
    transition: background-color 0.3s ease;
    } 
    input[type="submit"]:hover { 
    background-color: #444; 
    } 
    .ringkasan { 
    background-color: #fff; 
    border: 1px solid #333; 
    padding: 10px; 
    margin: 10px auto; 
    max-width: 500px;
    } 
    .ringkasan p { 
    margin: 0; 
    padding: 5px; 
    text-align: right;
    } 
    .ringkasan p:first-child {
    text-align: left; 
    }
    </style>
    
</head>
<body>
    <h1>Aplikasi Kasir</h1>
    <form action="index.php" method="post">
        <table>
            <tr>
                <th>Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>Barang 1</td>
                <td><input type="text" name="harga1"></td>
                <td><input type="number" name="jumlah1" value="0"></td>
            </tr>
            <tr>
                <td>Barang 2</td>
                <td><input type="text" name="harga2"></td>
                <td><input type="number" name="jumlah2" value="0"></td>
            </tr>
            <tr>
                <td>Barang 3</td>
                <td><input type="text" name="harga3"></td>
                <td><input type="number" name="jumlah3" value="0"></td>
            </tr>
            <tr>
                <td>Barang 4</td>
                <td><input type="text" name="harga4"></td>
                <td><input type="number" name="jumlah4" value="0"></td>
            </tr>
            <tr>
                <td>Barang 5</td>
                <td><input type="text" name="harga5"></td>
                <td><input type="number" name="jumlah5" value="0"></td>
            </tr>
        </table>
        <input type="submit" value="Hitung Total">
    </form>

    <?php
    $harga1 = $_POST['harga1'];
    $jumlah1 = $_POST['jumlah1'];
    $harga2 = $_POST['harga2'];
    $jumlah2 = $_POST['jumlah2'];
    $harga3 = $_POST['harga3'];
    $jumlah3 = $_POST['jumlah3'];
    $harga4 = $_POST['harga4'];
    $jumlah4 = $_POST['jumlah4'];
    $harga5 = $_POST['harga5'];
    $jumlah5 = $_POST['jumlah5'];

    $subtotal = $harga1 * $jumlah1 + $harga2 * $jumlah2 + $harga3 * $jumlah3 + $harga4 * $jumlah4 + $harga5 * $jumlah5;
    
    //Buat diskon jika total belanja lebih dari 50rb
    if ($subtotal > 50000) {
        $diskon = 0.1 * $subtotal;
    } else {
        $diskon = 0;
    }

    $total = $subtotal - $diskon;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h2>Ringkasan Belanja:</h2>";
        echo "<p>Subtotal: " . number_format($subtotal, 0, ',', '.') . "</p>";
        echo "<p>Diskon: " . number_format($diskon, 0, ',', '.') . "</p>";
        echo "<p>Total Bayar: " . number_format($total, 0, ',', '.') . "</p>";
    }
    ?>

</body>
</html>
