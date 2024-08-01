<?php
namespace DesignPatterns\Minigame\TwentyOneGame ;

use DesignPatterns\Minigame\GameBase;

class Game implements GameBase
{
    public function play()
    {
        $number = $this->getNumber();

        $this->engine($number);
    }

    private function getNumber()
    {
        return readline('quantas vezes deseja embaralhar? (1 - 30)');
    }

    private function winnerVerification(int $number)
    {
        do {

            if ($this->engine($number) === 21) {
                return "vencedor";
            }

        } while ($this->engine($number) < 21);

        if ($number > 21) {
            $number = 0;
        }
    }

    private function engine(int $number)
    {
        if ($number < 1 || $number > 30) {
            return;
        }

        $random = rand(1, 30);

        if ($number >= $random) {
            $number = rand(1, 21);
        }else {
            return;
        }

        $this->winnerVerification($number);
    }

}