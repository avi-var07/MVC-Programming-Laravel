
<!--  without bootstrap:- 
<h1>Student ID Card</h1>
<h2>Reg No. {{$id}}</h2>
<h2>Name: {{ $name }}</h2>
<h2>Course: {{ $course }}</h2>
<h2>Contact: {{ $contact }}</h2>
<h2>Address: {{ $address }}</h2>
<h2>Status: {{ $status }}</h2> -->

<!DOCTYPE html>
<html>
<head>
    <title>Student ID Card</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="card mx-auto mt-5" style="width: 18rem;">
  
  <img src="{{asset('images/aviral.jpg')}}" class="card-img-top" alt="Student Photo">

  <div class="card-body">
    
    <h5 class="card-title text-center">{{ $name }}</h5>

    <p class="card-text">
        <strong>Reg No:</strong> {{ $id }} <br>
        <strong>Course:</strong> {{ $course }} <br>
        <strong>Contact:</strong> {{ $contact }} <br>
        <strong>Address:</strong> {{ $address }} <br>
        <strong>Status:</strong> {{ $status }}
    </p>

  </div>

</div>

</body>
</html>