<?php
  // set doctitle
  $doctitle = 'Bed and Breakfast Tintern' . ( ($doctitle) ? " - $doctitle" :
                                             (($title)    ? " - $title"    : '' ));

  // ensure arrays have been declared
  if(!is_array($quotes))        { $quotes     = ($quotes)     ? array($quotes)     : array(); }
  if(!is_array($stylesheet))    { $stylesheet = ($stylesheet) ? array($stylesheet) : array(); }
  if(!is_array($javascript))    { $javascript = ($javascript) ? array($javascript) : array(); }

  // remove empty values from the arrays
  foreach(array('quotes', 'stylesheet', 'javascript') as $var) {
    $$var = array_diff($$var, array(''));
  }

  if($template) {
    array_unshift($stylesheet,"bedandbreakfasttintern-common.css");
    array_unshift($stylesheet,"bedandbreakfasttintern-$template.css");
  } else {
    array_unshift($stylesheet,"bedandbreakfasttintern.css");
  }
  foreach($stylesheet as $css) {
    $ie_only_css = str_replace(".css", "-ie-only.css", $css);
    $stylesheet_html .= "            <link href='templates/$css'         rel='stylesheet' type='text/css' media='all' />\n";
    $stylesheet_html .= "<!--[if IE]><link href='templates/$ie_only_css' rel='stylesheet' type='text/css' media='all' /><![endif]-->\n";
  }

?>