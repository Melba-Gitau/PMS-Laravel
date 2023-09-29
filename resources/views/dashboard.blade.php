<!-- dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

    <div class="dash">
        <div class="row">
            <div class="side-menu">
                 <ul>
                     <li><h2>D M<h2></li>
                     <li><a href="{{ route('property') }}">Property</a></li>
                     <li><a href="{{ route('unit') }}">Unit</a></li>
                    <li><a href="{{ route('tenant') }}">Tenant</a></li>
                    <li><a href="{{ route('users') }}">Users</a></li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Reports</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{ route('proplist') }}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Property list</span></a>
                            </li>
                            <li>
                                <a href="{{ route('unitlist') }}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Unit List</span></a>
                            </li>
                            <li>
                                <a href="{{ route('tenantlist') }}" class="nav-link px-0"> <span class="d-none d-sm-inline text-white">Tenant List</span></a>
                            </li>
                        </ul>
                    </li>  
                 </ul>
                 <hr>
                <div class="btn smaller-btn">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('images/team.png') }}" alt="hugenerd" width="40" height="40" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu  text-small ">
                        <li><a class="dropdown-item" href="{{ route('index') }}">Sign out</a></li>
                    </ul>
                </div>
            </div>
            <div class = "main">
            <div class="content">
                    <h1>Deluxe Management</h1>
                    <ul>
                        <li style = "margin-left:5%">Convienient</li>
                        <li>Spacious</li>
                        <li>Affordable</li>
                    </ul>
            </div>
            <div class = "boxes">
                <div class = "col-sm-3" style = " margin-left:2%" >
                   <img src="images/close-office.jpg" alt=" " class="box-image">
                   <p>Imagine a modern closed office as a sophisticated and inspiring...
                    <button><a href="{{ route('closeoff') }}">View here..</a></button></p>
                </div>
                <div class = "col-sm-3">
                <img src="images/work-room.jpg" alt=" " class="box-image">
                <p>The office's layout is cleverly designed to encourage collaboration &...
                    <button><a href="{{ route('work') }}">View here..</a></button></p>
                </div>
                <div class = "col-sm-3">
                    <img src="images/modern-design.jpg" alt=" " class="box-image">
                    <p>As you sink into the luxurious sofas, the stresses of the outside world..
                    <button><a href="{{ route('luxury') }}">View here..</a></button></p>
                </div>
                <div class = "col-sm-3">
                   <img src="images/Open-office.jpg" alt=" " class="box-image">
                   <p>Welcome to the epitome of a modern-day office, where the boundaries..
                   <button><a href="{{ route('openoff') }}">View here..</a>.</button></p>
                </div>
            </div>
            <div class = "boxes">
                <div class = "col-sm-3" style = " margin-left:2%">
                     <img src="images/modern-office.jpg" alt=" " class="box-image">
                     <p>As you settle into your ergonomic chair, you'll notice how every aspect..
                     <button><a href="{{ route('modernoff') }}">View here..</a></button></p>
                </div>
                <div class = "col-sm-3">
                <img src="images/outdoor-style.jpg" alt=" " class="box-image">
                <p>Step into the realm of outdoor-style offices, where the traditional..
                <button><a href="{{ route('outdoor') }}">View here..</a></button></p>
                </div>
                <div class = "col-sm-3">
                <img src="images/normal-office.jpg" alt=" " class="box-image">
                <p>With ample natural light filtering through large windows, the office..
                <button><a href="{{ route('normal') }}">View here..</a></button></p>
                </div>
                <div class = "col-sm-3">
                <img src="images/normal-workroom.jpg" alt=" " class="box-image">
                <p>Welcome to a captivating normal workroom, where productivity..
                <button><a href="{{ route('room') }}">View here..</a></button>
                </div>
            </div>
        </div>
    </div>
    </div>

<style>
    *{
        margin:0;
        padding:0;
    }
    @font-face {
    font-family: 'ImperialScript';
    src: url('/fonts/ImperialScript.ttf') format('truetype');
   }
    .side-menu{
        background-color:#373D77;
        width:17%;
        height:128vh;
    }
    .side-menu ul li{
        padding:5%;
        font-size:20px;
        margin-left:2%;
        list-style:none;
    }
    .side-menu ul li h2{
        color:white;
        font-family: 'ImperialScript', sans-serif;
        font-size:70px;
        font-weight:400;
    }
    .side-menu ul li a {
        color:white;
        text-decoration:none;
    }
    .side-menu ul li:hover{
        transform: scale(1.1);
        transition: transform 0.5s;
    }
    .main{
        width:83%;
    }
    .content{
        background-color:#373D77;
        width:95%;
        height:25vh;
       margin-left:2%;
       margin-top:2%;
       border-radius:40px;
       color:white;
    }
    .content h1{
        font-family: 'ImperialScript', sans-serif;
        font-size:70px;
        font-weight:400;
        margin-left:30%;
        padding-top:1.5%;
    }
    .content ul li{
        display:inline-block;
        padding:7px 100px;
        font-size:40px;
        font-family: 'ImperialScript', sans-serif;
    }
    .boxes .col-sm-3{
        width:280px;
        height:350px;
        margin-top:2%;
        margin-left:1.5%;
        display:inline-block;
        border:1px solid #000;
        box-shadow:2px 2px 15px  #000;
    }
    hr{
        color:white;
        margin-top:90%;
    }
    .btn{
        margin-left:15%;
    }
    .btn ul{
        background-color:#373D77;
        border:0;
    }
    .btn ul a{
        font-size:15px;
    }
    .box-image {
    width: 100%;
    height:70%;
    }
    .col-sm-3 p{
        text-align:center;
    }
    .col-sm-3 button{
        margin-top:5%;
        padding:2%;
        border-radius:10px;
        background-color: #373D77;
        color:white;
    }
    .col-sm-3 button a{
        color:white;
        text-decoration:none;
    }
    .col-sm-3:hover{
        transform: scale(1.1);
        transition: transform 0.5s;
    }
    .col-sm-3  button:hover{
        transform: scale(1.1);
        transition: transform 0.5s;
        background-color:black;
    }
    
</Style>
