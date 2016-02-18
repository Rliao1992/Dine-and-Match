<?php
    // empty JSON
    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("msg" => "$methodType");

    if ($methodType === 'POST') {



        if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
            && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if(isset($_POST["name"]) && !empty($_POST["name"])
                && isset($_POST["email"]) && !empty($_POST["email"])
                && isset($_POST["comment"]) && !empty($_POST["comment"])){


                // get the data from the post and store in variables
                $Name = $_POST["name"];
                $Email = $_POST["email"];
                $Comment = $_POST["comment"];

                $data = array("Thank you!" => "$Name,  Thank you for your feed back and We will get back to you as soon as possible.", "Name" => "$Name", "Email" => "$Email", "Comment" => "$Comment");
      


            } else {
                $data = array("Error" => "Either Name, Email, or Comment were not filled out correctly.");
            }



        } else {
            // not AJAX
            $data = array("msg" => "Has to be an AJAX call.");
        }


    } else {
        // simple error message, only taking POST requests
        $data = array("msg" => "Error: only POST allowed.");
    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
