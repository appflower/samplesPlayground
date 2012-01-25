<?php
/**
 * @author Radu Topala <radu@appflower.com>
 */
class editmdAction extends simpleWidgetEditAction
{
	
	public function execute($request)
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
    }
}
