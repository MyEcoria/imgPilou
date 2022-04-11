<!DOCTYPE html> 
<html> 
<head>
<meta charset="UTF-8">
<title>IMGs LOL ?</title>
</head>
<body>

  <img src="monfichier.png" id="image" />

<script>
var date = new Date();
var options = {day: "2-digit"};
day = date.toLocaleDateString("fr-FR", options);
var options = {month: "long"};
mon = date.toLocaleDateString("fr-FR", options);

imgage = "imgs/"+ mon + "/" + day + ".png";
document.getElementById('image').setAttribute('src',imgage);
</script>
</body>
</html>
