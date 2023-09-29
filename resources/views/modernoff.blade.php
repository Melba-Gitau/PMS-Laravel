<div class = "modernoff">

    <img src="images/modern-office.jpg" alt=" " class="box-image">
    <h2> Modern office.
        <div class="rating">
            4.8
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/star.png" alt=" " class="star">
    <img src="images/half-star.png" alt=" " class="star">
</div>
</h2>
    <p>As you settle into your ergonomic chair, you'll notice how every aspect of
     the office has been meticulously curated for comfort and convenience. 
     The ergonomic furniture and adjustable workstations ensure that your physical well-being
      is prioritized, allowing you to stay energized and engaged.
     <br>High-speed internet, cutting-edge audiovisual equipment, and 
     smart conference rooms are at your disposal.</p>
    </p>
    <button><a href="{{ route('dashboard') }}">Back..</a></button>
</div>
<style>
      @font-face {
    font-family: 'ImperialScript';
    src: url('/fonts/ImperialScript.ttf') format('truetype');
   }
   .modernoff{
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
