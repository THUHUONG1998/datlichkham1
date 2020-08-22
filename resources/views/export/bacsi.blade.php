<table>
    <thead>
    <tr>
        <th><b>Tên bác sĩ</b></th>
        <th>Học vị</th>
        <th>Tên bệnh viện</th>
        <th>Chuyên khoa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bacsi as $bs)
        <tr>
            <td>{{ $bs->tenbacsi }}</td>
            <td>{{$bs->hocvi}}</td>
            <td>{{$bs->benhvien->tenbenhvien}}</td>
            <td>{{$bs->chuyenkhoa->tenchuyenkhoa }}</td>
        </tr>
    @endforeach
    </tbody>
</table>