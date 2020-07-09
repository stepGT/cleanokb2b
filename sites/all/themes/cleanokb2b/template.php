<?php

/**
 * @param $vars
 * Убрать "Содержимое главной страницы не создано"
 */
function cleanokb2b_preprocess_page(&$vars) {
  if (drupal_is_front_page()) {
    unset($vars['page']['content']['system_main']['default_message']);
    unset($vars['page']['content']['system_main']);
    drupal_set_title('');
  }
}