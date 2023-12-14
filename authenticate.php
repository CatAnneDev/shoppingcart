<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USERNAME = 'root';
$DATABASE_PASSWORD = '';
$DATABASE_NAME = 'shoppingcart';
// if there is an error with the connection, exit and display error
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USERNAME, $DATABASE_PASSWORD, $DATABASE_NAME);
if ( mysqli_connect_errno() ) 
{
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// check if data submitted exists from login form
if ( !isset($_POST['username'], $_POST['password']) ) 
{
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) 
{
	// bind parameters (s = string)
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

    // check if account exists
    if ($stmt->num_rows > 0) 
    {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // since account exists, check if password is valid, user is logged in and create a session
        if (password_verify($_POST['password'], $password)) 
        {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            header('location: index.php?page=home');
        } 
        else 
        {
            echo 'Incorrect username and/or password!'; // invalid password
        }
    } 
    else 
    {
        echo 'Incorrect username and/or password!'; // invalid username
    }

	$stmt->close();
}
?>
