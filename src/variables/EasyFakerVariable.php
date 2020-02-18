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

use Craft;

/**
 * @author    lab909
 * @package   EasyFaker
 * @since     1.0.0
 */
class EasyFakerVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
