<?php
/**
 * Generated action edit class
 */
class editAction extends simpleWidgetEditAction
{
	
	/*public function execute($request)
    {
        if ($request->isMethod('post')) {
            if ($this->processPostData()) {
                $result = array(
                    'success' => true,
                    'message' => "Saved with success!",
                    'redirect' => $this->widgetUri . '?id=' . $this->object->getId()
                );
                
                return $result;
            }
        }
    }*/
	
	/*private function processPostData()
    {
        $formData = $this->getRequest()->getParameter('edit');
        $formData = $formData[0];

        $formData = $this->changeKeysForForeignFields($formData);
        $formData = $this->processMultipleRelations($formData);

        // filtered means that we are leaving only values for fields that exists in the form
        $formDataFiltered = array();
        foreach ($this->getFieldNamesOfForm($this->form) as $fieldName) {
            if (isset($formData[$fieldName])) {
                $formDataFiltered[$fieldName] = $formData[$fieldName];
            }
        }
        
        $formDataFiltered["image"] = 'milos';
        
        $this->form->bind($formDataFiltered);
        return $this->form->save();
    }*/
}
