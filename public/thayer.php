<?php

    /* thayer.php
     *
     * Handles Thayer's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY name, entryway, floor, number", "Thayer");

    // store entryway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Thayer", "positions" => $positions]);

?>
