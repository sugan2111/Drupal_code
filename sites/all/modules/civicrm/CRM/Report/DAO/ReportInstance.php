<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Report/ReportInstance.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Report_DAO_ReportInstance extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_report_instance';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = false;
  /**
   * Report Instance ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which Domain is this instance for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * Report Instance Title.
   *
   * @var string
   */
  public $title;
  /**
   * FK to civicrm_option_value for the report template
   *
   * @var string
   */
  public $report_id;
  /**
   * when combined with report_id/template uniquely identifies the instance
   *
   * @var string
   */
  public $name;
  /**
   * arguments that are passed in the url when invoking the instance
   *
   * @var string
   */
  public $args;
  /**
   * Report Instance description.
   *
   * @var string
   */
  public $description;
  /**
   * permission required to be able to run this instance
   *
   * @var string
   */
  public $permission;
  /**
   * role required to be able to run this instance
   *
   * @var string
   */
  public $grouprole;
  /**
   * Submitted form values for this report
   *
   * @var text
   */
  public $form_values;
  /**
   * Is this entry active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Subject of email
   *
   * @var string
   */
  public $email_subject;
  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $email_to;
  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $email_cc;
  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $header;
  /**
   * comma-separated list of email addresses to send the report to
   *
   * @var text
   */
  public $footer;
  /**
   * FK to navigation ID
   *
   * @var int unsigned
   */
  public $navigation_id;
  /**
   * FK to instance ID drilldown to
   *
   * @var int unsigned
   */
  public $drilldown_id;
  /**
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * class constructor
   *
   * @return civicrm_report_instance
   */
  function __construct()
  {
    $this->__table = 'civicrm_report_instance';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'navigation_id', 'civicrm_navigation', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'drilldown_id', 'civicrm_report_instance', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Report Instance ID') ,
          'description' => 'Report Instance ID',
          'required' => true,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Report Instance Domain ID') ,
          'description' => 'Which Domain is this instance for',
          'required' => true,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Title') ,
          'description' => 'Report Instance Title.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'report_id' => array(
          'name' => 'report_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report template ID') ,
          'description' => 'FK to civicrm_option_value for the report template',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'html' => array(
            'type' => 'Select',
          ) ,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report instance Name') ,
          'description' => 'when combined with report_id/template uniquely identifies the instance',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'args' => array(
          'name' => 'args',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Arguments') ,
          'description' => 'arguments that are passed in the url when invoking the instance',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance description') ,
          'description' => 'Report Instance description.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'permission' => array(
          'name' => 'permission',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Permissions') ,
          'description' => 'permission required to be able to run this instance',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'grouprole' => array(
          'name' => 'grouprole',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance Assigned to Roles') ,
          'description' => 'role required to be able to run this instance',
          'maxlength' => 1024,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'form_values' => array(
          'name' => 'form_values',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Submitted Form Values') ,
          'description' => 'Submitted form values for this report',
          'import' => true,
          'where' => 'civicrm_report_instance.form_values',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Report Instance is Active') ,
          'description' => 'Is this entry active?',
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'email_subject' => array(
          'name' => 'email_subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Report Instance email Subject') ,
          'description' => 'Subject of email',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'email_to' => array(
          'name' => 'email_to',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Email Report Instance To') ,
          'description' => 'comma-separated list of email addresses to send the report to',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'email_cc' => array(
          'name' => 'email_cc',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('cc Email Report Instance To') ,
          'description' => 'comma-separated list of email addresses to send the report to',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'header' => array(
          'name' => 'header',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Report Instance Header') ,
          'description' => 'comma-separated list of email addresses to send the report to',
          'rows' => 4,
          'cols' => 60,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'footer' => array(
          'name' => 'footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Report Instance Footer') ,
          'description' => 'comma-separated list of email addresses to send the report to',
          'rows' => 4,
          'cols' => 60,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'navigation_id' => array(
          'name' => 'navigation_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Navigation ID') ,
          'description' => 'FK to navigation ID',
          'import' => true,
          'where' => 'civicrm_report_instance.navigation_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'FKClassName' => 'CRM_Core_DAO_Navigation',
        ) ,
        'drilldown_id' => array(
          'name' => 'drilldown_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Drilldown Report ID') ,
          'description' => 'FK to instance ID drilldown to',
          'import' => true,
          'where' => 'civicrm_report_instance.drilldown_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'FKClassName' => 'CRM_Report_DAO_ReportInstance',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Instance is Reserved') ,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'domain_id' => 'domain_id',
        'title' => 'title',
        'report_id' => 'report_id',
        'name' => 'name',
        'args' => 'args',
        'description' => 'description',
        'permission' => 'permission',
        'grouprole' => 'grouprole',
        'form_values' => 'form_values',
        'is_active' => 'is_active',
        'email_subject' => 'email_subject',
        'email_to' => 'email_to',
        'email_cc' => 'email_cc',
        'header' => 'header',
        'footer' => 'footer',
        'navigation_id' => 'navigation_id',
        'drilldown_id' => 'drilldown_id',
        'is_reserved' => 'is_reserved',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['report_instance'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['report_instance'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
