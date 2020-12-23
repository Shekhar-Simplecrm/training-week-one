<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 
 * SimpleCRM standard edition is an extension to SuiteCRM 7.8.5 and SugarCRM Community Edition 6.5.24. 
 * It is developed by SimpleCRM (https://www.simplecrm.com.sg)
 * Copyright (C) 2016 - 2017 SimpleCRM
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


require_once('include/MVC/View/views/view.edit.php');

class scrm_employeeViewEdit extends ViewEdit {

    function display() {

        $mobile1 = ($this->bean->mobile_phone_1_c!='') ? $this->bean->mobile_phone_1_c : NULL;
        $mobile2 = ($this->bean->mobile_phone_2_c!='') ? $this->bean->mobile_phone_2_c : NULL;
        $mobile3 = ($this->bean->mobile_phone_3_c!='') ? $this->bean->mobile_phone_3_c : NULL;
        $mobile4 = ($this->bean->mobile_phone_4_c!='') ? $this->bean->mobile_phone_4_c : NULL;
        $mobile5 = ($this->bean->mobile_phone_5_c!='') ? $this->bean->mobile_phone_5_c : NULL;
        

        parent::display();
        $today_date = date("d-m-Y");

        echo $javscript =<<<EOD
        	<script>
        	
        	$(document).ready(function() {

        		$('#terminated_date_c').prop('disabled', true);
        		$('#terminated_date_c_trigger').prop('disabled', true);

        		$('#status_c').on('change', function(){
        			let val = $(this).val();
        			 
        			if(val == 'terminated'){
        				$('#terminated_date_c').removeAttr('disabled');
        				$('#terminated_date_c_trigger').removeAttr('disabled');
        				$('#terminated_date_c').val('$today_date');
        			}else{
        				$('#terminated_date_c').prop('disabled', true);
        				$('#terminated_date_c_trigger').prop('disabled', true);
        			}
        			
        		});

        	});
        	
        	var click_count = 0;
        	var remove_click = 0;
        	
        	function addNewRow(mobile_number='') {
        		click_count++;
        			remove_click = 0;
        			if(click_count <= 5) {

        				let html = '<div class="mt-3" id="inputFormRow"><div class="input-group mb-3"><input type="text" size="25" maxlength="25" id="mobile_phone_'+click_count+'_c" name="mobile_phone_'+click_count+'_c" class="form-control" value="'+mobile_number+'" autocomplete="off"><button type="button" id="mobile_phone_'+click_count+'_c" class="ml-2 btn btn-danger btn-sm mobile-phone-remove-button custom-btn" title="Remove Mobile Phone" tabindex="0" enabled="true" onclick="removeField($(this));" module="scrm_employee"><span class="fas fa-minus"></span></button></div></div>';
        				$('.new-row').append(html);	
        				
        			}
        	}

        	
        	function removeField(selectedField) {
        		let current_field_id = selectedField.attr('id');
        		remove_click++;

        		if(remove_click == 5) {
        			click_count = 0;
        		}else if(click_count >= 6){
        			click_count = 5 - remove_click;
        		}else{
        			click_count = click_count - 1;
        		}
        		removeFieldAjax(current_field_id);

        	}
        	</script>
        EOD;

        if($mobile1!=''){
        	?>
        	<script>
        	var mobile1 = "<?php echo $mobile1; ?>";
        	addNewRow(mobile1); </script>
        	<?php
        }

        if($mobile2!=''){
        	?>
        	<script>
        	var mobile2 = "<?php echo $mobile2; ?>";
        	addNewRow(mobile2); </script>
        	<?php
        }

        if($mobile3!=''){
        	?>
        	<script>
        	var mobile3 = "<?php echo $mobile3; ?>";
        	addNewRow(mobile3); </script>
        	<?php
        }
        if($mobile4!=''){
        	?>
        	<script>
        	var mobile4 = "<?php echo $mobile4; ?>";
        	addNewRow(mobile4); </script>
        	<?php
        }
        if($mobile5!=''){
        	?>
        	<script>
        	var mobile5 = "<?php echo $mobile5; ?>";
        	addNewRow(mobile5); </script>
        	<?php
        }

        ?>
        <script>
        	function removeFieldAjax(Field_name) {
        		let response = false;
        		$.ajax({
        			type: "GET", 
					async: false,
					url: "index.php",
					data: 
					{ 	
						module:"scrm_employee",
						action:"removeField",
						id: "<?php echo $this->bean->id ?>",
						field:Field_name,
					},
					success : function(response) {
						$('#'+Field_name).closest("#inputFormRow").remove();
					}
        		});
        	}

        </script>
        <?php
    }

}
