<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <h1>Search item database</h1>
    
    <p>The item database provides the lastest information available on the in-game objects &amp; artifacts.</p>

    <p>Proceed by filling out the following form.</p>

    <br />

<div id="search_form">

  <form method="get" action="">

    <input style="display: none" id="act" name="act" value="itemsearch" />

    <table id="itemsearch" cellspacing="1">

    <tr class="grayrow">
      <td colspan="2" class="search1td"><b>Enable:</b></td>
      <td><b>Filter options:</b></td>
    </tr>

    <tr>
      <td class="search2td"><input type="checkbox" id="cid" name="cid" /></td>
      <td><b>ID</b></td>
      <td>
        <input type="text" id="id" name="id" style="width: 280px" onkeyup="checkBox('cid');" /><br />
       	Find an item by ID
      </td>
    </tr>

    <tr>
      <td><input type="checkbox" id="ccsrc" name="ccsrc" /></td>
      <td><b>View customs</b></td>
      <td>This will list all custom items on the server.</td>
    </tr>

    <tr>
      <td><input type="checkbox" id="cname" name="cname" /></td>
      <td><b>Name</b></td>
      <td>
        <input type="text" id="name" name="name" style="width: 280px" onkeyup="getSuggest(this.value,'sName1', 'item'); checkBox('cname');" /><br />
        <span id="sName1" style="font-size: 8pt;">Enter the name of the item.</span>&nbsp;
      </td>
    </tr>

    <tr>
      <td><input type="checkbox" id="cweight" name="cweight" /></td>
      <td><b>Weight</b></td>
      <td>
      
        <select style="width: 95px;" id="oweight" name="oweight">
          <option value="1">More than</option>
          <option value="2">Less than</option>
          <option value="3">Exactly</option>
        </select>
        <input type="text" id="weight" name="weight" style="width: 182px" onkeyup="checkBox('cweight');" />
      </td>
    </tr>

    <tr>
      <td><input type="checkbox" id="ctype" name="ctype" /></td>
      <td><b>Type</b></td>
      <td>
          <select id="type" name="type" size="11" style="width: 284px" onclick="checkBox('ctype');">
            <option value="0">Healing item</option>
            <option value="2">Usable</option>
            <option value="11">Usable (delayed)</option>
            <option value="13">Usable (both)</option>
            <option value="3">Misc</option>
            <option value="4">Weapon</option>
            <option value="5">Equipment</option>
            <option value="6">Card</option>
            <option value="7">Pet egg</option>
            <option value="8">Pet equipment</option>
            <option value="10">Ammo</option>
          </select>
      </td>
    </tr>

    <tr>
      <td><input type="checkbox" id="cprice" name="cprice" /></td>
      <td><b>Price (buy)</b></td>
      <td>
        <select style="width: 95px;" id="oprice" name="oprice">
          <option value="1">More than</option>
          <option value="2">Less than</option>
          <option value="3">Excactly</option>
        </select>
        <input type="text" id="price" name="price" style="width: 182px" onkeyup="checkBox('cprice');" />
      </td>
    </tr>
    
    <tr>
      <td><input type="checkbox" id="cdesc" name="cdesc" /></td>
      <td><b>Search description</b></td>
      <td>
        <input type="text" id="desc" name="desc" style="width: 280px" onkeyup="checkBox('cdesc');" /><br />
        <span style="font-size: 8pt;">Separate by comma. White-space is ignored.</span>
      </td>
    </tr>

    <tr class="grayrow">
      <td colspan="2" class="search1td"><b>Enable:</b></td>
      <td><b>Display options:</b></td>
    </tr>

    <tr>
      <td><input type="checkbox" id="ccoll_d" name="ccoll_d" /></td>
      <td><b>Alternate Mode</b></td>
      <td>Disable all images and drops the javascript functions in links</td>
    </tr>  
    
    <tr>
      <td><input type="checkbox" id="ciscr" name="ciscr" /></td>
      <td><b>Item Scripts</b></td>
      <td>Display eAthena script, equip script and unequip script and </td>
    </tr>  

    <tr>
      <td><input type="checkbox" id="cmax_page" name="cmax_page" /></td>
      <td><b>Max Results</b></td>
      <td>
          <select id="max_page" name="max_page" style="width: 284px" onclick="checkBox('cmax_page');">
            <option value="100">100 results each page</option>
            <option value="80">80 results each page</option>
            <option value="60">60 results each page</option>
            <option value="40">40 results each page</option>
            <option value="20">20 results each page</option>
            <option value="10">10 results each page</option>
          </select>
      </td>
    </tr>  
    
    <tr>
      <td><input type="checkbox" id="cdisplayorder" name="cdisplayorder" /></td>
      <td><b>Order Results</b></td>
      <td>
          <select id="displayorder" name="displayorder" style="width: 284px" onclick="checkBox('cdisplayorder');">
            <option value="100">A-Z</option>
            <option value="200">Z-A</option>
            <option value="300">ID</option>
          </select>
      </td>
    </tr>  


    <tr>
      <td><input type="checkbox" id="ccoll_a" name="ccoll_a" /></td>
      <td><b>iRO descriptions</b></td>
      <td>If available, this option will make the results show the official iRO item description.</td>
    </tr>
    
    <tr>
      <td><input type="checkbox" id="ccoll_o" name="ccoll_o" /></td>
      <td><b>Old collection</b></td>
      <td>If available, this option will make the results show the old collection images from Episode 6: Amatsu.</td>
    </tr>

    <tr>
      <td><input type="checkbox" id="ccoll_ad" name="ccoll_ad" /></td>
      <td><b>Alpha collection</b></td>
      <td>If available, this option will make the results show the old collection images from the Alpha client</td>
    </tr>  

    <tr>
      <td><input type="checkbox" id="js_min" name="js_min" /></td>
      <td><b>Minimize all item descriptions!</b></td>
      <td>This function requires Javascript enabled</td>
    </tr>    

    <tr>
      <td colspan="3">
        <input type="submit" value="Search" />
      </td>
    </tr>

    </table>

  </form>

</div>