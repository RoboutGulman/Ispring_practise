<?php
namespace App\Module;
use IvanUskov\ImageSpider\ImageSpider;

class ImageProvider implements ImageProviderInterface
{
    private const IMAGE_NUMBER = 5;
    private array $topic;

    public function getUrls(): void
    {
        $this->urls = ImageSpider::find($this->theme);
    }

    public function getImageUrls(): array
    {
        $this->getUrls();
        for ($i = 0; $i < self::IMAGE_NUMBER; $i++)
        {
            $this->urls = array_values(array_filter($this->urls));//убирает элементы массива с пустым значением
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
            'name' => $this->theme = $theme,
            'images' => $this->getImageUrls()
        ];
    }

    public function getData()
    {
        return $this->topic;
    }
}