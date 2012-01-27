<?php
/**
 * Generated action edit class
 */
class validationsAction extends simpleWidgetEditAction
{
     /**
     * Execute method reload
     *
     * @param string $request 
     * @return array
     * @author Łukasz Wojciechowski
     */
    public function execute($request)
    {
        $this->foo = $this->bar = $this->combo = '';
        
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
