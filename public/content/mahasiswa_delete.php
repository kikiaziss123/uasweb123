<?php
if (isset($_GET['nim'])) {

    $nim = $_GET['nim'];
    $delete = $con->prepare("DELETE FROM mahasiswa WHERE nim = ?");
    $delete->bindParam(1, $nim);
    $delete->execute();

    if ($delete->rowCount() > 0) {
        echo "<script>
                alert('data berhasil dihapus');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    } else {
        echo "<script>
                alert('data gagal dihapus');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    }
}
