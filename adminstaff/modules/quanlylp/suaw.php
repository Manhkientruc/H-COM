<?php
  $sql_sua_lp = "SELECT * FROM tbl_lp WHERE id_lp='$_GET[idlp]' LIMIT 1";
  $query_sua_lp = mysqli_query($conn, $sql_sua_lp);
?>
<p>Sửa Sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<?php
  while ($row = mysqli_fetch_array($query_sua_lp)) {
?>
  <form method="POST" action="modules/quanlylp/xuly.php?idlp=<?php echo $row['id_lp'] ?>" enctype="multipart/form-data">
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Tên laptop</td>
      <td><input type="text" value = "<?php echo $row['ten_lp'] ?>" name="ten_lp"></td>
    </tr>
    <tr>
      <td>Giá bán</td>
      <td><input type="text" value = "<?php echo $row['giaban'] ?>" name="giaban"></td>
    </tr>
    <tr>
      <td>CPU</td>
      <td><input type="text" value = "<?php echo $row['cpu'] ?>" name="cpu"></td>
    </tr>
    <tr>
      <td>VGA-GPU-Card đồ họa</td>
      <td><input type="text" value = "<?php echo $row['vga'] ?>" name="vga"></td>
    </tr>
    <tr>
      <td>RAM</td>
      <td><input type="text" value = "<?php echo $row['ram'] ?>" name="ram"></td>
    </tr>
    <tr>
      <td>SSD/HDD-Bộ nhớ trong</td>
      <td><input type="text" value = "<?php echo $row['SSD'] ?>" name="SSD"></td>
    </tr>
    <tr>
      <td>Màn hình</td>
      <td><input type="text" value = "<?php echo $row['manhinh'] ?>" name="manhinh"></td>
    </tr>
    <tr>
      <td>Thông tin</td>
      <td><input type="text" value = "<?php echo $row['thongtin'] ?>" name="thongtin"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="sualp" value="Sửa"></td>
    </tr>
  </form>
  <?php
  }
  ?>
</table>