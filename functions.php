<?php
// Visitor header, if user is not logged in
function unregistered_header($title) 
{
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link rel="stylesheet" href="style.css" type="text/css" media="screen and (max-width:500px)">
            <link rel="stylesheet" href="style_mobile.css" type="text/css" media="screen and (min-width:501px)" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1>Shopping 4 Pets</h1>
                    <div class="link-icons">
                        <a href="index.php?page=register">
                            <i class="fas fa-user-plus"></i>
                        </a>
                        <a href="index.php?page=login">
                            <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </div>
                </div>
            </header>
            <main>
    EOT;
}

// Shop header, if user is logged in
function shop_header($title) 
{
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>Shopping 4 Pets</h1>
                <nav>
                    <a href="index.php?page=home">Home</a>
                    <a href="index.php?page=products">Products</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
                    <a href="index.php?page=logout">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </header>
        <main>
EOT;
}

// Shop footer
function shop_footer()
{
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; 1999-2077, NotARealCopyright Shopping Cart System</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}

// connect to MySQL database named shoppingcart via localhost
function pdo_connect_mysql() 
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USERNAME = 'root';
    $DATABASE_PASSWORD = '';
    $DATABASE_NAME = 'shoppingcart';

    // if there is an error with the connection, exit and display error
    try 
    {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USERNAME, $DATABASE_PASSWORD);
        echo "Connection to database successful.";
    } 
    catch (PDOException $exception) 
    {
    	exit('Failed to connect to database!');
    }
}

// redirects logged out users to the login page
function logged_out_redirect()
{
    if ($_SESSION['loggedin'] != true)
    {
        header('Location: index.php');
    }
}
?>
