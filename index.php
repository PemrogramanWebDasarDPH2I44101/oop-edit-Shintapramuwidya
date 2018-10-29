<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <form action="class.php" method="post">
        NIM <input type="text" name="input1"><br>
        Nama<input type="text" name="input2"><br>
        Kelas
        <select name="input3">
            <option value="D3MI-41-01">D3MI-41-01</option>
            <option value="D3MI-41-02">D3MI-41-02</option>
            <option value="D3MI-41-03">D3MI-41-03</option>
            <option value="D3MI-41-04">D3MI-41-04</option>
        </select><br>
        Pilih Operasi
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>