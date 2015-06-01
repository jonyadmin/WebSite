<?php if(!defined('EFFICIENT_ROOT')) exit;

  abstract class Controller {

    public $result, $statistics;
    public $dbstruct, $respaths, $mediaext;
      
    public function setStatistics($key, $val) {
      if(!isset($this->statistics[$key][$val])) {
        $this->statistics[$key][$val] = 1;
      }
      else {
      $this->statistics[$key][$val]++;
      }
    }
      
    public function setAttr($key, $value) {
      $this->result[$this->dbstruct[$key]] = $value;
    }
      
    public function getAttr($key) {
      return $this->result[$this->dbstruct[$key]];
    }
      
    public function __construct($db_struct, $res_paths, $file_ext) {

      $this->dbstruct = $db_struct;
      $this->language = $language;
      $this->respaths = $res_paths;
      $this->mediaext = $file_ext;
      
    }
    
  }

  // --- ERODS settings
  
  function viewSettings($options) {
  
    include('layout/viewsettings/viewsettings.php');
  
  }
  
  // --- Error reporting and debug

    // 1 for error_reporting
    // 2 for display_error
    // 3 for error_reporting + display_error
    // 0 for both off

  function global_reporting($int) {
  
    if($int == 0) {
      error_reporting(0);
      ini_set('display_errors', 0);
    }
    
    $report_list = array(
    1 =>  "error_reporting(E_ALL);",
    2 =>  "error_reporting(E_ALL | E_STRICT);",
    4 =>  "ini_set('display_errors', 1);",
    );
  
    for($i = 0;$i <= count($report_list);$i++)
      if($int & pow(2,$i))
        eval($report_list[pow(2,$i)]);
  
  }

  // --- Statistics
  
  function runStat() {
  
  global $options;
  
  
  $exec = benchmark('Main script', 'stop');
  
  if(DEBUG == TRUE) {
    
    echo '<b>Debug / Loading times</b> (time, relative percentage)<br />';
    
    foreach(benchmark('view') as $task => $time) {
      
      $time = (isset($time['exec_time'])) ? $time['exec_time'] : benchmark($task, 'stop');
      $time = number_format($time,(4+strlen(ceil(1/$time))));
    
      echo ucfirst($task) . ': ' . $time . ' (' . number_format(($time/$exec)*100, 2) . '%) <br />';
    
    }
  
  }
  
  $mySQLc = Statistics::queries(TRUE);
  
    if(!isset($mySQLc)) {
    $mySQLc = 0;
    }
    
  printf(message('stat_pageexec'), number_format($exec, 4), $mySQLc);
    
  if(count(Settings::get('main', 'plugins', 'plugin_list')) > 0) {
    echo '<b>'. message('stat_plugins') . '</b> ';
    
      $plugin_list = (string)"";
    
      foreach(Settings::get('main', 'plugins', 'plugin_list') as $key => $plugin_name) {
      $plugin_list .= $plugin_name . ", ";
      }
      
    echo substr($plugin_list, 0, -2);
  }
  
  }
  
  function errorHandler($error, $bypass = FALSE, $code=0) {
    
    static $errorList;
    $errorList[$code] = TRUE;
    if(!defined('CONTENT_ONLY') || $bypass == TRUE) {
      require("root/actions/error.php");
    }
  }

  function debugHandler($debug) {
  
    if(!defined('CONTENT_ONLY')) {
      require("layout/debug.php");
    }
  }    

  // --- Top navigation
  
  function navigationMenu($nav) {
    
      foreach($nav['main'] as $curNum => $curItem) {
      
      echo '
      <div id="nav_' . $curNum . '" class="nav_num simoni">
      
      <div class="post-simoni">
      
      <a ';
        
        if(isset($curItem['act']))
          echo ' href="?act=' . $curItem['act'] . '" ';
          
        echo '>' . $curItem['name'] . '</a></div>';      


        if(is_array($nav['children'][$curNum])) {
          foreach($nav['children'][$curNum] as $num => $child) {
          echo '
          <!--<div class="post-simoni"><a href="?act=' . $child['act'] . '">' . $child['name'] . '</a></div>-->';
          }
        }  
      echo '</div>

      ';
      }
  }

  // --- Path calculation

  function fullPath() {

    $wd = explode("\\", getcwd()); 
    $wd = $wd[count($wd)-1];

    return $_SERVER['SERVER_NAME'] . (empty($wd)) ? "" : "/".$wd;

  }

  // --- Execution time

  function gentime() {
  
    static $a;
    if($a == 0) $a = microtime(true);
    else return (string)(microtime(true)-$a);
  }
  
  function benchmark($str, $s=FALSE) {
  
    static $a = array();
    return ($str=='view') ? $a : (($s==FALSE||$s!='stop') ? $a[$str][1] = microtime(true) : (($s=='stop' && isset($a[$str][1])) ? $a[$str][3] = ($a[$str][2]=microtime(TRUE))-$a[$str][1] : microtime(TRUE)));
 /*   
    if($str=='view') {
      return $a;
    }
    elseif($s==FALSE || $s=='start') {
      $a[$str][1] = microtime(true);
    }
    elseif($s=='stop' && isset($a[$str][1])) {
      $a[$str][2] = microtime(true);
      $a[$str][3] = $a[$str][2] - $a[$str][1];
      return $a[$str][3];
    }
  */
  }

  // --- MySQL related

  class MySQL {

    private $con, $array, $rescount;
    public $query;
    
    public function query($str) {
    
      Statistics::queries();
      
      $this->query = mysql_query($str, $this->con);
      if(!$this->query) {
        throw new Exception(message('e_sql_query') . ', ' . mysql_error($this->con));
      }
      
      return $this;
    }
    
    public function escape($str) {
    
      return mysql_real_escape_string($str);
    }
    
    public function numRows() {
    
      return mysql_num_rows($this->query);
    }

    public function fetchAssoc() {

      return mysql_fetch_assoc($this->query);
    }
    
    public function fetchArray() {

      return mysql_fetch_array($this->query);
    }
    
    public function free() {

      mysql_free_result($this->query);
    }
    
    public function setDatabase($tDb) {
    
      if(!mysql_select_db($tDb, $this->con)) {
        throw new Exception(message('e_sql_con') . ', ' . mysql_error($this->con));
      }

    }
    
    public function __construct() {
    
    // Import values from config for now
    $tHost=Settings::get('main', 'sql', 'server'); 
    $tPort=Settings::get('main', 'sql', 'port');
    $tUser=Settings::get('main', 'sql', 'user'); 
    $tPass=Settings::get('main', 'sql', 'password');
    $tDb=Settings::get('main', 'sql', 'database');
    $tChars=Settings::get('main', 'sql', 'charset');
      
      if(is_resource($this->con = @mysql_connect($tHost.":".$tPort,$tUser,$tPass))) {
        try {
          $this->setDatabase($tDb);
          $this->query('SET CHARACTER SET ' . EFFICIENT_CHARSET);
        }
        catch(Exception $SQL_Exception) {
          throw new Exception($SQL_Exception->getMessage());
        }
      }
      else {
        throw new Exception(message('e_sql_con') . '. ' . mysql_error());
      }
      
    }
      
  }  
  
  class Statistics {
  
    static function queries($io=FALSE) {
    
      static $count;
      return ($io===FALSE) ? (($count!==NULL) ? $count++ : $count=1) : $count;
    }
  }
  
  // --- Query binder for mob & item searches
  
  function bindQuery($c) {

    return ($c == 1) ? "AND" : "WHERE";
  }
  
  // --- Import allowed GET data into variables
  
  function setGetVariables($getVariables, $GET) {
    foreach($GET as $getKey => $getData) {
      if(in_array($getKey, $getVariables)) {
      global $$getKey;
      $$getKey = $getData;
      }
    }
  }

?>