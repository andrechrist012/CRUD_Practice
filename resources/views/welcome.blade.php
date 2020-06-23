<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <style>
        body{
            background-color: #142850;
            font-family: 'Roboto', sans-serif;;
        }
        section{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        section h1{
            color: #dae1e7;
            font-size: 30px;
        }
        section h1 .fas{
            padding-right: .5em;
            font-size: larger;
        }
        section .image{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        section .image img{
            height: auto;
            width: 40%;
            padding: 0.5em;
        }
        section a{
            text-decoration: none;
            margin-top: 2em;
            margin-bottom: 3em;
            font-weight: bold;
            padding: 0.8em;
            background-color: #00909e;
            border-radius: .5em;
            color: whitesmoke;
            transition: .2s;
        }
    </style>
</head>
<body>
    <section>
        <h1><i class="fas fa-door-open"></i>Welcome</h1>
        <div class="image">
            <img src="/image/sticker.png" alt="">
            <img src="/image/sticker (5).png" alt="">
        </div>
        <a href="/login">Start</a>
    </section>
</body>
</html>