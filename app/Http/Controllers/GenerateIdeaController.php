<?php

namespace App\Http\Controllers;

use App\Models\GenerateIdea;
use App\Models\User;
use DB;
use Google\Service\PhotosLibrary;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use OpenAI;
use Google_Client;



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

        $prompt = "write only the name of a popular meal contain " . implode(", ", $vegetables);



        try {

            $gptApiKey = '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';
            $client = OpenAI::client($gptApiKey);

            $result = $client->completions()->create([
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => 0.5,
                'max_tokens' => 50,
            ]);

            $meal = $result->choices[0]->text;
            $photo_url = $this->getMealPhotoUnsplash($meal);

            return response()->json(['meal' => $meal, 'photo_url'=>$photo_url]);
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

//    private function getMealPhotoGooglePhotos(string $meal): ?string
//    {
//
//    }

     private function getMealPhotoUnsplash(string $meal): ?string
     {
         $meal_url = str_replace(' ', '-', strtolower(trim($meal)));

         $access_key = 'HuErFYq0HYQEy8Jze8Yif_ZvwtYtAUAxRFg_V7Zh_2w';
         $url = "https://api.unsplash.com/search/photos?query={$meal_url}&client_id={$access_key}&per_page=1";

         $client = new \GuzzleHttp\Client();
         $response = $client->request('GET', $url);

         $data = json_decode($response->getBody(), true);

         return $data['results'][0]['urls']['regular'] ?? null;
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
