<table>
    <thead>
    <tr>
        <th><b>Username</b></th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Mã nhân viên</th>
        <th>Giới tính</th>
        <th>Ngày tạo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->username }}</td>
            <td>{{$user->hovaten}}</td>
            <td>{{ $user->email }}</td>
            <td>{{$user->manhanvien}}</td>
            <td>{{($user->gioitinh == 0)? 'Nam':'Nữ'}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>