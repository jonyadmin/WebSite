<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <div style="margin-left: 125px; width: 600px;">
          <form method="get" action="" name="monster_search">
            <input type="hidden" name="act" value="itemsearch" />
            <input type="hidden" name="cname" value="1" />
            <table>
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