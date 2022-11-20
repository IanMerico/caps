<?php
    $languages = array('PHP', 'JS', 'Ruby');
    function dropdown($languages){ ?>
        <select>
            <option value="">-- For loop --</option>
            <?php for($i= 0; $i < count($languages); $i++) {?>
                <option><?=$languages[$i]?></option>
            <?php } ?>
        </select>
        
       <select>
            <option value="">-- For Each --</option>
            <?php foreach($languages as $lang){ ?>
                <option><?= $lang ?></option>
            <?php } ?>
        </select>

        <select>
            <?php array_push($languages, 'HTML', 'CSS'); ?>
            <option value="">-- Push --</option>
            <?php foreach($languages as $lang){ ?>
                <option><?= $lang ?></option>
            <?php } ?>
        </select>
    <?php
    }
    dropdown($languages);
?>
