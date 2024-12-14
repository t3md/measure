<?php

declare(strict_types=1);

namespace T3md\Measure\Controller;

use T3md\Measure\Domain\Model\Measure;
use T3md\Measure\Domain\Model\Dto\SearchFormDto;
use T3md\Measure\Domain\Repository\MeasureRepository;
use T3md\Measure\Domain\Repository\CarrierRepository;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Pagination\SlidingWindowPagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class MeasureController extends ActionController
{
    protected MeasureRepository $measureRepository;
    protected CarrierRepository $carrierRepository;    


    public function __construct(
        MeasureRepository $measureRepository,
        CarrierRepository $carrierRepository
    ){
        $this->measureRepository = $measureRepository;
        $this->carrierRepository = $carrierRepository;
    }
    
    /*
    * @IgnoreValidation("SearchFormDto)")
    */

    public function searchAction(SearchFormDto $searchForm = null): ResponseInterface
    {

        $searchForm = $searchForm ?? new SearchFormDto();
        $carriers = $this->carrierRepository->findAll();

        $maximumLinks = 15;

        if ($searchForm->isEmpty()) {
            $measures = $this->measureRepository->findAll();
            $itemsPerPage = 1000;
       } else {
            $measures = $this->measureRepository->findSearchForm($searchForm);
            $itemsPerPage = 20;
       }

        $count = count($measures);

        $currentPage = $this->request->hasArgument('currentPageNumber')
            ? (int)$this->request->getArgument('currentPageNumber')
            : 1;
            
        


        $paginator = new QueryResultPaginator(
            $measures,
            $currentPage,
            $itemsPerPage
        );

        $pagination = new SlidingWindowPagination(
            $paginator,
            $maximumLinks,
        );

        $this->view->assignMultiple([
            'count' => $count,
            'pagination' => $pagination,
            'paginator' => $paginator,
            'currentPageNumber'  => $currentPage,
            'carriers' => $carriers,
            'searchForm' => $searchForm,
        ]);        
        return $this->htmlResponse();
    }

    
    
    public function indexAction(): ResponseInterface
    {
        $this->view->assign('measures', $this->measureRepository->findAll());
        return $this->htmlResponse();
    }
    
    public function showAction(Measure $measure): ResponseInterface
    {
        $this->view->assign('measure', $measure);
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($measure);
        return $this->htmlResponse();
    }
    
    
    
}
