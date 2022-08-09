<?php

namespace App\Contracts\Dao\Language;

use Illuminate\Http\Request;

interface LanguageDaoInterface
{
  
  public function getLanguageList();

  public function saveLanguage(Request $request);

 public function getLanguageById($id);

 public function updateLanguageById(Request $request , $id);

 public function deleteLanguageById($id);
}