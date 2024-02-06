<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div style ="border: 10px solid blue">
    <h2>Register</h2>
    <form action="{{url('register')}}" method = "POST">
        @csrf
        <input name= "name" type ="text" placeholder="name">
        <input name= "email" type = "text" placeholder= "email">
        <input  name= "password" type = "password" placeholder= "password">
        <button>Input</button>
    </form>
</body>
@if(session("status")=="success")
<script>
alert("Successfully Inserted");
</script>
@endif
</html>