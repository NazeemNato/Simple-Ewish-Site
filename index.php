<!DOCTYPE html>
<html>
<head>
	<title>EASTER WISH </title>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
body {font-family: Arial, Helvetica, sans-serif;
background-color: #ff6348;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.main-header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 4rem;
  color: white;
  background: #444;
  line-height: 6rem;
  transform: translateY(0);
  transform: translate3d(0,0,0);
  transition: .25s transform;
  backface-visibility: hidden;
}

h{
	text-align: center;
}
.footer #button{
	width:35px;
	height:35px;
	border: #727172 12px solid;
	border-radius:35px;
	margin:0 auto;
	position:relative;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
.footer #button:hover{
	width:35px;
	height:35px;
	border: #3A3A3A 12px solid;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	position:relative;
}
.footer {
	bottom:0;
	left:0;
	position:fixed;
    width: 100%;
    height: 2em;
    overflow:hidden;
    margin:0 auto;
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	z-index:999;
}
.footer:hover {
	-webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
	height: 10em;
}
.footer #container{
	margin-top:5px;
	width:100%;
height:100%;
  position:relative;
  top:0;
  left:0;
	background: #3A3A3A;
}
.footer #cont{
  position:relative;
  top:-45px;
  right:190px;
	width:150px;
	height:auto;
	margin:0 auto;
}
.footer_center{
	width:500px;
	float:left;
  text-align:center;
}
.footer h3{
	font-size: 20px;
	font-weight: 100;
	margin-top:70px;
	margin-left:40px;
}
@font-face {
	font-family: 'icomoon';
	src:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/icomoon.eot?3qkin2');
	src:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/icomoon.eot?#iefix3qkin2') format('embedded-opentype'),
		url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/icomoon.woff?3qkin2') format('woff'),
		url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/icomoon.ttf?3qkin2') format('truetype'),
		url('fhttps://s3-us-west-2.amazonaws.com/s.cdpn.io/93/icomoon.svg?3qkin2#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}

.social-networks {
  margin: 0 0 35px;
  padding: 0;
  font-size: 0;
  text-align: center;

  li {
    display: inline-block;
  }

  a {
    display: block;
    position: relative;
    margin: 0 7px;
    width: 68px;
    height: 68px;
    font-size: 0;
    line-height: 0;
    text-align: center;
    text-decoration: none;

    &:before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      margin-top: -50%;
      margin-left: -50%;
      border-radius: 100px;
      background-color: #1f2027;
      transition: all 400ms;
    }

    &:after {
      position: relative;
      display: block;
      font-family: 'icomoon';
      speak: none;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      color: #fff;
      font-size: 26px;
      line-height: 66px;
    }

    &:hover, &:focus {
      text-decoration: none;
    }
  }
  
  &.spin-icon a:hover:after, &.spin-icon a:focus:after {
    transition: transform 0.4s ease-out;
    transform: rotateZ(360deg);
  }
  
  &.square a:hover:before, &.square a:focus:before {
    border-radius: 0;
  }
  
  &.bounce a:hover, &.bounce a:focus {
    animation: bounce 1s;
  }
  
  $networks: linkedin '\eac9' #0077b5, facebook '\e603' #3b5998, twitter '\e618' #00b0ed, github '\eab1' #4183c4, instagram '\e604' #3f729b, vimeo '\ea9c' #1ab7ea, twitch '\ea9b' #6441a5, pinterest '\e605' #cc2127;
  
  @each $network in $networks {
     .icon-#{nth($network, 1)} {
       &:after {
         content: '#{nth($network, 2)}';
      }

      &:hover:before, &:focus:before {
        background: nth($network, 3);
      }
    }
  }
}

@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    transform: translate3d(0,0,0);
  }

  40% {
    transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -6px, 0);
  }

  70% {
    transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -4px, 0);
  }

  90% {
    transform: translate3d(0,-2px,0);
  }
}

/* Extra stuff just to make the demo pretty. */
body {
  padding: 35px 0;
  color: #fff;
  font-family: 'Lora', serif;
  font-size: 14px;
  text-align: center;
  line-height: 24px;
  background: #262730 url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/noise-bg.png) repeat 0 0;
}

h1 {
  margin-bottom: 0px;
  font-size: 55px;
  line-height: 1.0;
}

h2 {
  font-family: 'Montserrat', sans-serif;
  margin-bottom: 45px;
  font-size: 12px;
  text-transform: uppercase;
}

footer {
  margin: 75px 0 35px;
}

a {
  color: #4183c4;
  text-decoration: none;
  
  &:hover {
    color: lighten(#4183c4, 15%);
  }
}
</style>
</head>
<body>
	<header class="main-header">
  <h>SEMIC</h>
  <nav>
  
  </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<br>

<form method="get" action="easter.php">


  <div class="container">
    <label for="uname"><b>Your name</b></label>
    <input type="text" placeholder="Enter Yor name" name="uname" required>

    
    <button type="submit">LET'S GO</button>
    
  </div>

</form>
<div class="footer">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
	   <h3>NAZEEM &copy; 2019</h3>
	  
</div>
</div>
</div>
</div>
</body>
</html>