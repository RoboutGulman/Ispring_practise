<?php  

namespace App\Modules\App;

use App\Modules\AboutMe\Infrastructure\ConstHobbyConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class HobbieService 
{
    private array $topic;

    public function __construct()
    {
        foreach (ConstHobbyConfiguration::getHobbiesMap() as $value) 
        {
            $this->addHobbie($value);
        }
    }

    public function getData()
    {
        return $this->topic;
    }

    public function addHobbie(string $title): void
    {
        $imageProvider = new ImageProvider();
        $photos = $imageProvider->getImageUrls($title); 
        $this->topic[] = [
            'name' => $title,
            'images' => $photos,
        ];            
    }
}
