<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('products') }}">Flare Badges</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All BadgeList</a></li>
        <li><a href="{{ URL::to('products/create') }}">Create a Bages</a>
    </ul>
</nav>

<h1>Showing {{ $product->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $product->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $product->email }}<br>
            
        </p>
    </div>

</div>
</body>
</html>
