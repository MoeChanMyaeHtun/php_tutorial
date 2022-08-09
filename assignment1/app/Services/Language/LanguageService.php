<?php

namespace App\Services\Language;

use Illuminate\Http\Request;
use App\Contracts\Dao\Language\LanguageDaoInterface;
use App\Contracts\Services\Language\LanguageServiceInterface;


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
    $this->languagerDao = $languageDao;
  }
 
  public function getLanguageList()
  {
    return $this->languageDao->getLanguageList();
  }

 
  public function saveLanguage(Request $request)
  {
   return $this->languageDao->saveLanguage($request);
  }

 public function getLanguageById($id)
 {
  return $this->languageDao->getLanguageById($id);
 }

 public function updateLanguageById(Request $request , $id)
 {
  return $this->languageDao->updateLanguageById($request , $id);
 }

 public function deleteLanguageById($id)
 {
  return $this->languageDao->deleteLanguageById($id);
 }
}
