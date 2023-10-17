<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
    <h1 class="card-title">{{$article->name}}</h1>
    <h2 class="card-subtitle mb-2 text-body-secondary">{{$article->short_desc}}</h2>
    <h3 class="card-text">{{$article->desc}}</h3>    
  </div>
</div>
</body>
</html>