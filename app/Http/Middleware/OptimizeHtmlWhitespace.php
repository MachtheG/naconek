<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OptimizeHtmlWhitespace
{
    /**
     * Handle an incoming request and optimize the outgoing string buffer.
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** @var Response $response */
        $response = $next($request);

        // Only compress standard successful HTML page streams
        if ($response->isSuccessful() && str_contains($response->headers->get('Content-Type', ''), 'text/html')) {
            $content = $response->getContent();

            // Strip redundant multi-line spacing, tabs, and carriage returns
            $optimizedContent = preg_replace([
                '/\s+/u',                   // Compress sequential blank spaces into a single space
                '/<!--.*?-->/s'    // Clear standard hidden background HTML comments safely
            ], [
                ' ',
                ''
            ], $content);

            $response->setContent($optimizedContent);
        }

        return $response;
    }
}