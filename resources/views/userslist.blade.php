<!-- resources/views/users.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
<h2 style= "margin-left:40%">User List</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->contact }}</td>
            <td>{{ $user->role }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <button style = "margin-left:10%"><a href="{{ route('property') }}">Back..</a></button>
    <button style = "float: right"><a href="{{ route('dashboard') }}">Go to Dashboard</a></button>
</body>
</html>

<style>
table {
  border-collapse: collapse;
  width: 80%;
  margin-left:10%;
}

th {
  background-color: #000;
  border: 1px solid #fff;
  padding: 8px;
  text-align: left;
  color:white;
  font-size:18px;
}
td {
  border: 2px solid #000;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:hover {
  background-color: #ddd;
}
button{
        background-color:#373D77;
        padding:7px 30px;
        margin-right:10%;
        border-radius:20px;
        margin-top:2%;
    }
    button a{
        color:white;
        font-size:20px;
        text-decoration:none;
        font-family: 'ImperialScript';
    }
    button:hover{
        transform: scale(1.1);
        transition: transform 0.5s;
        background-color:black;
    }
</style>