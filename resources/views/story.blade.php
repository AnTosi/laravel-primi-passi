<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
        }

        ul {
            display: flex;
            justify-content: center;
        }

        li {
            padding-left: 3rem;
            padding-right: 3rem;
            list-style: none;
            
        }

        li.active {
            background-color: rgb(94, 202, 221);
        }

        a {
            text-decoration: none;
        }

        h1, h3, p {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>This is the the page that tells our story!</h1>
        <nav>
            <ul>
                <li><a href="/">Return to base exercise</a></li>
                <li><a href="/bonus">Homepage</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/product">What we sell</a></li>
                <li class="active"><a href="/story">Our Story</a></li>
                <li><a href="/enough">Out of ideas for page names</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <p>
            We literally started using Laravel a few hours ago and now we are testing it. And with "we" I mean me, but i'm pretending to be a company in the rest of the website so I need to mantain my persona.
        </p>
    </main>


</body>
</html>