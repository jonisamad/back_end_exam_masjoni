<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/assets/materialize.min.css"  media="screen,projection"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 <title>My  App - @yield('title')</title>
 <style>
     *{
         margin:0;
         padding:0;
        }
    body{background:#64b5f6}

    /* nav > ul > li {
                    float:left;
                    width:20%;
                    border-right:1px solid black;
                    box-sizing:border-box;
                  } */
    a {
        text-decoration:none;
        color:white;
      }
      nav > ul > li {
        float:left;
        width:20%;
        
    }
    nav{position:fixe;}

    li
    {list-style:none;
        text-decoration:none;
        text-align:center;
        background-color:#1565c0;
        font-size:20px;
        text-decoration:none;
        height:50px;
        line-height:50px;
        border-right: 1px solid black;
    }
    /* warna ketika di hover berubah */
    li:hover 
    {
        background-color:#2196f3;
    }
    /*border bottom dan top menu drop down */
    li ul li 
    {
        border-top: 1px solid #82b1ff;
        border-bottom: 1px solid #82b1ff;
    }

    li:last-child{
        border:none;
    }
    li ul {display:none;
    }
    ul li:hover ul{
        display:block;
    }
    h1 {text-align:center;
        height:20px;
        color:white;}

 </style>
</head>
<body>
<nav>
    <ul class="">
        <li><a href="">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Blog</a></li>

        <li><a href="">Social Media</a>
            <!-- menu drop down -->
            <ul>
                <li><a href="">Instagram</a>
                <li><a href="">Face Book</a>
                <li><a href="">Twitter</a>
            </ul>
        </li>
    </ul>
</nav> 
    <br>
    @section('sidebar')
       <h1> This is the master sidebar</h1>
    @endsection

    @yield('sidebar') <br>

    

    <div class="container">
        @yield('content')
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>