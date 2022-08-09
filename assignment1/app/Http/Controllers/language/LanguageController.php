<?php

namespace App\Http\Controllers\Language;


use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Services\Language\LanguageServiceInterface;



class LanguageController extends Controller
{
      
        private $languageInterface;

    public function __construct(LanguageServiceInterface $languageInterface)
    {
        $this->languageInterface = $languageInterface;
    }
    public function showLanguageList()
    {
        $languages=  $this->languageInterface->getLanguageList();
        return view('language.index', compact('languages'));
    }
     
    public function showCreateLanguageView()
    {
        $languages = Language::all();
        return view('language.create', compact('languages'));
    }
   
    public function submitCreateLanguageView(Request $request)
    {
        $language = $this->languageInterface->saveLanguage($request);
        return redirect()->route('language.index');
    }

    public function showEditLanguageView($id)
    {
        $language=$this->languageInterface->getLanguageById($id);
        return view('language.edit' , compact('language' ));
    }

    public function submitEditLanguageView(Request $request , $id){
        $language = $this->languageInterface->updateLanguageById($request,$id);
        return redirect()->route('language.index');
    }

    public function deleteLanguage($id)
    {
        $language = $this->languageInterface->deleteLanguageById($id);
        return back();
    }

   

}
