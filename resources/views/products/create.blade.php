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
        <a class="navbar-brand" href="{{ URL::to('products') }}">Nerd ABadge</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All Badges</a></li>
        <li><a href="{{ URL::to('products/create') }}">Create a Badge</a>
    </ul>
</nav>

<h1>Create a Badge</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'products')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('isDefault', 'isDefault') }}
        {{ Form::text('isDefault', Input::old('isDefault'),
          array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the Badge!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
