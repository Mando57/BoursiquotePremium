<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_24ddae4e5f019e278eeee88961954b471dcba7c895cbb2f1bc9f77793a675e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7595dd293dad5726fde6e922de9e1e9c41731eedec8395354be9ffe837895593 = $this->env->getExtension("native_profiler");
        $__internal_7595dd293dad5726fde6e922de9e1e9c41731eedec8395354be9ffe837895593->enter($__internal_7595dd293dad5726fde6e922de9e1e9c41731eedec8395354be9ffe837895593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7595dd293dad5726fde6e922de9e1e9c41731eedec8395354be9ffe837895593->leave($__internal_7595dd293dad5726fde6e922de9e1e9c41731eedec8395354be9ffe837895593_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfa9a71518b99862721e69b9643e2ca39050d28b5cc79865374894f99a6ec100 = $this->env->getExtension("native_profiler");
        $__internal_dfa9a71518b99862721e69b9643e2ca39050d28b5cc79865374894f99a6ec100->enter($__internal_dfa9a71518b99862721e69b9643e2ca39050d28b5cc79865374894f99a6ec100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dfa9a71518b99862721e69b9643e2ca39050d28b5cc79865374894f99a6ec100->leave($__internal_dfa9a71518b99862721e69b9643e2ca39050d28b5cc79865374894f99a6ec100_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fb4056653104dd2ffc9cfa8b0864f4dd4c8b63cc00200a5b9ef641efd392671 = $this->env->getExtension("native_profiler");
        $__internal_3fb4056653104dd2ffc9cfa8b0864f4dd4c8b63cc00200a5b9ef641efd392671->enter($__internal_3fb4056653104dd2ffc9cfa8b0864f4dd4c8b63cc00200a5b9ef641efd392671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3fb4056653104dd2ffc9cfa8b0864f4dd4c8b63cc00200a5b9ef641efd392671->leave($__internal_3fb4056653104dd2ffc9cfa8b0864f4dd4c8b63cc00200a5b9ef641efd392671_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d571da2d3bd6eb27a3481487a03116adfcaf94f42a54d5684be52675a6e186b5 = $this->env->getExtension("native_profiler");
        $__internal_d571da2d3bd6eb27a3481487a03116adfcaf94f42a54d5684be52675a6e186b5->enter($__internal_d571da2d3bd6eb27a3481487a03116adfcaf94f42a54d5684be52675a6e186b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d571da2d3bd6eb27a3481487a03116adfcaf94f42a54d5684be52675a6e186b5->leave($__internal_d571da2d3bd6eb27a3481487a03116adfcaf94f42a54d5684be52675a6e186b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
