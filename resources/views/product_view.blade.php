<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="https://www.google.com/imgres?imgurl=https%3A%2F%2Fmedia.istockphoto.com%2Fphotos%2Fblack-podium-illuminated-by-spotlights-before-black-background-picture-id1323679816%3Fb%3D1%26k%3D20%26m%3D1323679816%26s%3D170667a%26w%3D0%26h%3DWR49HyzkvXypOVC1VkhmPUndYv-ZmHk_D3liw1umzQQ%3D&imgrefurl=https%3A%2F%2Funsplash.com%2Fs%2Fphotos%2Fproduct-background&tbnid=JmPxO0v4EduMeM&vet=12ahUKEwju-vCC-fv0AhW2yKACHSPQCL4QMygAegUIARDfAQ..i&docid=ErGu4SoZcHDnOM&w=489&h=353&itg=1&q=product%20background&hl=en&ved=2ahUKEwju-vCC-fv0AhW2yKACHSPQCL4QMygAegUIARDfAQ">
<div class="container">

<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12" >
<br>
<br>
<br>
<br>
<br>


<form class="d-flex" method="post" action="/categorysearch" >
    
      {{csrf_field() }}
<input class="form-control me-2" type="search" placeholder="Search " aria-label="Search" name="pcategory"  >
        <button class="btn btn-success" type="submit">Search</button>
      </form>
      <br>
    <br>

<table class="table table table-dark" >
<tr><th scope="row">Product name</th>
    <th scope="row">Category</th>
    <th scope="row">Product unit</th>
    <th scope="row">Selling price</th>
    <th scope="row">Buying price</th>
    <th scope="row">profit</th>
   
    </tr>
    
@foreach($products as $product)

<tr class="table-primary">
   
    <td>{{$product->pname}}</td>
    <td>{{$product->pcategory}}</td>
    <td>{{$product->punit}}</td>
    <td>{{$product->psp}}</td>
    <td>{{$product->pbp}}</td>
    <td>{{$product->profit}}</td>
    
</tr>

@endforeach



</table>
{!!$products->links();!!}




</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
