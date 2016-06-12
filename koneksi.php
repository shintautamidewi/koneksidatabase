<html>
    <body>
        <h2>Data </h2>
        <form method="post" action="koneksi.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">id</td>
            <td><input name="id" type="text" id="id" placeholder="Id Anda"></td>
        </tr>
        <tr>
            <td width="120">alamat</td>
            <td><input name="alamat" type="text" id="alamat" placeholder="alamat Anda"></td>
        </tr>
        <tr>
            <td width="100">Kelas</td>
            <td><input name="kelas" type="text" id="kelas" placeholder="Kelas Anda"></td>
        </tr>
        <tr>
            <td width="150">no tlp</td>
            <td><input name="no_tlp" type="text" id="no_tlp" placeholder="no tlp Anda"></td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td> </td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
            
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $koneksi )
            {
              die('Gagal Koneksi: ' . mysql_error());
            }
             
            if(! get_magic_quotes_gpc() )
            {
               $id = addslashes ($_POST['id']);
               $kelas = addslashes ($_POST['kelas']);
               $alamat = addslashes($_POST['alamat']);
               $no_tlp = addslashes($_POST['no_tlp']);
            }
            else
            {
               $nama = $_POST ['id'];
               $kelas = $_POST['kelas'];
               $alamat = $_POST['alamat'];
               $no_tlp = $_POST['no_tlp'];
            }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO nama ".
                   "(id,kelas,alamat,no_tlp) ".
                   "VALUES('$id','$kelas','$alamat','$no_tlp')";
            mysql_select_db('data');
            $tambahdata = mysql_query( $sql, $koneksi );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT id,kelas,alamat,no_tlp FROM nama";
            mysql_select_db('data');
            $hasil = mysql_query($sql);
            
            // Hasil Inputan
            while ( $row = mysql_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "ID Mahasiswa: " . $row["id"]. " - Kelas: " . $row["kelas"].  " - Alamat: " . $row["alamat"]. " - no_tlp: " . $row["no_tlp"]."<br>";
            }
            mysql_close($koneksi);
            }
            else
            {
            }
        ?>
    </form>
            </body>
</html>
