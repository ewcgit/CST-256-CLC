<html>

<head>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>

<body>
    <header><img src="images/logo.png" alt="Site logo" style="width:434px;height:225px;" align="center"></header>
    <div class="topnav" align="center">
        <a class="active" href="dashboard">Home</a>
        <a href="News">News</a>
        <a href="Messages">Messages</a>
        <form action="profile" method="post">
        	@csrf
    		<button name="userProfile" type="submit">Profile</button>
		</form>
        <a href="adminpanel">Admin Panel</a>
        <a href="About">About</a>
        <a href="home">Logout</a>
    </div>

    <div style="padding-left:16px">
        <h2>Home page</h2>
        <p>
            <ul>
                <li>Information about the site</li>
                <li>Preview of feed to appear</li>
                <li>Popular pages or groups</li>
            </ul>
        </p>

    </div>

    <footer>
        <p align="center">Copyright Cinematic Station-1 since 2021</p>
    </footer>

</body>

</html>