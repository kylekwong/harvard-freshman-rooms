<?php

    /* masshall.php
     *
     * Handles Mass Hall's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY entryway, number", "Mass Hall");

    // store entrayway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Mass Hall", "positions" => $positions]);

?>
