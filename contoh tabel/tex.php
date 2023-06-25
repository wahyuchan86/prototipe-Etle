

<!DOCTYPE html>
<html>
<head>
    <title>Data dari Tabel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>

<body>
    <div class="container">
        <h2>Data dari Tabel</h2>
        <?php include "koneksi.php";
        
        // Daftar tabel yang ingin ditampilkan
        $tables = array("nama", "Alamat", "nopol");

        // Loop melalui setiap tabel
        foreach ($tables as $table) {
            echo "<h3>Data Tabel $table</h3>";

            // Query untuk mendapatkan data dari tabel
            $sql = "SELECT * FROM formulir where id=''";
            $result = $conn->query($sql);
            

            if ($result->num_rows > 0) {
                // Menampilkan data dalam bentuk tabel
                echo "<table>";
                echo "<tr>";
                // Menampilkan nama kolom
                while ($fieldinfo = $result->fetch_field()) {
                    echo "<th>" . $fieldinfo->name . "</th>";
                }
                echo "</tr>";
                // Menampilkan data baris per baris
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Tidak ada data dalam tabel $table</p>";
            }
            echo "<br>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
