<html>

<head>
    <title>
        Hasil Tanggapan
    </title>
    <link type="text/css" rel="stylesheet" href="cssmore/design.css">
</head>

<body>
    <?php
        require_once "class1.php";
        $work = new Structure;
        $co = $work->list_komen();
    ?>
    <a class="btnback" href="Main.php">Kembali</a>
    <div class="tabdes">
        <table align=center>
            <tr>
                <th>Nomor</th>
                <th>Tanggapan Pelanggan</th>
            </tr>
            <?php
            $no = 1;
            foreach ($co as $so) {
            ?>
            <tr>
                <td><?php print $no++ ?></td>
                <td><?php print $so['isi_komen'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>