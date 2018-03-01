<?php

/* C:\www\labs\panda\vendor\cakephp\bake\src\Template\Bake\Layout\default.twig */
class __TwigTemplate_c24ab548965f976faec4e2dcdd508c877d4a0f00fd2d27100f5591606bb1bcaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_964cffc0b55e068f1efdd6d8ebb0b13e29e7f25acbb5545296cfbd4953615dd2 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_964cffc0b55e068f1efdd6d8ebb0b13e29e7f25acbb5545296cfbd4953615dd2->enter($__internal_964cffc0b55e068f1efdd6d8ebb0b13e29e7f25acbb5545296cfbd4953615dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\www\\labs\\panda\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_964cffc0b55e068f1efdd6d8ebb0b13e29e7f25acbb5545296cfbd4953615dd2->leave($__internal_964cffc0b55e068f1efdd6d8ebb0b13e29e7f25acbb5545296cfbd4953615dd2_prof);

    }

    public function getTemplateName()
    {
        return "C:\\www\\labs\\panda\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "C:\\www\\labs\\panda\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig", "");
    }
}
