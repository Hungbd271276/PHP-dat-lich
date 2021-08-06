<?php
$msg = '';
$err = [];
if(isset($_POST['btnSave'])){
    $ten_dv = $_POST['Ten_DV'];
    $gia = $_POST['GIA'];
    $chi_tiet = $_POST['CT'];
  // kiểm tra hợp lệ

  if(empty($ten_dv)){
      $err[] = 'Bạn cần nhập tên dịch vụ';
  }
  if(empty($gia)){
    $err[] = 'Bạn cần nhập giá';
  }
  if(empty($chi_tiet)){
    $err[] = 'Bạn cần nhập chi tiết';
  }
    // load file ảnh
  /*   $image_url = null;
    if(isset($_FILES['images'])){
    $file_exe_ollw = ['image/jpeg','image/png'];
    $file_avt = $_FILES['images'];
    $file_type = $file_avt['type'];
 
    if(in_array($file_type,$file_exe_ollw)){
        $file_path = APP_PATH .'/upload/'.$file_avt['name'];
        $image_url = '/upload/' .$file_avt['name'];
        move_uploaded_file($file_avt['tmp_name'],$file_path);
    }else{
        $err[] = 'File của bạn không hợp lệ bạn hãy nhập file khác';
    }
    } */

   $cate_img = 'upload/'.$_FILES['images']['name'];
    $img_tmp = $_FILES['images']['tmp_name'];
    move_uploaded_file($img_tmp,$cate_img); 

  if(empty($err)){
       $stmt = $objConn->prepare("INSERT INTO dich_vu(ten_dv,gia,images,chi_tiet)
       VALUES(:ten_dv,:gia,:images,:chi_tiet)");
       $stmt->bindParam(":ten_dv",$ten_dv);
       $stmt->bindParam(":gia",$gia);
       $stmt->bindParam(":images",$cate_img);
       $stmt->bindParam(":chi_tiet",$chi_tiet);
       // thực thi câu lệnh
       $stmt->execute();
       $msg = 'Đã thêm thành công dịch vụ';
       header("Location:?page=dich-vu");
  }else{
      $msg = implode("<br>",$err);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
   form {
       display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
   }
   h1{
       text-align: center;
   }
   .right{
       margin-top: 20px;
   }
 </style>
</head>
<body>
<p style = 'color:red'><?php echo $msg ?></p>
<div class = "container">
  <h1>Thêm dịch vụ</h1>
   <div class="row text-center">
   <form action = "" method = "post" enctype="multipart/form-data">
           <div class="form-group"><br>
           <label for="exampleInputEmail1">Tên dịch vụ</label>
          <input type="text" name = "Ten_DV" class="form-control" id="exampleInputEmail1" ><br>

          <label for="exampleInputEmail1">Giá</label>
          <input type="text" name = "GIA" class="form-control" id="exampleInputEmail1" > <br>

          <label for="exampleInputEmail1">Images</label>
         <input type="file" name = "images" class="form-control" id="exampleInputEmail1" ><br>

             </div>       
   <div class="right">
   <div class="card-body pad">
            
              <label for="exampleInputEmail1">Nội dung</label>
                <textarea class="textarea" placeholder="Place some text here" name = "CT"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
   </div><!--right-->
   <a href=""><input type= "submit" name="btnSave" class="btn btn-success
                  mt-3 float-right" value="Submit"></a>  
   </form>
   </div>
</div>
</body>
</html>