<?php

namespace App\Http\Controllers;

use App\Models\GenerateIdea;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


class GenerateIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vegetables = DB::table('vegetables')->get();
        return view('site.generate-ideas', compact('vegetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generate(Request $request)
    {
        $vegetables = $request->input('vegetables');
        $prompt = "With these ingredients: " . implode(", ", $vegetables) . ", return array of meal names";
        $client = new Client();
        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/engines/davinci-codex/completions', [
                'headers' => [
                    'Authorization' => 'Bearer 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',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'prompt' => $prompt,
                    'max_tokens' => 50,
                ],
            ]);
            $result = json_decode($response->getBody()->getContents());
            dd($result);
            $meal = $result->choices[0]->text;
            return view('site.generate', compact('meal'));
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $error = json_decode($e->getResponse()->getBody()->getContents());
                return response()->json(['error' => $error->error->message], $e->getResponse()->getStatusCode());
            } else {
                return response()->json(['error' => 'Something went wrong'], 500);
            }
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenerateIdea  $generateIdea
     * @return \Illuminate\Http\Response
     */
    public function show(GenerateIdea $generateIdea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenerateIdea  $generateIdea
     * @return \Illuminate\Http\Response
     */
    public function edit(GenerateIdea $generateIdea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenerateIdea  $generateIdea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenerateIdea $generateIdea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenerateIdea  $generateIdea
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenerateIdea $generateIdea)
    {
        //
    }
}
