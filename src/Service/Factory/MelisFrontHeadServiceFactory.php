<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisFront\Service\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;
use MelisFront\Service\MelisFrontHeadService;

class MelisFrontHeadServiceFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $sl)
	{
		$melisMelisFrontHeadService = new MelisFrontHeadService();
		$melisMelisFrontHeadService->setServiceLocator($sl);
		
		return $melisMelisFrontHeadService;
	}

}