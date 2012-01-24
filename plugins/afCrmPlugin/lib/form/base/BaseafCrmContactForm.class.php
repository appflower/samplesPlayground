<?php

/**
 * afCrmContact form base class.
 *
 * @method afCrmContact getObject() Returns the current form's model object
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseafCrmContactForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'account_id'    => new sfWidgetFormPropelChoice(array('model' => 'afCrmAccount', 'add_empty' => true)),
      'first_name'    => new sfWidgetFormInputText(),
      'last_name'     => new sfWidgetFormInputText(),
      'title'         => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'phone_work'    => new sfWidgetFormInputText(),
      'phone_mobile'  => new sfWidgetFormInputText(),
      'skype'         => new sfWidgetFormInputText(),
      'msn'           => new sfWidgetFormInputText(),
      'address_line1' => new sfWidgetFormInputText(),
      'address_line2' => new sfWidgetFormInputText(),
      'city'          => new sfWidgetFormInputText(),
      'zipcode'       => new sfWidgetFormInputText(),
      'state'         => new sfWidgetFormInputText(),
      'country'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'account_id'    => new sfValidatorPropelChoice(array('model' => 'afCrmAccount', 'column' => 'id', 'required' => false)),
      'first_name'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone_work'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone_mobile'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'skype'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'msn'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address_line1' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address_line2' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'zipcode'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'state'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'country'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('af_crm_contact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'afCrmContact';
  }


}
