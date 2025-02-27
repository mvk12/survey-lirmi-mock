<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GetSurveyListByUser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return response()->json([
            'state' => [
                'hasError' => false,
                'codigoError' => null,
                'tipoError' => null,
                'mensajeError' => null,
                'mensajeDetalle' => null,
            ],
            'result' => collect(range(0, 10))->map(fn ($item) => [
                'url' => config('app.url').'/view/'.Str::uuid()->toString(),
                'name' => \fake()->words(3, asText: true),
                'publicationDate' => (new Carbon(fake()->dateTimeThisMonth()))->utc()->format('Y-m-d\TH:i:s.uP'),
            ])->toArray(),
        ]);
    }
}
