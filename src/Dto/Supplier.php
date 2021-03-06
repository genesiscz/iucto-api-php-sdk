<?php

namespace IUcto\Dto;

use IUcto\Utils;

/**
 * DTO for Customer data
 *
 * @author iucto.cz
 */
class Supplier extends SupplierOverview
{
    /**
     * Zobrazované jméno
     *
     * @var string
     */
    protected $nameDisplay;

    /**
     * Telefon
     *
     * @var string
     */
    protected $phone;

    /**
     * Mobil
     *
     * @var string
     */
    protected $cellphone;

    /**
     * WWW
     *
     * @var string
     */
    protected $www;

    /**
     * Adresa
     *
     * @var Address
     */
    protected $address;

    /**
     *  Poznámka
     *
     * @var string
     */
    protected $note;

    /**
     * Číslo účtu 1
     *
     * @var string
     */
    protected $accountNumber1;

    /**
     * Číslo účtu 2
     *
     * @var string
     */
    protected $accountNumber2;

    /**
     * Číslo účtu 3
     *
     * @var string
     */
    protected $accountNumber3;

    /**
     * Číslo účtu 4
     *
     * @var string
     */
    protected $accountNumber4;

    /**
     * ID skupiny dodavatelů
     *
     * @var int
     */
    protected $supplierGroupId;

    /**
     * @param mixed[] $arrayData input data
     */
    public function __construct(array $arrayData)
    {
        parent::__construct($arrayData);

        $this->nameDisplay = $arrayData['name_display'];
        $this->phone = $arrayData['phone'];
        $this->cellphone = $arrayData['cellphone'];
        $this->www = $arrayData['www'];
        $this->address = new Address($arrayData['address']);
        $this->note = $arrayData['note'];
        $this->accountNumber1 = $arrayData['account_number1'];
        $this->accountNumber2 = $arrayData['account_number2'];
        $this->accountNumber3 = $arrayData['account_number3'];
        $this->accountNumber4 = $arrayData['account_number4'];
        $this->supplierGroupId = Utils::getValueOrNull($arrayData, 'supplier_group_id');
    }


    public function getNameDisplay()
    {
        return $this->nameDisplay;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getCellphone()
    {
        return $this->cellphone;
    }

    public function getWww()
    {
        return $this->www;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function getAccountNumber1()
    {
        return $this->accountNumber1;
    }

    public function getAccountNumber2()
    {
        return $this->accountNumber2;
    }

    public function getAccountNumber3()
    {
        return $this->accountNumber3;
    }

    public function getAccountNumber4()
    {
        return $this->accountNumber4;
    }

    /**
     * @return int
     */
    public function getSupplierGroupId()
    {
        return $this->supplierGroupId;
    }

}
