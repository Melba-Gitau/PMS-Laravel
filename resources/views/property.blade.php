<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Property</title>
</head>
<body>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <h2>Add Property</h2>
    <form action="{{ route('property.store') }}" method="POST">
        @csrf
        <label for="name"> Property Name:</label>
        <input type="text"  class="form-control"name="name" required>
        <br>
        <label for="owner">Owner:</label>
        <input type = "text" class="form-control" name="owner" required></textarea>
        <br>
        <label for="contact">Contact:</label>
        <input type = "text" class="form-control" name="contact" required></textarea>
        <br>
        <label for="location">Location:</label>
        <input type = "text"  class="form-control"name="location" required></textarea>
        <br>
        <button type="submit">Submit</button>
        <button style = "float:right"><a href="{{ route('dashboard') }}">Back</a></button>
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
        height:550px;
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