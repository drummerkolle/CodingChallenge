<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SimpsonsQuote>
 */
class SimpsonsQuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $api_url = 'https://thesimpsonsquoteapi.glitch.me/quotes';
        $response = Http::withToken('token')->get($api_url);
        $quote = json_decode($response->body());

        return [
            'quote' => $quote[0]->quote,
            'link' => $quote[0]->image,
        ];
    }
}
