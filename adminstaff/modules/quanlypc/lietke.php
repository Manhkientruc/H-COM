<?php
  $sql_lietke_nv = "SELECT * FROM tbl_sanpham";
  $query_lietke_nv = mysqli_query($conn, $sql_lietke_nv);
?><br>
<p><b>Liệt kê danh sách sản phẩm</b></p>
<table style="width:100%" border="1" style="border-collapse:collapse;">
    <tr>
        <th>Số thứ tự</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá bán</th>
        <th>Số lượng</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_nv)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['giaban'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td>
            <a href="modules/quanlysp/xuly.php?idnhanvien=<?php echo $row['id_sanpham'] ?>">Xóa/</a>
            <a href="?action=quanlysp&query=sua&idnhanvien=<?php echo $row['id_sanpham'] ?>">/Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>