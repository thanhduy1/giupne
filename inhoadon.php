<?php
	require('tfpdf/tfpdf.php');
    $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
   
   

	$pdf = new tFPDF();
	$pdf->AddPage("0");
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',15);
	$pdf->SetFillColor(193,229,252); 

	$code = $_GET['id'];
	$sql_lietke_dh = "SELECT * FROM bookingyc WHERE bookingyc_id='".$code."' ORDER BY bookingyc_id DESC";
	$query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);
	$pdf->Write(15,'Quản lý vận chuyển');
	$pdf->Ln(10);
	$pdf->Write(10,'Đơn đặt xe  của bạn gồm có:');
    $pdf->Ln(10);
	$width_cell=array(8,70,30,45,80,40);

	$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Tên khách hàng',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Số hiệu xe',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Ngày đặt xe',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Nơi đến',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Giá vé',1,1,'C',true); 
	
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;
	while($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['tenkhachhang'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['sohieuxe'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['ngaydatxe'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,$row['noiden'],1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,$row['giavexe'],1,1,'C',$fill);
	$fill = !$fill;
    }

	$pdf->Write(10,'Cảm ơn quý khách đã đặt xe!');
	$pdf->Ln(10);

	$pdf->Output(); 
?>