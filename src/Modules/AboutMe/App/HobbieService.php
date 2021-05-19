<?php  

namespace App\Modules\App;

use App\Modules\AboutMe\Infrastructure\ConstHobbyConfiguration;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\Infrastructure\ImageProvider;

class HobbieService 
{
    private array $hobbies;

    public function __construct()
    {
        foreach (ConstHobbyConfiguration::getHobbiesMap() as $value) 
        {
            $this->addHobbie($value);
        }
    }

    public function getData()
    {
        return $this->hobbies;
    }

    public function addHobbie(string $title): void
    {
        $imageProvider = new ImageProvider();
        $photos = $imageProvider->getImageUrls($title); 
        $hobbie = new Hobbie($title, $photos);     
        $this->hobbies[] = $hobbie;                   
    }
}
