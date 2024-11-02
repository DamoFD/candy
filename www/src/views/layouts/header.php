<!DOCTYPE html>
<html>
<head>
    <title>Candy Shop Menu</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #ff69b4;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 50px;
        }
        .menu-item {
            background-color: #ffe4e1;
            border: 2px solid #ff1493;
            border-radius: 10px;
            margin: 15px;
            padding: 20px;
            width: 200px;
            text-align: center;
            transition: transform 0.2s;
        }
        .menu-item:hover {
            transform: scale(1.05);
        }
        .item-name {
            font-size: 1.5em;
            color: #c71585;
            margin-bottom: 10px;
        }
        .item-price {
            font-size: 1.2em;
            color: #db7093;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
    <div class="header">
        <h1>Sweet Treats Candy Shop</h1>
    </div>
