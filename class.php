<?php
class Kalkulator{
    public $conn;

    public function Kalkulator(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "widya_webdas";       
        $this->conn = mysqli_connect($servername, $username, 
                           $password, $db);                        
    }    

    public function tambah(){
        $nim = $_POST['input1'];
        $nama = $_POST['input2'];
        $kelas = $_POST['input3'];
        $sql    = "INSERT INTO siswa(nim, nama, kelas) 
                    VALUES ('$nim','$nama','$kelas')";
        mysqli_query($this->conn, $sql);        
    }    
    public function kurang(){        
        $id = $_GET['id'];
        $sql    = "DELETE FROM siswa WHERE id='$id'";        
        mysqli_query($this->conn, $sql);
    }
    public function bagi($id = null){
        if (isset($id)) {
            $sql    = "SELECT * FROM siswa WHERE id='$id'";
        } else {
            $sql    = "SELECT * FROM siswa";
        }
        return mysqli_query($this->conn, $sql);
    }
    public function edit(){
        $id = $_POST['id'];
        $nim = $_POST['input1'];
        $nama = $_POST['input2'];
        $kelas = $_POST['input3'];
        $sql ="UPDATE `siswa` 
                SET `nim`='$nim',
                    `nama`='$nama',
                    `kelas`='$kelas' 
                WHERE id='$id'";
        mysqli_query($this->conn, $sql);
    }
}
$kalkulator = new Kalkulator();
if (isset($_POST["operasi"])) {
    $operasi = $_POST["operasi"];
    if($operasi == "+")
        $kalkulator->tambah();
    if($operasi == "-")
        $kalkulator->kurang();
    if($operasi == "/"){
        $result = $kalkulator->bagi();
        require_once("data.php");
    }
}
if(isset($_GET['update'])){
    $kalkulator->edit();
}
?>
