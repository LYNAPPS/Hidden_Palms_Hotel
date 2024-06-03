<?php

namespace App\Filament\Resources\BlogPostResource\Pages;

use App\Filament\Resources\BlogPostResource;
use Filament\Forms\Form as FilamentForm; // Correct namespace
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CreateBlogPost extends CreateRecord
{
    protected static string $resource = BlogPostResource::class;
}
