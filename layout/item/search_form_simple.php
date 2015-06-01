<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <div style="padding-right: 20px;">
        
      <div>
        
        <div style="float: left; margin: 0 12px 0 12px; padding: 3px; width: 100px; text-align: center; background: 0;"><img src="images/thumb/m_00_title.png" alt="image/gif" /></div>
          
      </div>
        
      <img src="images/text/titem0.png" alt="Search monster database" /><br />
          
        <br />

        <?php echo message('src_item_desc'); ?><br />
        
    </div>
    
    <div class="exlinesp" style="clear: both; margin: 40px 0 20px 0;"></div>
    
    <div style="margin-left: 125px; width: 600px;">

          <form method="get" action="" name="monster_search">
          
            <input type="hidden" name="act" value="itemsearch" />
            <input type="hidden" name="cname" value="1" />
              
            <table>

              <tr>
                <td rowspan="2" style="padding-right: 20px; width: 80px; text-align: center;">
                  <div class="rounded">
                    <img src="media/collection/1124.gif" alt="Item search" />
                  </div>
                </td>
              </tr>

              <tr>
                <td style="line-height: 1em;">
                  <span class="ffruit"><?php echo message('src_item_title'); ?></span><br />
                  <br />
                  <div>
                    <input type="text" id="name" name="name" class="gsrcsimple" style="width: 280px" tabindex="1" autocomplete="off" onkeyup="getSuggest(this.value,'sName1', 'item');" /> 
                    <input type="submit" class="ssubmit" value="" /><br />
                  </div>
                  <br />
                  <div style="height: 2pt;">
                    <span id="sName1"><?php echo message('src_item_prompt'); ?></span>&nbsp;
                  </div>
                </td>
              </tr>
            
            </table>
            
          </form>
          
    </div>
    
    <br />
    
    
    <!-- Alternative stuff -->

      <div style="float: left; margin-right: 20px; margin-left: 125px;">

          <form method="get" action="">
          
            <input type="hidden" name="act" value="itemsearch" />
            <input type="hidden" name="ctype" value="on" />
            <input type="hidden" name="type" value="5" />
            <input type="hidden" name="cmax_page" value="on" />
            <input type="hidden" name="max_page" value="40" />
            <input type="hidden" name="cdisplayorder" value="on" />
            <input type="hidden" name="displayorder" value="100" />
              
            <table>

              <tr>
                <td rowspan="2" style="padding-right: 20px; text-align: center;">
                  <div class="rounded">
                    <img src="media/collection/2341.gif" alt="Armour" />
                  </div>
                </td>
              </tr>

              <tr>
                <td style="line-height: 0.8em;">
                  <span class="ffruit"><?php echo message('src_item_sEq'); ?></span><br />
                  <br />
                  <span class="grayclr"><?php echo message('src_item_sEq_d'); ?></span><br />
                  <br />
                  <input type="submit" class="gosubmit" value="" /><br />
                </td>
              </tr>
            
            </table>
            
          </form>
          
      </div>
      
      <div>

          <form method="get" action="">
          
            <input type="hidden" name="act" value="itemsearch" />
            <input type="hidden" name="cmvp" value="1" />
              
            <table>

              <tr>
                <td rowspan="2" style="padding-right: 20px; text-align: center;">
                  <div class="rounded">
                    <img src="media/collection/2636.gif" alt="Armour" />
                  </div>
                </td>
              </tr>

              <tr>
                <td style="line-height: 0.8em;">
                  <span class="ffruit"><?php echo message('src_item_sGr'); ?></span><br />
                  <br />
                  <span class="grayclr">
                    <a class="dblink" href="?act=itemsearch&amp;ctype=on&amp;type=2"><?php echo message('db_item_2'); ?></a> / 
                    <a class="dblink" href="?act=itemsearch&amp;ctype=on&amp;type=0"><?php echo message('db_item_0'); ?></a> / 
                    <a class="dblink" href="?act=itemsearch&amp;ctype=on&amp;type=4"><?php echo message('db_item_4'); ?></a> / 
                    <a class="dblink" href="?act=itemsearch&amp;ctype=on&amp;type=5"><?php echo message('db_item_5'); ?></a> / 
                    <a class="dblink" href="?act=itemsearch&amp;ctype=on&amp;type=6"><?php echo message('db_item_6'); ?></a>
                  </span>
                </td>
              </tr>
            
            </table>
            
          </form>
          
      </div>