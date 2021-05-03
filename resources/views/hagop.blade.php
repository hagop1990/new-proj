<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Register Now</h1>
    @if($errors->any())
       @foreach($errors->all() as $err)
         <ol>
           <li style="color:red;">{{$err}}</li>
         </ol>
       @endforeach
    @endif
   <form action="insert" method="post">
    @csrf
       <input type="text" name="name" placeholder="Enter Name"><br>
       <input type="email" name="email" placeholder="Enter Email"><br>
       <input type="password" name="password" placeholder="Enter Password"><br>
       <button>Register Now</button>
    </form>
    
</body>
</html>