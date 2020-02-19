<?php
/**
 * Easy Faker plugin for Craft CMS 3.x
 *
 * Fzaninotto's faker for Craft Cms Twig templates
 *
 * @link      https://github.com/lab909
 * @copyright Copyright (c) 2020 lab909
 */

namespace lab909\easyfaker\variables;

use lab909\easyfaker\EasyFaker;
use Faker\Factory;
use Craft;

/**
 * @author    lab909
 * @package   EasyFaker
 * @since     1.0.0
 */
class EasyFakerVariable
{
    private $faker;

    // Public Methods
    // =========================================================================

    /**
     * Returns the faker instance
     * 
     * @param null $optional
     * @return string
     */
    public function getFaker()
    {
        if(empty($this->faker)){
            $this->faker = Factory::create();
        }

	    return $this->faker;
    }
}
