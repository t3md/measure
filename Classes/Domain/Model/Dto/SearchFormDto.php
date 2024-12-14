<?php

declare(strict_types=1);

namespace T3md\Measure\Domain\Model\Dto;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * This file is part of the "T3md\Measure" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Georg Ringer
 */

/**
 * T3md\Measure
 */
class SearchFormDto extends AbstractEntity
{

    /** @var string */
    protected $searchWord = '';
    
    /** @var int */
    protected $art = 0;
    
    /** @var int */
    protected $school = 0;
    
    /** @var int */
    protected $gender = 0;
    
    /** @var int */
    protected $ineducation = 0;
    
    /** @var int */
    protected $graduate = 0;
    
    /** @var int */
    protected $carrier = 0;
    
    
    /**
     * @return string
     */
    public function getSearchWord(): string
    {
        return $this->searchWord;
    }

    /**
     * @param string $searchWord
     * @return SearchFormDto
     */
    public function setSearchWord(string $searchWord): SearchFormDto
    {
        $this->searchWord = $searchWord;
        return $this;
    }  
    
    /**
     * @return int
     */
    public function getArt(): int
    {
        return $this->art;
    }
    
    /**
     * @param int $art
     * @return SearchFormDto
     */
    public function setArt(int $art): SearchFormDto
    {
        $this->art = $art;
        return $this;
    }  
    
    /**
     * @return int
     */
    public function getSchool(): int
    {
        return $this->school;
    }
    
    /**
     * @param int $school
     * @return SearchFormDto
     */
    public function setSchool(int $school): SearchFormDto
    {
        $this->school = $school;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }
    
    /**
     * @param int $gender
     * @return SearchFormDto
     */
    public function setGender(int $gender): SearchFormDto
    {
        $this->gender = $gender;
        return $this;
    }    
    
    /**
     * @return int
     */
    public function getGraduate(): int
    {
        return $this->graduate;
    }
    
    /**
     * @param int $graduate
     * @return SearchFormDto
     */
    public function setGraduate(int $graduate): SearchFormDto
    {
        $this->graduate = $graduate;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getIneducation(): int
    {
        return $this->ineducation;
    }
    
    /**
     * @param int $ineducation
     * @return SearchFormDto
     */
    public function setIneducation(int $ineducation): SearchFormDto
    {
        $this->ineducation = $ineducation;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getCarrier(): int
    {
        return $this->carrier;
    }
    
    /**
     * @param int $carrier
     * @return SearchFormDto
     */
    public function setCarrier(int $carrier): SearchFormDto
    {
        $this->carrier = $carrier;
        return $this;
    }
    
    public function isEmpty(): bool
    {
        return empty($this->searchWord)  && empty($this->art) && empty($this->school) && empty($this->gender) && empty($this->ineducation) && empty($this->graduate) && empty($this->carrier) ;
    }

}
