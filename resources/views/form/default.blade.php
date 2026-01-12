<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="barner">
    <h1 id="heading">LANGHALI MAGAR SAMAJ</h1>
    <h4 id="smallheading">Pokhara-14,Chauthe</h4>
    </div> <br>

        <a href="{{ route('formpage') }}"> <button id="formpage">Form page</button></a>
        <a href="{{ route('peopleRecord') }}"> <button id="formpage">Record data button</button></a>

        
   <p style="text-align:center; position:relative; bottom:50px;">Magar samaj is a social organization working for cultral preservation,
unity and development of magar community.</p>
    
  
</body>
</html>