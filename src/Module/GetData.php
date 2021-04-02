<?php
namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;


class GetData
{
    private string $theme;
    private array $urls;

    public function setTopic(string $theme)
    {
        $this->theme = $theme;
    }

    public function getUrls()
    {
        $this->images = ImageSpider::find($this->theme);
    }

    public function getArrayUrls(): array
    {
        $this->getUrls();
        for ($i=0; $i < 5; $i++)
        {
            $images[] = $this->urls[mt_rand(0, count($this->urls) - 1)];
        }
        return $images;
    }

    public function addData()
    {
        $this->topic[] = [
            'header' => $this->theme, 
            'images' => $this->getArrayUrls() 
        ];
    }

    public function getData()
    {
        return $this->topic;
    }
}