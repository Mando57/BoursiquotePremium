<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_65c9be9ca3f06eed4dd8764ff09307305724a209562fb219bb216a11d1a0d478 extends Twig_Template
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
        $__internal_51dddd1a21e920aa0af59c3f0e15e471c0d0f8e7e5c86db1b3154138fa09a26f = $this->env->getExtension("native_profiler");
        $__internal_51dddd1a21e920aa0af59c3f0e15e471c0d0f8e7e5c86db1b3154138fa09a26f->enter($__internal_51dddd1a21e920aa0af59c3f0e15e471c0d0f8e7e5c86db1b3154138fa09a26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_51dddd1a21e920aa0af59c3f0e15e471c0d0f8e7e5c86db1b3154138fa09a26f->leave($__internal_51dddd1a21e920aa0af59c3f0e15e471c0d0f8e7e5c86db1b3154138fa09a26f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
