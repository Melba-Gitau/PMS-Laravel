<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tenant</title>
</head>
<body>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <h2>Add Tenant</h2>
    <form action="{{ route('tenant.store') }}" method="POST">
        @csrf

        <label for="property_id" style= "font-size:20px; width:100%;" >Select Property:</label>
        <select name="property_id" style= "padding:5px 40%; border-radius:10px;" required>
            @foreach($properties as $property)
                <option value=" {{ $property->first()->id }}">{{ $property->name }}</option>
            @endforeach
        </select>
        <br>

        <label for="unit_id" style= "padding-top:5%;">Select Unit:</label>
        <select name="unit_id" style= "padding:5px 40%; border-radius:10px;" required>
            @foreach($units as $unit)
                <option value="{{ $unit->first()->id }}">{{ $unit->unit }}</option>
            @endforeach
        </select>
        <br>

        <label for="name" style= "padding-top:5%;">Name:</label>
        <input type="text" class="form-control" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" required>
        <br>

        <label for="contact">Contact:</label>
        <input type="text" class="form-control" name="contact" required>
        <br>
        <button type="submit">Submit</button>
        <button style = "float:right"><a href="{{ route('dashboard') }}">Back</a></button>
    </form>
    
</body>
</html>

<style>
    h2{
        margin-left:43%;
        margin-top:1.2%;
    }
    form{
        margin-left:30%;
        background-color:#373D77;
        width:600px;
        height:630px;
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