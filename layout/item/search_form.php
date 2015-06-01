<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <div style="width: 130px; height: 600px; float: left;">
    
      &nbsp;
      
    </div>
    
    <div>

    <img src="images/text/titem0.png" alt="Item Search" /><br />
    
      <br />
    
      <?php echo message('src_item_desc'); ?>

    <br />
    <br />

    <div id="search_form">

      <form method="get" action="" name="item_search">

        <input style="display: none" id="act" name="act" value="itemsearch" />

        <table id="itemsearch" cellspacing="1">

        <tr>
          <td colspan="2" class="search1td"><span class="ffruit"><?php echo message('src_form_enable'); ?>:</span></td>
          <td><span class="ffruit"><?php echo message('src_form_fopt'); ?>:</span></td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="cid" name="cid" /></td>
          <td><b><?php echo message('db_item_id'); ?></b></td>
          <td>
            <input type="text" id="id" name="id" style="width: 280px" onkeyup="checkBox('cid');" /><br />
            <?php echo message('src_item_findid'); ?>
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="cname" name="cname" /></td>
          <td><b><?php echo message('db_item_name'); ?></b></td>
          <td>
            <input type="text" id="name" name="name" style="width: 280px" onkeyup="getSuggest(this.value,'sName1', 'item'); checkBox('cname');" /><br />
            <span id="sName1" style="font-size: 8pt;"><?php echo message('src_item_prompt'); ?></span>&nbsp;
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="cweight" name="cweight" /></td>
          <td><b><?php echo message('db_item_weight'); ?></b></td>
          <td>
          
            <select style="width: 95px;" id="oweight" name="oweight">
              <option value="1"><?php echo message('src_form_grter'); ?></option>
              <option value="2"><?php echo message('src_form_lesser'); ?></option>
              <option value="3"><?php echo message('src_form_equalt'); ?></option>
            </select>
            <input type="text" id="weight" name="weight" style="width: 182px" onkeyup="checkBox('cweight');" />
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="ctype" name="ctype" /></td>
          <td><b>Type</b></td>
          <td>
              <select id="type" name="type" size="11" style="width: 284px" onclick="checkBox('ctype');">
                <option value="0"><?php echo message('db_item_0'); ?></option>
                <option value="2"><?php echo message('db_item_2'); ?></option>
                <option value="11"><?php echo message('db_item_11'); ?></option>
                <option value="13"><?php echo message('db_item_13'); ?></option>
                <option value="3"><?php echo message('db_item_3'); ?></option>
                <option value="4"><?php echo message('db_item_4'); ?></option>
                <option value="5"><?php echo message('db_item_5'); ?></option>
                <option value="6"><?php echo message('db_item_6'); ?></option>
                <option value="7"><?php echo message('db_item_7'); ?></option>
                <option value="8"><?php echo message('db_item_8'); ?></option>
                <option value="10"><?php echo message('db_item_10'); ?></option>
              </select>
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="cprice" name="cprice" /></td>
          <td><b><?php echo message('db_item_buy'); ?></b></td>
          <td>
            <select style="width: 95px;" id="oprice" name="oprice">
              <option value="1"><?php echo message('src_form_grter'); ?></option>
              <option value="2"><?php echo message('src_form_lesser'); ?></option>
              <option value="3"><?php echo message('src_form_equalt'); ?></option>
            </select>
            <input type="text" id="price" name="price" style="width: 182px" onkeyup="checkBox('cprice');" />
          </td>
        </tr>
        
        <tr>
          <td><input type="checkbox" id="cdesc" name="cdesc" /></td>
          <td><b><?php echo message('src_item_sdesc'); ?></b></td>
          <td>
            <input type="text" id="desc" name="desc" style="width: 280px" onkeyup="checkBox('cdesc');" /><br />
            <span style="font-size: 8pt;"><?php echo message('src_item_sdesc_p'); ?></span>
          </td>
        </tr>

        <tr>
          <td colspan="2" class="search1td"><span class="ffruit"><?php echo message('src_form_enable'); ?>:</span></td>
          <td><span class="ffruit"><?php echo message('src_form_dopt'); ?>:</span></td>
        </tr>

        <tr>
          <td><input type="checkbox" id="ccoll_d" name="ccoll_d" /></td>
          <td><b><?php echo message('src_form_altm'); ?></b></td>
          <td><?php echo message('src_form_altm_d'); ?></td>
        </tr>  
        
        <tr>
          <td><input type="checkbox" id="ciscr" name="ciscr" /></td>
          <td><b><?php echo message('src_item_scrpt'); ?></b></td>
          <td><?php echo message('src_item_scrpt_d'); ?></td>
        </tr>  

        <tr>
          <td><input type="checkbox" id="cmax_page" name="cmax_page" /></td>
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
          <td><input type="checkbox" id="cdisplayorder" name="cdisplayorder" /></td>
          <td><b><?php echo message('src_form_resord'); ?></b></td>
          <td>
              <select id="displayorder" name="displayorder" style="width: 284px" onclick="checkBox('cdisplayorder');">
                <option value="100"><?php echo message('src_item_ord100'); ?></option>
                <option value="200"><?php echo message('src_item_ord200'); ?></option>
                <option value="300"><?php echo message('src_item_ord300'); ?></option>
              </select>
          </td>
        </tr>  


        <tr>
          <td><input type="checkbox" id="ccoll_a" name="ccoll_a" /></td>
          <td><b><?php echo message('src_item_irodesc'); ?></b></td>
          <td><?php echo message('src_item_irodesc_d'); ?></td>
        </tr>
        
        <tr>
          <td><input type="checkbox" id="ccoll_o" name="ccoll_o" /></td>
          <td><b><?php echo message('src_item_oldcoll'); ?></b></td>
          <td><?php echo message('src_item_oldcoll_d'); ?></td>
        </tr>

        <tr>
          <td><input type="checkbox" id="ccoll_ad" name="ccoll_ad" /></td>
          <td><b><?php echo message('src_item_alphacoll'); ?></b></td>
          <td><?php echo message('src_item_alphacoll_d'); ?></td>
        </tr>  

        <tr>
          <td><input type="checkbox" id="js_min" name="js_min" /></td>
          <td><b><?php echo message('src_item_minidesc'); ?></b></td>
          <td><?php echo message('src_item_minidesc_d'); ?></td>
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
    
    