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
            if(!is_numeric($game['score']) or 
            !is_numeric($game['time']) or !is_numeric($game['date'])){
                continue;
            }
            $time= date("H:i:s", ((int)$game['time']/1000));;
            $date= date("d-m-Y H:i:s", ((int)$game['date']/1000));;
            $device=$game['device'];
    ?>      
        
        <tr id="pointsField">
        <td style="" class="first"><?= $time ?></td>
        <td class="first"><?= $date ?></td>
        <td class="first"><?= $score ?></td>
        <td><?= $device ?></td>
        </tr>
        
    <?php endforeach; } ?>
    </tbody>
      </table>  
</body>
