<?php    //echo $_SESSION["staffname"];
    if(isset($_SESSION["staffId"]) && $_SESSION["staffId"] != NULL)
        {        
?> 
<a class="navbar-brand">Welcome   
<?php echo $_SESSION["staffname"];  ?></a>
<a href="logout.php" class="navbar-brand"><strong>Logout</strong></a>
<?php}
?>