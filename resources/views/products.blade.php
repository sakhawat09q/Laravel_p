<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            
        </thead>
          <tbody>
          @if($products)  
            @foreach($products as $p)
            <tr>
                <td>{{$p['id']}}</td>
                <td>{{$p['name']}}</td>
                <td>{{$p['price']}}</td>
            </tr>
            @endforeach
         @else 
           <tr>
             <td colspan="3" class="text-center">No data found</td>
           </tr> 
          @endif  
          </tbody>
    </table>
</div>
    
</body>
</html>