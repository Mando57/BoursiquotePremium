<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7652699a148aa487fe1a17f55a42e6b9cde1ac16a2831697da85404970d2f02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_112b626e1638006afbcbea374e733edbdf93a06ed074f3adee71b68a3ed1df87 = $this->env->getExtension("native_profiler");
        $__internal_112b626e1638006afbcbea374e733edbdf93a06ed074f3adee71b68a3ed1df87->enter($__internal_112b626e1638006afbcbea374e733edbdf93a06ed074f3adee71b68a3ed1df87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_112b626e1638006afbcbea374e733edbdf93a06ed074f3adee71b68a3ed1df87->leave($__internal_112b626e1638006afbcbea374e733edbdf93a06ed074f3adee71b68a3ed1df87_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab736472aab6da92355ca17844923c8cce73abf0f7a3b0715903bb4f765c3440 = $this->env->getExtension("native_profiler");
        $__internal_ab736472aab6da92355ca17844923c8cce73abf0f7a3b0715903bb4f765c3440->enter($__internal_ab736472aab6da92355ca17844923c8cce73abf0f7a3b0715903bb4f765c3440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab736472aab6da92355ca17844923c8cce73abf0f7a3b0715903bb4f765c3440->leave($__internal_ab736472aab6da92355ca17844923c8cce73abf0f7a3b0715903bb4f765c3440_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
