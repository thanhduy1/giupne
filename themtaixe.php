<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     


    if(isset($_POST['submit'])){
        
        $drname=$_POST['drname'];
        $drjoin=$_POST['drjoin'];
        $gioitinh=$_POST['gioitinh'];
        $drmobile=$_POST['drmobile'];
        $drnid=$_POST['drnid'];
        $drlicense=$_POST['drlicense'];
        $drlicensevalid=$_POST['drlicensevalid'];
        $draddress=$_POST['draddress'];
        
        //$drphoto=$_FILES['file']['name'];
        $drphoto= $_FILES['file']['name'];
        
        //image Upload
    
       move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `driver`(`driverid`, `drname`, `drjoin`,`gioitinh`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`) VALUES ('','$drname','$drjoin','$gioitinh','$drmobile','$drnid','$drlicense','$drlicensevalid','$draddress','$drphoto')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success '
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min1.js"></script> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.css">
    <script src="assets/sweetalert2/sweetalert2.min.js"></script>
   
		
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<style>
body{
  background-color: #ccccff;
}
.center {
  margin: auto;
  width: 100%;
  border: 5px solid purple;
  padding: 10px;
  background-color:#ffffff;
}
.row {
    margin-right: 30%;
    margin-left: 30%;
}
.a{
  font-size:20px;
}
.nut{
            -moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		background-color: transparent;
		border-radius: 4px;
		border: 0;
		box-shadow: inset 0 0 0 2px #585858;
		color: #585858 !important;
		cursor: pointer;
		display: inline-block;
		font-size: 1.2em;
		font-weight: 900;
		height: 3.5em;
		letter-spacing: 0.35em;
		line-height: 3.45em;
		overflow: hidden;
		padding: 0 1.25em 0 1.6em;
		text-align: center;
		text-decoration: none;
		text-overflow: ellipsis;
		text-transform: uppercase;
		white-space: nowrap;
		margin: 0 auto;
        }
</style>
<body>  
 <br>
  
  
   <div class="container" > 
    
            <a class="btn btn-info nut" href="admin_taixe.php">Danh sách</a>
            <h1 style="text-align: center; font-weight: 700; font-size: 60px;">Thêm tài xế</h1></div>
            <div class="row">
            <?php echo $msg; ?>

      

        <div class="col-md-6 center"  > 

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"  >
                
                <div class="input-group " >
                  <span class="input-group-addon a"><b>Tên tài xế: </b> </span> 
                  <input  style="font-size:20px; font-weight:bold;" id="drname"  class="form-control" name="drname" placeholder="Nhập tên tài xế" required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon a"><b>Giới tính: </b></span>
                  <label class="radio-inline" style="font-size:20px; font-weight:bold;">
                      <input  type="radio" name="gioitinh" value="Nam" required>Nam</label>
                    
                <label class="radio-inline" style="font-size:20px; font-weight:bold;" required>
                  <input  type="radio" name="gioitinh" value="Nữ" required>Nữ
                </label>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Số điện thoại: </b></span>
                  <input style="font-size:20px; font-weight:bold;" type="number" class="form-control" name="drmobile" placeholder="Nhập số điện thoại" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Ngày vào làm: </b></span>
                  <input id="drjoin"  style="font-size:20px; font-weight:bold;"  class="form-control" name="drjoin" placeholder="Nhập ngày vào làm" required>
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#drjoin" ).datepicker();
                      } );
                </script> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Quốc tịch: </b></span>
                  <input style="font-size:20px; font-weight:bold;"  class="form-control" name="drnid" placeholder="Nhập quốc tịch" required>
                </div>
                <br> 
                
                <div class="input-group" >
                      <span class="input-group-addon a"><b>Bằng lái xe: </b></span>
                      
               <select style="font-size:20px; font-weight:bold; height:50px; " class="form-control" name="drlicense" placeholder="Nhập bằng lái" required>
                     <?php 
                      $sql_bl="SELECT * FROM banglaixe ORDER BY banglai_id ASC";
                      $query_bl= mysqli_query($connection,$sql_bl);
                      while($row_bl= mysqli_fetch_assoc($query_bl)){
                        ?>
                        <option value="<?php echo $row_bl['loaibanglai']?>"><?php echo $row_bl['loaibanglai']?></option>
                        <?php
                      } ?>
                      </select>
                   
                    </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Ngày hết hạn: </b></span>
                  <input id="drlicensevalid" style="font-size:20px; font-weight:bold;"  class="form-control" name="drlicensevalid" placeholder="Nhập ngày cấp bằng">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#drlicensevalid" ).datepicker();
                      } );
                </script> 
                
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Địa chỉ: </b></span>
                     <textarea rows="5" style="font-size:20px; font-weight:bold;"  class="form-control" name="draddress" placeholder="Nhập địa chỉ" required> </textarea>
                  
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Hình ảnh: </b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                
                <br>
                 
                
                <div style="text-align: center;">
                <button   type="submit" name="submit"class="btn btn-success nut" style="font-size:13px;" >Thêm</button>

                </div>
              </form>   
        </div>  

         
   
    </div> 
    
   
    
</body>
</html>