<?php
/**
 * Tujo
 *
 * @link      http://github.com/tjueschke/interop-config for the canonical source repository
 * @copyright Copyright (c) 2015 Tobias Jüschke
 */

namespace Tujo\Repository;


class Contact implements RepositoryInterface {

    public function __invoke( $country, $lang ){
        echo 'Hello '. $country .' in ' . $lang;
    }

}