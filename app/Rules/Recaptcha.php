<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
        return $value;
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',
        [
            'secret' => env('CAPTCHA_SECRET'),
            'response' => $value
        ])->object();


        if( $response->success && $response->score >= 0.7) {
            return true;
            return $response;
        }else{
            return false;
        }
    }
}
