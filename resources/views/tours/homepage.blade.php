<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.imge{
     padding-top: -20px;
     margin-top: 5px;
}
.color{
    background-color: rgba(201, 76, 76, 0.3);
}
</style>
</head>
<body> 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Như Mai</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Book tour</a></li>
      <li><a href="#">Order </a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  

            
            @foreach($tours as $tour)
    <div class="col-md-3">
      <div class="thumbnail">
        <img src="/images/{{ $tour->image}}" style="width:350px; height:350px;" onclick="window.location='/tours/{{ $tour->id }}'" />
        <p>{{ $tour->name }}</p>
        <p>{{ $tour->typetour }}</p>
          <div class="caption">
            <p>{{ $tour->schedule }}</p>
            <p> {{ $tour->numberPeople }}</p>
            <p>{{ $tour->depart }}</p>
            <p>{{ $tour->price }}</p>
          </div>
        </a>
      </div>
    </div>
    @endforeach
    
   
</div>

</body>
</html>
