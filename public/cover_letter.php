<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        //render sell form
        render("cover_letter_form.php",["title" => "Cover Letter"]); 
    }
    
    else
    
    {
        $keyw1 = " ";
        if (isset($_POST["innovative"]))
        {
            $keyw1 = "innovative";
            $_POST["innovative"] = NULL;
        }
        
        else if (isset($_POST["dynamic"]))
        {
            $keyw1 = "dynamic";
            $_POST["dynamic"] = NULL;
        }
        
        else if (isset($_POST["influential"]))
        {
            $keyw1 = "influential";
            $_POST["influential"] = NULL;
        }
        
        else if (isset($_POST["connected"]))
        {
            $keyw1 = "connected";
            $_POST["connected"] = NULL;
        }
        
        else if (isset($_POST["intelligent"]))
        {
            $keyw1 = "intelligent";
            $_POST["intelligent"] = NULL;
        }
        
        $keyw2 = " ";
        if (isset($_POST["innovative"]))
        {
            $keyw2 = "innovative";
            $_POST["innovative"] = 0;
        }
        
        else if (isset($_POST["dynamic"]))
        {
            $keyw2 = "dynamic";
            $_POST["dynamic"] = 0;
        }
        
        else if (isset($_POST["influential"]))
        {
            $keyw2 = "influential";
            $_POST["influential"] = 0;
        }
        
        else if (isset($_POST["connected"]))
        {
            $keyw2 = "connected";
            $_POST["connected"] = 0;
        }
        
        else if (isset($_POST["intelligent"]))
        {
            $keyw2 = "intelligent";
            $_POST["intelligent"] = 0;
        }
        
        if (!empty($_SESSION["id"]))
        {
            $address1 = CS50::query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
        }
        
        else
        {
        $address1[0] = [
            "address1" => " ",
            "address2" => " ",
            "address3" => " "
            ];
        }
        
        render("cover_letter_draft.php", ["title" => "Cover Letter Draft", "address1" => $address1[0]["address1"], "address2" => $address1[0]["address2"], "address3" => $address1[0]["address3"], "company" => $_POST["company"], "street" => $_POST["street"], "zip" => $_POST["zip"], "manager" => $_POST["manager"], "field" => $_POST["field"], "function" => $_POST["function"], "source" => $_POST["source"], "company_type" => $_POST["company_type"], "date" => $_POST["date"], "mot_reason" => $_POST["mot_reason"], "mot_elab" => $_POST["mot_elab"], "exp1_func" => $_POST["exp1_func"], "exp1_comp" => $_POST["exp1_comp"], "exp1_elab" => $_POST["exp1_elab"], "exp2_func" => $_POST["exp2_func"], "exp2_comp" => $_POST["exp2_comp"], "exp2_elab" => $_POST["exp2_elab"], "keyw1" => $keyw1, "keyw2" => $keyw2]);
    }
    
