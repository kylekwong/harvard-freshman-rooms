<?php

    /* Kyle Kwong
     * index.php
     *
     * Home page for Harvard Room Maps
     *
     * Modified from Problem Set 7 (config.php, functions.php, apologize.php, constants.php, etc.)
     */

    // configure
    require("../includes/config.php");
    
    // if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check if a dorm name was submitted
        if (empty($_POST["name"]))
        {
            apologize("You did not enter a dorm name.");
        }
        
        // check if a dorm number was submitted
        else if (empty($_POST["number"]))
        {
            apologize("You did not enter a dorm number.");
        }
        
        // alter dorm name to make sure it matches with sql table
        $modname = ucfirst(strtolower($_POST["name"]));
        
        // alter room number to make sure it matches sql table
        $modnum = $_POST["number"];
        if (preg_match('/^[a-z]/i', $_POST["number"]))
        {
            $modnum = strtoupper($_POST["number"]);
        }
        
        // query
        $result = query("SELECT * FROM rooms WHERE name = ? and number = ?", $modname, $modnum);
        
        // if results return null, apologize
        if ($result == NULL)
        {
            apologize("No such room found!");
        }
        
        // else display picture
        else
        {
            $floor = query("SELECT floor FROM rooms WHERE name = ? AND number = ?", $modname, $modnum);
            $entryway = query("SELECT entryway FROM rooms WHERE name = ? AND number = ?", $modname, $modnum);
            
            // if no entryway is explicitly given, assign the floor number to it
            if ($entryway["0"]["entryway"] == NULL)
            {
                $entryway["0"]["entryway"] = $floor["0"]["floor"];
            }
            
            redirect("/img/".strtolower($modname)."/".strtolower($modname)."_".strtolower($entryway["0"]["entryway"])."_floor_".$floor["0"]["floor"].".jpg");
        }    
    }
    else
    {
        // render page
        render("index.php", ["title" => "Home"]);
    }

?>
