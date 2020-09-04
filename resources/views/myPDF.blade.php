@foreach($data as $value)
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>{{$value['hovaten']}}</title>
</head>
<style> 
body {
    font-family: DejaVu Sans;
	color:blue;
}
.header{
	padding:0px 10px;
	border-bottom:3px solid #000;
}
.test{
	position: relative;
}
.test1{
	position: absolute;
	color:grey;
	right: 0;
	top:90%
}
.sub{
	margin: 5px 0;
}
.sub:first-child{
	margin: 10px 0;
}
.title{
	text-align:center;
}
.fl-btw{
	/* width:100%; */
	/* display:flex; */
	/* justify-content:space-between; */
}
</style>
<body>
<div class="test">
<div class='header'>
<h1 class='sub' style ="color: red"><i>Bệnh viện: {{$value['benhvien']}}</i></h1>
<p class='sub'style ="color: red"><i>Địa Chỉ: {{$value['diachi']}}</i></p>
<p class='sub' style ="color: red"><i>Điện thoại: {{$value['sodienthoai']}}</i></p>
</div>

<p><i>Chuyên khoa: {{$value['chuyenkhoa']}}</i></p>
	<h1 class='title'>Đơn thuốc</h1>
	<div class='fl-btw'>
	<div> Ngày khám: {{$value['ngaykham']}}</div>
	
	</div>
	<!-- <div class='fl-btw'> -->
	<div> Họ và tên: {{ $value['hovaten'] }}</div>
	<div> Ngày sinh: {{$value['ngaysinh']}}</div>
	<div>Giới tính :{{($value['gioitinh'] == 1)? 'Nam':'Nữ'}}</div>
	<!-- </div> -->
	
	
	<p>Chuẩn đoán: {{ $value['hovaten'] }}</p>
	<p>Cách dùng:
	<p>
	<div class="test1">Bác sĩ :{{$value['bacsi']}}</div>

	<?php 
	echo  $value['donthuoc']
	?>
	
 <p> Hẹn Tái khám: {{$value['ngaytaikham']}}</p>
</div>


</body>
@break
@endforeach
</html>