<?php
/**
 *  @copyright SimpleCRM http://www.simplecrm.com.sg
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SimpleCRM <info@simplecrm.com.sg>
 */ 
//Controller class to make twitter api call and data handling of api response
class scrm_employeeController extends SugarController {

    function action_removeField() {
        global $db;
        $request_data = $_REQUEST;
        $field_name = $request_data['field'];
        $bean_id = $request_data['id'];
        $module = $request_data['module'];

        $bean = BeanFactory::getBean($module, $bean_id);
        $bean->$field_name = '';
        $bean->save();

        $sql = $db->query("UPDATE TABLE scrm_employee_cstm SET $field_name='' WHERE id_c='$bean_id'");
        $return_array = [];
        if($sql){
            $return_array['success'] = true;
        }
        echo json_encode($return_array);
        // $return_array = [];
        // if() {
        //     $return_array['success'] = true;
        // }else{
        //     $return_array['success'] = false;
        // }
        // echo json_encode($return_array);
    }
}
