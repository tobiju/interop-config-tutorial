<?php
/**
 * Tujo
 *
 * @link      http://github.com/tjueschke/interop-config-tutorial for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 */


namespace Tujo;

/**
 * Class ServiceLocator
 * @package Tujo
 */

class ServiceLocator
{

    /**
     * Some factory classes
     *
     * @var array
     */
    private $factories = array(
        'config' => array(),
        'repository' => 'Tujo\Repository\RepositoryFactory'
        // ...
    );

    public function __construct(array $config)
    {
        $this->factories['config'] = $config;
    }

    /**
     * Get some simple factories
     *
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        // return config simple
        if ($name == 'config' && isset($this->factories['config'])) {
            return $this->factories['config'];
        }

        if (isset($this->factories[$name])) {
            $FactoryClass = new $this->factories[$name]();
            // if your factory implements a factory interface you should check it at this place
            return $FactoryClass->__invoke($this);
        }

        return false;
    }

    /**
     * Check if factory exists
     *
     * @param $name
     * @return bool
     */
    public function has($name)
    {
        return isset($this->factories[$name]);
    }

}