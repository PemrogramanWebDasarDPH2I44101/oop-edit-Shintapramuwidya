<table border=1>
    <thead>
        <th>Nama</th>
        <th>Nim</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
$i = new Kalkulator();
if (mysqli_num_rows($i->bagi()) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["kelas"]. "</td>";
        echo "<td>
            <a href='edit.php?id=$id'>Edit</a>
            
            </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($i->conn);
?> 
    </tbody>
</table>