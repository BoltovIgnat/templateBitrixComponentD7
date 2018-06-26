<?php

class YourNameClassComponent extends CBitrixComponent { // Вместо YourNameClassComponent пишем название своего компонента
  
  public function simpleFunction() { // Оформляем все методы, работающие с логикой компонента, следующим образом, добавляя результат работы метода в массив $arResult
    $arResult['yourVar'] = 'addTextTo - ' . $this->arParams['YOUR_PARAM'];
    return $arResult;
  }

  public function executeComponent() { // Метод, отвечающий за сборку компонента
    if ($this->startResultCache()) {
      $this->arResult = array_merge($this->arResult, $this->simpleFunction()); //Объединяем все результаты методов в arResult
      $this->includeComponentTemplate(); // Подключаем файл template.php, отвечающий за представление
    }
  }
}

?>