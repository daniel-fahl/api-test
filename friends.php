<!DOCTYPE html>
<html>
<head>
<title>GodmodeX-Test Kontakte</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
  .csstransforms .cn-wrapper {
  font-size:1em;
  width: 26em;
  height: 26em;
  overflow: hidden;
  position: fixed;
  z-index: 10;
  bottom: -13em;
  left: 50%;
  border-radius: 50%;
  margin-left: -13em;
  transform: scale(0.1);
  transition: all .3s ease;
}
/* class applied to the container via JavaScript that will scale the navigation up */
.csstransforms .opened-nav {
  border-radius: 50%;
  transform: scale(1);
}
</style>
</head>
<body>
<h1>Freunde</h1>

<button class="cn-button" id="cn-button">+</button>
<div class="cn-wrapper" id="cn-wrapper">
   <ul>
       <li><a href="#"><span class="fa fa-microphone fa-lg fa-fw"></span></a></li>
       <li><a href="#"><span class="fa fa-headphones fa-lg fa-fw"></span></a></li>
       <li><a href="#"><span class="fa fa-home fa-lg fa-fw"></span></a></li>
       <li><a href="#"><span class="fa fa-video-camera fa-lg fa-fw"></span></a></li>
       <li><a href="#"><span class="fa fa-envelope fa-lg fa-fw"></span></a></li>
   </ul>
</div>
<div id="cn-overlay" class="cn-overlay"></div>

</body>
</html>
