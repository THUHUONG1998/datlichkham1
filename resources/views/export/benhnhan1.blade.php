<table>
    <thead>
    <tr>
        <th><b>Tên bệnh nhân</b></th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ email</th>
        <th>Ngày khám</th>
        <th>Chuyên khoa</th>
        <th>Tên bác sĩ</th>
        <th>Khung giờ</th>
        <th>Bệnh viện</th>
    </tr>
    </thead>
    <tbody>
    @foreach($benhnhan1 as $value)
        <tr>
            <td>{{ $value->hovaten }}</td>
            <td>{{ $value->ngaysinh }}</td>
            <td>{{($value->gioitinh == 0)? 'Nam':'Nữ'}}</td>
            <td>{{ $value->sodienthoai }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->ngaykham }}</td>
            <td>{{ $value->chuyenkhoa->tenchuyenkhoa }}</td>
            <td>{{ $value->bacsi->tenbacsi }}</td>
            <td>{{ $value->khunggio->khunggio }}</td>
            <td>{{$value->benhvien->tenbenhvien}}
        </tr>
    @endforeach
    </tbody>
</table>