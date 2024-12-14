<?php

declare(strict_types=1);

namespace T3md\Measure\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy;

class Carrier extends AbstractEntity
{

    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $title = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $address = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $zip = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $city = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $phone = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $www = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email1 = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email2 = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email3 = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email4 = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email5 = '';

    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $description = '';

    /**
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return void
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return void
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return void
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string $www
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * @param string $www
     * @return void
     */
    public function setWww(string $www)
    {
        $this->www = $www;
    }

    /**
     * @return string $email1
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * @param string $email1
     * @return void
     */
    public function setEmail1(string $email1)
    {
        $this->email1 = $email1;
    }

    /**
     * @return string $email2
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * @param string $email2
     * @return void
     */
    public function setEmail2(string $email2)
    {
        $this->email2 = $email2;
    }

    /**
     * @return string $email3
     */
    public function getEmail3()
    {
        return $this->email3;
    }

    /**
     * @param string $email3
     * @return void
     */
    public function setEmail3(string $email3)
    {
        $this->email3 = $email3;
    }

    /**
     * @return string $email4
     */
    public function getEmail4()
    {
        return $this->email4;
    }

    /**
     * @param string $email4
     * @return void
     */
    public function setEmail4(string $email4)
    {
        $this->email4 = $email4;
    }

    /**
     * @return string $email5
     */
    public function getEmail5()
    {
        return $this->email5;
    }

    /**
     * @param string $email5
     * @return void
     */
    public function setEmail5(string $email5)
    {
        $this->email5 = $email5;
    }

    /**
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
