<!-- resources/views/proplist.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Property List</title>
</head>
<body>
    <h1 style= "margin-left:40%">Property List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Prop_Name</th>
                <th>Owner</th>
                <th>Contact</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->owner }}</td>
                    <td>{{ $property->contact }}</td>
                    <td>{{ $property->location }}</td>
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