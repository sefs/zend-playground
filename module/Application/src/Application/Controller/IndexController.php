<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Log;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$writer = new Log\Writer\FirePhp;
		$logger = new Log\Logger();
    	$logger->addWriter($writer);
    	$logger->log(Log\Logger::INFO, 'Informational message asd');

        return new ViewModel();
    }

    public function testAction(){
    	// return new ViewModel();
    }
}
