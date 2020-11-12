

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
       .form{
           margin:10% 45%;
           
       } 
    </style>

    <title>Data Saving</title>
</head>
<body>



    <div class="form">
    <form action="{{URL::to('/store')}}" method="post">
       
    <input type="text" name="name" value="" placeholder="Enter Your Name" required>
    <br>
    <br>
    <input type="email" name="email" value="" placeholder="Enter Your Email" required>
    <br>
    <br>
    <input type="number" name="pin" max="999999"   value="" placeholder="Enter Your Pin" required>
     <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br>
    <br>
    <button type="submit" name="button" >Submit</button>
    </form>
    </div>

  <main class="py-4">
   @include('partials.alerts')
   </main>
</body>
</html>