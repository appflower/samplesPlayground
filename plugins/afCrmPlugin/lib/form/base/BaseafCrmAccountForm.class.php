<?php

/**
 * afCrmAccount form base class.
 *
 * @method afCrmAccount getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseafCrmAccountForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'city'          => new sfWidgetFormInputText(),
      'zipcode'       => new sfWidgetFormInputText(),
      'address_line1' => new sfWidgetFormInputText(),
      'address_line2' => new sfWidgetFormInputText(),
      'state'         => new sfWidgetFormInputText(),
      'country'       => new sfWidgetFormInputText(),
      'phone'         => new sfWidgetFormInputText(),
      'fax'           => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'website'       => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'zipcode'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address_line1' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address_line2' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'state'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'country'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fax'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'website'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'   => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('af_crm_account[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'afCrmAccount';
  }


}
