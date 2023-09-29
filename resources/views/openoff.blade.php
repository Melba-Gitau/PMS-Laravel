<div class = "openoff">

    <img src="images/Open-office.jpg" alt=" " class="box-image">
    <h2>Open spaced Offices.
        <div class="rating">
            4.8
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/half-star.png" alt=" " class="star">
</div>
</h2>
<p>
Welcome to the epitome of a modern-day office, where the boundaries between work 
and relaxation seamlessly blend to create an enticing haven. <br>Step inside this dynamic workspace, 
and you'll find an oasis of comfort and productivity, designed to inspire 
innovation and elevate your work experience to new heights.
By providing an environment where employees can recharge and take mindful breaks, the office
 cultivates a more <br>creative, collaborative, and ultimately, more successful workforce.
</p>
    <button><a href="{{ route('dashboard') }}">Back..</a></button>
</div>
<style>
      @font-face {
    font-family: 'ImperialScript';
    src: url('/fonts/ImperialScript.ttf') format('truetype');
   }
   .openoff{
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
        margin-top:-2%;
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


