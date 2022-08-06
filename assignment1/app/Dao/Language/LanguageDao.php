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
    $languages = Language::all();
    return $languages;
  }


  public function create() {

  }

  public function store($request) {
    $request->validate([
      'language_name'=>'required',
      'id'=>'required'

    ]);
    Language::create([
        'Language_name'=>$request->input('Language_name'),
        // 'id'=>$request->input('Language_id')
    ]);
  }

  public function show($id) {
    $languages = Language::find($id);
    return $languages;
  }

  public function update(Request $request, $id) {
    $request->validate([
      'Language_name'=>'required',
      'id'=>'required'
  ]);

  Language::find($id)->update([
      'Language_name'=>$request->input('Language_name'),
      'Language_id'=>$request->input('Language_id')
  ]);
  }

  public function destroy($id) {
    $user = Language::destroy($id);
    return $user;
  }

}
