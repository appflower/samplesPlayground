<?php

/**
 * wizard actions.
 *
 * @author     Radu Topala <radu@appflower.com>
 */
class wizardActions extends CustomActions
{
    private static $INSTALL_WIZARD_PATH = array('wizard/install2', 'wizard/install3');
    
   /*public function preExecute() {
	//Add the wizard help on response
	$addonHolder = new ImmExtjsAddonHolder();
	$addonHolder->addJs("/js/custom/Ext.ux.WizardHelp.js");
	  // The parentAction vars are provided for backward compability.
	  $parentAction = $this->context->getActionStack()->getLastEntry()->getActionInstance();
	  if ($parentAction !== $this) {
		  $this->getVarHolder()->add($parentAction->getVarHolder()->getAll());
	  }

      $wizardIds = array(
			"install",
			"response",
			"nadeSignature",
			"pdf",
			"supressor",
			"eventCorr",
			"fileInspect"
			);

			foreach($wizardIds as $id) {
			   if(strstr($this->getActionName(),$id)) {
			      $this->wizard = $id;
			      break;
			   }
			}

			$this->step = $this->getRequestParameter("step",1);

			$session = $this->getUser()->getAttributeHolder()->getAll("parser/wizard");
			$session['wizard'] = $this->wizard;
			if($this->getRequestParameter("skip")) {
			   $session["skip"][] = $this->getRequestParameter("skip");
			} else {
			   if(isset($session["skip"])) {
			      while(($k = array_search($this->step,$session["skip"])) !== false) {
			         unset($session["skip"][$k]);
			      }
			   }
			}
			$this->getUser()->getAttributeHolder()->removeNamespace('parser/wizard');
			$this->getUser()->getAttributeHolder()->add($session, 'parser/wizard');
			
   }*/
   
   /*
    *
    * INSTALL WIZARD ACTIONS
    *
    *
    */


   public function executeVerifyAccepted()
   {
      $edit = $this->getRequestParameter('edit',false);
      
      if ($edit[2]['accepted']) {
         $result = array('success' => true, 'redirect'=>'/#/wizard/install2', 'message'=>'Accepted successfully!', 'load'=>'page');
      } else {
         $result = array('success' => false, 'message'=>'You have to accept the EULA to continue!');
      }

      return $this->renderText(json_encode($result));
   }
   
   public final function executeInstall1()
   {
      afWizard::startPath(self::$INSTALL_WIZARD_PATH);

      $this->title = "Demo Wizard - End-User License Agreement";
      $this->html = "<div style='padding:10px; font-size:13px'>Please read the End-User Licence Agreement carefully. You should accept the EULA before you proceed further.</div>";
      $this->current = 1;
      $this->step = $this->getRequestParameter("step",1);
   }


   public final function executeInstall2()
   {
      $this->title = "Demo Wizard - Various Fields Form";
      $this->html = "<div style='padding:10px; font-size:13px'>Please fill the Basic Form.</div>";
      $this->current = 2;
      $this->step = 1;            
   }

   public final function executeInstall3()
   {

      $this->title = "Demo Wizard - Google Map";
      $this->html = "<div style='padding:10px; font-size:13px'>You can add also Google Maps.</div>";
      $this->current = 3;
      $this->end = "install3";
      $this->last = true;
   }
   
   public final function executeHeader()
   {
       $actionInstance = $this->context->getActionStack()->getLastEntry()->getActionInstance();
       $this->title = $actionInstance->title;
       $this->html = $actionInstance->html;
   }
   
   public final function executeEula()
   {
   }

}
