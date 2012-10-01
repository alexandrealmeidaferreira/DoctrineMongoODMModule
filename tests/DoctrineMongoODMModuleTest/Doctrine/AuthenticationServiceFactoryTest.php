<?php

namespace DoctrineMongoODMModuleTest\Doctrine;

use DoctrineMongoODMModuleTest\AbstractTest;

class AuthenticationServiceFactoryTest extends AbstractTest
{
    public function testAuthenticationStorageFactory(){

        $storage = $this->serviceManager->get('doctrine.authenticationservice.odm_default');
        $this->assertInstanceOf('Zend\Authentication\AuthenticationService', $storage);
    }
}
