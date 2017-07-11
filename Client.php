<?php

/**
 * Created by PhpStorm.
 * User: krisko
 * Date: 26.06.17
 * Time: 17:18
 */

/**
 * Class Client
 * -ид номер
 * -име
 * -кола
 * -ремонти масив
 *
 */
class Client
{

    private static $lastid;

    private $carRepairs = [];

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

    /**
     * @return mixed
     */
    public function getClientName()
    {
        return $this->clientName;
    }




}

