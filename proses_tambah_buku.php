<?php
if($_POST){
    $judul_buku=$_POST['Judul_Buku'];
    $penulis=$_POST['Penulis'];
    $penerbit=$_POST['Penerbit'];
    if(empty($judul_buku)){
        echo "<script> alert('judul buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

    }elseif (empty($penulis)){
        echo"<script>alert('penulis tidak boleh kosong');location.href='tambah_buku.php';</script>";

    }elseif (empty($penerbit)){
        echo"<script>alert('penerbit tidak boleh kosong');location.href='tambah_buku.php';</script>";

    }else{
        include "Koneksi.php";
        $insert=mysqli_query($conn, "insert into kelas(Judul_Buku,Penulis,Penerbit)value('".$judul_buku."','".$penulis."','".$penerbit."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        }else{
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>