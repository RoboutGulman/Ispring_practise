<?php  

namespace App\Modules\AboutMe\App;

use App\Modules\AboutMe\App\HobbieConfigurationInterface;
use App\Modules\AboutMe\Model\Hobbie;
use App\Modules\AboutMe\App\ImageProviderInterface;

class HobbieService 
{
    private ImageProviderInterface $imageProvider;
    private HobbieConfigurationInterface $configuration;

    public function __construct(
        ImageProviderInterface $imageProvider,
        HobbieConfigurationInterface $configuration 
    )
    {
        $this->imageProvider = $imageProvider;
        $this->configuration = $configuration;
    }

    public function addHobbie(): array
    {
        $hobbyMap = $this->configuration->getHobbiesMap();
        foreach ($hobbyMap as $value) 
        {
            $photos = $this->imageProvider->getImageUrls($value); 
            $hobbie = new Hobbie($value, $photos);     
            $hobbies[] = $hobbie;  
        }
        return $hobbies;                 
    }
}
