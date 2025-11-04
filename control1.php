<?php
 require_once "class1.php";
 $ob = new Structure;
 $control = $_GET['control'];
 if ($control=="login") {
     if ($ob->login($_POST['username'],$_POST['password'])) {
         $_SESSION['user'] = $_POST['username'];
         print "<script>
                alert('Akses diterima');
                document.location.href = 'Main.php';
               </script>";
        
     }
     else {
         print "<script>
                alert('Akses Ditolak');
                document.location.href = 'index.php';
               </script>";
     }
 }
 if ($control=="logout") {
     session_start();
    $_SESSION['user'] = '';
    unset($_SESSION['user']);
    session_unset();
    session_destroy();
    header("location:index.php");
 }
 if ($control=="puas") {
     $set = $ob->sh_puas();
     $so = mysqli_fetch_assoc($set);
    $add = $so['jumlah'];
    $add++;
    $ob->vote_puas($add);
    print "<script>
                alert('Terima Kasih Telah Memberi Suara');
                document.location.href = 'index.php';
               </script>";
 }
 if ($control=="tdkpuas") {
     $set = $ob->sh_tdkpuas();
     $so = mysqli_fetch_assoc($set);
    $add = $so['jumlah'];
    $add++;
    $ob->vote_tdkpuas($add);
    print "<script>
                alert('Terima Kasih Telah Memberi Suara');
                document.location.href = 'index.php';
               </script>";
 }
if ($control== "komen") {
     if ($ob->add_komen($_POST['komen'])) {
       print "<script>
                alert('Terima Kasih Telah Memberikan Komentar');
                document.location.href = 'index.php';
               </script>";
    }
    else {
        echo "<script>
             alert('Terjadi Kesalahan');
            </script>";
    }
}
?>