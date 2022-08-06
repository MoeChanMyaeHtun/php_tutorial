<?php

namespace App\Http\Controllers\Language;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\Services\Language\LanguageServiceInterface;



class LanguageController extends Controller
{
      
    private $languageInterface;
    /**
     * Create a new controller instance.
     * @param LanguageServiceInterface $languageServiceInterface
     * @return void
     */
    public function __construct(LanguageServiceInterface $languageServiceInterface)
    {
        
        $this->languageInterface = $languageServiceInterface;
    }

    public function index() {

        $language = $this->languageInterface->getLanguageList();
        return view('language.index',['language'=>$language]);
    }

    public function create(){
        return view('language.create');
    }
    
    public function store(Request $request) {
        
        $language= $this->languageInterface->store($request);
        return redirect()->back()->with('status', "language Created Successfully");
       
    }
    
    public function show($id) {

        $language = $this->languageInterface->show($id);
        return view('language.edit', ['language'=>$language]);
    }

    public function update(Request $request, $id) {
        
        $language= $this->languageInterface->update($request, $id);
        return redirect('language/index')->with('status', "language Updated Successfully");
    }

    public function destroy($id) {

        $language= $this->subjectInterface->destroy($id);
        return redirect()->back()->with('status', "language Deleted Successfully");
    }

   

}
