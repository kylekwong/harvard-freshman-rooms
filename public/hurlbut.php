<?php

    /* hurlbut.php
     *
     * Handles Hurlbut's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY entryway, number", "Hurlbut");

    // store entrayway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Hurlbut", "positions" => $positions]);

?>
