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
        $__internal_499a991b91608aea9d69b2c35bb76fa496680b413c6852ee030f73b86998792b = $this->env->getExtension("native_profiler");
        $__internal_499a991b91608aea9d69b2c35bb76fa496680b413c6852ee030f73b86998792b->enter($__internal_499a991b91608aea9d69b2c35bb76fa496680b413c6852ee030f73b86998792b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499a991b91608aea9d69b2c35bb76fa496680b413c6852ee030f73b86998792b->leave($__internal_499a991b91608aea9d69b2c35bb76fa496680b413c6852ee030f73b86998792b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c68aff516f5cb390d724bd06ce64d0da7ca1595f975926cfaa45a9dc658a0885 = $this->env->getExtension("native_profiler");
        $__internal_c68aff516f5cb390d724bd06ce64d0da7ca1595f975926cfaa45a9dc658a0885->enter($__internal_c68aff516f5cb390d724bd06ce64d0da7ca1595f975926cfaa45a9dc658a0885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c68aff516f5cb390d724bd06ce64d0da7ca1595f975926cfaa45a9dc658a0885->leave($__internal_c68aff516f5cb390d724bd06ce64d0da7ca1595f975926cfaa45a9dc658a0885_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_574b34a2ceb29585a8fa6482f237f99821d398469fa063c772db7a9957032bd5 = $this->env->getExtension("native_profiler");
        $__internal_574b34a2ceb29585a8fa6482f237f99821d398469fa063c772db7a9957032bd5->enter($__internal_574b34a2ceb29585a8fa6482f237f99821d398469fa063c772db7a9957032bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_574b34a2ceb29585a8fa6482f237f99821d398469fa063c772db7a9957032bd5->leave($__internal_574b34a2ceb29585a8fa6482f237f99821d398469fa063c772db7a9957032bd5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_907ad388ed1565a235cc0ee504ca1d799921a74c166bbac744175a3f53be89df = $this->env->getExtension("native_profiler");
        $__internal_907ad388ed1565a235cc0ee504ca1d799921a74c166bbac744175a3f53be89df->enter($__internal_907ad388ed1565a235cc0ee504ca1d799921a74c166bbac744175a3f53be89df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_907ad388ed1565a235cc0ee504ca1d799921a74c166bbac744175a3f53be89df->leave($__internal_907ad388ed1565a235cc0ee504ca1d799921a74c166bbac744175a3f53be89df_prof);

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
