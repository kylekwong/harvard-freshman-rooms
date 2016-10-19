<!-- displays room information for each dorm -->

<h2><?= $title ?></h2>

<?php

    // modify title name to help display images
    $modtitle = strtolower(str_replace(' ', '', $title));
    
?>

<!-- images taken from the Harvard FDO website http://www.fdo.fas.harvard.edu/icb/icb.do?keyword=k3806&tabgroupid=icb.tabgroup9254 -->
<p><img src="/img/<?= $modtitle ?>/<?= $modtitle ?>.jpg" alt="<?= $title ?>" height="335" width="465"></p>

<div>
    <table class="table table-striped">
    
        <thead>
            <tr>
                <td>Entryway</td>
                <td>Floor</td>
                <td>Room Number</td>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position["entryway"] ?></td>
                <td><?= $position["floor"] ?></td>
                <td><a href="/img/<?=$modtitle?>/<?=$modtitle?>_<?=strtolower($position['entryway'])?>_floor_<?=$position['floor']?>.jpg"><?= $position["number"] ?></a></td>
            </tr>
        <? endforeach ?>
        </tbody>
    </table>
</div>
