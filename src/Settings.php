<?php

namespace DesignPatterns;

class Settings
{
    private static ?self $instance = null;

    private function __construct (
        private ?string $website = null,
        private ?string $url = null,
    ) {}

    public static function getInstance(): Settings
    {
        if (isset(self::$instance)) {
            return self::$instance;
        }

        self::$instance = new self;

        return self::$instance;
    }

    public function setWebsiteName(string $website)
    {
        $this->website = $website;
    }

    public function getWebsiteName()
    {
        return $this->website;
    }

    public function setUrl(string $url)
    {
       $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
