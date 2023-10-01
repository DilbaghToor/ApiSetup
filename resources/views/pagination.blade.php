<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
        <div class="col-12">
            <table class="table">
                <tr>
                    <td>name</td>
                    <td>city</td>
                    <td>phonenumber</td>
                </tr>
                @foreach ($data as $temp)
                <tr class="p-3">
                    <td>{{$temp['name']}}</td>
                    <td>{{$temp['city']}}</td>
                    <td>{{$temp['phone']}}</td>
                </tr> 
                @endforeach
                
            </table>
        </div>
        <div class="col-12">{!!$links!!}</div>
        
    </div>
    <style>
        .w-5 {
            display: none
        }
    </style>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>