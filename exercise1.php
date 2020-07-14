<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    		$viewer = getenv( "HTTP_USER_AGENT" );
            $browser = "An unidentified browser";
            if( preg_match( "/MSIE/i", "$viewer" ) )
            {
            echo '<link rel="stylesheet" type="text/css" href="style.css">';
            }
            elseif(preg_match('/Chrome/i' , "$viewer"))
            {
            echo '<link rel="stylesheet" type="text/css" href="chrome.css">';
            }
            elseif( preg_match( "/Mozilla/i", "$viewer" ))
            {
            echo '<link rel="stylesheet" type="text/css" href="mozilla.css">';
            }	
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Browserspecific CSS file</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <form class="form-inline">
        <a class="btn btn-outline-success" href="http://localhost/codefactory/day2/index.html" role="button">Home</a>
        </form>
      </nav>

<h1>Que día bueno para chillar</h1>



    
</body>
</html>