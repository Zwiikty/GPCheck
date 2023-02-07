<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="newcard2.css">
    <title>Document</title>
</head>
<body>
<header class="hero">
  <h1>Welcome to LPTCIT Project</h1>
  <p></p>
</header>

<hr/>
<ul class="card-stacks">
  <li class="title">
    <h2>press to expand</h2>
  </li>
  <li class="stack stack-1">
    <ul class="cards-down">
      
  <li class="stack stack-2">
    <ul class="cards-down">
      <li class="card card-1"><img src="pic/img4.jpg"/>
      <button onclick="document.location='#'">click here</button>
        <div class="content">
          <h1></h1>
          <p></p>
        </div>
      </li>
      <li class="card card-2"><img src="pic/img6.jpg"/>
      <button onclick="document.location='#'">click here</button>
        <div class="content">
          <h1></h1>
          <p></p>
        </div>
      </li>
      <li class="card card-3"><img src="pic/img5.jpg"/>
      <button onclick="document.location='#'">click here</button>
        <div class="content">
          <h1></h1>
          <p></p>
        </div>
      </li>
    </ul>
  </li>
  
  <li class="stack stack-3">
    <ul class="cards-down">
      
      <li class="card card-2"><img src="pic/img2.jpg"/>
      <button onclick="document.location='#'">click here</button>
        <div class="content">
          <h1></h1>
          <p></p>
        </div>
      </li>
      <li class="card card-3"><img src="pic/img2.jpg"/>
      <button onclick="document.location='#'">click here</button>
        <div class="content">
          <h1></h1>
          <p></p>
        </div>
      </li>
    </ul>
  </li>
</ul>
<hr/>

<script>  
$(document).ready(function($){
  $('ul.card-stacks').on('click', function(){
    $(this).toggleClass('transition');
  });
});

</script>
</body>
</html>