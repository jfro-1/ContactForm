<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>
    <p>Name : {{$details['name']}}</p>
    <p>Email : {{$details['email']}}</p>
    <p>Message : {{$details['mesg']}}</p>
    <img src="{{$details['imageUrl']}}" style="width: 100px; height:100px;">
    <p>File : {{$details['file']}}</p>
</body>
</html>
