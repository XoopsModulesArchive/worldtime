<?php
// World Time module for XOOPS
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //

include 'header.php';

if ('worldtime' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}
?>

    <table width="100%" border="0" cellspacing="1" cellpadding="8" bgcolor="#ffffff">
        <tr>
            <td>
                <table border="0" width="100%">
                    <tr>
                        <td width="100%">
                            <p align="center">
                                <applet name="SimpleSun" code="SimpleSunApplet" archive="SimpleSun.jar" width=640 height=320></applet>
                        </td>
                    </tr>
                </table>
                <table border="0" width="100%">
                    <tr>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="CTT">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="PST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="MST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="CST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" align="center"><b>Beijing, Hong Kong, Taipei</b></td>
                        <td width="25%" align="center"><b>PST: Los Angeles</b></td>
                        <td width="25%" align="center"><b>MST: Denver</b></td>
                        <td width="25%" align="center"><b>CST: Chicago</b></td>
                    </tr>
                </table>
                <table border="0" width="100%">
                    <tr>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="EST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="ECT">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="GMT">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="ECT">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" align="center"><b>EST: New York</b></td>
                        <td width="25%" align="center"><b>Paris</b></td>
                        <td width="25%" align="center"><b>GMT/United Kingdom</b></td>
                        <td width="25%" align="center"><b>Germany</b></td>
                    </tr>
                </table>
                <table border="0" width="100%">
                    <tr>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="EAT">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="HST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="SST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                        <td width="25%" align="center">
                            <applet code="BillsClock2" archive="BillsClock2.jar" width="150" height="150">
                                <param name="ARCHIVE" value="billsclock2.jar">
                                <param name="BGCOLOR" value="#ffffff">
                                <param name="BGIMAGE" value="clock.gif">
                                <param name="CENTERX" value="75">
                                <param name="CENTERY" value="75">
                                <param name="FGCOLOR" value="#000000">
                                <param name="FONTSIZE" value="10">
                                <param name="HOURCOLOR" value="#000000">
                                <param name="HOURLENGTH" value="30">
                                <param name="HOURTHICK" value="3">
                                <param name="MINUTECOLOR" value="#000000">
                                <param name="MINUTELENGTH" value="50">
                                <param name="MINUTETHICK" value="3">
                                <param name="SHOW_DATE" value="1">
                                <param name="SHOW_AMPM" value="1">
                                <param name="SHOWSWEEP" value="1">
                                <param name="SNTP_PORT" value="1200">
                                <param name="SNTP_SAMPLES" value="3">
                                <param name="SWEEPCOLOR" value="#FF0000">
                                <param name="SWEEPLENGTH" value="50">
                                <param name="TIMEZONE" value="NST">
                                <param name="USE_SNTP" value="0">
                                <param name="SYNC_MESSAGE" value="Stand by...">
                                <param name="VERBOSE" value=0>
                            </applet>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%" align="center"><b>Moscow</b></td>
                        <td width="25%" align="center"><b>Hawaii</b></td>
                        <td width="25%" align="center"><b>Sydney</b></td>
                        <td width="25%" align="center"><b>New Zealand</b></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

<?php
require XOOPS_ROOT_PATH . '/footer.php';
?>
