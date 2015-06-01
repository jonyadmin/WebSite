
<!-- Content generated at 08.09.09 -->

<div>
  
  <table class="whitetable" cellspacing="1">
    <tr class="grayrow">
      <td style="width: 100%;" id="worldMapHeader">
        <a class="headline" onclick="toggleMap(1)">World Map of Midgard</a>
      </td>
    </tr>
    
    <tr>
      <td id="worldMapHost" style="width: 100%;">
        <div style="position: relative; top: 20px; left: 20px; height: 850px;">
        
<script type="text/javascript">
function toggleMap(int) {

  if(int == 1) {
  document.getElementById("worldMapHeader").innerHTML = "<a class='headline' onclick=\'toggleMap(0)\'>The New World\<\/a>";
  var worldMapValue=0;
  var otherMapValue=1;
  }
  if(int == 0) {
  document.getElementById("worldMapHeader").innerHTML = "<a class='headline' onclick=\'toggleMap(1)\'>World Map of Midgard\<\/a>";
  var worldMapValue=1;
  var otherMapValue=0;
  }

  document.getElementById("map_yuno").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild01").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild02").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild03").style.opacity = worldMapValue;
  document.getElementById("map_hugel").style.opacity = worldMapValue;
  document.getElementById("map_odin_tem03").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild01").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild05").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild06").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild04").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild05").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild06").style.opacity = worldMapValue;
  document.getElementById("map_odin_tem01").style.opacity = worldMapValue;
  document.getElementById("map_odin_tem02").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild01").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild02").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild04").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild03").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild02").style.opacity = worldMapValue;
  document.getElementById("map_hu_fild07").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild02").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild03").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild04").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild05").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild06").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild03").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild04").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild05").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild06").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild07").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild08").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild09").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild10").style.opacity = worldMapValue;
  document.getElementById("map_ama_fild01").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild07").style.opacity = worldMapValue;
  document.getElementById("map_ra_temple").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild08").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild09").style.opacity = worldMapValue;
  document.getElementById("map_lhz_fild01").style.opacity = worldMapValue;
  document.getElementById("map_lhz_fild02").style.opacity = worldMapValue;
  document.getElementById("map_einbroch").style.opacity = worldMapValue;
  document.getElementById("map_einbech").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild07").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild11").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild12").style.opacity = worldMapValue;
  document.getElementById("map_yuno_fild01").style.opacity = worldMapValue;
  document.getElementById("map_amatsu").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild10").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild11").style.opacity = worldMapValue;
  document.getElementById("map_rachel").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild12").style.opacity = worldMapValue;
  document.getElementById("map_lighthalzen").style.opacity = worldMapValue;
  document.getElementById("map_lhz_fild03").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild08").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild09").style.opacity = worldMapValue;
  document.getElementById("map_ein_fild10").style.opacity = worldMapValue;
  document.getElementById("map_alde_gld").style.opacity = worldMapValue;
  document.getElementById("map_aldebaran").style.opacity = worldMapValue;
  document.getElementById("map_xmas").style.opacity = worldMapValue;
  document.getElementById("map_ayo_fild02").style.opacity = worldMapValue;
  document.getElementById("map_ve_fild01").style.opacity = worldMapValue;
  document.getElementById("map_ve_fild02").style.opacity = worldMapValue;
  document.getElementById("map_ra_fild13").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_12").style.opacity = worldMapValue;
  document.getElementById("map_xmas_fild01").style.opacity = worldMapValue;
  document.getElementById("map_ayothaya").style.opacity = worldMapValue;
  document.getElementById("map_ayo_fild01").style.opacity = worldMapValue;
  document.getElementById("map_ve_fild03").style.opacity = worldMapValue;
  document.getElementById("map_ve_fild04").style.opacity = worldMapValue;
  document.getElementById("map_aru_gld").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_01").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_02").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_03").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_04").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_05").style.opacity = worldMapValue;
  document.getElementById("map_ve_fild05").style.opacity = worldMapValue;
  document.getElementById("map_veins").style.opacity = worldMapValue;
  document.getElementById("map_nameless_n").style.opacity = worldMapValue;
  document.getElementById("map_glast_01").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild06").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild05").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild04").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_06").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_07").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_08").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_10").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_11").style.opacity = worldMapValue;
  document.getElementById("map_gonryun").style.opacity = worldMapValue;
  document.getElementById("map_ve_fild07").style.opacity = worldMapValue;
  document.getElementById("map_nif_fild01").style.opacity = worldMapValue;
  document.getElementById("map_nif_fild02").style.opacity = worldMapValue;
  document.getElementById("map_niflheim").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild08").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild07").style.opacity = worldMapValue;
  document.getElementById("map_geffen").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild00").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild00").style.opacity = worldMapValue;
  document.getElementById("map_mjolnir_09").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild01").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild02").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild03").style.opacity = worldMapValue;
  document.getElementById("map_prt_monk").style.opacity = worldMapValue;
  document.getElementById("map_gon_fild01").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild12").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild13").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild09").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild01").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild04").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild05").style.opacity = worldMapValue;
  document.getElementById("map_prontera").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild06").style.opacity = worldMapValue;
  document.getElementById("map_izlu2dun").style.opacity = worldMapValue;
  document.getElementById("map_prt_gld").style.opacity = worldMapValue;
  document.getElementById("map_yggdrasil01").style.opacity = worldMapValue;
  document.getElementById("map_um_dun02").style.opacity = worldMapValue;
  document.getElementById("map_um_dun01").style.opacity = worldMapValue;
  document.getElementById("map_umbala").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild14").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild10").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild03").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild02").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild07").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild08").style.opacity = worldMapValue;
  document.getElementById("map_izlude").style.opacity = worldMapValue;
  document.getElementById("map_louyang").style.opacity = worldMapValue;
  document.getElementById("map_um_fild04").style.opacity = worldMapValue;
  document.getElementById("map_gef_fild11").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild11").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild10").style.opacity = worldMapValue;
  document.getElementById("map_prt_fild09").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild01").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild04").style.opacity = worldMapValue;
  document.getElementById("map_pay_arche").style.opacity = worldMapValue;
  document.getElementById("map_lou_fild01").style.opacity = worldMapValue;
  document.getElementById("map_um_fild01").style.opacity = worldMapValue;
  document.getElementById("map_um_fild02").style.opacity = worldMapValue;
  document.getElementById("map_um_fild03").style.opacity = worldMapValue;
  document.getElementById("map_moc_ruins").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild07").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild06").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild05").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild04").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild02").style.opacity = worldMapValue;
  document.getElementById("map_pay_gld").style.opacity = worldMapValue;
  document.getElementById("map_payon").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild08").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild09").style.opacity = worldMapValue;
  document.getElementById("map_beach_dun2").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild01").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild03").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild05").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild19").style.opacity = worldMapValue;
  document.getElementById("map_morocc").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild10").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild09").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild08").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild13").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild03").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild01").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild07").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild10").style.opacity = worldMapValue;
  document.getElementById("map_alb2trea").style.opacity = worldMapValue;
  document.getElementById("map_beach_dun").style.opacity = worldMapValue;
  document.getElementById("map_comodo").style.opacity = worldMapValue;
  document.getElementById("map_beach_dun3").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild02").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild04").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild06").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild08").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild12").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild11").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild15").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild14").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild11").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild02").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild03").style.opacity = worldMapValue;
  document.getElementById("map_jawaii").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild07").style.opacity = worldMapValue;
  document.getElementById("map_cmd_fild09").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild18").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild17").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild16").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild05").style.opacity = worldMapValue;
  document.getElementById("map_pay_fild06").style.opacity = worldMapValue;
  document.getElementById("map_alberta").style.opacity = worldMapValue;
  document.getElementById("map_tur_dun01").style.opacity = worldMapValue;
  document.getElementById("map_moc_fild22b").style.opacity = otherMapValue;
  document.getElementById("map_spl_fild02").style.opacity = otherMapValue;
  document.getElementById("map_mid_camp").style.opacity = otherMapValue;
  document.getElementById("map_man_fild01").style.opacity = otherMapValue;
  document.getElementById("map_spl_fild03").style.opacity = otherMapValue;
  document.getElementById("map_man_fild03").style.opacity = otherMapValue;
}
</script>


          <div id="map_moc_fild22b" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 360px; opacity: 0.0;">
            <img alt="Image" src="media/maps2/moc_fild22b.png" onmouseover="setDisplay('moc_fild22b');" onmouseout="setDisplay('moc_fild22b');" />
        </div>
          <div id="map_spl_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 405px; opacity: 0.0;">
            <img alt="Image" src="media/maps2/spl_fild02.png" onmouseover="setDisplay('spl_fild02');" onmouseout="setDisplay('spl_fild02');" />
        </div>
          <div id="map_mid_camp" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 405px; opacity: 0.0;">
            <img alt="Image" src="media/maps2/mid_camp.png" onmouseover="setDisplay('mid_camp');" onmouseout="setDisplay('mid_camp');" />
        </div>
          <div id="map_man_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 405px; opacity: 0.0;">
            <img alt="Image" src="media/maps2/man_fild01.png" onmouseover="setDisplay('man_fild01');" onmouseout="setDisplay('man_fild01');" />
        </div>
          <div id="map_spl_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 450px; opacity: 0.0;">
            <img alt="Image" src="media/maps2/spl_fild03.png" onmouseover="setDisplay('spl_fild03');" onmouseout="setDisplay('spl_fild03');" />
        </div>
          <div id="map_man_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 450px; opacity: 0.0;">
            <img alt="Image" src="media/maps2/man_fild03.png" onmouseover="setDisplay('man_fild03');" onmouseout="setDisplay('man_fild03');" />
        </div>
          <div id="map_yuno" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 382.5px; top: 0px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno.png" onmouseover="setDisplay('yuno');" onmouseout="setDisplay('yuno');" />
            <div id="yuno" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno');" onmouseout="setDisplay('yuno');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno">Juno, Capital of Schwarzwald Republic</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno">yuno</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 0px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild01.png" onmouseover="setDisplay('hu_fild01');" onmouseout="setDisplay('hu_fild01');" />
            <div id="hu_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild01');" onmouseout="setDisplay('hu_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild01">Thanatos Tower</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild01">hu_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1692', 'mobsearch')">Breeze</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1697', 'mobsearch')">Plasma</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1695', 'mobsearch')">Plasma</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1696', 'mobsearch')">Plasma</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1694', 'mobsearch')">Plasma</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1693', 'mobsearch')">Plasma</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [30] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 0px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild02.png" onmouseover="setDisplay('hu_fild02');" onmouseout="setDisplay('hu_fild02');" />
            <div id="hu_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild02');" onmouseout="setDisplay('hu_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild02">Hugel Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild02">hu_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1715', 'mobsearch')">Novus</a> [21] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1718', 'mobsearch')">Novus</a> [41] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1692', 'mobsearch')">Breeze</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1687', 'mobsearch')">Grove</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 0px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild03.png" onmouseover="setDisplay('hu_fild03');" onmouseout="setDisplay('hu_fild03');" />
            <div id="hu_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild03');" onmouseout="setDisplay('hu_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild03">Hugel Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild03">hu_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1687', 'mobsearch')">Grove</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1715', 'mobsearch')">Novus</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1084', 'mobsearch')">Black Mushroom</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hugel" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 0px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hugel.png" onmouseover="setDisplay('hugel');" onmouseout="setDisplay('hugel');" />
        </div>
          <div id="map_odin_tem03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 720px; top: 0px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/odin_tem03.png" onmouseover="setDisplay('odin_tem03');" onmouseout="setDisplay('odin_tem03');" />
            <div id="odin_tem03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('odin_tem03');" onmouseout="setDisplay('odin_tem03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=odin_tem03">Odin Shrine F3</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=odin_tem03">odin_tem03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1693', 'mobsearch')">Plasma</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1754', 'mobsearch')">Skeggiold</a> [16] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1755', 'mobsearch')">Skeggiold</a> [16] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1753', 'mobsearch')">Frus</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1752', 'mobsearch')">Skogul</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1762', 'mobsearch')">Frus</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1761', 'mobsearch')">Skogul</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1765', 'mobsearch')">Valkyrie</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1751', 'mobsearch')">Valkyrie Randgris</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild01.png" onmouseover="setDisplay('ein_fild01');" onmouseout="setDisplay('ein_fild01');" />
            <div id="ein_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild01');" onmouseout="setDisplay('ein_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild01">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild01">ein_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [55] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1199', 'mobsearch')">Punk</a> [50] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild05.png" onmouseover="setDisplay('yuno_fild05');" onmouseout="setDisplay('yuno_fild05');" />
            <div id="yuno_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild05');" onmouseout="setDisplay('yuno_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild05">El Mes Plateau</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild05">yuno_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1162', 'mobsearch')">Rafflesia</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1388', 'mobsearch')">Arc Angeling</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [4] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild06.png" onmouseover="setDisplay('yuno_fild06');" onmouseout="setDisplay('yuno_fild06');" />
            <div id="yuno_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild06');" onmouseout="setDisplay('yuno_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild06">El Mes Plateau</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild06">yuno_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1386', 'mobsearch')">Sleeper</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1372', 'mobsearch')">Goat</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild04.png" onmouseover="setDisplay('hu_fild04');" onmouseout="setDisplay('hu_fild04');" />
            <div id="hu_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild04');" onmouseout="setDisplay('hu_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild04">Hugel Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild04">hu_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1692', 'mobsearch')">Breeze</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1384', 'mobsearch')">Deleter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1385', 'mobsearch')">Deleter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1155', 'mobsearch')">Petite</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1156', 'mobsearch')">Petite</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1715', 'mobsearch')">Novus</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1718', 'mobsearch')">Novus</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1687', 'mobsearch')">Grove</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1386', 'mobsearch')">Sleeper</a> [7] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild05.png" onmouseover="setDisplay('hu_fild05');" onmouseout="setDisplay('hu_fild05');" />
            <div id="hu_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild05');" onmouseout="setDisplay('hu_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild05">The Abyss Lake</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild05">hu_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [53] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1687', 'mobsearch')">Grove</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1715', 'mobsearch')">Novus</a> [8] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1718', 'mobsearch')">Novus</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1262', 'mobsearch')">Mutant Dragonoid</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1721', 'mobsearch')">Dragon Egg</a> [4] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild06.png" onmouseover="setDisplay('hu_fild06');" onmouseout="setDisplay('hu_fild06');" />
            <div id="hu_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild06');" onmouseout="setDisplay('hu_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild06">Hugel Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild06">hu_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1628', 'mobsearch')">Holden</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_odin_tem01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 675px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/odin_tem01.png" onmouseover="setDisplay('odin_tem01');" onmouseout="setDisplay('odin_tem01');" />
            <div id="odin_tem01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('odin_tem01');" onmouseout="setDisplay('odin_tem01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=odin_tem01">Odin Shrine F1</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=odin_tem01">odin_tem01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1692', 'mobsearch')">Breeze</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1697', 'mobsearch')">Plasma</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1695', 'mobsearch')">Plasma</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1696', 'mobsearch')">Plasma</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1694', 'mobsearch')">Plasma</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1693', 'mobsearch')">Plasma</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1753', 'mobsearch')">Frus</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1752', 'mobsearch')">Skogul</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_odin_tem02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 720px; top: 45px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/odin_tem02.png" onmouseover="setDisplay('odin_tem02');" onmouseout="setDisplay('odin_tem02');" />
            <div id="odin_tem02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('odin_tem02');" onmouseout="setDisplay('odin_tem02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=odin_tem02">Odin Shrine F2</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=odin_tem02">odin_tem02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1693', 'mobsearch')">Plasma</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1754', 'mobsearch')">Skeggiold</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1755', 'mobsearch')">Skeggiold</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1753', 'mobsearch')">Frus</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1752', 'mobsearch')">Skogul</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1762', 'mobsearch')">Frus</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1761', 'mobsearch')">Skogul</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1765', 'mobsearch')">Valkyrie</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 90px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild01.png" onmouseover="setDisplay('ra_fild01');" onmouseout="setDisplay('ra_fild01');" />
            <div id="ra_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild01');" onmouseout="setDisplay('ra_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild01">Audhumbla Grassland</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild01">ra_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1780', 'mobsearch')">Muscipular</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1259', 'mobsearch')">Gryphon</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 90px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild02.png" onmouseover="setDisplay('ein_fild02');" onmouseout="setDisplay('ein_fild02');" />
            <div id="ein_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild02');" onmouseout="setDisplay('ein_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild02">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild02">ein_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1380', 'mobsearch')">Driller</a> [45] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1618', 'mobsearch')">Ungoliant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 90px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild04.png" onmouseover="setDisplay('yuno_fild04');" onmouseout="setDisplay('yuno_fild04');" />
            <div id="yuno_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild04');" onmouseout="setDisplay('yuno_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild04">El Mes Plateau</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild04">yuno_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1009', 'mobsearch')">Condor</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1090', 'mobsearch')">Mastering</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 90px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild03.png" onmouseover="setDisplay('yuno_fild03');" onmouseout="setDisplay('yuno_fild03');" />
            <div id="yuno_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild03');" onmouseout="setDisplay('yuno_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild03">El Mes Plateau</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild03">yuno_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1242', 'mobsearch')">Marin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1096', 'mobsearch')">Angeling</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1582', 'mobsearch')">Deviling</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [4] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 90px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild02.png" onmouseover="setDisplay('yuno_fild02');" onmouseout="setDisplay('yuno_fild02');" />
            <div id="yuno_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild02');" onmouseout="setDisplay('yuno_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild02">Kiel Hyre's Cottage</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild02">yuno_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1035', 'mobsearch')">Hunter Fly</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1715', 'mobsearch')">Novus</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1718', 'mobsearch')">Novus</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_hu_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 90px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/hu_fild07.png" onmouseover="setDisplay('hu_fild07');" onmouseout="setDisplay('hu_fild07');" />
            <div id="hu_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('hu_fild07');" onmouseout="setDisplay('hu_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=hu_fild07">Hugel Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=hu_fild07">hu_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1692', 'mobsearch')">Breeze</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1384', 'mobsearch')">Deleter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1385', 'mobsearch')">Deleter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1155', 'mobsearch')">Petite</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1156', 'mobsearch')">Petite</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1715', 'mobsearch')">Novus</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1718', 'mobsearch')">Novus</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1687', 'mobsearch')">Grove</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild02.png" onmouseover="setDisplay('ra_fild02');" onmouseout="setDisplay('ra_fild02');" />
            <div id="ra_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild02');" onmouseout="setDisplay('ra_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild02">Od Canyon</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild02">ra_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1780', 'mobsearch')">Muscipular</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1785', 'mobsearch')">Atroce</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 90px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild03.png" onmouseover="setDisplay('ra_fild03');" onmouseout="setDisplay('ra_fild03');" />
            <div id="ra_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild03');" onmouseout="setDisplay('ra_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild03">The Plain of Ida</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild03">ra_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [35] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1785', 'mobsearch')">Atroce</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild04.png" onmouseover="setDisplay('ra_fild04');" onmouseout="setDisplay('ra_fild04');" />
            <div id="ra_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild04');" onmouseout="setDisplay('ra_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild04">Audhumbla Grassland</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild04">ra_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1785', 'mobsearch')">Atroce</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 180px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild05.png" onmouseover="setDisplay('ra_fild05');" onmouseout="setDisplay('ra_fild05');" />
            <div id="ra_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild05');" onmouseout="setDisplay('ra_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild05">Audhumbla Grassland</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild05">ra_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1680', 'mobsearch')">Hill Wind</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 225px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild06.png" onmouseover="setDisplay('ra_fild06');" onmouseout="setDisplay('ra_fild06');" />
            <div id="ra_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild06');" onmouseout="setDisplay('ra_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild06">Portus Luna</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild06">ra_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1680', 'mobsearch')">Hill Wind</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 270px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild03.png" onmouseover="setDisplay('ein_fild03');" onmouseout="setDisplay('ein_fild03');" />
            <div id="ein_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild03');" onmouseout="setDisplay('ein_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild03">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild03">ein_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1628', 'mobsearch')">Holden</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild04.png" onmouseover="setDisplay('ein_fild04');" onmouseout="setDisplay('ein_fild04');" />
            <div id="ein_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild04');" onmouseout="setDisplay('ein_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild04">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild04">ein_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1628', 'mobsearch')">Holden</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1121', 'mobsearch')">Giearth</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1614', 'mobsearch')">Mineral</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild05.png" onmouseover="setDisplay('ein_fild05');" onmouseout="setDisplay('ein_fild05');" />
            <div id="ein_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild05');" onmouseout="setDisplay('ein_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild05">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild05">ein_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1614', 'mobsearch')">Mineral</a> [35] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1615', 'mobsearch')">Obsidian</a> [17] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild06.png" onmouseover="setDisplay('ein_fild06');" onmouseout="setDisplay('ein_fild06');" />
            <div id="ein_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild06');" onmouseout="setDisplay('ein_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild06">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild06">ein_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1372', 'mobsearch')">Goat</a> [55] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1376', 'mobsearch')">Harpy</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1121', 'mobsearch')">Giearth</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1084', 'mobsearch')">Black Mushroom</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild07.png" onmouseover="setDisplay('yuno_fild07');" onmouseout="setDisplay('yuno_fild07');" />
            <div id="yuno_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild07');" onmouseout="setDisplay('yuno_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild07">El Mes Gorge (Valley of Abyss)</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild07">yuno_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1372', 'mobsearch')">Goat</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1380', 'mobsearch')">Driller</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1376', 'mobsearch')">Harpy</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild08.png" onmouseover="setDisplay('yuno_fild08');" onmouseout="setDisplay('yuno_fild08');" />
            <div id="yuno_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild08');" onmouseout="setDisplay('yuno_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild08">Kiel Hyre's Academy</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild08">yuno_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1369', 'mobsearch')">Grand Peco</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild09.png" onmouseover="setDisplay('yuno_fild09');" onmouseout="setDisplay('yuno_fild09');" />
            <div id="yuno_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild09');" onmouseout="setDisplay('yuno_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild09">Schwarzwald Guards Camp</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild09">yuno_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1174', 'mobsearch')">Stainer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1035', 'mobsearch')">Hunter Fly</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild10.png" onmouseover="setDisplay('yuno_fild10');" onmouseout="setDisplay('yuno_fild10');" />
            <div id="yuno_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild10');" onmouseout="setDisplay('yuno_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild10">Juno Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild10">yuno_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1174', 'mobsearch')">Stainer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1035', 'mobsearch')">Hunter Fly</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ama_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 747px; top: 135px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ama_fild01.png" onmouseover="setDisplay('ama_fild01');" onmouseout="setDisplay('ama_fild01');" />
            <div id="ama_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ama_fild01');" onmouseout="setDisplay('ama_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ama_fild01">Amatsu Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ama_fild01">ama_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1400', 'mobsearch')">Karakasa</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1406', 'mobsearch')">Kapha</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1068', 'mobsearch')">Hydra</a> [14] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1404', 'mobsearch')">Miyabi Doll</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1402', 'mobsearch')">Poison Toad</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1060', 'mobsearch')">Bigfoot</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild07.png" onmouseover="setDisplay('ra_fild07');" onmouseout="setDisplay('ra_fild07');" />
            <div id="ra_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild07');" onmouseout="setDisplay('ra_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild07">Od Canyon</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild07">ra_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_temple" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 90px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_temple.png" onmouseover="setDisplay('ra_temple');" onmouseout="setDisplay('ra_temple');" />
        </div>
          <div id="map_ra_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild08.png" onmouseover="setDisplay('ra_fild08');" onmouseout="setDisplay('ra_fild08');" />
            <div id="ra_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild08');" onmouseout="setDisplay('ra_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild08">The Plain of Ida</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild08">ra_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [100] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 180px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild09.png" onmouseover="setDisplay('ra_fild09');" onmouseout="setDisplay('ra_fild09');" />
            <div id="ra_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild09');" onmouseout="setDisplay('ra_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild09">Audhumbla Grassland</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild09">ra_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1680', 'mobsearch')">Hill Wind</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1376', 'mobsearch')">Harpy</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_lhz_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 225px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/lhz_fild01.png" onmouseover="setDisplay('lhz_fild01');" onmouseout="setDisplay('lhz_fild01');" />
            <div id="lhz_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('lhz_fild01');" onmouseout="setDisplay('lhz_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=lhz_fild01">Lighthalzen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=lhz_fild01">lhz_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1628', 'mobsearch')">Holden</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_lhz_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 270px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/lhz_fild02.png" onmouseover="setDisplay('lhz_fild02');" onmouseout="setDisplay('lhz_fild02');" />
            <div id="lhz_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('lhz_fild02');" onmouseout="setDisplay('lhz_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=lhz_fild02">Lighthalzen Field (Grim Reaper's Valley)</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=lhz_fild02">lhz_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1628', 'mobsearch')">Holden</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_einbroch" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/einbroch.png" onmouseover="setDisplay('einbroch');" onmouseout="setDisplay('einbroch');" />
        </div>
          <div id="map_einbech" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/einbech.png" onmouseover="setDisplay('einbech');" onmouseout="setDisplay('einbech');" />
            <div id="einbech" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('einbech');" onmouseout="setDisplay('einbech');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=einbech">Einbech, the Mining Village</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=einbech">einbech</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1175', 'mobsearch')">Tarou</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild07.png" onmouseover="setDisplay('ein_fild07');" onmouseout="setDisplay('ein_fild07');" />
            <div id="ein_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild07');" onmouseout="setDisplay('ein_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild07">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild07">ein_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1618', 'mobsearch')">Ungoliant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild11.png" onmouseover="setDisplay('yuno_fild11');" onmouseout="setDisplay('yuno_fild11');" />
            <div id="yuno_fild11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild11');" onmouseout="setDisplay('yuno_fild11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild11">Juno Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild11">yuno_fild11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1386', 'mobsearch')">Sleeper</a> [43] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [32] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild12" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild12.png" onmouseover="setDisplay('yuno_fild12');" onmouseout="setDisplay('yuno_fild12');" />
            <div id="yuno_fild12" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild12');" onmouseout="setDisplay('yuno_fild12');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild12">Border Checkpoint</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild12">yuno_fild12</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1378', 'mobsearch')">Demon Pungus</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_yuno_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yuno_fild01.png" onmouseover="setDisplay('yuno_fild01');" onmouseout="setDisplay('yuno_fild01');" />
            <div id="yuno_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yuno_fild01');" onmouseout="setDisplay('yuno_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yuno_fild01">Border Posts</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yuno_fild01">yuno_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1369', 'mobsearch')">Grand Peco</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [23] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_amatsu" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 720px; top: 180px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/amatsu.png" onmouseover="setDisplay('amatsu');" onmouseout="setDisplay('amatsu');" />
            <div id="amatsu" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('amatsu');" onmouseout="setDisplay('amatsu');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=amatsu">Amatsu, the Land of Destiny</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=amatsu">amatsu</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 0px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild10.png" onmouseover="setDisplay('ra_fild10');" onmouseout="setDisplay('ra_fild10');" />
            <div id="ra_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild10');" onmouseout="setDisplay('ra_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild10">Od Canyon</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild10">ra_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild11.png" onmouseover="setDisplay('ra_fild11');" onmouseout="setDisplay('ra_fild11');" />
            <div id="ra_fild11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild11');" onmouseout="setDisplay('ra_fild11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild11">The Plain of Ida</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild11">ra_fild11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [100] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_rachel" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 90px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/rachel.png" onmouseover="setDisplay('rachel');" onmouseout="setDisplay('rachel');" />
        </div>
          <div id="map_ra_fild12" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild12.png" onmouseover="setDisplay('ra_fild12');" onmouseout="setDisplay('ra_fild12');" />
            <div id="ra_fild12" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild12');" onmouseout="setDisplay('ra_fild12');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild12">The Plain of Ida</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild12">ra_fild12</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [100] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_lighthalzen" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 225px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/lighthalzen.png" onmouseover="setDisplay('lighthalzen');" onmouseout="setDisplay('lighthalzen');" />
        </div>
          <div id="map_lhz_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 270px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/lhz_fild03.png" onmouseover="setDisplay('lhz_fild03');" onmouseout="setDisplay('lhz_fild03');" />
            <div id="lhz_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('lhz_fild03');" onmouseout="setDisplay('lhz_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=lhz_fild03">Lighthalzen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=lhz_fild03">lhz_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1215', 'mobsearch')">Stem Worm</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1162', 'mobsearch')">Rafflesia</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1627', 'mobsearch')">Anopheles</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1680', 'mobsearch')">Hill Wind</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild08.png" onmouseover="setDisplay('ein_fild08');" onmouseout="setDisplay('ein_fild08');" />
            <div id="ein_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild08');" onmouseout="setDisplay('ein_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild08">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild08">ein_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1619', 'mobsearch')">Porcellio</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild09.png" onmouseover="setDisplay('ein_fild09');" onmouseout="setDisplay('ein_fild09');" />
            <div id="ein_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild09');" onmouseout="setDisplay('ein_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild09">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild09">ein_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1613', 'mobsearch')">Metaling</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1619', 'mobsearch')">Porcellio</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1048', 'mobsearch')">Thief Bug Egg</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ein_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ein_fild10.png" onmouseover="setDisplay('ein_fild10');" onmouseout="setDisplay('ein_fild10');" />
            <div id="ein_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ein_fild10');" onmouseout="setDisplay('ein_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ein_fild10">Einbroch Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ein_fild10">ein_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1368', 'mobsearch')">Geographer</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1619', 'mobsearch')">Porcellio</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1057', 'mobsearch')">Yoyo</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_alde_gld" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/alde_gld.png" onmouseover="setDisplay('alde_gld');" onmouseout="setDisplay('alde_gld');" />
        </div>
          <div id="map_aldebaran" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/aldebaran.png" onmouseover="setDisplay('aldebaran');" onmouseout="setDisplay('aldebaran');" />
            <div id="aldebaran" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('aldebaran');" onmouseout="setDisplay('aldebaran');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=aldebaran">Al De Baran</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=aldebaran">aldebaran</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_xmas" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 630px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/xmas.png" onmouseover="setDisplay('xmas');" onmouseout="setDisplay('xmas');" />
        </div>
          <div id="map_ayo_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 819px; top: 225px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ayo_fild02.png" onmouseover="setDisplay('ayo_fild02');" onmouseout="setDisplay('ayo_fild02');" />
            <div id="ayo_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ayo_fild02');" onmouseout="setDisplay('ayo_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ayo_fild02">Ayothaya Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ayo_fild02">ayo_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1586', 'mobsearch')">Leaf Cat</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1499', 'mobsearch')">Wootan Fighter</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ve_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ve_fild01.png" onmouseover="setDisplay('ve_fild01');" onmouseout="setDisplay('ve_fild01');" />
            <div id="ve_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ve_fild01');" onmouseout="setDisplay('ve_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ve_fild01">Veins Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ve_fild01">ve_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1055', 'mobsearch')">Muka</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1785', 'mobsearch')">Atroce</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ve_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 90px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ve_fild02.png" onmouseover="setDisplay('ve_fild02');" onmouseout="setDisplay('ve_fild02');" />
            <div id="ve_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ve_fild02');" onmouseout="setDisplay('ve_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ve_fild02">Veins Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ve_fild02">ve_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1166', 'mobsearch')">Savage</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1785', 'mobsearch')">Atroce</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ra_fild13" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ra_fild13.png" onmouseover="setDisplay('ra_fild13');" onmouseout="setDisplay('ra_fild13');" />
            <div id="ra_fild13" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ra_fild13');" onmouseout="setDisplay('ra_fild13');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ra_fild13">Shore of Tears</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ra_fild13">ra_fild13</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_12" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_12.png" onmouseover="setDisplay('mjolnir_12');" onmouseout="setDisplay('mjolnir_12');" />
            <div id="mjolnir_12" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_12');" onmouseout="setDisplay('mjolnir_12');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_12">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_12">mjolnir_12</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1215', 'mobsearch')">Stem Worm</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1053', 'mobsearch')">Thief Bug Female</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_xmas_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 630px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/xmas_fild01.png" onmouseover="setDisplay('xmas_fild01');" onmouseout="setDisplay('xmas_fild01');" />
            <div id="xmas_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('xmas_fild01');" onmouseout="setDisplay('xmas_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=xmas_fild01">Lutie Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=xmas_fild01">xmas_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1242', 'mobsearch')">Marin</a> [35] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1243', 'mobsearch')">Sasquatch</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1515', 'mobsearch')">Garm Baby</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1252', 'mobsearch')">Garm</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ayothaya" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 765px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ayothaya.png" onmouseover="setDisplay('ayothaya');" onmouseout="setDisplay('ayothaya');" />
        </div>
          <div id="map_ayo_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 810px; top: 270px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ayo_fild01.png" onmouseover="setDisplay('ayo_fild01');" onmouseout="setDisplay('ayo_fild01');" />
            <div id="ayo_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ayo_fild01');" onmouseout="setDisplay('ayo_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ayo_fild01">Ayothaya Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ayo_fild01">ayo_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1057', 'mobsearch')">Yoyo</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1056', 'mobsearch')">Smokie</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1586', 'mobsearch')">Leaf Cat</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ve_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 0px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ve_fild03.png" onmouseover="setDisplay('ve_fild03');" onmouseout="setDisplay('ve_fild03');" />
            <div id="ve_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ve_fild03');" onmouseout="setDisplay('ve_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ve_fild03">Veins Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ve_fild03">ve_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1836', 'mobsearch')">Magmaring</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1165', 'mobsearch')">Sandman</a> [45] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1386', 'mobsearch')">Sleeper</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ve_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ve_fild04.png" onmouseover="setDisplay('ve_fild04');" onmouseout="setDisplay('ve_fild04');" />
            <div id="ve_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ve_fild04');" onmouseout="setDisplay('ve_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ve_fild04">Veins Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ve_fild04">ve_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1780', 'mobsearch')">Muscipular</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_aru_gld" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 90px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/aru_gld.png" onmouseover="setDisplay('aru_gld');" onmouseout="setDisplay('aru_gld');" />
        </div>
          <div id="map_mjolnir_01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_01.png" onmouseover="setDisplay('mjolnir_01');" onmouseout="setDisplay('mjolnir_01');" />
            <div id="mjolnir_01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_01');" onmouseout="setDisplay('mjolnir_01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_01">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_01">mjolnir_01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1018', 'mobsearch')">Creamy</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1174', 'mobsearch')">Stainer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_02.png" onmouseover="setDisplay('mjolnir_02');" onmouseout="setDisplay('mjolnir_02');" />
            <div id="mjolnir_02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_02');" onmouseout="setDisplay('mjolnir_02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_02">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_02">mjolnir_02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1004', 'mobsearch')">Hornet</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1018', 'mobsearch')">Creamy</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1155', 'mobsearch')">Petite</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [23] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_03.png" onmouseover="setDisplay('mjolnir_03');" onmouseout="setDisplay('mjolnir_03');" />
            <div id="mjolnir_03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_03');" onmouseout="setDisplay('mjolnir_03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_03">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_03">mjolnir_03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1018', 'mobsearch')">Creamy</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1156', 'mobsearch')">Petite</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1100', 'mobsearch')">Argos</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [13] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_04.png" onmouseover="setDisplay('mjolnir_04');" onmouseout="setDisplay('mjolnir_04');" />
            <div id="mjolnir_04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_04');" onmouseout="setDisplay('mjolnir_04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_04">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_04">mjolnir_04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1004', 'mobsearch')">Hornet</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1099', 'mobsearch')">Argiope</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1059', 'mobsearch')">Mistress</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [17] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 315px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_05.png" onmouseover="setDisplay('mjolnir_05');" onmouseout="setDisplay('mjolnir_05');" />
            <div id="mjolnir_05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_05');" onmouseout="setDisplay('mjolnir_05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_05">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_05">mjolnir_05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1099', 'mobsearch')">Argiope</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1100', 'mobsearch')">Argos</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [9] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ve_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 0px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ve_fild05.png" onmouseover="setDisplay('ve_fild05');" onmouseout="setDisplay('ve_fild05');" />
            <div id="ve_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ve_fild05');" onmouseout="setDisplay('ve_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ve_fild05">Veins Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ve_fild05">ve_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1782', 'mobsearch')">Roween</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1783', 'mobsearch')">Galion</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1781', 'mobsearch')">Drosera</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1165', 'mobsearch')">Sandman</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1386', 'mobsearch')">Sleeper</a> [55] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1082', 'mobsearch')">White Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_veins" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/veins.png" onmouseover="setDisplay('veins');" onmouseout="setDisplay('veins');" />
        </div>
          <div id="map_nameless_n" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/nameless_n.png" onmouseover="setDisplay('nameless_n');" onmouseout="setDisplay('nameless_n');" />
            <div id="nameless_n" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('nameless_n');" onmouseout="setDisplay('nameless_n');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=nameless_n">The Nameless Island</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=nameless_n">nameless_n</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1864', 'mobsearch')">Zombie Slaughter</a> [12] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1865', 'mobsearch')">Ragged Zombie</a> [12] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1866', 'mobsearch')">Hell Poodle</a> [17] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1867', 'mobsearch')">Banshee</a> [16] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1869', 'mobsearch')">Flame Skull</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1036', 'mobsearch')">Ghoul</a> [40] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_glast_01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 225px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/glast_01.png" onmouseover="setDisplay('glast_01');" onmouseout="setDisplay('glast_01');" />
            <div id="glast_01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('glast_01');" onmouseout="setDisplay('glast_01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=glast_01">Glast Heim</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=glast_01">glast_01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1219', 'mobsearch')">Abysmal Knight</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1253', 'mobsearch')">Gargoyle</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [8] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 270px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild06.png" onmouseover="setDisplay('gef_fild06');" onmouseout="setDisplay('gef_fild06');" />
            <div id="gef_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild06');" onmouseout="setDisplay('gef_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild06">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild06">gef_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1133', 'mobsearch')">Kobold</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1134', 'mobsearch')">Kobold</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1135', 'mobsearch')">Kobold</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1156', 'mobsearch')">Petite</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [4] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild05.png" onmouseover="setDisplay('gef_fild05');" onmouseout="setDisplay('gef_fild05');" />
            <div id="gef_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild05');" onmouseout="setDisplay('gef_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild05">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild05">gef_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1282', 'mobsearch')">Kobold Archer</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild04.png" onmouseover="setDisplay('gef_fild04');" onmouseout="setDisplay('gef_fild04');" />
            <div id="gef_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild04');" onmouseout="setDisplay('gef_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild04">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild04">gef_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1011', 'mobsearch')">Chonchon</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1007', 'mobsearch')">Fabre</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1012', 'mobsearch')">Roda Frog</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_06.png" onmouseover="setDisplay('mjolnir_06');" onmouseout="setDisplay('mjolnir_06');" />
            <div id="mjolnir_06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_06');" onmouseout="setDisplay('mjolnir_06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_06">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_06">mjolnir_06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1174', 'mobsearch')">Stainer</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [8] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_07.png" onmouseover="setDisplay('mjolnir_07');" onmouseout="setDisplay('mjolnir_07');" />
            <div id="mjolnir_07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_07');" onmouseout="setDisplay('mjolnir_07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_07">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_07">mjolnir_07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1077', 'mobsearch')">Poison Spore</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1094', 'mobsearch')">Ambernite</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1004', 'mobsearch')">Hornet</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [7] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_08.png" onmouseover="setDisplay('mjolnir_08');" onmouseout="setDisplay('mjolnir_08');" />
            <div id="mjolnir_08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_08');" onmouseout="setDisplay('mjolnir_08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_08">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_08">mjolnir_08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1099', 'mobsearch')">Argiope</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1100', 'mobsearch')">Argos</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_10.png" onmouseover="setDisplay('mjolnir_10');" onmouseout="setDisplay('mjolnir_10');" />
            <div id="mjolnir_10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_10');" onmouseout="setDisplay('mjolnir_10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_10">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_10">mjolnir_10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1100', 'mobsearch')">Argos</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1155', 'mobsearch')">Petite</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_11.png" onmouseover="setDisplay('mjolnir_11');" onmouseout="setDisplay('mjolnir_11');" />
            <div id="mjolnir_11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_11');" onmouseout="setDisplay('mjolnir_11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_11">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_11">mjolnir_11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1099', 'mobsearch')">Argiope</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1020', 'mobsearch')">Mandragora</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1054', 'mobsearch')">Thief Bug Male</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [11] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gonryun" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 841.5px; top: 360px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gonryun.png" onmouseover="setDisplay('gonryun');" onmouseout="setDisplay('gonryun');" />
            <div id="gonryun" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gonryun');" onmouseout="setDisplay('gonryun');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gonryun">Gonryun, the Hermit Land</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gonryun">gonryun</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_ve_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/ve_fild07.png" onmouseover="setDisplay('ve_fild07');" onmouseout="setDisplay('ve_fild07');" />
            <div id="ve_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('ve_fild07');" onmouseout="setDisplay('ve_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=ve_fild07">Veins Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=ve_fild07">ve_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1784', 'mobsearch')">Stapo</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1266', 'mobsearch')">Aster</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1074', 'mobsearch')">Shellfish</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1254', 'mobsearch')">Raggler</a> [35] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1082', 'mobsearch')">White Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_nif_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 112.5px; top: 441px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/nif_fild01.png" onmouseover="setDisplay('nif_fild01');" onmouseout="setDisplay('nif_fild01');" />
            <div id="nif_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('nif_fild01');" onmouseout="setDisplay('nif_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=nif_fild01">Skellington, a Solitary Village in Nifflheim</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=nif_fild01">nif_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1506', 'mobsearch')">Disguise</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1504', 'mobsearch')">Dullahan</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1503', 'mobsearch')">Gibbet</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1510', 'mobsearch')">Heirozoist</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1508', 'mobsearch')">Quve</a> [30] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_nif_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 157.5px; top: 441px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/nif_fild02.png" onmouseover="setDisplay('nif_fild02');" onmouseout="setDisplay('nif_fild02');" />
            <div id="nif_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('nif_fild02');" onmouseout="setDisplay('nif_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=nif_fild02">Valley of Gyoll</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=nif_fild02">nif_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1509', 'mobsearch')">Lude</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1507', 'mobsearch')">Bloody Murderer</a> [11] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1505', 'mobsearch')">Loli Ruri</a> [21] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1510', 'mobsearch')">Heirozoist</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1503', 'mobsearch')">Gibbet</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1504', 'mobsearch')">Dullahan</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_niflheim" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 202.5px; top: 441px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/niflheim.png" onmouseover="setDisplay('niflheim');" onmouseout="setDisplay('niflheim');" />
            <div id="niflheim" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('niflheim');" onmouseout="setDisplay('niflheim');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=niflheim">Nifflheim, Realm of the Dead</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=niflheim">niflheim</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1504', 'mobsearch')">Dullahan</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1503', 'mobsearch')">Gibbet</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1510', 'mobsearch')">Heirozoist</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1508', 'mobsearch')">Quve</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1509', 'mobsearch')">Lude</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 270px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild08.png" onmouseover="setDisplay('gef_fild08');" onmouseout="setDisplay('gef_fild08');" />
            <div id="gef_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild08');" onmouseout="setDisplay('gef_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild08">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild08">gef_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1133', 'mobsearch')">Kobold</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1134', 'mobsearch')">Kobold</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1135', 'mobsearch')">Kobold</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1040', 'mobsearch')">Golem</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1042', 'mobsearch')">Steel Chonchon</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1077', 'mobsearch')">Poison Spore</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [8] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild07.png" onmouseover="setDisplay('gef_fild07');" onmouseout="setDisplay('gef_fild07');" />
            <div id="gef_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild07');" onmouseout="setDisplay('gef_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild07">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild07">gef_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1011', 'mobsearch')">Chonchon</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1007', 'mobsearch')">Fabre</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_geffen" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/geffen.png" onmouseover="setDisplay('geffen');" onmouseout="setDisplay('geffen');" />
            <div id="geffen" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('geffen');" onmouseout="setDisplay('geffen');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=geffen">Geffen</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=geffen">geffen</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild00" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild00.png" onmouseover="setDisplay('gef_fild00');" onmouseout="setDisplay('gef_fild00');" />
            <div id="gef_fild00" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild00');" onmouseout="setDisplay('gef_fild00');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild00">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild00">gef_fild00</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1007', 'mobsearch')">Fabre</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild00" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild00.png" onmouseover="setDisplay('prt_fild00');" onmouseout="setDisplay('prt_fild00');" />
            <div id="prt_fild00" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild00');" onmouseout="setDisplay('prt_fild00');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild00">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild00">prt_fild00</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1018', 'mobsearch')">Creamy</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1007', 'mobsearch')">Fabre</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1004', 'mobsearch')">Hornet</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_mjolnir_09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/mjolnir_09.png" onmouseover="setDisplay('mjolnir_09');" onmouseout="setDisplay('mjolnir_09');" />
            <div id="mjolnir_09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('mjolnir_09');" onmouseout="setDisplay('mjolnir_09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=mjolnir_09">Mt.Mjolnir</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=mjolnir_09">mjolnir_09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1174', 'mobsearch')">Stainer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1013', 'mobsearch')">Wolf</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [11] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild01.png" onmouseover="setDisplay('prt_fild01');" onmouseout="setDisplay('prt_fild01');" />
            <div id="prt_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild01');" onmouseout="setDisplay('prt_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild01">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild01">prt_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1007', 'mobsearch')">Fabre</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild02.png" onmouseover="setDisplay('prt_fild02');" onmouseout="setDisplay('prt_fild02');" />
            <div id="prt_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild02');" onmouseout="setDisplay('prt_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild02">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild02">prt_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1020', 'mobsearch')">Mandragora</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1007', 'mobsearch')">Fabre</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1093', 'mobsearch')">Eclipse</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 630px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild03.png" onmouseover="setDisplay('prt_fild03');" onmouseout="setDisplay('prt_fild03');" />
            <div id="prt_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild03');" onmouseout="setDisplay('prt_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild03">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild03">prt_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1057', 'mobsearch')">Yoyo</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1056', 'mobsearch')">Smokie</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1214', 'mobsearch')">Choco</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [2] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_monk" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 675px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_monk.png" onmouseover="setDisplay('prt_monk');" onmouseout="setDisplay('prt_monk');" />
        </div>
          <div id="map_gon_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 810px; top: 405px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gon_fild01.png" onmouseover="setDisplay('gon_fild01');" onmouseout="setDisplay('gon_fild01');" />
            <div id="gon_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gon_fild01');" onmouseout="setDisplay('gon_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gon_fild01">Gonryun Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gon_fild01">gon_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1415', 'mobsearch')">Baby Leopard</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1417', 'mobsearch')">Zipper Bear</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1409', 'mobsearch')">Dumpling Child</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1413', 'mobsearch')">Hermit Plant</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild12" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 270px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild12.png" onmouseover="setDisplay('gef_fild12');" onmouseout="setDisplay('gef_fild12');" />
            <div id="gef_fild12" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild12');" onmouseout="setDisplay('gef_fild12');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild12">Kordt Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild12">gef_fild12</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1133', 'mobsearch')">Kobold</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1134', 'mobsearch')">Kobold</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1135', 'mobsearch')">Kobold</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1282', 'mobsearch')">Kobold Archer</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1296', 'mobsearch')">Kobold Leader</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild13" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild13.png" onmouseover="setDisplay('gef_fild13');" onmouseout="setDisplay('gef_fild13');" />
            <div id="gef_fild13" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild13');" onmouseout="setDisplay('gef_fild13');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild13">Britoniah</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild13">gef_fild13</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1018', 'mobsearch')">Creamy</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1094', 'mobsearch')">Ambernite</a> [30] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild09.png" onmouseover="setDisplay('gef_fild09');" onmouseout="setDisplay('gef_fild09');" />
            <div id="gef_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild09');" onmouseout="setDisplay('gef_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild09">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild09">gef_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1094', 'mobsearch')">Ambernite</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1077', 'mobsearch')">Poison Spore</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild01.png" onmouseover="setDisplay('gef_fild01');" onmouseout="setDisplay('gef_fild01');" />
            <div id="gef_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild01');" onmouseout="setDisplay('gef_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild01">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild01">gef_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1012', 'mobsearch')">Roda Frog</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1089', 'mobsearch')">Toad</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild04.png" onmouseover="setDisplay('prt_fild04');" onmouseout="setDisplay('prt_fild04');" />
            <div id="prt_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild04');" onmouseout="setDisplay('prt_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild04">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild04">prt_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1052', 'mobsearch')">Rocker</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1018', 'mobsearch')">Creamy</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1088', 'mobsearch')">Vocal</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild05.png" onmouseover="setDisplay('prt_fild05');" onmouseout="setDisplay('prt_fild05');" />
            <div id="prt_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild05');" onmouseout="setDisplay('prt_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild05">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild05">prt_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1048', 'mobsearch')">Thief Bug Egg</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prontera" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prontera.png" onmouseover="setDisplay('prontera');" onmouseout="setDisplay('prontera');" />
            <div id="prontera" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prontera');" onmouseout="setDisplay('prontera');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prontera">Prontera City, Capital of Rune Midgard</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prontera">prontera</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 450px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild06.png" onmouseover="setDisplay('prt_fild06');" onmouseout="setDisplay('prt_fild06');" />
            <div id="prt_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild06');" onmouseout="setDisplay('prt_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild06">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild06">prt_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1048', 'mobsearch')">Thief Bug Egg</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_izlu2dun" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 652.5px; top: 472.5px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/izlu2dun.png" onmouseover="setDisplay('izlu2dun');" onmouseout="setDisplay('izlu2dun');" />
        </div>
          <div id="map_prt_gld" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 720px; top: 472.5px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_gld.png" onmouseover="setDisplay('prt_gld');" onmouseout="setDisplay('prt_gld');" />
        </div>
          <div id="map_yggdrasil01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 18px; top: 513px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/yggdrasil01.png" onmouseover="setDisplay('yggdrasil01');" onmouseout="setDisplay('yggdrasil01');" />
            <div id="yggdrasil01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('yggdrasil01');" onmouseout="setDisplay('yggdrasil01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=yggdrasil01">Hvergelmir's Fountain (Trunk of Yggdrasil)</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=yggdrasil01">yggdrasil01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [26] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1082', 'mobsearch')">White Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [26] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_um_dun02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 63px; top: 513px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/um_dun02.png" onmouseover="setDisplay('um_dun02');" onmouseout="setDisplay('um_dun02');" />
            <div id="um_dun02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('um_dun02');" onmouseout="setDisplay('um_dun02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=um_dun02">Passage to a Foreign World</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=um_dun02">um_dun02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1497', 'mobsearch')">Wooden Golem</a> [82] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1380', 'mobsearch')">Driller</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1498', 'mobsearch')">Wootan Shooter</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1493', 'mobsearch')">Dryad</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_um_dun01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 108px; top: 513px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/um_dun01.png" onmouseover="setDisplay('um_dun01');" onmouseout="setDisplay('um_dun01');" />
            <div id="um_dun01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('um_dun01');" onmouseout="setDisplay('um_dun01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=um_dun01">Carpenter's Shop in the Tree</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=um_dun01">um_dun01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1495', 'mobsearch')">Stone Shooter</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1499', 'mobsearch')">Wootan Fighter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1498', 'mobsearch')">Wootan Shooter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_umbala" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 153px; top: 513px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/umbala.png" onmouseover="setDisplay('umbala');" onmouseout="setDisplay('umbala');" />
            <div id="umbala" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('umbala');" onmouseout="setDisplay('umbala');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=umbala">Wootan Tribe's Village, Umbala</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=umbala">umbala</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild14" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 315px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild14.png" onmouseover="setDisplay('gef_fild14');" onmouseout="setDisplay('gef_fild14');" />
            <div id="gef_fild14" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild14');" onmouseout="setDisplay('gef_fild14');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild14">West Orc Village</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild14">gef_fild14</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1273', 'mobsearch')">Orc Lady</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1087', 'mobsearch')">Orc Hero</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1023', 'mobsearch')">Orc Warrior</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1189', 'mobsearch')">Orc Archer</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1213', 'mobsearch')">High Orc</a> [70] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild10.png" onmouseover="setDisplay('gef_fild10');" onmouseout="setDisplay('gef_fild10');" />
            <div id="gef_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild10');" onmouseout="setDisplay('gef_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild10">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild10">gef_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1190', 'mobsearch')">Orc Lord</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1023', 'mobsearch')">Orc Warrior</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1273', 'mobsearch')">Orc Lady</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1686', 'mobsearch')">Orc Baby</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild03.png" onmouseover="setDisplay('gef_fild03');" onmouseout="setDisplay('gef_fild03');" />
            <div id="gef_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild03');" onmouseout="setDisplay('gef_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild03">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild03">gef_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1023', 'mobsearch')">Orc Warrior</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1213', 'mobsearch')">High Orc</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1166', 'mobsearch')">Savage</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [21] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild02.png" onmouseover="setDisplay('gef_fild02');" onmouseout="setDisplay('gef_fild02');" />
            <div id="gef_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild02');" onmouseout="setDisplay('gef_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild02">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild02">gef_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1057', 'mobsearch')">Yoyo</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1023', 'mobsearch')">Orc Warrior</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1056', 'mobsearch')">Smokie</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1214', 'mobsearch')">Choco</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1087', 'mobsearch')">Orc Hero</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [8] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild07.png" onmouseover="setDisplay('prt_fild07');" onmouseout="setDisplay('prt_fild07');" />
            <div id="prt_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild07');" onmouseout="setDisplay('prt_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild07">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild07">prt_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1052', 'mobsearch')">Rocker</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1088', 'mobsearch')">Vocal</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1084', 'mobsearch')">Black Mushroom</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild08.png" onmouseover="setDisplay('prt_fild08');" onmouseout="setDisplay('prt_fild08');" />
            <div id="prt_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild08');" onmouseout="setDisplay('prt_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild08">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild08">prt_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_izlude" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/izlude.png" onmouseover="setDisplay('izlude');" onmouseout="setDisplay('izlude');" />
            <div id="izlude" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('izlude');" onmouseout="setDisplay('izlude');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=izlude">Izlude Town</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=izlude">izlude</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_louyang" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 823.5px; top: 495px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/louyang.png" onmouseover="setDisplay('louyang');" onmouseout="setDisplay('louyang');" />
        </div>
          <div id="map_um_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 153px; top: 558px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/um_fild04.png" onmouseover="setDisplay('um_fild04');" onmouseout="setDisplay('um_fild04');" />
            <div id="um_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('um_fild04');" onmouseout="setDisplay('um_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=um_fild04">Hoomga Jungle</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=um_fild04">um_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1128', 'mobsearch')">Horn</a> [21] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1214', 'mobsearch')">Choco</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1498', 'mobsearch')">Wootan Shooter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_gef_fild11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 360px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/gef_fild11.png" onmouseover="setDisplay('gef_fild11');" onmouseout="setDisplay('gef_fild11');" />
            <div id="gef_fild11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('gef_fild11');" onmouseout="setDisplay('gef_fild11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=gef_fild11">Geffen Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=gef_fild11">gef_fild11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1299', 'mobsearch')">Goblin Leader</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1122', 'mobsearch')">Goblin</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1123', 'mobsearch')">Goblin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1124', 'mobsearch')">Goblin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1125', 'mobsearch')">Goblin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1126', 'mobsearch')">Goblin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1258', 'mobsearch')">Goblin Archer</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1392', 'mobsearch')">Rotar Zairo</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1084', 'mobsearch')">Black Mushroom</a> [21] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 405px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild11.png" onmouseover="setDisplay('prt_fild11');" onmouseout="setDisplay('prt_fild11');" />
            <div id="prt_fild11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild11');" onmouseout="setDisplay('prt_fild11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild11">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild11">prt_fild11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1122', 'mobsearch')">Goblin</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1123', 'mobsearch')">Goblin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1124', 'mobsearch')">Goblin</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1125', 'mobsearch')">Goblin</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1126', 'mobsearch')">Goblin</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1258', 'mobsearch')">Goblin Archer</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1308', 'mobsearch')">Panzer Goblin</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1280', 'mobsearch')">Goblin Steamrider</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 450px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild10.png" onmouseover="setDisplay('prt_fild10');" onmouseout="setDisplay('prt_fild10');" />
            <div id="prt_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild10');" onmouseout="setDisplay('prt_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild10">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild10">prt_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1166', 'mobsearch')">Savage</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1167', 'mobsearch')">Savage Babe</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1051', 'mobsearch')">Thief Bug</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_prt_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 495px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/prt_fild09.png" onmouseover="setDisplay('prt_fild09');" onmouseout="setDisplay('prt_fild09');" />
            <div id="prt_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('prt_fild09');" onmouseout="setDisplay('prt_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=prt_fild09">Prontera Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=prt_fild09">prt_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1167', 'mobsearch')">Savage Babe</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1107', 'mobsearch')">Baby Desert Wolf</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1047', 'mobsearch')">Peco Peco Egg</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1049', 'mobsearch')">Picky</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1009', 'mobsearch')">Condor</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 540px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild01.png" onmouseover="setDisplay('moc_fild01');" onmouseout="setDisplay('moc_fild01');" />
            <div id="moc_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild01');" onmouseout="setDisplay('moc_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild01">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild01">moc_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1107', 'mobsearch')">Baby Desert Wolf</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1047', 'mobsearch')">Peco Peco Egg</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1049', 'mobsearch')">Picky</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 585px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild04.png" onmouseover="setDisplay('pay_fild04');" onmouseout="setDisplay('pay_fild04');" />
            <div id="pay_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild04');" onmouseout="setDisplay('pay_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild04">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild04">pay_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1242', 'mobsearch')">Marin</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1120', 'mobsearch')">Ghostring</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1090', 'mobsearch')">Mastering</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1096', 'mobsearch')">Angeling</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1582', 'mobsearch')">Deviling</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_arche" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 675px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_arche.png" onmouseover="setDisplay('pay_arche');" onmouseout="setDisplay('pay_arche');" />
        </div>
          <div id="map_lou_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 823.5px; top: 540px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/lou_fild01.png" onmouseover="setDisplay('lou_fild01');" onmouseout="setDisplay('lou_fild01');" />
            <div id="lou_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('lou_fild01');" onmouseout="setDisplay('lou_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=lou_fild01">Louyang Field</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=lou_fild01">lou_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1060', 'mobsearch')">Bigfoot</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1103', 'mobsearch')">Caramel</a> [21] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1139', 'mobsearch')">Mantis</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1516', 'mobsearch')">Mi Gao</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1030', 'mobsearch')">Anacondaq</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1084', 'mobsearch')">Black Mushroom</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_um_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 108px; top: 603px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/um_fild01.png" onmouseover="setDisplay('um_fild01');" onmouseout="setDisplay('um_fild01');" />
            <div id="um_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('um_fild01');" onmouseout="setDisplay('um_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=um_fild01">Luluka Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=um_fild01">um_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1499', 'mobsearch')">Wootan Fighter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1215', 'mobsearch')">Stem Worm</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1376', 'mobsearch')">Harpy</a> [2] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1493', 'mobsearch')">Dryad</a> [65] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_um_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 153px; top: 603px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/um_fild02.png" onmouseover="setDisplay('um_fild02');" onmouseout="setDisplay('um_fild02');" />
            <div id="um_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('um_fild02');" onmouseout="setDisplay('um_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=um_fild02">Hoomga Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=um_fild02">um_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1104', 'mobsearch')">Coco</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1214', 'mobsearch')">Choco</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1494', 'mobsearch')">Beetle King</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1114', 'mobsearch')">Dustiness</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1499', 'mobsearch')">Wootan Fighter</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1495', 'mobsearch')">Stone Shooter</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1118', 'mobsearch')">Flora</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1078', 'mobsearch')">Red Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_um_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 198px; top: 603px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/um_fild03.png" onmouseover="setDisplay('um_fild03');" onmouseout="setDisplay('um_fild03');" />
            <div id="um_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('um_fild03');" onmouseout="setDisplay('um_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=um_fild03">Kalala Swamp</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=um_fild03">um_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1500', 'mobsearch')">Parasite</a> [95] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1321', 'mobsearch')">Dragon Tail</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1271', 'mobsearch')">Alligator</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1259', 'mobsearch')">Gryphon</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [2] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_ruins" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 333px; top: 603px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_ruins.png" onmouseover="setDisplay('moc_ruins');" onmouseout="setDisplay('moc_ruins');" />
        </div>
          <div id="map_moc_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 378px; top: 603px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild07.png" onmouseover="setDisplay('moc_fild07');" onmouseout="setDisplay('moc_fild07');" />
            <div id="moc_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild07');" onmouseout="setDisplay('moc_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild07">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild07">moc_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1047', 'mobsearch')">Peco Peco Egg</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1050', 'mobsearch')">Picky</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1049', 'mobsearch')">Picky</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 423px; top: 603px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild06.png" onmouseover="setDisplay('moc_fild06');" onmouseout="setDisplay('moc_fild06');" />
            <div id="moc_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild06');" onmouseout="setDisplay('moc_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild06">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild06">moc_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1019', 'mobsearch')">Peco Peco</a> [85] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1055', 'mobsearch')">Muka</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1009', 'mobsearch')">Condor</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 468px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild05.png" onmouseover="setDisplay('moc_fild05');" onmouseout="setDisplay('moc_fild05');" />
            <div id="moc_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild05');" onmouseout="setDisplay('moc_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild05">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild05">moc_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1058', 'mobsearch')">Metaller</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1040', 'mobsearch')">Golem</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 513px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild04.png" onmouseover="setDisplay('moc_fild04');" onmouseout="setDisplay('moc_fild04');" />
            <div id="moc_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild04');" onmouseout="setDisplay('moc_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild04">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild04">moc_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1001', 'mobsearch')">Scorpion</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1058', 'mobsearch')">Metaller</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1095', 'mobsearch')">Andre</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1105', 'mobsearch')">Deniro</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1160', 'mobsearch')">Piere</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 567px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild02.png" onmouseover="setDisplay('moc_fild02');" onmouseout="setDisplay('moc_fild02');" />
            <div id="moc_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild02');" onmouseout="setDisplay('moc_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild02">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild02">moc_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1019', 'mobsearch')">Peco Peco</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1047', 'mobsearch')">Peco Peco Egg</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1049', 'mobsearch')">Picky</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [7] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [7] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_gld" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 612px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_gld.png" onmouseover="setDisplay('pay_gld');" onmouseout="setDisplay('pay_gld');" />
        </div>
          <div id="map_payon" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 657px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/payon.png" onmouseover="setDisplay('payon');" onmouseout="setDisplay('payon');" />
            <div id="payon" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('payon');" onmouseout="setDisplay('payon');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=payon">Payon Town</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=payon">payon</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 702px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild08.png" onmouseover="setDisplay('pay_fild08');" onmouseout="setDisplay('pay_fild08');" />
            <div id="pay_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild08');" onmouseout="setDisplay('pay_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild08">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild08">pay_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1010', 'mobsearch')">Willow</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1014', 'mobsearch')">Spore</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 747px; top: 585px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild09.png" onmouseover="setDisplay('pay_fild09');" onmouseout="setDisplay('pay_fild09');" />
            <div id="pay_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild09');" onmouseout="setDisplay('pay_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild09">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild09">pay_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1056', 'mobsearch')">Smokie</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1060', 'mobsearch')">Bigfoot</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_beach_dun2" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/beach_dun2.png" onmouseover="setDisplay('beach_dun2');" onmouseout="setDisplay('beach_dun2');" />
            <div id="beach_dun2" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('beach_dun2');" onmouseout="setDisplay('beach_dun2');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=beach_dun2">Ruande, the North Cave</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=beach_dun2">beach_dun2</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1274', 'mobsearch')">Megalith</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1255', 'mobsearch')">Nereid</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1278', 'mobsearch')">Stalactic Golem</a> [65] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1279', 'mobsearch')">Tri Joint</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1068', 'mobsearch')">Hydra</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 198px; top: 648px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild01.png" onmouseover="setDisplay('cmd_fild01');" onmouseout="setDisplay('cmd_fild01');" />
            <div id="cmd_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild01');" onmouseout="setDisplay('cmd_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild01">Papuchicha Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild01">cmd_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1271', 'mobsearch')">Alligator</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1166', 'mobsearch')">Savage</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1077', 'mobsearch')">Poison Spore</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 243px; top: 648px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild03.png" onmouseover="setDisplay('cmd_fild03');" onmouseout="setDisplay('cmd_fild03');" />
            <div id="cmd_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild03');" onmouseout="setDisplay('cmd_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild03">Zenhai Marsh</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild03">cmd_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1262', 'mobsearch')">Mutant Dragonoid</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1256', 'mobsearch')">Pest</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1206', 'mobsearch')">Anolian</a> [90] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1089', 'mobsearch')">Toad</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 288px; top: 648px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild05.png" onmouseover="setDisplay('cmd_fild05');" onmouseout="setDisplay('cmd_fild05');" />
            <div id="cmd_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild05');" onmouseout="setDisplay('cmd_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild05">Border of Papuchica Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild05">cmd_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1119', 'mobsearch')">Frilldora</a> [45] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1271', 'mobsearch')">Alligator</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1215', 'mobsearch')">Stem Worm</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1256', 'mobsearch')">Pest</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild19" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 333px; top: 648px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild19.png" onmouseover="setDisplay('moc_fild19');" onmouseout="setDisplay('moc_fild19');" />
        </div>
          <div id="map_morocc" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 378px; top: 648px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/morocc.png" onmouseover="setDisplay('morocc');" onmouseout="setDisplay('morocc');" />
            <div id="morocc" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('morocc');" onmouseout="setDisplay('morocc');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=morocc">Morroc Town</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=morocc">morocc</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 423px; top: 648px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild10.png" onmouseover="setDisplay('moc_fild10');" onmouseout="setDisplay('moc_fild10');" />
            <div id="moc_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild10');" onmouseout="setDisplay('moc_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild10">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild10">moc_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1047', 'mobsearch')">Peco Peco Egg</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1049', 'mobsearch')">Picky</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1050', 'mobsearch')">Picky</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 468px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild09.png" onmouseover="setDisplay('moc_fild09');" onmouseout="setDisplay('moc_fild09');" />
            <div id="moc_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild09');" onmouseout="setDisplay('moc_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild09">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild09">moc_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1058', 'mobsearch')">Metaller</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1095', 'mobsearch')">Andre</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1105', 'mobsearch')">Deniro</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1160', 'mobsearch')">Piere</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1119', 'mobsearch')">Frilldora</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 513px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild08.png" onmouseover="setDisplay('moc_fild08');" onmouseout="setDisplay('moc_fild08');" />
            <div id="moc_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild08');" onmouseout="setDisplay('moc_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild08">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild08">moc_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1001', 'mobsearch')">Scorpion</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1030', 'mobsearch')">Anacondaq</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1107', 'mobsearch')">Baby Desert Wolf</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild13" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 558px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild13.png" onmouseover="setDisplay('moc_fild13');" onmouseout="setDisplay('moc_fild13');" />
            <div id="moc_fild13" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild13');" onmouseout="setDisplay('moc_fild13');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild13">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild13">moc_fild13</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1030', 'mobsearch')">Anacondaq</a> [75] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1025', 'mobsearch')">Boa</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [13] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 612px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild03.png" onmouseover="setDisplay('moc_fild03');" onmouseout="setDisplay('moc_fild03');" />
            <div id="moc_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild03');" onmouseout="setDisplay('moc_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild03">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild03">moc_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1033', 'mobsearch')">Elder Willow</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1277', 'mobsearch')">Greatest General</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1116', 'mobsearch')">Eggyra</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1010', 'mobsearch')">Willow</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1092', 'mobsearch')">Vagabond Wolf</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [14] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 657px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild01.png" onmouseover="setDisplay('pay_fild01');" onmouseout="setDisplay('pay_fild01');" />
            <div id="pay_fild01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild01');" onmouseout="setDisplay('pay_fild01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild01">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild01">pay_fild01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1010', 'mobsearch')">Willow</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1014', 'mobsearch')">Spore</a> [100] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1084', 'mobsearch')">Black Mushroom</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 702px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild07.png" onmouseover="setDisplay('pay_fild07');" onmouseout="setDisplay('pay_fild07');" />
            <div id="pay_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild07');" onmouseout="setDisplay('pay_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild07">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild07">pay_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1033', 'mobsearch')">Elder Willow</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1116', 'mobsearch')">Eggyra</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1010', 'mobsearch')">Willow</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1060', 'mobsearch')">Bigfoot</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [8] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild10" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 747px; top: 630px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild10.png" onmouseover="setDisplay('pay_fild10');" onmouseout="setDisplay('pay_fild10');" />
            <div id="pay_fild10" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild10');" onmouseout="setDisplay('pay_fild10');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild10">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild10">pay_fild10</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1277', 'mobsearch')">Greatest General</a> [65] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1110', 'mobsearch')">Dokebi</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1077', 'mobsearch')">Poison Spore</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1180', 'mobsearch')">Nine Tail</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_alb2trea" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 810px; top: 666px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/alb2trea.png" onmouseover="setDisplay('alb2trea');" onmouseout="setDisplay('alb2trea');" />
        </div>
          <div id="map_beach_dun" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 0px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/beach_dun.png" onmouseover="setDisplay('beach_dun');" onmouseout="setDisplay('beach_dun');" />
            <div id="beach_dun" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('beach_dun');" onmouseout="setDisplay('beach_dun');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=beach_dun">Karu, the West Cave</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=beach_dun">beach_dun</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1148', 'mobsearch')">Medusa</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1264', 'mobsearch')">Merman</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1255', 'mobsearch')">Nereid</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1256', 'mobsearch')">Pest</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1583', 'mobsearch')">Tao Gunka</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_comodo" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 45px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/comodo.png" onmouseover="setDisplay('comodo');" onmouseout="setDisplay('comodo');" />
            <div id="comodo" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('comodo');" onmouseout="setDisplay('comodo');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=comodo">Beach town, Comodo</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=comodo">comodo</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_beach_dun3" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 90px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/beach_dun3.png" onmouseover="setDisplay('beach_dun3');" onmouseout="setDisplay('beach_dun3');" />
            <div id="beach_dun3" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('beach_dun3');" onmouseout="setDisplay('beach_dun3');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=beach_dun3">Mao, the East Cave</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=beach_dun3">beach_dun3</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1255', 'mobsearch')">Nereid</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1034', 'mobsearch')">Thara Frog</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1068', 'mobsearch')">Hydra</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1064', 'mobsearch')">Megalodon</a> [30] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 198px; top: 693px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild02.png" onmouseover="setDisplay('cmd_fild02');" onmouseout="setDisplay('cmd_fild02');" />
            <div id="cmd_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild02');" onmouseout="setDisplay('cmd_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild02">Kokomo Beach</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild02">cmd_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1266', 'mobsearch')">Aster</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1073', 'mobsearch')">Crab</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1271', 'mobsearch')">Alligator</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1254', 'mobsearch')">Raggler</a> [32] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1067', 'mobsearch')">Cornutus</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1074', 'mobsearch')">Shellfish</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1313', 'mobsearch')">Mobster</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1317', 'mobsearch')">Seal</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1391', 'mobsearch')">Galapago</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild04" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 243px; top: 693px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild04.png" onmouseover="setDisplay('cmd_fild04');" onmouseout="setDisplay('cmd_fild04');" />
            <div id="cmd_fild04" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild04');" onmouseout="setDisplay('cmd_fild04');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild04">Kokomo Beach</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild04">cmd_fild04</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1266', 'mobsearch')">Aster</a> [45] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1271', 'mobsearch')">Alligator</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1073', 'mobsearch')">Crab</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1254', 'mobsearch')">Raggler</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1074', 'mobsearch')">Shellfish</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1323', 'mobsearch')">Sea Otter</a> [20] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 288px; top: 693px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild06.png" onmouseover="setDisplay('cmd_fild06');" onmouseout="setDisplay('cmd_fild06');" />
            <div id="cmd_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild06');" onmouseout="setDisplay('cmd_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild06">Fortress Saint Darmain (West)</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild06">cmd_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1282', 'mobsearch')">Kobold Archer</a> [27] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1258', 'mobsearch')">Goblin Archer</a> [47] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1376', 'mobsearch')">Harpy</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild08" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 333px; top: 693px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild08.png" onmouseover="setDisplay('cmd_fild08');" onmouseout="setDisplay('cmd_fild08');" />
            <div id="cmd_fild08" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild08');" onmouseout="setDisplay('cmd_fild08');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild08">Fortress Saint Darmain (East)</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild08">cmd_fild08</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1282', 'mobsearch')">Kobold Archer</a> [79] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1258', 'mobsearch')">Goblin Archer</a> [28] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1215', 'mobsearch')">Stem Worm</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1165', 'mobsearch')">Sandman</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1259', 'mobsearch')">Gryphon</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [8] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild12" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 378px; top: 693px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild12.png" onmouseover="setDisplay('moc_fild12');" onmouseout="setDisplay('moc_fild12');" />
            <div id="moc_fild12" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild12');" onmouseout="setDisplay('moc_fild12');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild12">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild12">moc_fild12</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1050', 'mobsearch')">Picky</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1049', 'mobsearch')">Picky</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1047', 'mobsearch')">Peco Peco Egg</a> [35] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [35] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 423px; top: 693px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild11.png" onmouseover="setDisplay('moc_fild11');" onmouseout="setDisplay('moc_fild11');" />
            <div id="moc_fild11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild11');" onmouseout="setDisplay('moc_fild11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild11">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild11">moc_fild11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1127', 'mobsearch')">Hode</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1040', 'mobsearch')">Golem</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1095', 'mobsearch')">Andre</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1105', 'mobsearch')">Deniro</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1160', 'mobsearch')">Piere</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1055', 'mobsearch')">Muka</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild15" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 468px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild15.png" onmouseover="setDisplay('moc_fild15');" onmouseout="setDisplay('moc_fild15');" />
            <div id="moc_fild15" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild15');" onmouseout="setDisplay('moc_fild15');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild15">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild15">moc_fild15</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1127', 'mobsearch')">Hode</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1001', 'mobsearch')">Scorpion</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1095', 'mobsearch')">Andre</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1159', 'mobsearch')">Phreeoni</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [12] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild14" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 513px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild14.png" onmouseover="setDisplay('moc_fild14');" onmouseout="setDisplay('moc_fild14');" />
            <div id="moc_fild14" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild14');" onmouseout="setDisplay('moc_fild14');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild14">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild14">moc_fild14</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1106', 'mobsearch')">Desert Wolf</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1037', 'mobsearch')">Side Winder</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1107', 'mobsearch')">Baby Desert Wolf</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild11" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 612px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild11.png" onmouseover="setDisplay('pay_fild11');" onmouseout="setDisplay('pay_fild11');" />
            <div id="pay_fild11" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild11');" onmouseout="setDisplay('pay_fild11');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild11">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild11">pay_fild11</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1277', 'mobsearch')">Greatest General</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1180', 'mobsearch')">Nine Tail</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1321', 'mobsearch')">Dragon Tail</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1115', 'mobsearch')">Eddga</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [6] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild02" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 657px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild02.png" onmouseover="setDisplay('pay_fild02');" onmouseout="setDisplay('pay_fild02');" />
            <div id="pay_fild02" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild02');" onmouseout="setDisplay('pay_fild02');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild02">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild02">pay_fild02</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1025', 'mobsearch')">Boa</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1013', 'mobsearch')">Wolf</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1014', 'mobsearch')">Spore</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [4] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild03" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 702px; top: 675px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild03.png" onmouseover="setDisplay('pay_fild03');" onmouseout="setDisplay('pay_fild03');" />
            <div id="pay_fild03" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild03');" onmouseout="setDisplay('pay_fild03');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild03">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild03">pay_fild03</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1002', 'mobsearch')">Poring</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1010', 'mobsearch')">Willow</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1008', 'mobsearch')">Pupa</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1063', 'mobsearch')">Lunatic</a> [50] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [4] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_jawaii" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 135px; top: 738px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/jawaii.png" onmouseover="setDisplay('jawaii');" onmouseout="setDisplay('jawaii');" />
            <div id="jawaii" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('jawaii');" onmouseout="setDisplay('jawaii');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=jawaii">Jawaii, the Honeymoon Island</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=jawaii">jawaii</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1158', 'mobsearch')">Phen</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1266', 'mobsearch')">Aster</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1074', 'mobsearch')">Shellfish</a> [3] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild07" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 288px; top: 738px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild07.png" onmouseover="setDisplay('cmd_fild07');" onmouseout="setDisplay('cmd_fild07');" />
            <div id="cmd_fild07" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild07');" onmouseout="setDisplay('cmd_fild07');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild07">Beacon Island, Pharos</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild07">cmd_fild07</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1266', 'mobsearch')">Aster</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1073', 'mobsearch')">Crab</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1254', 'mobsearch')">Raggler</a> [4] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1074', 'mobsearch')">Shellfish</a> [5] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_cmd_fild09" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 333px; top: 738px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/cmd_fild09.png" onmouseover="setDisplay('cmd_fild09');" onmouseout="setDisplay('cmd_fild09');" />
            <div id="cmd_fild09" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('cmd_fild09');" onmouseout="setDisplay('cmd_fild09');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=cmd_fild09">Fortress Saint Darmain (South)</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=cmd_fild09">cmd_fild09</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1042', 'mobsearch')">Steel Chonchon</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1113', 'mobsearch')">Drops</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1030', 'mobsearch')">Anacondaq</a> [60] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1009', 'mobsearch')">Condor</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1127', 'mobsearch')">Hode</a> [3] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1253', 'mobsearch')">Gargoyle</a> [2] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild18" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 378px; top: 738px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild18.png" onmouseover="setDisplay('moc_fild18');" onmouseout="setDisplay('moc_fild18');" />
            <div id="moc_fild18" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild18');" onmouseout="setDisplay('moc_fild18');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild18">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild18">moc_fild18</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1042', 'mobsearch')">Steel Chonchon</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1011', 'mobsearch')">Chonchon</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1055', 'mobsearch')">Muka</a> [80] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1058', 'mobsearch')">Metaller</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1091', 'mobsearch')">Dragon Fly</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1035', 'mobsearch')">Hunter Fly</a> [1] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [8] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild17" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 423px; top: 738px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild17.png" onmouseover="setDisplay('moc_fild17');" onmouseout="setDisplay('moc_fild17');" />
            <div id="moc_fild17" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild17');" onmouseout="setDisplay('moc_fild17');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild17">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild17">moc_fild17</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1127', 'mobsearch')">Hode</a> [100] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1042', 'mobsearch')">Steel Chonchon</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [15] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1119', 'mobsearch')">Frilldora</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1001', 'mobsearch')">Scorpion</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1081', 'mobsearch')">Yellow Plant</a> [6] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1079', 'mobsearch')">Blue Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_moc_fild16" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 468px; top: 720px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/moc_fild16.png" onmouseover="setDisplay('moc_fild16');" onmouseout="setDisplay('moc_fild16');" />
            <div id="moc_fild16" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('moc_fild16');" onmouseout="setDisplay('moc_fild16');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=moc_fild16">Sograt Desert</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=moc_fild16">moc_fild16</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1165', 'mobsearch')">Sandman</a> [70] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1127', 'mobsearch')">Hode</a> [30] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1138', 'mobsearch')">Magnolia</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1095', 'mobsearch')">Andre</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1105', 'mobsearch')">Deniro</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1097', 'mobsearch')">Ant Egg</a> [10] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild05" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 675px; top: 720px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild05.png" onmouseover="setDisplay('pay_fild05');" onmouseout="setDisplay('pay_fild05');" />
            <div id="pay_fild05" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild05');" onmouseout="setDisplay('pay_fild05');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild05">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild05">pay_fild05</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1321', 'mobsearch')">Dragon Tail</a> [5] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1077', 'mobsearch')">Poison Spore</a> [65] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [8] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_pay_fild06" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 720px; top: 720px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/pay_fild06.png" onmouseover="setDisplay('pay_fild06');" onmouseout="setDisplay('pay_fild06');" />
            <div id="pay_fild06" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('pay_fild06');" onmouseout="setDisplay('pay_fild06');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=pay_fild06">Payon Forest</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=pay_fild06">pay_fild06</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1024', 'mobsearch')">Wormtail</a> [90] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1014', 'mobsearch')">Spore</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1031', 'mobsearch')">Poporing</a> [20] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1053', 'mobsearch')">Thief Bug Female</a> [40] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1085', 'mobsearch')">Red Mushroom</a> [8] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1080', 'mobsearch')">Green Plant</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1083', 'mobsearch')">Shining Plant</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_alberta" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 765px; top: 720px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/alberta.png" onmouseover="setDisplay('alberta');" onmouseout="setDisplay('alberta');" />
            <div id="alberta" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('alberta');" onmouseout="setDisplay('alberta');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=alberta">Alberta</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=alberta">alberta</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1261', 'mobsearch')">Wild Rose</a> [1] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>
          <div id="map_tur_dun01" class="acidMapBox" style="width: 45px; height: 45px; position: absolute; left: 832.5px; top: 720px; opacity: 1.0;">
            <img alt="Image" src="media/maps2/tur_dun01.png" onmouseover="setDisplay('tur_dun01');" onmouseout="setDisplay('tur_dun01');" />
            <div id="tur_dun01" class="propertyBox mapBox" style="display: none; position: relative; top: -22.5px; left: 22.5px" onmouseover="setDisplay('tur_dun01');" onmouseout="setDisplay('tur_dun01');">
              <table class="whitetable" style="margin: 0;">
                <tr class="grayrow"><td style="width: 100%;"><a href="?act=fieldview&amp;field=tur_dun01">Turtle Island</a></td></tr>
                <tr>
                  <td style="text-align: left;">
                  <b>Map name:</b> <a href="?act=fieldview&amp;field=tur_dun01">tur_dun01</a><br />
                  <b>Monsters:</b> <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1321', 'mobsearch')">Dragon Tail</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1322', 'mobsearch')">Spring Rabbit</a> [25] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1034', 'mobsearch')">Thara Frog</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1314', 'mobsearch')">Permeter</a> [10] <br />
                   <a onclick="setDisplay('smokescreen');showprop('ajaxFrame','1256', 'mobsearch')">Pest</a> [15] <br />

                  </td>
                </tr>
              </table>
            </div>
        </div>

      </div>
      </td>
    </tr>  
  </table>
</div>

<div id="AllSearchResults"></div>
