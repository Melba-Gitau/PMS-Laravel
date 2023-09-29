<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>index</title>
</head>
<body>
<h2>Welcome!!</h2>
    <form action="{{ route('property.store') }}" method="POST">
        @csrf
        <label for="role"> User:</label>
        <input type="text"  class="form-control"name="role" required>
        <br>
        <label for="password">Password:</label>
        <input type = "password" class="form-control" name="password" required></textarea>
        <br>
        <button type="submit"><a href="{{ route('dashboard') }}">Submit</a></button>
    </form>
</body>
</html>

<style>
    h2{
        margin-left:43%;
        margin-top:2%;
    }
    form{
        margin-left:30%;
        background-color:#373D77;
        width:600px;
        height:350px;
        padding:3%;
        border-radius:20px;
    }
    label{
        color:white;
        font-size:18px;
        font-weight:600;
        padding:1.5%;
    }
    button{
        background-color:black;
        padding:7px 30px;
        border-radius:20px;
        margin-top:2%;
        color:white;
        font-size:18px;
    }
    button a{
        color:white;
        font-size:18px;
        text-decoration:none;
    }
    button:hover{
        transform: scale(1.1);
        transition: transform 0.5s;
        
    }
</style>