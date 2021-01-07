<?php

namespace Kanboard\Plugin\KangarooJump;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        $this->template->setTemplateOverride('header', 'KangarooJump:header');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'KangarooJump';
    }

    public function getPluginDescription()
    {
        return t('You can switch from one task to another by entering number on any page of your Kanboard');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.2.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/KangarooJump';
    }

}
