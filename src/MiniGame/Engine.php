<?php
namespace DesignPatterns\Minigame;

use DesignPatterns\Minigame\TwentyOneGame\Game;

use DesignPatterns\Minigame\LuckGame\Game2;

Class Engine
{
    public function choose()
    {
        $choice = readline('quer jogar 1 ou 2? (1 = 21 e 2 = luckGame)');

        if ($choice !== '1' && $choice !== '2') {
            return;
        }

        if ($choice == 1) {
            $game = new Game();
            $game->play();
            return;
        } 

        $game = new Game2();
        $game->play();
    }
}