<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class DetectLocale
{
    /**
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        $locale = $this->getLocaleFromDomain($host);

        app()->setLocale($locale);

        URL::defaults(['locale' => $locale]);

        return $next($request);
    }

    protected function getLocaleFromDomain(string $domain): string
    {
        /** @var array<string, string> $domains */
        $domains = config()->array('localization.domains');

        /** @var array<string, string> $domainLocaleMap */
        $domainLocaleMap = array_flip($domains);

        return $domainLocaleMap[$domain] ?? config()->string('app.fallback_locale', 'en');
    }
}
