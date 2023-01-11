<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <div class="header-container">
       <div>
            <h1>Hello World</h1>
       </div>
       <ul>
            <li><a href="/about">About Us</a></li>
            <li><a href="/work">Work With Us</a></li>
            <li><a href="/join">Join Our Community</a></li>
        </ul>

    </div>
</body>


<style>
    .header-container{
        width: 80%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    ul{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    li{
        list-style: none;
        padding: 20px;
        font-size: 1.2rem;
    }

    a{
        text-decoration: none;
        color: black;
    }

    a:hover{
        color: blue;
        cursor: pointer;
    }
</style>
</html>