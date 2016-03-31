<?php

    // configuration
    require("../includes/config.php"); 

    

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    
    {
    if (!empty($_SESSION["id"]))

    {
        //render sell form
        render("info_form.php",["title" => "Personal Information"]); 
    }
    else
    {
        redirect("/login.php");
    }
    }
    
    else
    {
        CS50::query("UPDATE users SET address1 = ? WHERE id = ?", $_POST["name"], $_SESSION["id"]);
        CS50::query("UPDATE users SET address2 = ? WHERE id = ?", $_POST["street"], $_SESSION["id"]);
        CS50::query("UPDATE users SET address3 = ? WHERE id = ?", $_POST["zip"], $_SESSION["id"]);
        
        render("check_info.php",["title" => "Check Personal Info", "name" => $_POST["name"], "street" => $_POST["street"], "zip" => $_POST["zip"]]);
    }
    
