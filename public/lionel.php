<?php

    /* lionel.php
     *
     * Handles Lionel's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY entryway, number", "Lionel");

    // store entrayway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Lionel", "positions" => $positions]);

?>
