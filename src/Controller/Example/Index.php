<?php

namespace Fooman\CompilerProdVsDev\Controller\Example;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\RedirectFactory;

class Index extends Action
{
    /**
     * @var RedirectFactory
     */
    private $redirectFactory;

    public function __construct(Context $context, RedirectFactory $redirectFactory)
    {
        parent::__construct($context);
        $this->redirectFactory = $redirectFactory;
    }

    public function execute()
    {
        echo 'OK';
    }
}
