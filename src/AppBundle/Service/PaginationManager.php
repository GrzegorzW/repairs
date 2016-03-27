<?php

namespace AppBundle\Service;

use Knp\Component\Pager\Paginator;
use Symfony\Component\HttpFoundation\RequestStack;

class PaginationManager
{
    private $paginator;
    private $requestStack;
    private $limit = 20;

    public function __construct(Paginator $paginator, RequestStack $requestStack)
    {
        $this->paginator = $paginator;
        $this->requestStack = $requestStack;
    }

    public function myPagination($query)
    {
        $request = $this->requestStack->getCurrentRequest();

        if ($request->getSession()->get('limit')) {
            $this->limit = $request->getSession()->get('limit');
        }

        $pagination = $this->paginator->paginate(
            $query,
            $request->query->getInt('page', 1)/*page number*/,
            $this->limit/*limit per page*/
        );

        return $pagination;
    }
}