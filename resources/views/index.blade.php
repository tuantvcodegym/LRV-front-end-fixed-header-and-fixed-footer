<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .naval{
            position: fixed;
            background: #1b4b72;
            width: 100%;
            padding: 10px 20px;
            top: 0px;
            text-align: center;
            left: 0px;
        }
        .naval a{
            padding-left: 20px;
            color: white;
            font-family: sans-serif;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="naval">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
</div>
<div class="main">
    <h1>Fixed Top Menu</h1>
    <h2>Scroll this page to see the effect</h2>
    <h2>The navigation bar will stay at the top of the page whilescrolling</h2>
    @for($i=0; $i<30; $i++)
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    @endfor
</div>
</body>
</html>Time: 8:45 PM
 */