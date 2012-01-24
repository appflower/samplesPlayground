<?php

/**
 * afCrmActivity form base class.
 *
 * @method afCrmActivity getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseafCrmActivityForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'subject'     => new sfWidgetFormInputText(),
      'account_id'  => new sfWidgetFormPropelChoice(array('model' => 'afCrmAccount', 'add_empty' => true)),
      'contact_id'  => new sfWidgetFormPropelChoice(array('model' => 'afCrmContact', 'add_empty' => true)),
      'status_id'   => new sfWidgetFormPropelChoice(array('model' => 'afCrmStatus', 'add_empty' => true)),
      'created_by'  => new sfWidgetFormPropelChoice(array('model' => 'afGuardUser', 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
      'due_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'subject'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'account_id'  => new sfValidatorPropelChoice(array('model' => 'afCrmAccount', 'column' => 'id', 'required' => false)),
      'contact_id'  => new sfValidatorPropelChoice(array('model' => 'afCrmContact', 'column' => 'id', 'required' => false)),
      'status_id'   => new sfValidatorPropelChoice(array('model' => 'afCrmStatus', 'column' => 'id', 'required' => false)),
      'created_by'  => new sfValidatorPropelChoice(array('model' => 'afGuardUser', 'column' => 'id', 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'due_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('af_crm_activity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'afCrmActivity';
  }


}
