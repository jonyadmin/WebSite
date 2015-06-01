<?php if(!defined('EFFICIENT_ROOT')) exit; 

  /* The result handler will ready and present the search result. 
     Basically what it'll do is tell if something went wrong and
     create a navigation.
  */

  class ResultHandler {
  
  public $db;
  public $rescount, $maxres, $resoffset;
  public $sql;
  public $outputcontroller;
    
    // text query, GET data for navigation {cmax_page, max_page, last_id}
    function __construct($query, $reqData) {
    
      try {
        $this->db = new MySQL();
      }
      catch(Exception $SQLe) {
        if(defined('CONTENT_ONLY')) {
          throw new Exception(message('ajax_broken'));
        }
        elseif(DEBUG == TRUE) {
          throw new Exception('ERODS has encountered a problem with the database access: ' . $SQLe->getMessage());
        }
        else {
          throw new Exception(message('e_sql_con2'));
        }
      }

      try {
        $this->rescount = $this->db->query($query)->numRows();
      }
      catch(Exception $SQLe) {
        throw new Exception(message('e_sql_con') . ' ' . $SQLe->getMessage());
      }
        
      $cmax_page = (array_key_exists('cmax_page',$reqData)) ? TRUE : FALSE;
      $max_page = (array_key_exists('max_page',$reqData)) ? $reqData['max_page'] : 100;
      $res_offset = (array_key_exists('last_id',$reqData)) ? (int)round($_GET['last_id']) : 0;

      if($cmax_page == FALSE || !ctype_digit($max_page) || $max_page < 1 || $max_page > 100) {
        $max_page = 100;
      }
      if($res_offset%$max_page != 0) {
      $res_offset = 0;
      }

      $this->maxres = $max_page;
      $this->resoffset = $res_offset;
    
    }
    
    function navigator() {
    
      $navi_pagenum = ceil($this->rescount/$this->maxres);
      $url = "http://" . $_SERVER['SERVER_NAME'] . htmlspecialchars(preg_replace('/&last_id=[0-9]+/', '', $_SERVER['REQUEST_URI']));
      $offset=0;

      $output = "
    <table class=\"whitetable pageNavigation\" cellspacing=\"1\">
      <tr class=\"blackrow\"><td>" . message('res_rnav') . "</td></tr>
      <tr>
        <td style=\"padding: 0\">
          <table class=\"pageNaviTable\" cellspacing=\"0\">";
    
      for($i=1;$i<=$navi_pagenum;$i++) {
        $tPLC = ($i%2==0) ? "tdClr2" : "tdClr1";
        $tPL = "<td class=\"$tPLC\"><a class=\"random\" href=\"". $url . '&amp;last_id=' . $offset ."\">" . (($this->resoffset == $offset) ? "<b>" . $i . "</b></a></td>" : $i . "</a></td>");
        if($i==1 || ($i-1)%20 == 0) {
        $output .= "<tr>";
        }
        $output .= $tPL;
        if($i%20 == 0 || $i == $navi_pagenum) {
        $output .= "</tr>";
        }
        $offset += $this->maxres;
      }
      
      $output .= "</table>
        </td>
      </tr>
    </table>";
    
    return $output;
    
    }
    
    // $outputcontroller should be an child of a Controller class (ItemController or MonsterController)
    public function exec($outputcontroller) {
      
      
      $header = '';
      $footer = '';
      

      if(defined('CONTENT_ONLY')) {
        if($this->rescount == 0) {
        $header .= include('layout/search/search_no_res.php');
        }
      }
    
      else {
      
        $res = sprintf(message('res_pres'), $this->rescount);
        $s_res = message('res_sres');
      
        $header .= <<<EOT
    <table class="whitetable pageNavigation" cellspacing="1">
      <tr class="blackrow"><td>{$s_res}</td></tr>
      <tr>
        <td>{$res}<br />
        
EOT;
        if($this->rescount>$this->maxres) {
          $header .= sprintf(message('res_showr'), $this->maxres);
        }
        
        $header .= <<<EOT
        </td>
      </tr>
    </table>
EOT;

        if($this->rescount > $this->maxres) {
          $header .= $this->navigator();
        }
  
        if($this->rescount != 0) {
        
          $header .= <<<EOT
  
  <div id="AllSearchResults">
        
EOT;

          $top = message('res_go2top');

          $footer .= <<<EOT
  
  </div>
  
    <center>
      <p>[<a class="random" href="#main">$top</a>]</p>
    </center>
        
EOT;
        }
    
      }

    return $header . $outputcontroller->output($this->db->query, $this->maxres, $this->resoffset) . $footer;
    
    }
  
  }



?>