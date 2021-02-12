<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google Drive Laravel</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <br><br><br>
                    <form action="/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name="thing">
                        <input type="submit" class="btn btn-sm btn-block btn-danger" value="update">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
