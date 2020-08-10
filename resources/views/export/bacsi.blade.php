<table>
    <thead>
    <tr>
        <th><b>Tên bác sĩ</b></th>
        <th>Chuyên khoa</th>
        <th>Học vị</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bacsi as $bs)
        <tr>
            <td>{{ $bs->tenbacsi }}</td>
            <td>{{ $bs->chuyenkhoa->tenchuyenkhoa }}</td>
            <td>{{$bs->hocvi}}</td>
        </tr>
    @endforeach
    </tbody>
</table>