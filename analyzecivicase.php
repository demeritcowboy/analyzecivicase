<?php
/* vim: set shiftwidth=2 tabstop=2 softtabstop=2: */

require_once 'analyzecivicase.civix.php';
use CRM_Case_Analyze_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function analyzecivicase_civicrm_config(&$config) {
  _analyzecivicase_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function analyzecivicase_civicrm_xmlMenu(&$files) {
  _analyzecivicase_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function analyzecivicase_civicrm_install() {
  _analyzecivicase_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function analyzecivicase_civicrm_postInstall() {
  _analyzecivicase_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function analyzecivicase_civicrm_uninstall() {
  _analyzecivicase_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function analyzecivicase_civicrm_enable() {
  _analyzecivicase_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function analyzecivicase_civicrm_disable() {
  _analyzecivicase_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function analyzecivicase_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _analyzecivicase_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function analyzecivicase_civicrm_managed(&$entities) {
  _analyzecivicase_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function analyzecivicase_civicrm_caseTypes(&$caseTypes) {
  _analyzecivicase_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function analyzecivicase_civicrm_angularModules(&$angularModules) {
  _analyzecivicase_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function analyzecivicase_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _analyzecivicase_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function analyzecivicase_civicrm_entityTypes(&$entityTypes) {
  _analyzecivicase_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function analyzecivicase_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function analyzecivicase_civicrm_navigationMenu(&$menu) {
  _analyzecivicase_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _analyzecivicase_civix_navigationMenu($menu);
} // */

function analyzecivicase_civicrm_check(&$messages) {
  // Set up
  $commands = array();
  $messageHeadings = array(
    'roles' => E::ts("Unfortunately at the current time the internal machine name and visible display label for relationship types can't be different if you are using them in CiviCase roles. You will get fatal errors. Here is the analysis output showing what you should change until there's a proper fix available for separate name and label. ***** MAKE A BACKUP OF YOUR DATABASE. DO NOT SKIP THIS STEP. ***** And do this on a test copy of the site first."),
    'activity_types' => E::ts('TODO'),
  );

  // get list of case types
  $caseTypes = civicrm_api3('CaseType', 'get', array('options' => array('limit' => 0)));
  $caseTypes = empty($caseTypes['values']) ? array() : $caseTypes['values'];

  // get list of relationship types
  $relTypes = civicrm_api3('RelationshipType', 'get', array('options' => array('limit' => 0)));
  $relTypes = empty($relTypes['values']) ? array() : $relTypes['values'];

  // get a handler for doing the work
  $handler = new CRM_Case_Analyze_Case($caseTypes, $relTypes);
  $handler->scanExtensionUsage();

  // peanuts. I had said this extension might contain peanuts.

  // Loop and check for problem spots
  foreach ($relTypes as $rid => $relType) {
    foreach ($caseTypes as $ctid => $caseType) {
      // check how it's used and return some info about that
      $relData = $handler->check_case_role($rid, $ctid);

      // if not used then keep looping
      if ($relData['status'] == CRM_Case_Analyze_Case::RELSTATUS_UNUSED) {
        continue;
      }

      // repeat for both directions
      $directions = array('_a_b', '_b_a');
      foreach ($directions as $direction) {
        // if name and label are different
        if ($relType["name{$direction}"] != $relType["label{$direction}"]) {

          switch ($relData['status']) {
            case CRM_Case_Analyze_Case::RELSTATUS_NAME_MATCHES_XML:
              // Ugh but no choice
              $commands['roles'][$rid] = htmlspecialchars(E::ts(
                "For `%1` (direction %2), because of the current situation and my analysis of the current XML definition for case type `%3`, your best bet here is to change the label back to `%4`. If that is unacceptable, first change the label back, then edit the case type definition to remove the role, then change the label back to the desired wording, then run the following SQL ( `%5` ), and then add the role back into the case type definition.",
                array(
                  1 => $relType["label{$direction}"],
                  2 => $direction,
                  3 => $caseType['title'],
                  4 => $relType["name{$direction}"],
                  5 => "UPDATE civicrm_relationship_type SET name{$direction} = label{$direction} WHERE id = {$rid};",
                )
              ));
              break;

            case CRM_Case_Analyze_Case::RELSTATUS_LABEL_MATCHES_XML:
              // Also ugh but no choice
              $commands['roles'][$rid] = htmlspecialchars(E::ts(
                "For `%1` (direction %2), run the following SQL: `%3`",
                array(
                  1 => $relType["label{$direction}"],
                  2 => $direction,
                  3 => "UPDATE civicrm_relationship_type SET name_a_b = label_a_b WHERE id = {$rid};",
                )
              ));
              break;
          }
        }
      }
    }
  }

  // return any messages back to the system
  if (!empty($commands['roles'])) {
    $messages[] = new CRM_Utils_Check_Message(
      'analyzecivicase_roles',
      '<p>' . htmlspecialchars($messageHeadings['roles']) . '</p><ul><li>' . implode('</li><li>', $commands['roles']) . '</li></ul>',
      E::ts('Relationship Type Conundrum'),
      \Psr\Log\LogLevel::CRITICAL,
      'fa-bomb'
    );
  }
}
