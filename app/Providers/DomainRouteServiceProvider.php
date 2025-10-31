<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class DomainRouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->extend('url', function (UrlGenerator $urlGenerator) {
            $locale = app()->getLocale();
            $domain = config()->string("localization.domains.{$locale}");

            if ($domain) {
                $urlGenerator->useOrigin("https://{$domain}");
                $urlGenerator->useAssetOrigin("https://{$domain}");
            }

            return $urlGenerator;
        });
    }
}
