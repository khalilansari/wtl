<!Doctype html>
<html>
    <head>
         <title>My Example Of PHP</title>
    </head>
    <body>
        <?php
            echo "welcome to php";
            if($_POST){
                $username=$_POST('username');
                $username=$_POST('brand');
                echo "thank you! $username,you have voted for $brand<h1>";
            }
                
          ?>      
        
        <form method ="post" action="myexample.php"></form>
        <label for="user">Username</label>
        <input type="textr" name="username" id="username" required="required"/><br>
        
        <label>Please vote for your favourite mobile </label><br>
        <label><input type="radio" name="brand" value="Nokia"/></label><br> 
        <label><input type="radio" name="brand" value="samsung"/></label><br>
        <label><input type="radio" name="brand" value="htc"/></label> <br>
        <label><input type="radio" name="brand" value="asus"/></label><br>
        <label><input type="radio" name="brand" value="apple"/></label><br>
        <input type="submit" value="vote"/>
        
    </body>
    
</html>



