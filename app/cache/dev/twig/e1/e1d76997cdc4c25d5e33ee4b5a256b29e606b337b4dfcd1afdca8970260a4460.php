<?php

/* BourseBundle:Profile:index.html.twig */
class __TwigTemplate_e3e264b758ad1fbb7376106f4b435fba0fd1457798fe35cd038cb2972b4f1ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BourseBundle:layout:layout.html.twig", "BourseBundle:Profile:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lateral' => array($this, 'block_lateral'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BourseBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cbf958d4f2fd76b52aa3fb24bea8284e5ecdffff678dd36146087190f4f92ad = $this->env->getExtension("native_profiler");
        $__internal_4cbf958d4f2fd76b52aa3fb24bea8284e5ecdffff678dd36146087190f4f92ad->enter($__internal_4cbf958d4f2fd76b52aa3fb24bea8284e5ecdffff678dd36146087190f4f92ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbf958d4f2fd76b52aa3fb24bea8284e5ecdffff678dd36146087190f4f92ad->leave($__internal_4cbf958d4f2fd76b52aa3fb24bea8284e5ecdffff678dd36146087190f4f92ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f0b96c055ef33239de8fb1d4f9ae4dd765f6f616cfcfa444f3a4494cad6684e = $this->env->getExtension("native_profiler");
        $__internal_5f0b96c055ef33239de8fb1d4f9ae4dd765f6f616cfcfa444f3a4494cad6684e->enter($__internal_5f0b96c055ef33239de8fb1d4f9ae4dd765f6f616cfcfa444f3a4494cad6684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_5f0b96c055ef33239de8fb1d4f9ae4dd765f6f616cfcfa444f3a4494cad6684e->leave($__internal_5f0b96c055ef33239de8fb1d4f9ae4dd765f6f616cfcfa444f3a4494cad6684e_prof);

    }

    // line 5
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_40800da401b58af940dd603a754f38f96eb6b0ea6ced7b15f67638fcbf659d12 = $this->env->getExtension("native_profiler");
        $__internal_40800da401b58af940dd603a754f38f96eb6b0ea6ced7b15f67638fcbf659d12->enter($__internal_40800da401b58af940dd603a754f38f96eb6b0ea6ced7b15f67638fcbf659d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesCategories"]) ? $context["lesCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 7
            echo "        test
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_40800da401b58af940dd603a754f38f96eb6b0ea6ced7b15f67638fcbf659d12->leave($__internal_40800da401b58af940dd603a754f38f96eb6b0ea6ced7b15f67638fcbf659d12_prof);

    }

    public function getTemplateName()
    {
        return "BourseBundle:Profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "BourseBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block lateral %}*/
/*     {% for categ in lesCategories %}*/
/*         test*/
/*     {% endfor %}*/
/* {% endblock %}*/
