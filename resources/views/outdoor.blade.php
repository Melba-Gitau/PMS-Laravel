<div class = "outdoor">

    <img src="images/outdoor-style.jpg" alt=" " class="box-image">
    <h2>Outdoor-styled Offices.
        <div class="rating">
            4.5
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/half-star.png" alt=" " class="star">
</div>
</h2>
<p>
Step into the realm of outdoor-style offices, 
where the traditional boundaries of workspaces are reimagined, 
and nature becomes an integral part of the daily hustle. Embrace a captivating blend of serenity and 
productivity as you embark on a journey through these enticing outdoor-inspired workplaces.<br>
Nestled within lush greenery and bathed in natural sunlight, these offices offer a refreshing 
departure from conventional<br> work environments.The harmonious blend of natural textures and modern design elements creates 
an environment that evokes <br>a sense of calm, allowing you to concentrate on your tasks with unparalleled focus.
</p>
    <button><a href="{{ route('dashboard') }}">Back..</a></button>
</div>
<style>
      @font-face {
    font-family: 'ImperialScript';
    src: url('/fonts/ImperialScript.ttf') format('truetype');
   }
   .outdoor{
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



