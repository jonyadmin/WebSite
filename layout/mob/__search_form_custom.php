<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <h1>Search monster database</h1>
    
    <p>The monster database allows you to take a look at monster stats &amp; drops.</p>

    <p>Proceed by filling out the following form. Keep in mind accurate input gives more accurate results.</p>

    <br />

    <div id="search_form">

      <form method="get" action="" name="monster_search">

        <input style="display: none" id="act" name="act" value="mobsearch" />

        <table id="itemsearch" cellspacing="1">

        <tr class="grayrow">
          <td colspan="2" class="search1td"><b>Enable:</b></td>
          <td><b>Filter options:</b></td>
        </tr>

        <tr>
          <td class="search2td"><input type="checkbox" id="cid" name="cid" /></td>
          <td><b>ID</b></td>
          <td>
            <input onkeyup="checkBox('cid');" type="text" id="id" name="id" style="width: 280px" /><br />
            <span id="monsterid" style="font-size: 8pt;">Find a monster by ID</span>&nbsp;
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="ccsrc" name="ccsrc" /></td>
          <td><b>View customs</b></td>
          <td>This will list all custom monsters on the server.</td>
        </tr>

        <tr>
          <td><input type="checkbox" id="cname" name="cname" /></td>
          <td><b>Name</b></td>
          <td>
            <input type="text" id="name" name="name" style="width: 280px" onkeyup="getSuggest(this.value,'sName1', 'monster'); checkBox('cname');" /><br />
            <span id="sName1" style="font-size: 8pt;">Enter the name of the monster...</span>&nbsp;
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="clevel" name="clevel" /></td>
          <td><b>Level</b></td>
          <td>
          
            <select style="width: 95px;" id="olevel" name="olevel">
              <option value="1">More than</option>
              <option value="2">Less than</option>
              <option value="3">Exactly</option>
            </select>
            <input type="text" id="level" name="level" onkeyup="checkBox('clevel');" style="width: 182px" />
          </td>
        </tr>
        
        <tr>
          <td><input type="checkbox" id="chp" name="chp" /></td>
          <td><b>Hit Points</b></td>
          <td>
          
            <select style="width: 95px;" id="ohp" name="ohp">
              <option value="1">More than</option>
              <option value="2">Less than</option>
              <option value="3">Exactly</option>
            </select>
            <input type="text" id="hp" name="hp" onkeyup="checkBox('chp');" style="width: 182px" />
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="cexp" name="cexp" /></td>
          <td><b>Base Experience</b></td>
          <td>
          
            <select style="width: 95px;" id="oexp" name="oexp">
              <option value="1">More than</option>
              <option value="2">Less than</option>
              <option value="3">Exactly</option>
            </select>
            <input type="text" id="exp" name="exp" onkeyup="checkBox('cexp');" style="width: 182px" />
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="cjexp" name="cjexp" /></td>
          <td><b>Job Experience</b></td>
          <td>
          
            <select style="width: 95px;" id="ojexp" name="ojexp">
              <option value="1">More than</option>
              <option value="2">Less than</option>
              <option value="3">Exactly</option>
            </select>
            <input type="text" id="jexp" name="jexp" onkeyup="checkBox('cjexp');" style="width: 182px" />
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="csize" name="csize" /></td>
          <td><b>Size</b></td>
          <td>
            <select style="width: 284px" id="osize" name="osize" onclick="checkBox('csize');">
              <option value="1">Big</option>
              <option value="2">Medium</option>
              <option value="3">Small</option>
            </select>
          </td>
        </tr>

        <tr>
          <td><input type="checkbox" id="celement" name="celement" /></td>
          <td><b>Element</b></td>
          <td>
              <select id="element" name="element" style="width: 185px" onclick="checkBox('celement');">
                <option value="0">Neutral</option>
                <option value="1">Water</option>
                <option value="2">Earth</option>
                <option value="3">Fire</option>
                <option value="4">Wind</option>
                <option value="5">Poison</option>
                <option value="6">Holy</option>
                <option value="7">Shadow</option>
                <option value="8">Ghost</option>
                <option value="9">Undead</option>
              </select>

              <select style="width: 95px" id="oelement" name="oelement" onclick="checkBox('celement');">
                <option value="2">Level 1</option>
                <option value="4">Level 2</option>
                <option value="6">Level 3</option>
                <option value="8">Level 4</option>
              </select>
          </td>
        </tr>
        
        <tr>
          <td><input type="checkbox" id="crace" name="crace" /></td>
          <td><b>Race</b></td>
          <td>
              <select id="race" name="race" style="width: 284px" onclick="checkBox('crace');">
                <option value="0">Formless</option>
                <option value="1">Undead</option>
                <option value="2">Beast</option>
                <option value="3">Plant</option>
                <option value="4">Insect</option>
                <option value="5">Fish</option>
                <option value="6">Demon</option>
                <option value="7">Demi-human</option>
                <option value="8">Angel</option>
                <option value="9">Dragon</option>
              </select>
          </td>
        </tr>
        
        <tr>
          <td><input type="checkbox" id="ciid" name="ciid" /></td>
          <td><b>Search Drop ID</b></td>
          <td><input type="text" id="iid" name="iid" style="width: 280px" onkeyup="checkBox('ciid');" /></td>
        </tr>
        
        <tr>
          <td><input type="checkbox" id="cmvp" name="cmvp" /></td>
          <td><b>Search only for MvP boss monsters?</b></td>
          <td>Display only boss monsters in result.</td>
        </tr>

        <tr class="grayrow">
          <td colspan="2" class="search1td"><b>Enable:</b></td>
          <td><b>Display options:</b></td>
        </tr>

        <tr>
          <td><input type="checkbox" id="ccoll_d" name="ccoll_d" /></td>
          <td><b>Alternative Mode</b></td>
          <td>Disable all images and drops the javascript functions in links</td>
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
          <td colspan="3">
            <input type="submit" value="Search" />
          </td>
        </tr>

        </table>

      </form>

    </div>
    
