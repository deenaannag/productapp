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


<div class="col">
<form action="/product_insert" method="post" enctype="multipart/form-data">
{{csrf_field()}}<table class="table table-borderless">

<tr>
    <td>product name:</td>
    <td><input type="text"  name="pname" class="form-control" ></td>

</tr>
<br>

<td>Category:</td>
<td><input type="text"  name="pcategory" class="form-control" >
   @foreach($bcategory as $bcategory)
              <option>{{$bcategory->product_category }}</option>
              @endforeach
              </select></td>
          </tr>
<br>
<tr>
    <td>Product unit:</td>
    <td><input type="text"  name="punit" class="form-control"></td>
</tr>
<br>
<tr>
    <td> Selling price:</td>
    <td><input type="text"  name="psp" class="form-control"></td>
</tr>
<br>
<tr>
    <td> Buying price:</td>
    <td><input type="text"  name="pbp" class="form-control"></td>
</tr>
<br>
<tr>
    <td><button class="btn btn-success">SUBMIT</button></a></td>
</tr>
</body>
</html>