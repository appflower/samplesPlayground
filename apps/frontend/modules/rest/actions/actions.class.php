<?php

/**
 * rest actions.
 *
 * @package    playground
 * @subpackage rest
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class restActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  public function executeRestEdit(sfWebRequest $request)
  {
    if ($request->isMethod('post'))
    {
        $submitUrl = 'http://www.example.com/rest/update';
        $data = $request->getParameter('edit');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $submitUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
         
        $result = curl_exec($ch);
        if ($result === false) {
            throw new Exception('Unable to post data: '.curl_error($ch));
        }
         
        curl_close($ch);
        
        $json = json_decode($result, true);
        if ($json === null) {
            throw new Exception('Unable to decode the JSON result: '.$result);
        }
         
        if (!isset($json['success']) || $json['success'] !== true) {
            throw new Exception('A form validation error: '.$result);
        }
        
        return $this->renderText(
            afResponseHelper::create()->success(true)->message('Successfully saved your information!')->redirect('/rest/restEdit')->asJson()
        );
    }
    
  }
  
}
