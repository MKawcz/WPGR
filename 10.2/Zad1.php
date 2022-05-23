<?php
interface Movable{
    function moveUp(): void;
    function moveDown(): void;
    function moveLeft(): void;
    function moveRight(): void;
}

class MovablePoint implements Movable {
    private $x;
    private $y;
    private $xSpeed;
    private $ySpeed;

    /**
     * @return float|int|string
     */
    public function getX(): float|int|string
    {
        return $this->x;
    }

    /**
     * @return float|int|string
     */
    public function getY(): float|int|string
    {
        return $this->y;
    }

    /**
     * @return float|int|string
     */
    public function getXSpeed(): float|int|string
    {
        return $this->xSpeed;
    }

    /**
     * @return float|int|string
     */
    public function getYSpeed(): float|int|string
    {
        return $this->ySpeed;
    }



    /**
     * @param $x
     * @param $y
     * @param $xSpeed
     * @param $ySpeed
     */
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        if(is_numeric($x) && is_numeric($y) && is_numeric($xSpeed) && is_numeric($ySpeed)) {
            $this->x = $x;
            $this->y = $y;
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        } else {
            die("Podano niewłaściwe wartości");
        }
    }


    public function __toString(): string
    {
        return "Pozycja x: $this->x\n".
            "Pozycja y: $this->y\n".
            "Prędkość x: $this->xSpeed\n".
            "Prędkość y: $this->ySpeed\n";
    }


    function moveUp(): void
    {
        $this->y = $this->y + $this->ySpeed;
    }

    function moveDown(): void
    {
        $this->y = $this->y - $this->ySpeed;
    }

    function moveLeft(): void
    {
        $this->x = $this->x - $this->xSpeed;
    }

    function moveRight(): void
    {
        $this->x = $this->x + $this->xSpeed;
    }
}


?>