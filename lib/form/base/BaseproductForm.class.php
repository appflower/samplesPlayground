<?php

/**
 * product form base class.
 *
 * @method product getObject() Returns the current form's model object
 *
 * @package    playground
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseproductForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInputText(),
      'price'    => new sfWidgetFormInputText(),
      'quantity' => new sfWidgetFormInputText(),
      'image'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'    => new sfValidatorNumber(array('required' => false)),
      'quantity' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'image'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'product';
  }


}
