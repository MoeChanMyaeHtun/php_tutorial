<?php

namespace App\Contracts\Dao\Language;

use Illuminate\Http\Request;
use App\Models\Language\Langauge;

interface LanguageDaoInterface
{
  
  public function getLanguageList();

  public function create();

  public function store(Request $request);

  public function show($id);

  public function update(Request $request, $id);

  public function destroy($id);
}