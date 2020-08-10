<table>
    <thead>
    <tr>
        <th><b>Username</b></th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Mã nhân viên</th>
        <th>Giới tính</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{$user->hovaten}}</td>
            <td>{{$user->manhanvien}}</td>
            <td>{{($user->gioitinh == 0)? 'Nam':'Nữ'}}</td>
        </tr>
    @endforeach
    </tbody>
</table>