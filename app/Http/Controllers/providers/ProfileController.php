<?php

namespace App\Http\Controllers\providers;

use App\Http\Controllers\Controller;
use App\Models\providers\ProviderRegister;
use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller
{
   public function index($id)
   {
       $profile = ProviderRegister::select()->find($id);
       return view('providers.profile', compact('profile'));
   }
   public function update_profile($id, Request $request)
   {
       try {
           $profile = ProviderRegister::find($id);

           if (!$profile)
               return redirect()->route('dashboard')->with(['error' => 'هذا ألعنصر غير موجود']);

           $filePath = "";

           if ($request->has('image')){
               $filePath = uploadImage('providers-logo', $request->file('image'));
           }

           $profile = ProviderRegister::where('id', $id)->update([
               'name'                      => $request->input("res_name"),
               'email'                     => $request->input("res_email"),
               'phone'                     => $request->input("res_phone"),
               /* 'province_id'             => $request->input("province"),
                'city_id'                   => $request->input("city"),*/
               'address'                   => $request->input("res_address"),
               'password'                  => $request->input("res_password"),
               "ar_details"       => $request->input("res_ar_details"),
               "en_details"       => $request->input("res_en_details"),
               'images'           => $filePath,
           ]);

           return redirect()->route('dashboard')->with(['success' => 'تم ألتحديث بنجاح']);
       } catch (\Exception $ex) {
           return $ex;
           return redirect()->route('dashboard')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
       }
   }
}

/*
 *  if ($request->has('image')){
                    $filePath = uploadImage('products', $request->image);
                    $product = Product::where('id', $id)->update([
                    'image' => $filePath,
                        ]);
                }

                $filesPath = [];
                if ($request->has('images')) {
                    foreach ($request->images as $key=>$image) {
                        $filesPath [$key] =  uploadImage('products', $image);
                    }
                    $product = Product::where('id', $id)->update([
                        'images' => Implode(',', $filesPath)
                    ]);
                }
                $data = $request -> except('_token', 'id');


             $default_lang = get_default_lang();
            if ($request->translation_lang == $default_lang)
                $product = Product::where('id', $id)->update([
                    'name' => $request->name,
                    'slug' => $request->name,
                    'short_description' => $request->short_description,
                    'description' => $request->description,
                    'regular_price' => $request->regular_price,
                    'sale_price' => $request->sale_price,
                    'SKU' => $request->SKU,
                    'stock_status' => $request->stock_status,
                    'featured' => $request->featured,
                    'active' => $request->active,
                    'category_id' => $request->category_id,
                    'attr' => $request->attr,
                    'translation_of' => 0,
                ]);
 *
 * */
