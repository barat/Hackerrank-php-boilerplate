<?php
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

class Staircase
{
    const BLOCK = '#';
    const SPACE = ' ';
    private $staircase = '';

    public function __construct($height)
    {
        for ($i = 1; $i <= $height; $i++) {
            $this->addSpace($height - $i);
            $this->addBlock($i);
            if($i < $height) {
                $this->addFloor();
            }
        }
    }

    public function draw()
    {
        echo $this->staircase;
    }

    private function addSpace($width)
    {
        for ($i = 1; $i <= $width; $i++) {
            $this->staircase .= self::SPACE;
        }
    }

    private function addBlock($width)
    {
        for ($i = 1; $i <= $width; $i++) {
            $this->staircase .= self::BLOCK;
        }
    }

    private function addFloor()
    {
        $this->staircase .= PHP_EOL;
    }
}

$height = stream_get_contents(STDIN);
$staircase = new Staircase($height);
$staircase->draw();
