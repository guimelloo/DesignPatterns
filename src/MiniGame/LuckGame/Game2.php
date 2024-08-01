<?php
namespace DesignPatterns\Minigame\LuckGame ;

use DesignPatterns\Minigame\GameBase;

class Game2 implements GameBase
{
    public function play()
    {
        do {

            $number = readline("tente a sorte, escolha um numero. (0 - 10)");
            $this->engine($number);

        } while ($this->engine($number) !== "win");
    }

    private function engine(int $number)
    {
        $random = rand(0,10);

        if ($number > 10 || $number < 0) {
            return;
        }

        if ($number === $random) {
            return "win";
        }
    }
}