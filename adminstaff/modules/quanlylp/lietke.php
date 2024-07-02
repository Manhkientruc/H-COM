<?php
  $sql_lietke_lp = "SELECT * FROM tbl_lp";
  $query_lietke_lp = mysqli_query($conn, $sql_lietke_lp);
?><br>
<p><b>Liệt kê danh sách Laptop</b></p>
<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Hình ảnh</th>
        <th>Tên laptop</th>
        <th>Giá bán</th>
        <th>CPU</th>
        <th>VGA-GPU-Card đồ họa</th>
        <th>RAM</th>
        <th>SSD/HDD-Bộ nhớ trong</th>
        <th>Màn hình</th>
        <th>Thông tin</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_lp)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><img src="modules/quanlylp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
        <td><?php echo $row['ten_lp'] ?></td>
        <td><?php echo $row['giaban'] ?></td>
        <td><?php echo $row['cpu'] ?></td>
        <td><?php echo $row['vga'] ?></td>
        <td><?php echo $row['ram'] ?></td>
        <td><?php echo $row['SSD'] ?></td>
        <td><?php echo $row['manhinh'] ?></td>
        <td><?php echo $row['thongtin'] ?></td>
        <td>
            <a href="modules/quanlylp/xuly.php?idlp=<?php echo $row['id_lp'] ?>">Xóa/</a>
            <a href="?action=quanlylp&query=sua&idlp=<?php echo $row['id_lp'] ?>">/Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>