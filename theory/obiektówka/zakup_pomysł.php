<?php 

declare(strict_types=1);


class SoldSth{

    private const FOR_SALE = 15;
    private static int $sold = 0;
    public string $kanapka = "z masłem"; 

    public static function sold(): int
    {
        return self::$sold;
    }

    public function __construct()
    {
        if  (self::$sold < self::FOR_SALE) {
            self::$sold += 1;
            echo "sprzedano nowe mieszkanie: " .self::$sold;
        } else {
            echo 'Mieszkania wyprzedane!';
        }

    }
    
}

$sold1 = new SoldSth();
// var_dump($sold1::sold());
var_dump($sold1::sold());
$x = $sold1->kanapka;
var_dump($x);
$sold2 = new SoldSth();


