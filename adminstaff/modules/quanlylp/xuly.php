<?php
    include('../../config/config.php');
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    $ten_lp = $_POST['ten_lp'];
    $giaban = $_POST['giaban'];
    $cpu = $_POST['cpu'];
    $vga = $_POST['vga'];
    $ram = $_POST['ram'];
    $SSD = $_POST['SSD'];
    $manhinh = $_POST['manhinh'];
    $thongtin = $_POST['thongtin'];

    if(isset($_POST['themlp'])){
        $sql_them = "INSERT INTO tbl_lp(hinhanh, ten_lp, giaban, cpu, vga, ram, SSD, manhinh, thongtin) 
        VALUE('".$hinhanh."','".$ten_lp."','".$giaban."','".$cpu."','".$vga."','".$ram."','".$SSD."','".$manhinh."','".$thongtin."')";
        mysqli_query($conn, $sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('Location:../../index.php?action=quanlylp&query=them');
    }
    elseif(isset($_POST['sualp'])){
        if($giaban!=''){
                        
            $sql_update = "UPDATE tbl_lp SET hinhanh='".$hinhanh."', ten_lp='".$ten_lp."',giaban='".$giaban."',cpu='".$cpu."',
            vga='".$vga."',ram='".$ram."',SSD='".$SSD."',manhinh='".$manhinh."',thongtin='".$thongtin."'
            WHERE id_lp='$_GET[idlp]'";

            $sql = "SELECT * FROM tbl_lp WHERE id_lp = '$_GET[idlp]' LIMIT 1";
            $query = mysqli_query($conn, $sql);

        }else{
            $sql_update = "UPDATE tbl_lp SET hinhanh='".$hinhanh."', ten_lp='".$ten_lp."',giaban='".$giaban."',cpu='".$cpu."',
            vga='".$vga."',ram='".$ram."',SSD='".$SSD."',manhinh='".$manhinh."',thongtin='".$thongtin."' 
            WHERE id_lp='$_GET[idlp]'";
        }
        mysqli_query($conn, $sql_update);
        header('Location:../../index.php?action=quanlylp&query=them');
    }
    else{
        $id=$_GET['idlp'];
        $sql = "SELECT * FROM tbl_lp WHERE id_lp = '$id' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $sql_xoa = "DELETE FROM tbl_lp WHERE id_lp = '".$id."'";
        mysqli_query($conn, $sql_xoa);
        header('Location:../../index.php?action=quanlylp&query=them');
    }
?>