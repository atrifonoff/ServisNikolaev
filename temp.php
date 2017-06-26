<?php
/**
 * Created by PhpStorm.
 * User: krisko
 * Date: 26.06.17
 * Time: 16:03
 */

class Client

{

    private static $lastid;


    private $id;
    private $clientName;
    private $carBrand;
    private $carModel;
    private $carEngine;
    private $carVinNumber;
    private $carYearOfManufacture;

    /**
     * Client constructor.
     * @param $clientName
     * @param $carBrand
     * @param $carModel
     * @param $carEngine
     * @param $carVinNumber
     * @param $carYearOfManufacture
     */
    public function __construct(string $clientName, string $carBrand, string $carModel, string $carEngine, string $carVinNumber, int $carYearOfManufacture)
    {
        $this->setClientName($clientName);
        $this ->id = ++self::$lastid;

    }

    /**
     * @param string $clientName
     */
    public function setClientName(string $clientName)
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