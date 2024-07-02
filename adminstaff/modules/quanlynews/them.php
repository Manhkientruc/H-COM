<br><p><b>Thêm sản phẩm</b></p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data" onsubmit="return validateForm()">
  <tr>
      <td>Mã Sản phẩm</td>
      <td><input type="text" name="masp"></td>
    </tr>
    <tr>
      <td>Tên Sản phẩm</td>
      <td><input type="text" name="tensp"></td>
    </tr>
    <tr>
      <td>Giá bán</td>
      <td><input type="text" name="giaban"></td>
    </tr>
    <tr>
      <td>Số lượng</td>
      <td><textarea row="10" name="soluong"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themnhanvien" value="Thêm Sản phẩm"></td>
    </tr>
  </form>
</table>
<script>
  function validateForm() {
    var masp = document.forms[0].masp.value.trim();
    var tensp = document.forms[0].tensp.value.trim();
    var giaban = document.forms[0].giaban.value.trim();
    var soluong = document.forms[0].soluong.value.trim();
    if (masp === "" || tensp === "" || giaban === "" || soluong === "") {
      alert("Bạn chưa nhập đủ thông tin, vui lòng nhập lại");
      return false;
    }
  }
</script>