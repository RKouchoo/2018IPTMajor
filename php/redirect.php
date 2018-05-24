<?php
  function redirect($url) {
    if(!headers_sent()) {
      //if headers not sent yet... then do php redirect
    header('location: '.$url);
    exit;
  } else {
    // if headers are sent...do javascript redirect...if javascrippt disabled, do html redirect.
    echo '<script type="text/javascript">';
    echo 'window. location.href="'.$url.'";';
    echo '</script>';
    echo '<noscript>';
    echo 'meta http-equiv="refresh" content="0;url= '.$url.'" />';
    echo '</noscript>';
    exit;
    }
  }

?>
