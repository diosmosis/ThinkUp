<?php
/**
 *
 * ThinkUp/webapp/_lib/view/plugins/insert.dashboard_link.php
 *
 * Copyright (c) 2009-2011 Gina Trapani
 *
 * LICENSE:
 *
 * This file is part of ThinkUp (http://thinkupapp.com).
 *
 * ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
 * later version.
 *
 * ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 *
 * @author Gina Trapani <ginatrapani[at]gmail[dot]com>
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright 2009-2011 Gina Trapani
 */
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     insert.dashboard_link.php
 * Type:     insert
 * Name:     dashboard_link
 * Purpose:  Examine the instance network and username to return
 *           the link that will return the user to the correct
 *           dashboard.
 * -------------------------------------------------------------
 */
function smarty_insert_dashboard_link($params, &$smarty) {
    return $smarty->_tpl_vars['site_root_path'].'?u='.$smarty->_tpl_vars['selected_instance_username'].
    '&n='.$smarty->_tpl_vars['selected_instance_network'];
}