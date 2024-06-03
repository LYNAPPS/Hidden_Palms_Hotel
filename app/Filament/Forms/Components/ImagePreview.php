<?php
// Create a new PHP file for your custom form component, for example: ImagePreview.php
namespace App\Filament\Forms\Components;

use Filament\Forms\Component;
use Filament\Forms\Components\Component as ComponentsComponent;

class ImagePreview extends ComponentsComponent
{
    public function getView(): string
    {
        return 'filament.components.image_preview'; // This is the name of the Blade view
    }
}
