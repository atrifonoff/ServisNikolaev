<?php

/**
 * Created by PhpStorm.
 * User: krisko
 * Date: 26.06.17
 * Time: 17:18
 */
class Client
{

    private static $lastid;

    private $id;
    private $clientName;
    private $car;


    public  function __construct(string $clientName, Car $car)
    {
        $this ->setClientName($clientName);
        $this  ->car = $car;
        $this ->id = ++self::$lastid;
    }

    /**
     * @param mixed $clientName
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
    }



}

