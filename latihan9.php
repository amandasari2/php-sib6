<html>
    <head>
        <body>
            <table border="1" cellspacing="1" cellpadding="10" align="center">
                <thead>
                    <tr bgcolor="yellow">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        for($no=1;$no<=100;$no++){
                            // Jika nomor moduls(%) 2 tidak ada sisa 0
                            $warna = ($no % 2 == 0) ? 'red' : 'blue';

                            echo "<tr bgcolor='$warna'>";
                            echo "<td>$no</td>";
                            echo "<td>Siswa $no</td>";
                            echo "<td>Jl Kisaran No. $no</td>";
                            echo "</tr>";

                        }
                    ?>
                </tbody>
            </table>
</body>