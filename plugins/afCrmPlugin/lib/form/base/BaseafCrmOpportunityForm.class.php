<?php

/**
 * afCrmOpportunity form base class.
 *
 * @method afCrmOpportunity getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseafCrmOpportunityForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInputText(),
      'amount'             => new sfWidgetFormInputText(),
      'account_id'         => new sfWidgetFormPropelChoice(array('model' => 'afCrmAccount', 'add_empty' => true)),
      'assigned_to'        => new sfWidgetFormPropelChoice(array('model' => 'afCrmContact', 'add_empty' => true)),
      'description'        => new sfWidgetFormTextarea(),
      'expected_closedate' => new sfWidgetFormDateTime(),
      'created_by'         => new sfWidgetFormPropelChoice(array('model' => 'afGuardUser', 'add_empty' => true)),
      'created_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'amount'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'account_id'         => new sfValidatorPropelChoice(array('model' => 'afCrmAccount', 'column' => 'id', 'required' => false)),
      'assigned_to'        => new sfValidatorPropelChoice(array('model' => 'afCrmContact', 'column' => 'id', 'required' => false)),
      'description'        => new sfValidatorString(array('required' => false)),
      'expected_closedate' => new sfValidatorDateTime(array('required' => false)),
      'created_by'         => new sfValidatorPropelChoice(array('model' => 'afGuardUser', 'column' => 'id', 'required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('af_crm_opportunity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'afCrmOpportunity';
  }


}
