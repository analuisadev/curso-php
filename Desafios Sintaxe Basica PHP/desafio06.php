<?php
function gamePoint($victory, $lose) {
    $player = 100;
    $victoryPoints = 20;
    $losePoints = 15;
  
    $player += $victory * $victoryPoints;
    $player -= $lose * $losePoints;

    return "Pontuação final: " . $player . " pontos";
}

gamePoint(5, 3); 