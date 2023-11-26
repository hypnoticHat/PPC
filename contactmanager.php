<?php
require("database.php");
$sql = "SELECT * FROM `dbo.full_contract`";
$query = mysqli_query($conn, $sql);

if(isset($_POST['submit']) ){
  $Full_Contract_Code = $_POST["Full_Contract_Code"];
  $Customer_Name = $_POST["Customer_Name"];
  $Year_Of_Birth = $_POST["Year_Of_Birth"];
  $SSN = $_POST["SSN"];
  $Customer_Address = $_POST["Customer_Address"];
  $Mobile = $_POST["Mobile"];
  $Property_ID = $_POST["Property_ID"];
  $Date_Of_Contract = $_POST["Date_Of_Contract"];
  $Price = $_POST["Price"];
  $Deposit = $_POST["Deposit"];
  $Remain = $_POST["Remain"];
  $Status = $_POST["Status"];

  // check cac bien luu tru thong tin dam bao chung da duoc nhao giu lieu
  if(isset($Customer_Name) && isset($Year_Of_Birth) && isset($SSN)){
      // viet cau lenh sql
      $sql = "INSERT INTO `dbo.full_contract`(`Full_Contract_Code`, `Customer_Name`, `Year_Of_Birth`, `SSN`, `Customer_Address`, `Mobile`, `Property_ID`, `Date_Of_Contract`, `Price`, `Deposit`, `Status`) VALUES 
      ('','$Customer_Name','$Year_Of_Birth','$SSN','$Customer_Address','$Mobile','$Property_ID','$Date_Of_Contract','$Price','$Deposit','$Status')";

      //kiem tra cau lenh co thanh cong khong
      $result = mysqli_query($conn, $sql);
      if($result == true){
          header("Location:contactmanager.php");
          echo "them hợp đồng thành công".$sql;
      }else{
          echo "them san pham that bai".$sql;
      }
  }else{
    echo "Vui lòng điền đủ các trường thông tin".$sql;
}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>ContactManager</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/contactmanager/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-3.2.1.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script src="resources/scripts/axure/jquery.nicescroll.min.js"></script>
    <script src="data/document.js"></script>
    <script src="files/contactmanager/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u335" class="ax_default box_1">
        <div id="u335_div" class=""></div>
        <div id="u335_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u336" class="ax_default box_1">
        <div id="u336_div" class=""></div>
        <div id="u336_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u337" class="ax_default box_1">
        <div id="u337_div" class=""></div>
        <div id="u337_text" class="text ">
          <p><span>Footer</span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u338" class="ax_default image">
        <img id="u338_img" class="img " src="images/page_1/u4.png"/>
        <div id="u338_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u339" class="ax_default button">
        <img id="u339_img" class="img " src="images/page_1/u6.svg"/>
        <div id="u339_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u340" class="ax_default text_field">
        <div id="u340_div" class=""></div>
        <input id="u340_input" type="text" value="SEARCH" class="u340_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u341" class="ax_default button">
        <div id="u341_div" class=""></div>
        <div id="u341_text" class="text ">
          <p><span>ĐĂNG NHẬP</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u342" class="ax_default button">
        <div id="u342_div" class=""></div>
        <div id="u342_text" class="text ">
          <p><span>ĐĂNG KÝ</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u343" class="ax_default heading_2">
        <div id="u343_div" class=""></div>
        <div id="u343_text" class="text ">
          <p><span>QUẢN LÝ HỢP ĐỒNG</span></p>
        </div>
      </div>

      <!-- Unnamed (Menu) -->
      <div id="u344" class="ax_default">
        <img id="u344_menu" class="img " src="images/page_1/u88_menu.png" alt="u344_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u345" class="ax_default">

          <!-- Unnamed (Menu Item) -->
          <div id="u346" class="ax_default menu_item">
            <img id="u346_img" class="img " src="images/page_1/u90.png"/>
            <div id="u346_text" class="text ">
              <p><span>Quản lý BDS</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u347" class="ax_default menu_item">
            <img id="u347_img" class="img " src="images/page_1/u90.png"/>
            <div id="u347_text" class="text ">
              <p><span>Quản lý hợp đồng</span></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u348" class="ax_default heading_2">
        <div id="u348_div" class=""></div>
        <div id="u348_text" class="text ">
          <p><span>BẤT ĐỘNG SẢN&nbsp; PPC.COM</span></p>
        </div>
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u349" class="ax_default text_field">
        <div id="u349_div" class=""></div>
        <input id="u349_input" type="text" value="Tìm kiếm hợp đồng" class="u349_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u350" class="ax_default button">
        <img id="u350_img" class="img " src="images/page_1/u6.svg"/>
        <div id="u350_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u351" class="ax_default button">
        <img id="u351_img" class="img " src="images/bdsmanager/u119.svg"/>
        <div id="u351_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u352" class="ax_default heading_3">
        <div id="u352_div" class=""></div>
        <div id="u352_text" class="text ">
          <p><span>XẮP XẾP THEO</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u353" class="ax_default button">
        <div id="u353_div" class=""></div>
        <div id="u353_text" class="text ">
          <p><span>Thêm hợp đồng mới</span></p>
        </div>
      </div>

      <!-- table data (Group) -->
        <table class="productList">
          <tr>
              <th>ID</th>
              <th>Mã Hợp đồng</th>
              <th>Tên Khách hàng</th>
              <th>Năm sinh</th>
              <th>CMND</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
              <th>Mã bất động sản</th>
              <th>Ngày lập hợp đồng</th>
              <th>Giá trị hợp đồng</th>
              <th>Số tiền đã cọc</th>
              <th>Số tiền còn lại</th>
              <th>Trạng thái</th>
          </tr>
          <?php
              while($row = mysqli_fetch_array($query)){
          ?>
          <tr>
              <td><?= $row["ID"] ?></td>
              <td><?= $row["Full_Contract_Code"] ?></td>
              <td><?= $row["Customer_Name"] ?></td>
              <td><?= $row["Year_Of_Birth"] ?></td>
              <td><?= $row["SSN"] ?></td>
              <td><?= $row["Customer_Address"] ?></td>
              <td><?= $row["Mobile"] ?></td>
              <td><?= $row["Property_ID"] ?></td>
              <td><?= $row["Date_Of_Contract"] ?></td>
              <td><?= $row["Price"] ?></td>
              <td><?= $row["Deposit"] ?></td>
              <td><?= $row["Remain"] ?></td>
              <td><?= $row["Status"] ?></td>
          </tr>
          <?php }?>
      </table>
      <!-- Add form (Group) -->
      <div id="u386" class="ax_default ax_default_hidden" data-label="Add form" style="display:none; visibility: hidden" data-left="128" data-top="345" data-width="1181" data-height="729">

        <!-- Unnamed (Rectangle) -->
        <div id="u387" class="ax_default box_1">
          <div id="u387_div" class="">
          <form class="Input_Datatable"action="" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th><label for="Full_Contract_Code">Full Contract Code</label></th>
                            <th><input type="" name="Full_Contract_Code"></th>

                            <th><label for="Customer_Name">Customer Name</label></th>
                            <th> <input type="text" name="Customer_Name"></th>
                        </tr>
                        <tr>
                            <th><label for="Year_Of_Birth">Year Of Birth</label></th>
                            <th><input type="text" name="Year_Of_Birth"></th>
                            
                            <th><label for="SSN ">CMND</label> </th>
                            <th><input type="text" name="SSN"></th>
                        </tr>
                        <tr>
                            <th><label for="Date_Of_Contract">Date Of Contract</label></th>
                            <th><input type="datetime" name="Date_Of_Contract" placeholder="01/01/2023"></th>

                            <th><label for="Customer_Address">Customer Address</label></th>
                            <th><input type="text" name="Customer_Address"></th>
                        </tr>
                        <tr>
                            <th><label for="Mobile ">Mobile </label></th>
                            <th><input type="" name="Mobile"></th>

                            <th><label for="Property_ID">Property ID</label></th>
                            <th><input type="" name="Property_ID"></th>
                        </tr>
                        <tr>
                            <th><label for="Price">Price</label></th>
                            <th><input type="" name="Price"></th>

                            <th><label for="Deposit ">Deposit </label></th>
                            <th><input type="" name="Deposit"></th>
                        </tr>
                        <tr>
                            <th><label for="Remain ">Remain </label></th>
                            <th><input type="" name="Remain"></th>
                            <th><label for="Status ">Status </label></th>
                            <th><input type="" name="Status"></th>
                        </tr>
                        
                    </table>
                    <div class="button">
                        <input type="submit" value="Add" name="submit">
                        <button class="huy">Hủy</button>
                    </div>
                </form>
          </div>
          <div id="u387_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>
                <!-- Unnamed (Rectangle) -->
        <div id="u389" class="ax_default heading_2">
          <div id="u389_div" class=""></div>
          <div id="u389_text" class="text ">
            <p><span>THÊM HỢP ĐỒNG</span></p>
          </div>
        </div>
      </div>

      <!-- Update form (Group) -->
      <div id="u415" class="ax_default ax_default_hidden" data-label="Update form" style="display:none; visibility: hidden" data-left="162" data-top="331" data-width="1168" data-height="758">

        <!-- Unnamed (Rectangle) -->
        <div id="u416" class="ax_default box_1">
          <div id="u416_div" class=""></div>
          <div id="u416_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u417" class="ax_default text_field">
          <div id="u417_div" class=""></div>
          <input id="u417_input" type="text" value="2067TH1294" class="u417_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u418" class="ax_default heading_2">
          <div id="u418_div" class=""></div>
          <div id="u418_text" class="text ">
            <p><span>CẬP NHẬP HỢP ĐỒNG</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u419" class="ax_default heading_3">
          <div id="u419_div" class=""></div>
          <div id="u419_text" class="text ">
            <p><span>Mã hợp đồng</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u420" class="ax_default heading_3">
          <div id="u420_div" class=""></div>
          <div id="u420_text" class="text ">
            <p><span>Địa chỉ</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u421" class="ax_default text_field">
          <div id="u421_div" class=""></div>
          <input id="u421_input" type="text" value="118 Bình Phước Vũng Tàu" class="u421_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u422" class="ax_default heading_3">
          <div id="u422_div" class=""></div>
          <div id="u422_text" class="text ">
            <p><span>Họ tên người mua</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u423" class="ax_default text_field">
          <div id="u423_div" class=""></div>
          <input id="u423_input" type="text" value="Nguyễn văn thiệu" class="u423_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u424" class="ax_default heading_3">
          <div id="u424_div" class=""></div>
          <div id="u424_text" class="text ">
            <p><span>Số tiền còn lại</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u425" class="ax_default text_field">
          <div id="u425_div" class=""></div>
          <input id="u425_input" type="text" value="1.000.000.000VND" class="u425_input"/>
        </div>

        <!-- Unnamed (Droplist) -->
        <div id="u426" class="ax_default droplist">
          <div id="u426_div" class=""></div>
          <select id="u426_input" class="u426_input">
            <option class="u426_input_option" value="Chưa thanh toán">Chưa thanh toán</option>
            <option class="u426_input_option" value="Đã thanh toán">Đã thanh toán</option>
          </select>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u427" class="ax_default heading_3">
          <div id="u427_div" class=""></div>
          <div id="u427_text" class="text ">
            <p><span>Trạng thái</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u428" class="ax_default button">
          <div id="u428_div" class=""></div>
          <div id="u428_text" class="text ">
            <p><span>Hoàn thành</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u429" class="ax_default button">
          <div id="u429_div" class=""></div>
          <div id="u429_text" class="text ">
            <p><span>HỦY</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u430" class="ax_default text_field">
          <div id="u430_div" class=""></div>
          <input id="u430_input" type="text" value="19/9/1999" class="u430_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u431" class="ax_default heading_3">
          <div id="u431_div" class=""></div>
          <div id="u431_text" class="text ">
            <p><span>Sinh Năm</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u432" class="ax_default text_field">
          <div id="u432_div" class=""></div>
          <input id="u432_input" type="text" value="123456789" class="u432_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u433" class="ax_default heading_3">
          <div id="u433_div" class=""></div>
          <div id="u433_text" class="text ">
            <p><span>CCCD</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u434" class="ax_default heading_3">
          <div id="u434_div" class=""></div>
          <div id="u434_text" class="text ">
            <p><span>Số điện thoại</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u435" class="ax_default text_field">
          <div id="u435_div" class=""></div>
          <input id="u435_input" type="text" value="0123456789" class="u435_input"/>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u436" class="ax_default text_field">
          <div id="u436_div" class=""></div>
          <input id="u436_input" type="text" value="2017TH1294" class="u436_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u437" class="ax_default heading_3">
          <div id="u437_div" class=""></div>
          <div id="u437_text" class="text ">
            <p><span>Mã bất động sản</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u438" class="ax_default text_field">
          <div id="u438_div" class=""></div>
          <input id="u438_input" type="text" value="21/2/2023" class="u438_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u439" class="ax_default heading_3">
          <div id="u439_div" class=""></div>
          <div id="u439_text" class="text ">
            <p><span>Ngày lập hợp đông</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u440" class="ax_default text_field">
          <div id="u440_div" class=""></div>
          <input id="u440_input" type="text" value="2.000.000.000VND" class="u440_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u441" class="ax_default heading_3">
          <div id="u441_div" class=""></div>
          <div id="u441_text" class="text ">
            <p><span>Giá trị hợp đồng</span></p>
          </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u442" class="ax_default text_field">
          <div id="u442_div" class=""></div>
          <input id="u442_input" type="text" value="1.000.000.000VND" class="u442_input"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u443" class="ax_default heading_3">
          <div id="u443_div" class=""></div>
          <div id="u443_text" class="text ">
            <p><span>Số tiền đã cọc</span></p>
          </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u444" class="ax_default button">
          <img id="u444_img" class="img " src="images/contactmanager/u444.svg"/>
          <div id="u444_text" class="text ">
            <p><span>IN</span></p>
          </div>
        </div>
      </div>

      <!-- Thông báo xóa (Group) -->
      <div id="u445" class="ax_default ax_default_hidden" data-label="Thông báo xóa" style="display:none; visibility: hidden" data-left="470" data-top="366" data-width="400" data-height="170">

        <!-- Unnamed (Rectangle) -->
        <div id="u446" class="ax_default box_1">
          <div id="u446_div" class=""></div>
          <div id="u446_text" class="text " style="display:none; visibility: hidden">
            <p></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u447" class="ax_default heading_2">
          <div id="u447_div" class=""></div>
          <div id="u447_text" class="text ">
            <p><span>Bạn có chắc muốn in hợp đồng</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u448" class="ax_default button">
          <div id="u448_div" class=""></div>
          <div id="u448_text" class="text ">
            <p><span>Hủy</span></p>
          </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u449" class="ax_default button">
          <div id="u449_div" class=""></div>
          <div id="u449_text" class="text ">
            <p><span>IN</span></p>
          </div>
        </div>
      </div>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
  </body>
</html>
