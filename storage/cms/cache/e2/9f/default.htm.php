<?php 
class Cms5b8e4a4400a67241097839_fc2a705ecc7505bceba02bf8f03256ecClass extends Cms\Classes\LayoutCode
{

// TODO wird diese funktion zweimal aufgerufen?
public function onMailSent() {
    
    $formVars = [
        'receivermail' => post('receivermail'),
        'receivername' => post('receivername'),
        'succeesstext' => post('succeesstext'),
        'receiverregard' => post('receiverregard'),
        'mailtemplate' => post('mailtemplate'),
        'name' => post('name'),
        'email' => post('email'),
        'regard' => post('regard'),
        'sendermessage' => post('message'),
    ];
    
    $formVars['receiverregard'] = str_replace("{{name}}", $formVars['name'], $formVars['receiverregard']);
    $formVars['receiverregard'] = str_replace("{{regard}}", $formVars['regard'], $formVars['receiverregard']);
    
    $buildOwnerMessage = function ($message) use ($formVars) {
        // TODO use email and name from backend or theme settings
        $message->to($formVars['receivermail'], $formVars['receivername']);
        $message->subject($formVars['receiverregard']);
    };

    // mail to site owner
    Mail::send($formVars['mailtemplate'], $formVars, $buildOwnerMessage);
      
    $this['result'] = $formVars['succeesstext'];
}
}
