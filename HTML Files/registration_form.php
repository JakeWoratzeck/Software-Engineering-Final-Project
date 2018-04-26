<!DOCTYPE html>

<html>
<head>
	<title>Fortnite Club Login</title>
	<meta charset="UTF-8">
	
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.css">
    
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
</head>
<body>
	<div id="mainContainer">
        	<div class="titleWrapper"><h1>Fortnite Friend Finder</h1></div>
    <div id="loginWidget" class="ui-widget">
        
        <h1 class="ui-widget-header" style="border-radius: 10px 10px 0 0;">Registration</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
    
        <form action="register.php" method="POST">
            
            <input type="hidden" name="action" value="do_registration">
            
            <div class="stack">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
             <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="password">Confirm Password:</label>
                <input type="password" id="passwordConfirm" name="passwordConfirm" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" class="ui-widget-content ui-corner-all"  value="<?php print $firstName; ?>">
            </div>
            
            <div class="stack">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" class="ui-widget-content ui-corner-all" value="<?php print $lastName; ?>">
            </div>
            
	    <div class="stack">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="ui-widget-content ui-corner-all"  value="<?php print $email; ?>">
            </div>
		
            <div class="stack">
                <label for="gamertag">Gamertag:</label>
                <input type="text" id="gamertag" name="gamertag" class="ui-widget-content ui-corner-all" value="<?php print $gamertag; ?>">
            </div>
            
            <div class="stack">
            	<label for="console" name="console" id="console">Platform:</label>
           		<select>
		   			<option value="1">PC</option>
  					<option value="2">Xbox One</option>
  					<option value="3">PS4</option>
		   	</select>
           </div>
           
           <div class="stack">
            	<label for="gameType" name="gameType" id="gameType">Preferred Gametype:</label>
           		<select>
		   			<option value="1">Duos</option>
  					<option value="2">Squads</option>
		   	</select>
           </div>
           
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form> 
    </div>
    
    <div class="logoutWrapper"><button class="logoutButton" onclick="location.href='login.php';">Cancel</button></div>
</body>
</html>
