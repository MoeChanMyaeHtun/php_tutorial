<?php

namespace App\Contracts\Services\Language;

use Illuminate\Http\Request;


interface LanguageServiceInterface
{

  public function getLanguageList();

  public function saveLanguage(Request $request);

  public function getLanguageById($id);
 
  public function updateLanguageById(Request $request , $id);
 
  public function deleteLanguageById($id);
  
}