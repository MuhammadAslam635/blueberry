<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GeoLocationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $ip = $request->ip();

    //     // For local testing, use a public IP

    //     if ($ip == '127.0.0.1' || $ip == '::1') {
    //         $ip = '8.8.8.8'; // Google's public DNS for testing
    //         abort(403, 'Service not available for local testing'); // Abort with a 403 response
    //     }

    //     // Use Guzzle to make the API request

    //     $client = new Client;

    //     $response = $client->get("http://www.geoplugin.net/json.gp?ip={$ip}");

    //     $location = json_decode($response->getBody()->getContents(), true);

    //     // Check if the location is available

    //     if (! empty($location) && $location['geoplugin_countryCode'] == 'PK') {
    //         // Location is available, continue with the request
    //         return $next($request);
    //     } else {
    //         abort(403, 'Service not available for your location'); // Abort with a 403 response
    //     }
    // }
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        session()->put('currency', 'Rs');
        // For local testing, use a public IP

        if ($ip == '127.0.0.1' || $ip == '::1') {
            $ip = '8.8.8.8'; // Google's public DNS for testing

            return $next($request);
        }

        // Use Guzzle to make the API request

        $client = new Client;

        $response = $client->get("http://www.geoplugin.net/json.gp?ip={$ip}");

        $location = json_decode($response->getBody()->getContents(), true);

        // Check if the location is available

        if (! empty($location) && $location['geoplugin_countryCode'] == 'PK') {
            // Location is available, continue with the request
            return $next($request);
        } else {
            // Check if the current route is already the service-not-available route
            $route = $request->route();
            if ($route !== null && $route->getName() !== 'service-not-available') {
                return redirect()->route('service-not-available'); // Redirect to service-not-available route
            } else {
                // If the current route is already the service-not-available route, return the response
                return $next($request);
            }
        }
    }
}
