<?php

namespace App\Dao\Language;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Contracts\Dao\Language\LanguageDaoInterface;



/**
 * Data accessing object for Language
 */
class LanguageDao implements LanguageDaoInterface
{

  public function getLanguageList()
  {
    $language = Language::orderBy('created_at', 'asc')->get();
    return $language;
  }

  public function saveLanguage(Request $request)
  {
    $language= new Language();
    $language->lang_name= $request['name'];
    $language->save() ;
    return $language;
  }

  public function getLanguageById($id)
 {
    $language = Language::find($id);
    return $language;
 }
 public function updateLanguageById(Request $request ,$id)
 {
  $langauge=  Language::find($id);
  $langauge->lang_name= $request['name'];
  
  $langauge->save() ;
  return $langauge;
 }

 public function deleteLanguageById($id)
 {
    $language = Language::find($id);
    $language->delete();
 }

  // public function destroy($id) {
  //   $user = Language::destroy($id);
  //   return $user;
  // }

}
