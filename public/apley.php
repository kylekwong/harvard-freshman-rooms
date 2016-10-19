<?php

    /* apley.php
     *
     * Handles Apley Court's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY entryway, number", "Apley");

    // store entryway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Apley", "positions" => $positions]);

?>
