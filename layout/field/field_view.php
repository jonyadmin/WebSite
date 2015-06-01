<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <table class="whitetable alignment1" cellspacing="1">
      <tr>
        <td class="grayrow" colspan="2"><b><?php echo $check_map[0] . " [$map_name]"; ?></b></td>
      </tr>
      <tr>
        <td class="grayrow"><?php echo message('map_view'); ?></td>
        <td class="grayrow"><?php echo message('map_mobstat'); ?></td>
      </tr>
      <tr>
        <td style="width: 512px"><img src="<?php echo $resPaths['maps'] . '/' . $map_name.'.'.$fileType['maps']; ?>" alt="<?php echo $check_map[0]; ?>" /></td>
        <td style="vertical-align: top">
          <ul>
            <li><b><?php echo message('mstat_mobs'); ?></b>
              <ul>
                <?php echo $thisMapReadAbleSpawns; ?>
              </ul>
            </li>
          </ul>
          <ul>
            <li><b><?php echo message('mstat_size'); ?></b>
              <ul>
              <?php echo setMapStatistics($STATISTICS['Size']); ?>
              </ul>
            </li>
          </ul>
          <ul>
            <li><b><?php echo message('mstat_ele'); ?></b>
              <ul>
              <?php echo setMapStatistics($STATISTICS['Element']); ?>
              </ul>
            </li>
          </ul>
          <ul>
            <li><b><?php echo message('mstat_race'); ?></b>
              <ul>
              <?php echo setMapStatistics($STATISTICS['Race']); ?>
              </ul>
            </li>
          </ul>
          <ul>
            <li><b><?php echo message('mstat_range'); ?></b>
              <ul>
              <?php echo setMapStatistics($STATISTICS['Range']); ?>
              </ul>
            </li>
          </ul>
        </td>
      </tr>
    </table>

    <div id="AllSearchResults">
    
    <?php echo $monsterTables; ?>

    </div>