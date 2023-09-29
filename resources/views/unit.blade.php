<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Unit</title>
</head>
<!-- resources/views/unit.blade.php -->
<body>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <h2>Add Unit</h2>
    <form action="{{ route('unit.store') }}" method="POST">
        @csrf
        <label for="property_id" style= "font-size:20px; width:100%;">Select Property:</label>
        <select name="property_id" style= "padding:5px 40%; border-radius:10px;" required>
            @foreach($properties as $property)
                <option value="{{ $property->first()->id }}}">{{ $property->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="unit" style= "padding-top:5%;">Unit:</label>
        <input type="text" class="form-control" name="unit" required>
        <br>

        <label for="rent">Rent:</label>
        <input type="text"  class="form-control" name="rent" required>
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
        height:450px;
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