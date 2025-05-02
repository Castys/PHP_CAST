<html>
    <head>
        <title>array multidimensi</title>
    </head>
    <body>
        <?php
        $siswa = array(
            array("Nur Cahaya", "Perempuan", 17),
            array("Narayya Putri", "Perempuan", 17),
            array("Ahmad Putra", "Laki-laki", 18),
            array("Yoga Bagus", "Laki-laki", 17)
        );
        echo $siswa[0][0] . ": Jenis Kelamin: " . $siswa[0][1] . " Umur: " . $siswa[0][2] . ".<br />";
        echo $siswa[1][0] . ": Jenis Kelamin: " . $siswa[1][1] . " Umur: " . $siswa[1][2] . ".<br />";
        echo $siswa[2][0] . ": Jenis Kelamin: " . $siswa[2][1] . " Umur: " . $siswa[2][2] . ".<br />";
        echo $siswa[3][0] . ": Jenis Kelamin: " . $siswa[3][1] . " Umur: " . $siswa[3][2] . ".<br />";
        ?>
    </body>
</html>