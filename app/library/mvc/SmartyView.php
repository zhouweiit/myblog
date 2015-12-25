<?php

namespace library\mvc;

use Phalcon\Mvc\View;

class SmartyView extends View {
    
    public function RenderFix($controllerName, $actionName, $params = null) {
        $this->render($controllerName, $actionName);
        $content = $this->getContent();
        $this->setRenderLevel(View::LEVEL_NO_RENDER);
        $response = $this->_dependencyInjector->get('response');
        $response->setContent($content);
        $response->send();
    }
    
}
