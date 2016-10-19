<?php

    /* canaday.php
     *
     * Handles Canaday's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY entryway, number", "Canaday");

    // store entryway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Canaday", "positions" => $positions]);

?>
