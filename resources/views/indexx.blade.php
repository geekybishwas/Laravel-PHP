<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <style>
        /* Basic styling for the navigation bar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        nav ul li a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/')}}/register">Register</a></li>
        <li><a href="{{url('/')}}/customer/view">Customer</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>


</body>
</html>
