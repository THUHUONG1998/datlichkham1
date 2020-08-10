@foreach($benhnhan as $value)
<!DOCTYPE html>
<html>
<head>
 <title>Thông báo</title>
</head>
<body>
 
 <h1></h1>
 <p>Gửi {{ $value['hovaten'] }}</p>
 <p>Bạn đã đặt thành công lịch khám ở {{$value['benhvien']}}, vào lúc {{$value['khunggio']}}, ngày {{$value['ngaykham']}}
 </p>
 Rất vui khi được gặp lại bạn.
</body>
</html> 
@break
@endforeach