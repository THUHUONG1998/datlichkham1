@foreach($benhnhan as $value)
<!DOCTYPE html>
<html>
<head>
 <title>Thông báo</title>
</head>
<body>
 
 <h1></h1>
 <p>Chào anh/chị {{ $value['hovaten'] }}</p>
<p>Chúng tôi bên trung tâm đặt lịch Hoa Sao System24</p>
 <p>Bạn đã đặt thành công lịch khám ở <b> {{$value['benhvien']}},  hotline {{$value['sodienthoaibv']}} </b> với nội dung như sau  </p>
 <p> Ngày : <b> {{$value['ngaykham']}} <b> vào lúc <b> {{$value['khunggio']}}</b></p>
 <p> Chuyên khoa :   {{$value['chuyenkhoa']}}
 <p> Bác sĩ :   {{$value['bacsi']}}</p>
 Rất vui khi được gặp lại bạn tại địa chỉ {{$value['diachibenhvien']}}
</body>
</html> 
@break
@endforeach