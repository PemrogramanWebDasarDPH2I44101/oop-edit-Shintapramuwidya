<?php 
require_once 'class.php';
$i = new Kalkulator();
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <form action="class.php?update=true" method="post">
    	<?php 
    	$d = mysqli_fetch_array($i->bagi($id));
    	?>
    	<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        NIM <input type="text" name="input1" value="<?php echo $d['nim']; ?>"><br>
        Nama<input type="text" name="input2" value="<?php echo $d['nama']; ?>"><br>
        Kelas<input type="text" name="input3" value="<?php echo $d['tgl_lahir']; ?>"><br>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>