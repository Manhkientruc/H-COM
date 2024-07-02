<?php
$row = [];

if (isset($row['hinhanh'])) {$hinhanh = $row['hinhanh'];} else {$hinhanh = "";}

if (isset($row['ten_lp'])) {$ten_lp = $row['ten_lp'];} else {$ten_lp = "";}

if (isset($row['giaban'])) {$giaban = $row['giaban'];} else {$giaban = "";}

if (isset($row['cpu'])) {$cpu = $row['cpu'];} else {$cpu = "";}

if (isset($row['vga'])) {$vga = $row['vga'];} else {$vga = "";}

if (isset($row['ram'])) {$ram = $row['ram'];} else {$ram = "";}

if (isset($row['SSD'])) {$SSD = $row['SSD'];} else {$SSD = "";}

if (isset($row['manhinh'])) {$manhinh = $row['manhinh'];} else {$manhinh = "";}

if (isset($row['thongtin'])) {$thongtin = $row['thongtin'];} else {$thongtin = "";}
?>
<table border="1" width="50%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlylp/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
        <tr>
          <td>Hình ảnh</td>
          <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tên laptop</td>
            <td><input type="text" value="<?php echo $ten_lp ?>" name="ten_lp"></td>
        </tr>
        <tr>
            <td>Giá bán</td>
            <td><input type="text" value="<?php echo $giaban ?>" name="giaban"></td>
        </tr>
        <tr>
            <td>CPU</td>
            <td><input type="text" value="<?php echo $cpu ?>" name="cpu"></td>
        </tr>
        <tr>
            <td>VGA-GPU-Card đồ họa</td>
            <td><input type="text" value="<?php echo $vga ?>" name="vga"></td>
        </tr>
        <tr>
            <td>RAM</td>
            <td><input type="text" value="<?php echo $ram ?>" name="ram"></td>
        </tr>
        <tr>
            <td>SSD/HDD-Bộ nhớ trong</td>
            <td><input type="text" value="<?php echo $SSD ?>" name="SSD"></td>
        </tr>
        <tr>
            <td>Màn hình</td>
            <td><input type="text" value="<?php echo $manhinh ?>" name="manhinh"></td>
        </tr>
        <tr>
            <td>Thông tin</td>
            <td><input type="text" value="<?php echo $thongtin ?>" name="thongtin"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themlp" value="Thêm"></td>
        </tr>
    </form>
</table>
<script>
  function validateForm() {
    var hinhanh = document.forms[0].hinhanh.value.trim();
    var ten_lp = document.forms[0].ten_lp.value.trim();
    var giaban = document.forms[0].giaban.value.trim();
    var cpu = document.forms[0].cpu.value.trim();
    var vga = document.forms[0].vga.value.trim();
    var ram = document.forms[0].ram.value.trim();
    var SSD = document.forms[0].SSD.value.trim();
    var manhinh = document.forms[0].manhinh.value.trim();
    var thongtin = document.forms[0].thongtin.value.trim();
    if (hinhanh === "" || ten_lp === "" || giaban === "" || cpu === "" || vga === "" || ram === "" || SSD === "" || manhinh === "" || thongtin === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>