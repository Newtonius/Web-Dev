<?php 
    // DEFINE VARIABLES EMPTY TO PRECLUDE ERRORS
    $name = $email = $comment = "";
    $nameError = $emailError = $commentError = "";
    
    
    // CREATE PHP TEST INPUT METHOD
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // CHECK IF NAME IS VALID
        $name = test_input($_POST["nameBox"]);
            // CHECKS IF FIELD IS EMPTY
            if(empty($_POST["$name"])) {
                
            }
            // IF INPUT DOES NOT FOLLOW STRING PARAMS IN THE 'IF' STATEMENT, THEN ERROR
            if(!preg_match("[a-zA-Z]", $name)) {
                $nameError = "ERROR, NAME IS INVALID";
            }
         
        // CHECK IF EMAIL IS VALID
        $email = test_input($_POST["emailBox"]);
            // FILTERS INPUT FOR VALID EMAIL
            if(empty($_POST["$"])) {
                
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "ERROR, EMAIL IS INVALID";
            }
            
        // CHECK IF COMMENTS ARE VALID
        $comment = test_input($_POST["commentArea"]);
            if(!preg_match("[a-zA-Z]$^*/\-_")) {
                $commentError = "ERROR, COMMENT HAS INVALID TEXT";
            }
    }
    
?>

<style>
    input {
        margin: 15px;
    }
</style>

<form method="post">
    Name: <input type="textbox" name="nameBox" autocorrect=off autocapitalize=words /><?php echo $nameError; ?><br />
    E-Mail: <input type="textbox" name="emailBox" autocorrect=off autocapitalize=words /><?php echo $emailError; ?><br />
    Comment: <input type="textArea" name="commentArea" autocorrect=off autocapitalize=words /><?php echo $commentError; ?><br />
    <input type="submit" value="Submit yo shit"/>
</form>

<?php

echo $name + "<br />";
echo $email + "<br />";
echo $comment + "<br />";

?>