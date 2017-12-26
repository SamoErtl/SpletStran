<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?= CSS_URL . "style.css" ?>">
<meta charset="UTF-8" />
<body>
    

<title>TdGame highscores</title>

<?php include("view/menu-links.php"); ?>

<p></p>
<h1 id="center" >All games</h1>
<table id="td-table">
        <tbody>
    <?php 
    if(!empty($games)){
        foreach ($games as $game):
            if(!is_numeric($game['score']) or 
            !is_numeric($game['time']) or !is_numeric($game['date'])){
                continue;
            }
            $score=$game['score'];
            $time= date("H:i:s", ((float)$game['time']/1000));
            $time= (float)$game['time'];
            $date= date("d-m-Y H:i:s", ((float)$game['date']/1000));
            //$date= (float)$game['date']/1000;
            $device=$game['device'];
    ?>      
        
        <tr id="pointsField">
        <td style="" ><?= $time ?></td>
        <td ><?= $date ?></td>
        <td ><?= $score ?></td>
        <td><?= $device ?></td>
        </tr>
        
    <?php endforeach; } ?>
    </tbody>
      </table>  
</body>
