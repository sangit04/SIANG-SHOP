<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          
           
                
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>NỘI DUNG</th>
                <th>ID USER</th>
                <th>ID PRO</th>
                <th>NGÀY BÌNH LUẬN</th>
                
            </tr>
            <?php
             foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl="index.php?act=suabl&id=".$id;
                $xoabl="index.php?act=xoabl&id=".$id;
                
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$noidung.'</td>
                <td>'.$iduser.'</td>
                <td>'.$idpro.'</td>
                <td>'.$ngaybinhluan.'</td>
                <td><a href="'.$suabl.'"><input type="button" value="Sửa"><a href="'.$xoabl.'"><input type="button" value="Xóa"></td>
            </tr>';
             }
            ?>
            
            
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">

           </div>
         
           
         </div>
        </div>

