<?php

class VatNumberAjaxModuleFrontController extends ModuleFrontController
{
    public function displayAjax()
    {
        $class = get_class($this->module);
        $this->ajaxRender($class::isApplicable((int)Tools::getValue('id_country')));
    }
}
