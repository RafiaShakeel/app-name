<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .navbar{
            display: flex;
            justify-content: space-between;
            padding-left:20px;
            padding-right:20px;
            border:2px solid #000;
            height:100px;
        }
        .logo{
            height: 50px;
            width: 50px;
            img:
        }
    </style>
    <div class="navbar">
        <div class="logo"><img src="{{ asset('img/images.png') }}" alt="description of myimage"></div>    
        <div class="search"><textarea name="" id="" cols="30" rows="1"></textarea></div>    
        <div class="home">home</div>    
        <div class="blog">blogs</div>    
        <div class="petslist">list</div>    
        <div class="registeration">login/signup</div>    
    </div>
</body>
</html>