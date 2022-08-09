<?php

namespace App\Http\Controllers\API;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageAPIController extends Controller
{
    public function showLanguageList()
    {
        $langs = Language::all();
        return view('api.language.index' ,compact('langs'));  
    }

    public function createLanguage(Request $request)
    {
        // dd($request->all());
        $lang = new Language();
        $lang->lang_name = $request['lang_name'];
        $lang->save();
        return response()->json([ 'lang' => $lang ]);
    }

    public function editLanguage(Request $request , $id)
    {
        $lang =  Language::find($id);
        $lang->lang_name = $request['lang_name'];
        $lang->save();
        return response()->json([ 'lang' => $lang ]);
    }

    public function deleteLanguage($id)
    {
        $lang = Language::find($id);
        $lang->delete();
    }
}
