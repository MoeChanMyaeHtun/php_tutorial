<?php

namespace App\Services\Language;

use App\Contracts\Dao\Language\LanguageDaoInterface;
use App\Contracts\Services\Language\LanguageServiceInterface;
use Illuminate\Http\Request;


class LanguageService implements LanguageServiceInterface
{
 
  private $languageDao;
  /**
   * Class Constructor
   * @param LanguageDaoInterface
   * @return
   */
  public function __construct(LanguageDaoInterface $languageDao)
  {
    $this->languageDao = $languageDao;
  }
 
  public function getLanguageList()
  {
    return $this->languageDao->getLanguageList();
  }

  public function create() 
  {
    return $this->langaugeDao->create();
  }

  public function store(Request $request) 
  {
    return $this->LanguageDao->store($request);
  }

  public function show($id) 
  {
    return $this->languageDao->show($id);
  }

  public function update(Request $request, $id) 
  {
    return $this->languageDao->update($request, $id);
  }

  public function destroy($id) 
  {
    return $this->languageDao->destroy($id);
  }

}
