<html>
<title>Test</title>
<head>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('css/teststyle.css') }}" rel="stylesheet" type="text/css" >
<script  src="{{ asset('js/testjs.js') }}" type="text/javascript"></script>
</head>
<body>
  <br /><br />
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <h3>Create new Badge</h3>
          <form action="store" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                  <label for="usr">Product Name:</label>
                  <input type="text" class="form-control" id="usr" name="name" >
                </div>
                <div class="form-group">
                  <label for="pwd">SKU:</label>
                  <input type="text" class="form-control" id="pwd" name="sku">
                </div>

            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" name="file"
                disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear"
                    style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif image/svg"
                        name="file"/> <!-- rename it -->
                    </div>
                </span>

            </div><!-- /input-group image-preview [TO HERE]-->
            <br />
          <input type="submit" class="btn btn-success" value="submit" name="submit" />
        </div>
        {{ csrf_field() }}
    </div>
</form>
</div>
</body>
</html>
