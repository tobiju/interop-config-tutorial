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

    public function __construct($config = array()){
        // use config params in here
        printf('Yeah! You get the correct configs. See below:');
        var_dump($config);
    }
}