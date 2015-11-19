<?php

/* LaFleurSymfonyBundle:Default:index.html.twig */
class __TwigTemplate_8f3d87cda032e61d6590c02f3fa605e84e390e8601322a32c5ca8876e5bbd51d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LaFleurSymfonyBundle:layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d1d969079df7a1d0d9324f8e70af8a8d9f96befaa43dcfc7e4c510cc05ac9f5 = $this->env->getExtension("native_profiler");
        $__internal_3d1d969079df7a1d0d9324f8e70af8a8d9f96befaa43dcfc7e4c510cc05ac9f5->enter($__internal_3d1d969079df7a1d0d9324f8e70af8a8d9f96befaa43dcfc7e4c510cc05ac9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1d969079df7a1d0d9324f8e70af8a8d9f96befaa43dcfc7e4c510cc05ac9f5->leave($__internal_3d1d969079df7a1d0d9324f8e70af8a8d9f96befaa43dcfc7e4c510cc05ac9f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40bacbc25df821f921c37ccbfc74624ef52d372c859922e23d545e6beb07f3a0 = $this->env->getExtension("native_profiler");
        $__internal_40bacbc25df821f921c37ccbfc74624ef52d372c859922e23d545e6beb07f3a0->enter($__internal_40bacbc25df821f921c37ccbfc74624ef52d372c859922e23d545e6beb07f3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil général ";
        
        $__internal_40bacbc25df821f921c37ccbfc74624ef52d372c859922e23d545e6beb07f3a0->leave($__internal_40bacbc25df821f921c37ccbfc74624ef52d372c859922e23d545e6beb07f3a0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ddb2c304c1611b714d9c06edcdb0a6399e1be25c573296df6f71b312143e410 = $this->env->getExtension("native_profiler");
        $__internal_5ddb2c304c1611b714d9c06edcdb0a6399e1be25c573296df6f71b312143e410->enter($__internal_5ddb2c304c1611b714d9c06edcdb0a6399e1be25c573296df6f71b312143e410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "        <div class='message'>
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <div id='accueil'> Lafleur, le prince des fleurs sur internet</div>
";
        
        $__internal_5ddb2c304c1611b714d9c06edcdb0a6399e1be25c573296df6f71b312143e410->leave($__internal_5ddb2c304c1611b714d9c06edcdb0a6399e1be25c573296df6f71b312143e410_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  63 => 8,  60 => 7,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LaFleurSymfonyBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil général {% endblock %}*/
/* */
/* {% block content %}*/
/* 	{% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class='message'>*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div id='accueil'> Lafleur, le prince des fleurs sur internet</div>*/
/* {% endblock %}*/
