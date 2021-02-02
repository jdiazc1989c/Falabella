<html>
    <head></head>
    <body>
    </body>
</html>
<script>
    var replacer = ["IT", "Falabella", "Integraciones"];
var accumulator = [];
for (i = 0; i <= 100; i++) {
  ((i % 3 == 0 || i % 5 == 0) 
     && accumulator.push(replacer[Number(i % 3 == 0 && i % 5 >= 1) + (Number(i % 3 == 0 && i % 5 == 0) * 2)])) 
     || accumulator.push(i);
}
console.log(accumulator);
    </script>