<div class = "room">

    <img src="images/normal-workroom.jpg" alt=" " class="box-image">
    <h2>Workroom Offices.
        <div class="rating">
            4.0
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/empty-star.png" alt=" " class="star">
</div>
</h2>
<p>
Welcome to a captivating normal workroom, where productivity and creativity intertwine 
in a symphony of efficiency and inspiration. Step into<br> this inviting space, 
and you'll find yourself immersed in an atmosphere designed to elevate your work experience to new heights.
<br>As you enter, you're greeted by an ambiance that exudes professionalism and elegance.
 The tasteful blend of modern<br> design elements and functional furniture creates a seamless balance between style and practicality.
</p>
    <button><a href="{{ route('dashboard') }}">Back..</a></button>
</div>
<style>
      @font-face {
    font-family: 'ImperialScript';
    src: url('/fonts/ImperialScript.ttf') format('truetype');
   }
   .room{
    margin-left:3%;
    margin-top:2%;
   }
    p{
        font-size:22px;
    }
    .box-image{
        width:95%;
        height:65%;
        border:2px solid #000;
        box-shadow:2px 2px 15px #000;
        border-radius:20px;
    }
    h1{
        font-family: 'ImperialScript';
        font-size:30px;
    }
    h2{
        font-size:30px;
        font-style:italic;
    }
    button{
        background-color:#373D77;
        float:right;
        padding:7px 50px;
        margin-right:5%;
        border-radius:20px;
        margin-top:-4%;
    }
    button a{
        color:white;
        font-size:30px;
        text-decoration:none;
        font-family: 'ImperialScript';
    }
    button:hover{
        transform: scale(1.1);
        transition: transform 0.5s;
        background-color:black;
    }
    .rating {
    display: inline-block;
    float:right;
    margin-right:15%;
    }
    .star {
    width: 30px; 
    height: 30px; 
    }
</style>




