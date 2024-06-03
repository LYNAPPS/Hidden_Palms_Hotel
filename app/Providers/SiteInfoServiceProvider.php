<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SiteInfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $siteInfo = SiteInfo::first();
        $contact = Contact::with(
            'phones',
            'emails'
        )->first();
        $siteInfo = SiteInfo::first();
        $contact = Contact::with(
            'phones',
            'emails'
        )->first();
        View::share('siteInfo', $siteInfo);
        View::share('contact', $contact);
    }
}
