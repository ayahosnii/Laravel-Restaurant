<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\admin\Language;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::select()->paginate();
        return view('admin.languages.index', compact('languages'));
    }


    public function create()
    {
        return view('admin.languages.create');
    }


    public function store(LanguageRequest $request)
    {
        try {
            Language::create($request->except(['_token']));
            return redirect()->route('admin.languages')->with(['success' => 'نم اضافة لغة بنجاح']);
        }catch (\Exception $ex){
            return redirect()->route('admin.languages')->with(['error' => 'حدث خطأ برجاء المحاولة لاحقا']);
        }
    }

    public function show(Language $language)
    {
        //
    }

    public function edit($id)
    {
        $language = Language::select()->find($id);

        if(!$language) {
            return redirect()->route('admin.languages')->with(['error' => 'هذه اللغة غير موجودة']);
        }
        return view('admin.languages.edit', compact('language'));
    }

    public function update(LanguageRequest $request)
    {
        $language = Language::find('$id');
        return redirect()->route('admin.languages', compact($language));
    }

    public function destroy($id)
    {
        try {
            $language = Language::find($id);
            if(!$language) {
                return redirect()->route('admin.languages', $id)
                    ->with(['error' => 'هذه اللغة غير موجوده']);
            }

            $language -> delete();
            return redirect()->route('admin.languages')
                ->with(['success' => 'تم حذف اللغة بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.languages')->with(['error' => 'حدث خطأ برجاء المحاولة فيما بعد']);{

            }
        }
    }
}
