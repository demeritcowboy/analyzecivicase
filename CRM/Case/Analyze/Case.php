<?php
/* vim: set shiftwidth=2 tabstop=2 softtabstop=2: */

/**
 * Handler for performing various duties
 */
class CRM_Case_Analyze_Case {
  const RELSTATUS_UNUSED = 1;
  const RELSTATUS_NAME_MATCHES_XML = 2;
  const RELSTATUS_LABEL_MATCHES_XML = 3;

  protected $_caseTypes = NULL;
  protected $_relTypes = NULL;

  public function __construct($caseTypes, $relTypes) {
    $this->_caseTypes = $caseTypes;
    $this->_relTypes = $relTypes;
  }

  /**
   * TODO: Preloader to scan extensions and see if there's any potential use of name/label in custom code that might break.
   * Should we also scan custom folders for overridden versions of core files? Let's say no.
   */
  public function scanExtensionUsage() {
  }

  public function check_case_role($relTypeId, $caseTypeId) {
    foreach ($this->_caseTypes[$caseTypeId]['definition']['caseRoles'] as $roleDefinition) {
      // First check for label, since that's the problem to begin with and unfortunately is the one we need it to be currently
      // Note in the xml it's always the _b_a one, except in the case of xml files where maybe somebody has manually put the other one. Should we check for those? It would be hard sometimes to tell the difference between what they're actually using. For now leave it like this.
      if ($this->_relTypes[$relTypeId]['label_b_a'] == $roleDefinition['name']) {
        return array('status' => self::RELSTATUS_LABEL_MATCHES_XML);
      } elseif ($this->_relTypes[$relTypeId]['name_b_a'] == $roleDefinition['name']) {
        return array('status' => self::RELSTATUS_NAME_MATCHES_XML);
      }
    }
    return array('status' => self::RELSTATUS_UNUSED);
  }

}
