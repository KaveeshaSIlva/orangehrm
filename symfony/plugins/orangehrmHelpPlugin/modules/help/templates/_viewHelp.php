<?php
/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA 02110-1301, USA
 */

use_stylesheet(plugin_web_path('orangehrmHelpPlugin', 'css/viewHelpComponent'));
$moduleName =sfContext::getInstance()->getModuleName();
$actionName = sfContext::getInstance()->getActionName();
use_javascript(plugin_web_path('orangehrmHelpPlugin', 'js/viewHelpComponent'));

?>

<!--Help icon-->
<!--<a class="help-icon-div"  href="--><?php //echo url_for('help/help');?><!--?label=--><?php //echo $moduleName;?><!--_--><?php //echo $actionName;?><!--" target="_blank">-->
<a class="help-icon-div" >
    <span class="fa-lg fa-layers fa-fw" id="helpIcon">
        <i class="far fa-question-circle help-icon"></i>
    </span>
</a>

<!-- Modal -->
<div class="modal hide" id="helpModal" role="dialog" data-backdrop="false" style="width: 300px;">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div style="background-color: #C8CFC8; padding-top: 15px;padding-bottom: 15px">
                <h1 style="padding-left: 15px; font-size: 18px;font-weight: bold"><b>How can we help you?</b></h1>
            </div>
            <div class="modal-body" style="padding: 0px;padding-bottom: 15px">
<!--                <div id="notificationsMessages"-->
<!--                     class="notifications-message --><?php //if ($empty) echo 'empty-notifications-message'; ?><!--">--><?php //if ($empty) echo __('No new notifications'); ?><!--</div>-->
<!--                <br>-->
                <form style="padding-top: 5px;padding-left: 15px;padding-right: 15px;">
                    <i class="fa fa-search help-icon"></i>
                    <input id="helpSearchKey" style="background-color: #f7f6f6; border:none" placeholder="Enter your search phase...">
                </form>
                <div id="helpSearchResult">
                    <hr>
                    <br>
                    <ul>
                        <div class="help-row" style="padding-top: 8px; padding-bottom: 8px;padding-left: 15px;padding-right: 15px;">
                            <div style="-ms-flex-direction: row">

                            <h5>
                                <i class="fa fa-book-reader help-icon" style="padding-right: 6px"></i>
                                 Create master data for employee
                            </h5>
                            </div>
                        </div>
                        <div class="help-row" style="padding-top: 8px; padding-bottom: 8px;padding-left: 15px;padding-right: 15px;">
                            <h1>
                                <i class="fa fa-book-reader help-icon" style="padding-right: 6px"></i>
                                How to Add a User Account
                            </h1>
                        </div>
                        <div class="help-row"  style="padding-top: 8px; padding-bottom: 8px;padding-left: 15px;padding-right: 15px;">
                            <h1>
                                <i class="fa fa-book-reader help-icon" style="padding-right: 6px"></i>
                                  How to Approve Leave by Admin
                            </h1>
                        </div>
                        <div class="help-row"  style="padding-top: 8px; padding-bottom: 8px;padding-left: 15px;padding-right: 15px;">
                            <h1>
                                <i class="fa fa-book-reader help-icon" style="padding-right: 6px"></i>
                                How to Create Dynamic Reports
                            </h1>
                        </div>
                        <div class="help-row"  style="padding-top: 8px; padding-bottom: 8px;padding-left: 15px;padding-right: 15px;">
                            <h1>
                                <i class="fa fa-book-reader help-icon" style="padding-right: 6px"></i>
                                How to Add an Employee
                            </h1>
                        </div>
                    </ul>
                    <hr>

                    <h1 style="padding-top: 6px;font-weight: bold;padding-left: 15px;padding-right: 15px;">
                       <i class="far fa-question-circle help-icon" style="padding-right: 6px"></i>
                          OrangeHRM Help Center
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

