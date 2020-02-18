<?php
/**
 * Easy Faker plugin for Craft CMS 3.x
 *
 * Fzaninotto's faker for Craft Cms Twig templates
 *
 * @link      https://github.com/lab909
 * @copyright Copyright (c) 2020 lab909
 */

namespace lab909\easyfaker;

use lab909\easyfaker\variables\EasyFakerVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class EasyFaker
 *
 * @author    lab909
 * @package   EasyFaker
 * @since     1.0.0
 *
 */
class EasyFaker extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var EasyFaker
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('easyFaker', EasyFakerVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'easy-faker',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
