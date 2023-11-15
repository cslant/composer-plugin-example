<?php

namespace Cslant\ComposerPlugin\Example;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\EventDispatcher\EventSubscriberInterface;

class Plugin implements PluginInterface, EventSubscriberInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        echo __METHOD__ . "\n";
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }

    public static function getSubscribedEvents()
    {
        return array(
            'post-install-cmd' => 'installOrUpdate',
            'post-update-cmd' => 'installOrUpdate',
        );
    }

    public function installOrUpdate($event)
    {
        echo __METHOD__ . "\n";
        echo get_class($event) . "\n";
        echo $event->getName() . "\n";
    }
}
