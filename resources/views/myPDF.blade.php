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
}
</style>
<body>

<p><i>Bệnh viện: {{$value['benhvien']}}</i></p>
<p><i>Chuyên khoa: {{$value['chuyenkhoa']}}</i></p>
	<h1>Đơn thuốc</h1>
	<p>Họ và tên: {{ $value['hovaten'] }}</p>
	<p>{{$value['donthuoc']}}</p>
 <p> Hẹn Tái khám: {{$value['ngaytaikham']}}</p>
</body>
@break
@endforeach
</html>