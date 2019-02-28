<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Schoters</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
</head>
<body>
    <header>
        <div class="container">
            <div id="menu-icon">
                <a href="#"><i class="fas fa-bars"></i></a>
            </div>
            <div id="branding">
                <a href="#"><h1>Schoters</h1></a>
            </div>
            <div id="search-box">
                <form action="">
                    <input type="text" placeholder="Cari beasiswa apa?">
                </form>
            </div>
            <nav>
                <ul>
                    <a href="#"><li class="login">Login</li></a>
                    <a href="#"><li>
                        <div class="round">
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                    </li></a>
                    <a href="#"><li><i class="fas fa-bell fa-2x"></i></li></a>
                </ul>
            </nav>
        </div> 
    </header>
    <section id="breadcrumb">
        <div class="head-container">
            <ul>
                <a href="#"><li>Home</li></a><span class="right">></span>                
                <a href="#"><li>Profile</li></a><span class="right">></span>
                <a href="#"><li>Preference</li></a>
            </ul>
        </div>
        
    </section>
    <section id="main">
        <div class="container">
            <h2>Personalize your Schoters Homepage</h2>
            <p>Pick 5 top scholarship categories that you are interested to help us deliver the most relevant information with your preferences</p>
            <form action="screen2.php" method="get">
                <div id="category"></div>
                <input type="submit" class="button" value="Done">
            </form>  
        </div>
    </section>

    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>