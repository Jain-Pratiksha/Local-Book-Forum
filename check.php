<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.responsive {
  width: 100%;
  max-width: 400px;
  height: auto;
}

.col-6{
  position: relative;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 10%;
  display: flex;
  justify-content: left;
  text-align: left;
}

p{
	margin-right: 5%;
}


</style>
</head>
<body>

<h2>Responsive Images</h2>
<div class="col-6">
	

<p align="justify">If you want the image to scale both up and down on responsiveness, set the CSS width property to 100% and height to auto.Resize the browser window to see the effect.</p>
<img src="images/books2.jpg" alt=" Local Books" class="responsive" width="400" height="400">
</div>

<div class="col-4">
	
</div>


</body>
</html>
