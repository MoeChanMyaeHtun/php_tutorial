<?php

namespace App\Contracts\Services\Language;

use Illuminate\Http\Request;


interface LanguageServiceInterface
{

  public function getLanguageList();

  public function create();

  public function store(Request $request);

  public function show($id);

  public function update(Request $request, $id);

  public function destroy($id);
  
}