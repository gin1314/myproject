<?php 
  spl_autoload_register();
  
  define('DS', DIRECTORY_SEPARATOR);
  
  
  $var = explode( PATH_SEPARATOR, get_include_path() );
  define('TPL_FILES_DIR', $var[1].DS."template_files");
  define('TPL_CSS_DIR', TPL_FILES_DIR.DS."css");
  define('TPL_HTML_DIR', TPL_FILES_DIR.DS."html");
  define('TPL_PHP_DIR', TPL_FILES_DIR.DS."php");
  define('TPL_JS_DIR', TPL_FILES_DIR.DS."js");

  
  $fg = new FileGenerator;

  $fg->main();
?>