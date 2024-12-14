<?php

declare(strict_types=1);

namespace T3md\Measure\Domain\Repository;

use T3md\Measure\Domain\Model\Dto\SearchFormDto;
use T3md\Measure\Domain\Model\Measure;
use T3md\Measure\Domain\Repository\CarrierRepository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Measure>
 */
class MeasureRepository extends Repository
{

    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
    
    /**
     * @param array $searchFormDto
     */
    public function findSearchForm(
        SearchFormDto $searchFormDto,
        $constraints = []
    ): QueryResultInterface
    {

        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($searchFormDto);
        
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(false);
        $query->setOrderings([
            'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
        ]);
                    
        if ($searchFormDto) {
            
            $search        = $searchFormDto->getSearchWord();
            $school        = $searchFormDto->getSchool();
            $art           = $searchFormDto->getArt();
            $gender        = $searchFormDto->getGender();
            $ineducation   = $searchFormDto->getIneducation();
            $graduate      = $searchFormDto->getGraduate();
            $carrier       = $searchFormDto->getCarrier();

            $constraints[] = $query->logicalOr(
                $query->like('shortdescription', '%' . $search . '%'),
                $query->like('occupationalarea', '%' . $search . '%'),
                $query->like('title', '%' . $search . '%'),
                $query->like('info', '%' . $search . '%'),
            );
            
 
            if ($school){
                $constraints[] = $query->equals('school', $school);
            }
            if ($graduate){
                $constraints[] = $query->equals('graduate', $graduate);
            }
            if ($ineducation){
                $constraints[] = $query->equals('ineducation', $ineducation);
            }
            if ($gender){
                $constraints[] = $query->equals('gender', $gender);
            }
            if ($art){
                $constraints[] = $query->equals('art', $art);
            }	
            if ($carrier){
                $constraints[] = $query->contains('carrier', $carrier);
            }	


        }

         //   \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump(count($constraints));
        
                
        if (count($constraints)) {
          // $query->matching($query->logicalAnd($constraints));
           $query->matching($query->logicalAnd(...array_values($constraints)));
        }
        
        return $query->execute();
    }
}
