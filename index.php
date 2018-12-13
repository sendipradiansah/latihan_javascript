<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="coba"></div>
<script>

   var lampu = "merah";

   switch (lampu){
       case "merah":
       console.log("lampu warna merah");
       document.getElementById("coba").innerHTML = "lampu warna merah";
       break;

       case "hijau":
       console.log("lampu warna hijau");
       break;

       case "kuning":
       console.log("lampu warna kuning");
       break;

       default:
       console.log("lampu tidak nyala");
       break;
   }

if(lampu == "merah"){
        console.log("lampu warna merah");
}
else if(lampu == "hijau"){
        console.log("lampu warna hijau");
}
else if(lampu == "kuning"){
        console.log("lampu warna kuning");
}
else{
        console.log("lampu tidak nyala");
}
    
</script>

</body>
</html>


