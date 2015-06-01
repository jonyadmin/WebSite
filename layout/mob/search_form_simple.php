<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <div style="padding-right: 20px;">
        
      <div>
        
        <div style="float: left; margin: 0 12px 0 12px; padding: 3px; width: 100px; text-align: center; background: 0;"><img src="images/thumb/m_00_title.png" alt="image/gif" /></div>
          
      </div>
        
      <img src="images/text/tmob0.png" alt="<?php echo message('src_mob_title'); ?>" /><br />
          
        <br />

        <?php echo message('src_mob_desc1'); ?><br />
        <?php echo message('src_mob_desc2'); ?><br />
        
    </div>
    
    <div class="exlinesp" style="clear: both; margin: 40px 0 20px 0;"></div>
    
    <div style="margin-left: 125px; width: 600px;">

          <form method="get" action="" name="monster_search">
          
            <input type="hidden" name="act" value="mobsearch" />
            <input type="hidden" name="cname" value="1" />
              
            <table>

              <tr>
                <td rowspan="2" style="padding-right: 20px; width: 80px; text-align: center;">
                  <div class="rounded">
                    <img src="media/monster/1019.gif" style="position: relative; top: 5px;" alt="Item search" />
                  </div>
                </td>
              </tr>

              <tr>
                <td style="line-height: 1em;">
                  <span class="ffruit"><?php echo message('src_mob_title'); ?></span><br />
                  <br />
                  <div>
                    <input type="text" id="name" name="name" class="gsrcsimple" style="width: 280px" tabindex="1" autocomplete="off" onkeyup="getSuggest(this.value,'sName1', 'monster');" /> 
                    <input type="submit" class="ssubmit" value="" /><br />
                  </div>
                  <br />
                  <div style="height: 2pt;">
                    <span id="sName1"><?php echo message('src_mob_prompt'); ?></span>&nbsp;
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
          
            <input type="hidden" name="act" value="mobsearch" />
            <input type="hidden" name="cmvp" value="1" />
              
            <table>

              <tr>
                <td rowspan="2" style="padding-right: 20px; text-align: center;">
                  <div class="rounded">
                    <img src="images/thumb/m_00_boss.png" alt="Monster" />
                  </div>
                </td>
              </tr>

              <tr>
                <td style="line-height: 0.8em;">
                  <span class="ffruit"><?php echo message('src_mob_srcboss'); ?></span><br />
                  <br />
                  <span class="grayclr"><?php echo message('src_mob_srcboss_d'); ?></span><br />
                  <br />
                  <input type="submit" class="gosubmit" value="" /><br />
                </td>
              </tr>
            
            </table>
            
          </form>
          
      </div>
      
      <div>

          <form method="get" action="">
          
            <input type="hidden" name="act" value="mobsearch" />
            <input type="hidden" name="cmvp" value="1" />
              
            <table>

              <tr>
                <td rowspan="2" style="padding-right: 20px; text-align: center;">
                  <div class="rounded">
                    <img src="images/thumb/m_01_size.png" alt="Monster" />
                  </div>
                </td>
              </tr>

              <tr>
                <td style="line-height: 0.8em;">
                  <span class="ffruit"><?php echo message('src_mob_srcsize'); ?></span><br />
                  <br />
                  <span class="grayclr">
                    <a class="dblink" href="?act=mobsearch&amp;csize=on&amp;osize=3"><?php echo message('db_mob_scale0'); ?></a> / 
                    <a class="dblink" href="?act=mobsearch&amp;csize=on&amp;osize=2"><?php echo message('db_mob_scale1'); ?></a> / 
                    <a class="dblink" href="?act=mobsearch&amp;csize=on&amp;osize=1"><?php echo message('db_mob_scale2'); ?></a>
                  </span>
                </td>
              </tr>
            
            </table>
            
          </form>
          
      </div>