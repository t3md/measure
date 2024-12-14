<?php

declare(strict_types=1);

namespace T3md\Measure\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy;

/**
 * This class represents a measure, e.g., "DRK".
 */
class Measure extends AbstractEntity
{
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected $title = '';
    
    /** @var int */
    protected $art = 0;
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 2000})
     */
    protected $shortdescription = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 2000})
     */
    protected $aims = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 2000})
     */
    protected $aimgroup = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 2000})
     */
    protected $occupationalarea = '';
    
    /** @var int */
    protected $agestart = 0;
    
    /** @var int */
    protected $ageend = 0;
    
    /** @var int */
    protected $gender = 0;
    
    /** @var int */
    protected $migration = 0;
    
    /** @var int */
    protected $rights = 0;
    
    /** @var int */
    protected $school = 0;
    
    /** @var int */
    protected $graduate = 0;
    
    /** @var int */
    protected $ineducation = 0;
    
    /** @var int */
    protected $duration = 0;
    
    /** @var \DateTime */
    protected $startoffer = null;
    
    /** @var \DateTime */
    protected $registration = null;
    
    /** @Extbase\Validate("StringLength", options={"maximum": 2000}) */
    protected $finance = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $name = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $address = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 10}) */
    protected $zip = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $city = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $person1 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $phone1 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email1 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $person2 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $phone2 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $email2 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $www1 = '';
    
    /** @Extbase\Validate("StringLength", options={"maximum": 255}) */
    protected $www2 = '';
    
    /**
     * file
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;
    
    /** @Extbase\Validate("StringLength", options={"maximum": 2000}) */
    protected $info = '';
    
    /** @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3md\Measure\Domain\Model\Carrier> */
    #[Lazy]
    protected $carrier = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }
    
    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->carrier = $this->carrier ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
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
     * @return int $art
     */
    public function getArt(): int
    {
        return $this->art;
    }
    
    /**
     * @param int $art
     * @return void
     */
    public function setArt(int $art)
    {
        $this->art = $art;
    }
    
    /**
     * @return string $shortdescription
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }
    
    /**
     * @param string $shortdescription
     * @return void
     */
    public function setShortdescription(string $shortdescription)
    {
        $this->shortdescription = $shortdescription;
    }
    
    /**
     * @return string $aims
     */
    public function getAims()
    {
        return $this->aims;
    }
    
    /**
     * @param string $aims
     * @return void
     */
    public function setAims(string $aims)
    {
        $this->aims = $aims;
    }
    
    /**
     * @return string $aimgroup
     */
    public function getAimgroup()
    {
        return $this->aimgroup;
    }
    
    /**
     * @param string $aimgroup
     * @return void
     */
    public function setAimgroup(string $aimgroup)
    {
        $this->aimgroup = $aimgroup;
    }
    
    /**
     * @return string $occupationalarea
     */
    public function getOccupationalarea()
    {
        return $this->occupationalarea;
    }
    
    /**
     * @param string $occupationalarea
     * @return void
     */
    public function setOccupationalarea(string $occupationalarea)
    {
        $this->occupationalarea = $occupationalarea;
    }
    
    /**
     * @return int $agestart
     */
    public function getAgestart()
    {
        return $this->agestart;
    }
    
    /**
     * @param int $agestart
     * @return void
     */
    public function setAgestart(int $agestart)
    {
        $this->agestart = $agestart;
    }
    
    /**
     * @return int $ageend
     */
    public function getAgeend()
    {
        return $this->ageend;
    }
    
    /**
     * @param int $ageend
     * @return void
     */
    public function setAgeend(int $ageend)
    {
        $this->ageend = $ageend;
    }
    
    /**
     * @return int $gender
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    /**
     * @param int $gender
     * @return void
     */
    public function setGender(int $gender)
    {
        $this->gender = $gender;
    }
    
    /**
     * @return int $migration
     */
    public function getMigration()
    {
        return $this->migration;
    }
    
    /**
     * @param int $migration
     * @return void
     */
    public function setMigration(int $migration)
    {
        $this->migration = $migration;
    }
    
    /**
     * @return int $rights
     */
    public function getRights()
    {
        return $this->rights;
    }
    
    /**
     * @param int $rights
     * @return void
     */
    public function setRights(int $rights)
    {
        $this->rights = $rights;
    }
    
    /**
     * @return int $school
     */
    public function getSchool()
    {
        return $this->school;
    }
    
    /**
     * @param int $school
     * @return void
     */
    public function setSchool(int $school)
    {
        $this->school = $school;
    }
    
    /**
     * @return int $graduate
     */
    public function getGraduate()
    {
        return $this->graduate;
    }
    
    /**
     * @param int $graduate
     * @return void
     */
    public function setGraduate(int $graduate)
    {
        $this->graduate = $graduate;
    }
    
    /**
     * @return int $ineducation
     */
    public function getIneducation()
    {
        return $this->ineducation;
    }
    
    /**
     * @param int $ineducation
     * @return void
     */
    public function setIneducation(int $ineducation)
    {
        $this->ineducation = $ineducation;
    }
    
    /**
     * @return int $duration
     */
    public function getDuration()
    {
        return $this->duration;
    }
    
    /**
     * @param int $duration
     * @return void
     */
    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }
    
    /**
     * @return \DateTime $startoffer
     */
    public function getStartoffer()
    {
        return $this->startoffer;
    }
    
    /**
     * @param \DateTime $startoffer
     * @return void
     */
    public function setStartoffer(\DateTime $startoffer)
    {
        $this->startoffer = $startoffer;
    }
    
    /**
     * @return \DateTime $registration
     */
    public function getRegistration()
    {
        return $this->registration;
    }
    
    /**
     * @param \DateTime $registration
     * @return void
     */
    public function setRegistration(\DateTime $registration)
    {
        $this->registration = $registration;
    }
    
    /**
     * @return string $finance
     */
    public function getFinance()
    {
        return $this->finance;
    }
    
    /**
     * @param string $finance
     * @return void
     */
    public function setFinance(string $finance)
    {
        $this->finance = $finance;
    }
    
    /**
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
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
     * @return string $person1
     */
    public function getPerson1()
    {
        return $this->person1;
    }
    
    /**
     * @param string $person1
     * @return void
     */
    public function setPerson1(string $person)
    {
        $this->person1 = $person1;
    }
    
    /**
     * @return string $phone1
     */
    public function getPhone1()
    {
        return $this->phone1;
    }
    
    /**
     * @param string $phone1
     * @return void
     */
    public function setPhone(string $phone1)
    {
        $this->phone1 = $phone1;
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
     * @return string $person2
     */
    public function getPerson2()
    {
        return $this->person2;
    }
    
    /**
     * @param string $person2
     * @return void
     */
    public function setPerson2(string $person2)
    {
        $this->person2 = $person2;
    }
    
    /**
     * @return string $phone2
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
    
    /**
     * @param string $phone2
     * @return void
     */
    public function setPhone2(string $phone2)
    {
        $this->phone2 = $phone2;
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
     * @return string $www1
     */
    public function getWww1()
    {
        return $this->www1;
    }
    
    /**
     * @param string $www1
     * @return void
     */
    public function setWww1(string $www1)
    {
        $this->www1 = $www1;
    }
    
    /**
     * @return string $www2
     */
    public function getWww2()
    {
        return $this->www2;
    }
    
    /**
     * @param string $www2
     * @return void
     */
    public function setWww2(string $www2)
    {
        $this->www2 = $www2;
    }
    
    /**
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function setFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->file = $file;
    }
    
    
    /**
     * @return string $info
     */
    public function getInfo()
    {
        return $this->info;
    }
    
    /**
     * @param string $info
     * @return void
     */
    public function setInfo(string $info)
    {
        $this->info = $info;
    }
    
    /**
     * @param \T3md\Measure\Domain\Model\Carrier $carrier
     * @return void
     */
    public function addCarrier(\T3md\Measure\Domain\Model\Carrier $carrier)
    {
        $this->carrier->attach($carrier);
    }
    
    /**
     * @param \T3md\Measure\Domain\Model\Carrier $carrierToRemove The Carrier to be removed
     * @return void
     */
    public function removeCarrier(\T3md\Measure\Domain\Model\Carrier $carrierToRemove)
    {
        $this->carrier->detach($carrierToRemove);
    }
    
    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3md\Measure\Domain\Model\Carrier> $carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
    
    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3md\Measure\Domain\Model\Carrier> $carrier
     * @return void
     */
    public function setCarrier(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $carrier)
    {
        $this->carrier = $carrier;
    }
}