var date = new Date();
var options = {day: "2-digit"};
day = date.toLocaleDateString("fr-FR", options);
var options = {month: "long"};
mon = date.toLocaleDateString("fr-FR", options);

imgage = "https://myecoria.com/imgLol/imgs/"+ mon + "/" + day + ".png";
document.getElementById('image').setAttribute('src',imgage);
