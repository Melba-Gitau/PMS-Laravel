<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add User</title>
</head>
<body>
    <h2>Register user</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name"> Name:</label>
        <input type="text"  class="form-control"name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type = "text" class="form-control" name="email" required></textarea>
        <br>
        <label for="contact">Contact:</label>
        <input type = "text" class="form-control" name="contact" re quired></textarea>
        <br>
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" required>
        <br>
        <label>Role:</label>
        <div>
            <input type="radio" name="role" value="Admin" id="adminRole" required>
            <label for="adminRole">Admin</label>
       
            <input type="radio" name="role" value="Agent" id="agentRole"  required>
            <label for="agentRole">Agent</label>
        </div>
        <br>

        <button type="submit">Submit</button>
        <button style = "float:right"><a href="{{ route('dashboard') }}">Back</a></button>
    </form>
</body>
</html>
<style>
    h2{
        margin-left:43%;
        margin-top:1.5%;
    }
    form{
        margin-left:30%;
        background-color:#373D77;
        width:600px;
        height:650px;
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
        margin-top:1.5%;
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