<html>

<body>
    <form action="<?= base_url('index.php/Latihan2/cetak'); ?>" method="post">
        <table border="1%">
            <tr>
                <th colspan="3">
                    Input Mata Kuliah
                </th>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
           
            <tr>
                <td colspan="3"><input type="submit" name="submit" id="submit" value="submit"></td>
            </tr>
        </table>
        
        <?php
        $this->load->library('form_validation');
         echo validation_errors(); ?>
    </form>
</body>

</html>