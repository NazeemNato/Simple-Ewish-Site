    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Lobster');

* {
  margin: 0px;
  padding: 0px;
}

body {
  margin-top: 3em;
  background-color: #F5B1AC; 
}

h1 {
  font-family: 'Lobster', cursive;
  font-size: 45px;
  color: #6D59A7;;
  text-shadow: 3px 0px 0px white;
  margin-bottom: 50px;
}

.eggs {
  margin: 1em auto;
  text-align: center;
}
.egg {
  width: 140px;
  height: 200px;
  margin: 1em auto;
  background: #FBE9E7;
  border-radius: 50%/60% 60% 40% 40%;
  overflow: hidden;
  display: inline-block;
}

.stripe {
  height: 20%;
}

.stripe:not(:first-child) {
  border-top: 2px solid #fff;
}

.stripe:nth-child(1) {
  background-color: #FFBDE8;
}

.stripe:nth-child(2) {
  background-color: #BDE8FF;
}

.stripe:nth-child(3) {
  background-color: #E8FFBD;
}

.stripe:nth-child(4) {
  background-color: #FFE8BD;
}

.stripe:nth-child(5) {
  background-color: #E8BDFF;
}

@keyframes egg-left-animation {
  0% {
    transform: rotate(-15deg);
  }
  100% {
    transform: rotate(-10deg);
  }
}
@keyframes egg-right-animation {
  0% {
    transform: rotate(30deg);
  }
  100% {
    transform: rotate(25deg);
  }
}

.egg-left {
  transform: rotate(-10deg);
  animation: egg-left-animation 0.9s linear 0s infinite alternate;
}
.egg-right {
  transform: rotate(25deg);
  animation: egg-right-animation 0.7s linear 0s infinite alternate;
  background-color: #EC407A;
  background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23FFFFFF' fill-opacity='0.2' fill-rule='evenodd'/%3E%3C/svg%3E");
}
button{
  color: white;
  background-color: green;
  height: 5em;
  width: 200px;
  border-radius: 10px;
}
input[type=submit]{
   color: white;
  background-color: #16a085;
  height: 3em;
  width: 200px;
  border-radius: 10px;
}
</style>
<body>
  <title>Happy Easter| <?php 
    $u = $_GET['uname'];
    echo"$u";
    ?></title>
<div class="eggs">
  <h1>Happy Easter!</h1>
  <div class="egg egg-left">
    <div class="stripe"></div>
    <div class="stripe"></div>
    <div class="stripe"></div>
    <div class="stripe"></div>
    <div class="stripe"></div>
  </div>
  <div class="egg egg-right">
  </div>
  <h1>From</h1>
  <h1>
    <?php 
    $u = $_GET['uname'];
    $c=mysqli_connect("localhost","root","","semic");
   

$p= $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    mysqli_query($c,"INSERT into db (name,ip) values ('$u','$p')");
    echo"$u";
    ?></h1>
    <br><h1> Easter spells out beauty , the rare beauty of new life </h1> </div>
</div>
<div align="center">
<a href="whatsapp://send?text= hey" onclick="window.open('whatsapp://send?text= Happy Easter 😍 %0A %0A Click the link to see the gift 👇 %0A %0A '+ encodeURIComponent(location.href))"> <button type="button" class="share-button" > SHARE VIA WHATSAPP</button>
  </a> </div>
  <br>
  <div align="center">
    <form action="index.php">
      <input type="submit" value="Create Your Wish">
    </form>
  </div>