<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://ehd4.f3322.net/youtube/bootstrap337/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bootstrap Form</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="/form">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="form-group">
                            <label for="username" class="control-label">UserName:</label>
                            <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}" />
                        </div>
                        <div class="form-group">
                            <label for="content" class="control-label">Content:</label>
                            <textarea id="content" class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
