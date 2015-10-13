<?php
/**
 * Tujo
 *
 * @link      http://github.com/tjueschke/interop-config-tutorial for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 */

namespace Tujo\Repository;


use Tujo\ServiceLocator;
use Tujo\Exception\RuntimeException;
use Interop\Config\ObtainsOptions;
use Interop\Config\ConfigurationTrait;

class RepositoryFactory implements ObtainsOptions
{

    use ConfigurationTrait;

    /**
     * Vendor Name for the configuration.
     *
     * @return string
     */
    public function vendorName()
    {
        return 'tujo';
    }

    /**
     * Component Name for the configuration.
     *
     * @return string
     */
    public function componentName()
    {
        return 'repository';
    }

    public function __invoke(ServiceLocator $ServiceLocator)
    {

        $options = $this->options($ServiceLocator->get('config'));

        // check if mandatory options are available or use \Interop\Config\HasMandatoryOptions, see below
        if (empty($options['driverClass'])) {
            throw new RuntimeException(
                sprintf(
                    'Driver class was not set for configuration %s.%s.%s',
                    'doctrine',
                    'connection',
                    'orm_default'
                )
            );
        }

        if (empty($options['params'])) {
            throw new RuntimeException(
                sprintf(
                    'Params was not set for configuration %s.%s.%s',
                    'doctrine',
                    'connection',
                    'orm_default'
                )
            );
        }

        $driverClass = $options['driverClass'];
        $params = $options['params'];

        return new $driverClass($params);
    }
}