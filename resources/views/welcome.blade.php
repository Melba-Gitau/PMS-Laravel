<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deluxe <br>Management<h1>
    <button><a href="{{ route('index') }}" class="btn btn-primary">Find  your  place...</a>
 </button>
</body>
</html>
<style>
  @font-face {
    font-family: 'ImperialScript';
    src: url('/fonts/ImperialScript.ttf') format('truetype');
   }
    body {
        background-image: url('{{ asset('images/deluxe.jpg') }}');
        background-position:center;
        background-size:cover;
    }
    h1{
        margin-left:40%;
        margin-top:8%;
        color:white;
        font-weight:500;
        font-size:130px;  
        font-family: 'ImperialScript', sans-serif;
    }
    button{
        margin-left:-40%;
        background-color:white;
        padding:7px 70px;
        border-radius:50px;
    }
    button a{
        color:black;
        font-family: 'ImperialScript';
        text-decoration:none;
        font-size:50px;
        font-weight:500;
    }
    button a:hover{
        color:white;
    }
    button:hover{
        background-color:black;
    }
</style>