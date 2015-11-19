<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b793b6a4343a1fef0a811895704a194677179f5a4350995a2b853c270ab3ae4b extends Twig_Template
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
        $__internal_2be0d935de26f56effb71c651a7bddea6be26f653cefac05ddd52fc07c81e5a4 = $this->env->getExtension("native_profiler");
        $__internal_2be0d935de26f56effb71c651a7bddea6be26f653cefac05ddd52fc07c81e5a4->enter($__internal_2be0d935de26f56effb71c651a7bddea6be26f653cefac05ddd52fc07c81e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2be0d935de26f56effb71c651a7bddea6be26f653cefac05ddd52fc07c81e5a4->leave($__internal_2be0d935de26f56effb71c651a7bddea6be26f653cefac05ddd52fc07c81e5a4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
