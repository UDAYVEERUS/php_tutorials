<?php 
// $GLOBALS is a superglobal variable, which is also an array that stores all the global scope variables and is used to access global variables from anywhere in the PHP program.
// Global
$x = 100;
$y = 425;

function add(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo "Sum = $z";


// $_SERVER
// $_SERVER is a superglobal variable which holds the data about the headers, script locations, network addresses, paths, etc.

echo $_SERVER['PHP_SELF'] . '<br>'; //Returns the filename of the currently executing script
echo $_SERVER['DOCUMENT_ROOT'] . '<br>'; //Returns the IP address of the host server
echo $_SERVER['SERVER_ADDR'] . '<br>'; //Returns the IP address of the host server
echo $_SERVER['SERVER_NAME'] . '<br>'; //Returns the name of the host server 
echo $_SERVER['REQUEST_METHOD'] . '<br>'; //Returns the request method used to access the page
echo $_SERVER['REQUEST_TIME'] . '<br>'; //Returns the timestamp of the start of the request 
echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
echo $_SERVER['REMOTE_ADDR']; //Returns the IP address from where the user is viewing the current page


/*
The following table lists some of the important elements of $_SERVER

Element/Code	            Description
$_SERVER['PHP_SELF']	-->    Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	--> Returns the version of the Common Gateway Interface the server is using
$_SERVER['SERVER_ADDR']	-->  Returns the IP address of the host server
$_SERVER['SERVER_NAME']	-->  Returns the name of the host server 
$_SERVER['SERVER_SOFTWARE']	-->  Returns the server identification string
$_SERVER['SERVER_PROTOCOL']	-->  Returns the name and revision of the information protocol
$_SERVER['REQUEST_METHOD']	-->  Returns the request method used to access the page
$_SERVER['REQUEST_TIME']	-->  Returns the timestamp of the start of the request 
$_SERVER['QUERY_STRING']	-->  Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	-->  Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	-->  Returns the Accept_Charset header from the current reques
$_SERVER['HTTP_HOST']	-->  Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	-->  Returns the complete URL of the current page
$_SERVER['HTTPS']	-->  Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	-->  Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	-->  Returns the Hostname from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	-->  Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	-->  Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	-->  Returns the value given to the SERVER_ADMIN directive in the web server configuration file
$_SERVER['SERVER_PORT']	-->  Returns the port on the server machine being used by the web server for communication 
$_SERVER['SERVER_SIGNATURE']	-->  Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	-->  Returns the file system-based path to the current script
$_SERVER['SCRIPT_NAME']	-->  Returns the path of the current script
$_SERVER['SCRIPT_URI']	-->  Returns the URI of the current page

*/



// $_REQUEST
// The PHP $_REQUEST is a PHP superglobal variable that is used to collect the data after submitting an HTML form. The $_REQUEST superglobal is an associative array which also contains the contents of $_GET, $_POST and $_COOKIE superglobals. 
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> // Server Info
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];  //Using $_REQUEST Superglobal
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>


// $_POST

/*The PHP $_POST is a PHP superglobal which is used to collect form data after submitting an HTML form using method="post". In the following example, we will use the $_POST superglobal to collect a value. 

htmlentities() Function: The htmlentities() function is an inbuilt function that is used to transform all characters which are applicable to HTML entities.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_REQUEST['fname']); //Collecting Value
if (empty($name)) {
echo "Empty Name";
} else {
echo $name;
}
}



/* $_GET
The PHP $_GET is a PHP superglobal which is used to collect form data after submitting an HTML form using method="get". Information sent from an HTML form with the GET method is displayed in the browser's address bar making it less secure than POST. 

Let's assume we have a HTML form that takes name and email as an input and sends it to anothe file named "name_get.php". We can access the values of "name_get.php" with $_GET superglobal.
*/


<form action="name_get.php" method="get">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit">
</form>

// name_get.php
Welcome <?php echo $_GET["name"]; ?>!
Your email address is <?php echo $_GET["email"]; ?>





/* Creating Cookies with PHP
A cookie can be created with the setcookie() function. 

Syntax:
 */
setcookie(name, value, expire, path, domain, secure, httponly);
/*
Parameters
Name − Name of the cookie stored.
Value − This sets the value of the named variable.
Expiry − This specifes a future time in seconds since 00:00:00 GMT on 1st Jan 1970.
Path − Directories for which the cookie is valid.
Domain − Specifies the domain name in very large domains.
Security − 1 for HTTPS. Default 0 for regular HTTP.
*/

<?php
$cookie_name = "username";
$cookie_value = "rohan";
//The setcookie() function must appear BEFORE the <html> tag.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>



// Modifying a Cookie
// To modify a cookie, just set the cookie again using the setcookie() function.

/*
<?php
$cookie_name = "username";
$cookie_value = "aakash";
//The setcookie() function must appear BEFORE the <html> tag.
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
*/



// Delete a Cookie
// To delete a cookie, we need to use the setcookie() function with a date that has already expired. 


<?php
// set the expiration date to one day ago
setcookie("username", "", time() - 86400);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>
 

?>