<?php
$module_name = 'scrm_employee';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="employee_id" value="{$fields.employee_id.value}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '<div class="form-row">
                              <div class="col-4">
                              {html_options class="form-control" name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}
                              </div>
                              <div class="col-8"><input name="first_name"  id="first_name" class="form-control" size="25" maxlength="25" type="text" value="{$fields.first_name.value}"></div>
                              </div>',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'designation_c',
            'label' => 'LBL_DESIGNATION',
          ),
          1 => 
          array (
            'name' => 'date_of_birth_c',
            'label' => 'LBL_DATE_OF_BIRTH',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_of_joining_c',
            'label' => 'LBL_DATE_OF_JOINING',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'from_date_c',
            'label' => 'LBL_FROM_DATE',
          ),
          1 => 
          array (
            'name' => 'to_date_c',
            'label' => 'LBL_TO_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'terminated_date_c',
            'label' => 'LBL_TERMINATED_DATE',
          ),
          1 => '',
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
          1 => 
          array (
            'name' => 'phone_mobile',
            'customCode' => '<div class="form-row">
                                <div class="col-2">
                                    <button type="button" class="btn btn-sm btn-danger phone-mobile-add-button custom-btn" title="Add Mobile Phone " onclick="addNewRow()" id="scrm_employee0_phone_mobile_widget_add">
                                        <span class="fas fa-plus"></span><span></span>
                                    </button>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="{$fields.phone_mobile.value}">
                                    <div class="new-row"> </div>
                                </div>
                            </div>',
          ),
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'address_line_1_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_LINE_1',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'state_c',
            'studio' => 'visible',
            'label' => 'LBL_STATE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
