<?php
/**
 * Tujo
 *
 * @link      http://github.com/tjueschke/interop-config-tutorial for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 */
namespace Tujo\Repository;

/**
 * Class RepositoryPluginManager
 *
 * <code>
 *  $RepositoryManager = new Tujo\Repository\RepositoryPluginManager();
 *  $RepositoryManager->contact(1,2);
 *  $RepositoryManager->get('contact')->__invoke(3,4);
 * </code>
 *
 */

class RepositoryPluginManager
{

    private $config = array();

    public function __construct($config = array()){
        $this->config = $config;

        // use config params in here
        var_dump($config);

    }
}