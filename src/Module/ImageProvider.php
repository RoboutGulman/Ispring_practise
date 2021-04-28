<?php
namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider implements ImageProviderInterface
{
    private array $topic;

    public function getUrls(): void
    {
        $this->urls = ImageSpider::find($this->theme);
    }

    public function getImageUrls(): array
    {
        $this->getUrls();
        for ($i = 0; $i < 5; $i++)
        {
            $this->urls = array_values(array_filter($this->urls));
            $lenght = count($this->urls);
            $index_image = mt_rand(0, ($lenght - 1));
            $images[] = $this->urls[$index_image];
            unset($this->urls[$index_image]);  
        }
        return $images;
    }

    public function addTopic($theme)
    {
        $this->topic[] = [
            'header' => $this->theme = $theme,
            'images' => $this->getImageUrls()
        ];
    }

    public function  getData()
    {
        return $this->topic;
    }
}