<html>
    <head>
        <title>Form Pembayaran</title> 
    </head>
    <body>
        <center>
            <table bgcolor="purple">
                <tr>
                    <th colspan="3">
                        Form Pembayaran Sepatu
                    </th>
                </tr>
                <td colspan="3">
                    <hr>
                </td>
                </tr>
                <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama ?>
                </td>
                </tr>
                <tr>
                <th>No HP</th>
                <th>:</th>
                <td>
                    <?= $no ?>
                </td>
                </tr>
                <tr>
                <th>Merk Sepatu</th>
                <th>:</th>
                <td>
                    <?= $merk ?>
                </td>
                </tr>
                <tr>
                    <th>Ukuran</th>
                    <th>:</th>
                    <td>
                        <?= $ukuran ?>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th>:</th>
                    <td>Rp.<?= $harga ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('Tokosepatu');
                        ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>