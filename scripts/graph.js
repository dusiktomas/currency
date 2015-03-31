$(document).ready(function(){
  $.post("../msg-builder.php", function(data){
    var currencyFrom = new Chart($("#currencyFrom").get(0).getContext("2d")).PolarArea(data.currencyFrom, { segmentStrokeColor: "#000000" });
    var currencyTo = new Chart($("#currencyTo").get(0).getContext("2d")).Pie(data.currencyTo, { animateScale: true });
    var originatingCountry = new Chart($("#originatingCountry").get(0).getContext("2d")).Doughnut(data.originatingCountry, { animateScale: true });
  });
});

