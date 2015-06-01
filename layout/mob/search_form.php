<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <div style="width: 130px; height: 600px; float: left;">
    
      &nbsp;
      
    </div>
    
    <div>

    <img src="images/text/tmob0.png" alt="Welcome to ERODS" /><br />
    
      <br />
    
      <?php echo message('src_mob_desc1'); ?><br />
      <?php echo message('src_form_prompt'); ?><br />

    <br />
    <br />

    <div id="search_form">

      <form method="get" action="" name="monster_search">

        <input style="display: none" id="act" name="act" value="mobsearch" />

        <table id="itemsearch" cellspacing="1">

        <tr>
          <td colspan="2" class="search1td"><span class="ffruit"><?php echo message('src_form_enable'); ?>:</span></td>
          <td><span class="ffruit"><?php echo message('src_form_fopt'); ?>:</span></td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="cid" name="cid" /></td>
          <td><b><?php echo message('db_mob_id'); ?></b></td>
          <td>
            <input onkeyup="checkBox('cid');" type="text" id="id" name="id" style="width: 280px" /><br />
            <span id="monsterid" style="font-size: 8pt;"><?php echo message('src_mob_findid'); ?></span>&nbsp;
          </td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="cname" name="cname" /></td>
          <td><b><?php echo message('db_mob_name'); ?></b></td>
          <td>
            <input type="text" id="name" name="name" style="width: 280px" onkeyup="getSuggest(this.value,'sName1', 'monster'); checkBox('cname');" /><br />
            <span id="sName1" style="font-size: 8pt;"><?php echo message('src_mob_prompt'); ?>...</span>&nbsp;
          </td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="clevel" name="clevel" /></td>
          <td><b><?php echo message('db_mob_lvl'); ?></b></td>
          <td>
          
            <select style="width: 95px;" id="olevel" name="olevel">
              <option value="1"><?php echo message('src_form_grter'); ?></option>
              <option value="2"><?php echo message('src_form_lesser'); ?></option>
              <option value="3"><?php echo message('src_form_equalt'); ?></option>
            </select>
            <input type="text" id="level" name="level" onkeyup="checkBox('clevel');" style="width: 182px" />
          </td>
        </tr>
        
        <tr>
          <td class="search2td"><input type="checkbox" id="chp" name="chp" /></td>
          <td><b><?php echo message('db_mob_hp'); ?></b></td>
          <td>
          
            <select style="width: 95px;" id="ohp" name="ohp">
              <option value="1"><?php echo message('src_form_grter'); ?></option>
              <option value="2"><?php echo message('src_form_lesser'); ?></option>
              <option value="3"><?php echo message('src_form_equalt'); ?></option>
            </select>
            <input type="text" id="hp" name="hp" onkeyup="checkBox('chp');" style="width: 182px" />
          </td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="cexp" name="cexp" /></td>
          <td><b><?php echo message('db_mob_bexp'); ?></b></td>
          <td>
          
            <select style="width: 95px;" id="oexp" name="oexp">
              <option value="1"><?php echo message('src_form_grter'); ?></option>
              <option value="2"><?php echo message('src_form_lesser'); ?></option>
              <option value="3"><?php echo message('src_form_equalt'); ?></option>
            </select>
            <input type="text" id="exp" name="exp" onkeyup="checkBox('cexp');" style="width: 182px" />
          </td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="cjexp" name="cjexp" /></td>
          <td><b><?php echo message('db_mob_jexp'); ?></b></td>
          <td>
          
            <select style="width: 95px;" id="ojexp" name="ojexp">
              <option value="1"><?php echo message('src_form_grter'); ?></option>
              <option value="2"><?php echo message('src_form_lesser'); ?></option>
              <option value="3"><?php echo message('src_form_equalt'); ?></option>
            </select>
            <input type="text" id="jexp" name="jexp" onkeyup="checkBox('cjexp');" style="width: 182px" />
          </td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="csize" name="csize" /></td>
          <td><b><?php echo message('db_mob_size'); ?></b></td>
          <td>
            <select style="width: 284px" id="osize" name="osize" onclick="checkBox('csize');">
              <option value="1"><?php echo message('db_mob_scale2'); ?></option>
              <option value="2"><?php echo message('db_mob_scale1'); ?></option>
              <option value="3"><?php echo message('db_mob_scale0'); ?></option>
            </select>
          </td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="celement" name="celement" /></td>
          <td><b><?php echo message('db_mob_ele'); ?></b></td>
          <td>
              <select id="element" name="element" style="width: 185px" onclick="checkBox('celement');">
                <option value="0"><?php echo message('mElement0'); ?></option>
                <option value="1"><?php echo message('mElement1'); ?></option>
                <option value="2"><?php echo message('mElement2'); ?></option>
                <option value="3"><?php echo message('mElement3'); ?></option>
                <option value="4"><?php echo message('mElement4'); ?></option>
                <option value="5"><?php echo message('mElement5'); ?></option>
                <option value="6"><?php echo message('mElement6'); ?></option>
                <option value="7"><?php echo message('mElement7'); ?></option>
                <option value="8"><?php echo message('mElement8'); ?></option>
                <option value="9"><?php echo message('mElement9'); ?></option>
              </select>

              <select style="width: 95px" id="oelement" name="oelement" onclick="checkBox('celement');">
                <option value="2"><?php echo message('mElementLv'); ?> 1</option>
                <option value="4"><?php echo message('mElementLv'); ?> 2</option>
                <option value="6"><?php echo message('mElementLv'); ?> 3</option>
                <option value="8"><?php echo message('mElementLv'); ?> 4</option>
              </select>
          </td>
        </tr>
        
        <tr>
          <td class="search2td"><input type="checkbox" id="crace" name="crace" /></td>
          <td><b><?php echo message('db_mob_race'); ?></b></td>
          <td>
              <select id="race" name="race" style="width: 284px" onclick="checkBox('crace');">
                <option value="0"><?php echo message('db_mob_race0'); ?></option>
                <option value="1"><?php echo message('db_mob_race1'); ?></option>
                <option value="2"><?php echo message('db_mob_race2'); ?></option>
                <option value="3"><?php echo message('db_mob_race3'); ?></option>
                <option value="4"><?php echo message('db_mob_race4'); ?></option>
                <option value="5"><?php echo message('db_mob_race5'); ?></option>
                <option value="6"><?php echo message('db_mob_race6'); ?></option>
                <option value="7"><?php echo message('db_mob_race7'); ?></option>
                <option value="8"><?php echo message('db_mob_race8'); ?></option>
                <option value="9"><?php echo message('db_mob_race9'); ?></option>
              </select>
          </td>
        </tr>
        
        <tr>
          <td class="search2td"><input type="checkbox" id="ciid" name="ciid" /></td>
          <td><b><?php echo message('src_mob_dropsrc'); ?></b></td>
          <td><input type="text" id="iid" name="iid" style="width: 280px" onkeyup="checkBox('ciid');" /></td>
        </tr>
        
        <tr>
          <td class="search2td"><input type="checkbox" id="cmvp" name="cmvp" /></td>
          <td><b><?php echo message('src_mob_mvponly'); ?></b></td>
          <td><?php echo message('src_mob_mvponly_d'); ?></td>
        </tr>

        <tr>
          <td colspan="2" class="search1td"><span class="ffruit"><?php echo message('src_form_enable'); ?>:</span></td>
          <td><span class="ffruit"><?php echo message('src_form_dopt'); ?>:</span></td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="ccoll_d" name="ccoll_d" /></td>
          <td><b><?php echo message('src_form_altm'); ?></b></td>
          <td><?php echo message('src_form_altm_d'); ?></td>
        </tr>  

        <tr>
          <td class="search2td"><input type="checkbox" id="cmax_page" name="cmax_page" /></td>
          <td><b><?php echo message('src_form_maxres'); ?></b></td>
          <td>
              <select id="max_page" name="max_page" style="width: 284px" onclick="checkBox('cmax_page');">
                <option value="100">100 <?php echo message('src_form_respage'); ?></option>
                <option value="80">80 <?php echo message('src_form_respage'); ?></option>
                <option value="60">60 <?php echo message('src_form_respage'); ?></option>
                <option value="40">40 <?php echo message('src_form_respage'); ?></option>
                <option value="20">20 <?php echo message('src_form_respage'); ?></option>
                <option value="10">10 <?php echo message('src_form_respage'); ?></option>
              </select>
          </td>
        </tr>  

        <tr>
          <td class="search2td"><input type="checkbox" id="cdisplayorder" name="cdisplayorder" /></td>
          <td><b><?php echo message('src_form_resord2'); ?></b></td>
          <td>
              <select id="displayorder" name="displayorder" style="width: 284px" onclick="checkBox('cdisplayorder');">
                <option value="100"><?php echo message('db_mob_name'); ?></option>
                <option value="200"><?php echo message('db_mob_id'); ?></option>
                <option value="300"><?php echo message('db_mob_bexp'); ?></option>
                <option value="400"><?php echo message('db_mob_jexp'); ?></option>
              </select>
          </td>
        </tr>  
        
        <tr>
          <td class="search2td"><input type="checkbox" id="cascorder" name="cascorder" /></td>
          <td><b><?php echo message('src_form_resord'); ?></b></td>
          <td>
              <select id="ascorder" name="ascorder" style="width: 284px" onclick="checkBox('cascorder');">
                <option value="100"><?php echo message('src_form_o_asc'); ?></option>
                <option value="200"><?php echo message('src_form_o_desc'); ?></option>
              </select>
          </td>
        </tr>  

        <tr>
          <td colspan="3">
            <input type="submit" value="<?php echo message('src_form_search'); ?>" />
          </td>
        </tr>

        </table>

      </form>

    </div>
    
    </div>
    
