<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML5 Template</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0%;
            padding:0%;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: none;
        }
        nav ul{
            list-style-type: none;
            padding:0;
            background: navy;
            overflow: hidden;
            display:flex;
            justify-content: center;
        }
        nav ul li{
            padding:14px 20px;
        }
        nav ul li a{
            color:#fff;
            text-decoration: none;
        }
        .container{
            display:flex;
            flex:1;
        }
        .sidebar{
            width:250px;
            background: #f4f4f4;
            padding:15px;
        }
        .main-content{
            flex:1;
            padding:20px;
        }
        footer{
            background:blue;
            color:#fff;
            text-align:center;
            padding:10px;
            position:relative;
            bottom:0;
            width:100%;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/ahsan">Home</a></li>
            <li><a href="/aboutus">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="/contactus">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </aside>
       
        <main class="main-content">
            @yield('content')
        </main>

    </div>

    <footer>
        <p>&copy; 2025 Website.</p>
    </footer>

    @yield('scripts')
</body>
</html>