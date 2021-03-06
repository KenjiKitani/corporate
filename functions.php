<?php
//----------------------------------------------------
// Functions
//
// MEMO: functions配下にファイルを格納するだけで適用されるため、
//       必要な機能以外は削除すること
//----------------------------------------------------

$includes = array('/functions');

foreach ($includes as $include) {
  foreach (glob(__DIR__ . $include . '/*.php') as $file) {
    $template_name = str_replace(
      array(trailingslashit(__DIR__), '.php'),
      '',
      $file
    );
    get_template_part($template_name);
  }
}
