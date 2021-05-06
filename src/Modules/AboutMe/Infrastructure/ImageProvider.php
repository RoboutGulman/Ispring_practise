<?php
namespace App\Modules\AboutMe\Infrastructure;
use IvanUskov\ImageSpider\ImageSpider; 
use App\Modules\App\ImageProviderInterface;

class ImageProvider implements ImageProviderInterface
{
    private const IMAGE_NUMBER = 5;
    public function getImageUrls($theme): array
    {
        $urls = ImageSpider::find($theme);
        for ($i = 0; $i < self::IMAGE_NUMBER; $i++)
        {
            $urls = array_values(array_filter($urls));//убирает элементы массива с пустым значением
            $lenght = count($urls);
            $index_image = mt_rand(0, ($lenght - 1));
            $images[] = $urls[$index_image];
            unset($urls[$index_image]);  
        }
        return $images;
    }
}