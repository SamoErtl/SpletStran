<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">
<meta charset="UTF-8" />
<body>
    

<title>TdGame highscores</title>

<?php include("view/menu-links.php"); ?>

<p></p>
<h1 id="center" >All public games</h1>
<table id="td-table">
        <tbody>
    <?php 
    if(!empty($games)){
        foreach ($games as $game):
            $score=$game['score'];
            $time=$game['time'];
            $date=$game['date'];
            $device=$game['device'];
    ?>      
        
        <tr id="pointsField">
        <td style="" class="first"><?= $time ?></td>
        <td class="first"><?= $date ?></td>
        <td class="first"><input type="text" name="field1-1"  id="1-1" value="<?= $score ?>" readonly ></td>
        <td><input type="text"  name="field1-2"  id="1-2" value="<?= $device ?>" readonly></td>
        </tr>
        
    <?php endforeach; } ?>
    </tbody>
      </table>  
</body>
