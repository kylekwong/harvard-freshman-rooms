<?php

    /* Kyle Kwong
     * store.php 
     * 
     * Stores info in an associative array to help display the info.
     * For use in the (dormname).php files.
     *
     */
    
    
    // store entryway, floor number, and room number to display
    $positions = [];
    foreach ($rows as $row)
    {
        // if there is no special entryway identifier, make it the floor number
        if ($row["entryway"] == NULL)
        {
            $row["entryway"] = $row["floor"];
        }
    
        $positions[] = [
            "entryway" => $row["entryway"],
            "number" => $row["number"],
            "floor" => $row["floor"]
        ];
    }
    
?>
