<?php

declare(strict_types=1);


class SystemZamków{

    private const DOORS_NUMBER = 6;

    private int $doorLockCode;

    private bool $closed = true;


    public function __construct(int $doorCode)
    {
        if (strlen((string) $doorCode) < 6){
            echo "Kod jest za krótki!!";
        } else{
            $this -> doorLockCode = $doorCode;
        }
    }

    public function close(): void{
        $this->closed = false;
    }

    public function open(int $code): void{
        if ($code === $this->doorLockCode) {
            $this->closed = true;
        } else {
            'błąd';
        }
    }

    public function isOpen(): bool 
    {
        return !$this->closed;
    }


}

$newDoorCode = rand(100000, 999999);
$flat = new SystemZamków($newDoorCode);
$flat->open($newDoorCode);
$flat->isOpen();