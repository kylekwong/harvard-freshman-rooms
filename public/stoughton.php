<?php

    /* stoughton.php
     *
     * Handles Stoughton's page
     *
     */
     
    // configure page
    require("../includes/config.php");

    // query 
    $rows = query("SELECT * FROM rooms WHERE name = ? ORDER BY entryway, number", "Stoughton");

    // store entrayway and room number to display
    require("../includes/store.php");

    // render page
    render("display.php", ["title" => "Stoughton", "positions" => $positions]);

?>
