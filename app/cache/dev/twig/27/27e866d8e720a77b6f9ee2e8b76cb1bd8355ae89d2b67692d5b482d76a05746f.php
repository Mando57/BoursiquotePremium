<?php

/* LaFleurSymfonyBundle:Catalogue:nouveau.html.twig */
class __TwigTemplate_1be81cb985eeaeaaee5f8ded94342d02491bae279aefc9dcb8867cdb836416b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Catalogue:nouveau.html.twig", 2);
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
        $__internal_b6cfc8f0fdeebf73116ac22e0f428f12ca5559fc34e7ae530e031b80edd58f8c = $this->env->getExtension("native_profiler");
        $__internal_b6cfc8f0fdeebf73116ac22e0f428f12ca5559fc34e7ae530e031b80edd58f8c->enter($__internal_b6cfc8f0fdeebf73116ac22e0f428f12ca5559fc34e7ae530e031b80edd58f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Catalogue:nouveau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6cfc8f0fdeebf73116ac22e0f428f12ca5559fc34e7ae530e031b80edd58f8c->leave($__internal_b6cfc8f0fdeebf73116ac22e0f428f12ca5559fc34e7ae530e031b80edd58f8c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bff5f8f850f39a97d35df2ff7d4285e3a1afae3a13d56017a1bb4ca3cf0b0ab = $this->env->getExtension("native_profiler");
        $__internal_4bff5f8f850f39a97d35df2ff7d4285e3a1afae3a13d56017a1bb4ca3cf0b0ab->enter($__internal_4bff5f8f850f39a97d35df2ff7d4285e3a1afae3a13d56017a1bb4ca3cf0b0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Nouveau ";
        
        $__internal_4bff5f8f850f39a97d35df2ff7d4285e3a1afae3a13d56017a1bb4ca3cf0b0ab->leave($__internal_4bff5f8f850f39a97d35df2ff7d4285e3a1afae3a13d56017a1bb4ca3cf0b0ab_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_9ea7811f7e0493a12fd9aba793546188c21c97150dc11fc42f3b3d7e8e8cb247 = $this->env->getExtension("native_profiler");
        $__internal_9ea7811f7e0493a12fd9aba793546188c21c97150dc11fc42f3b3d7e8e8cb247->enter($__internal_9ea7811f7e0493a12fd9aba793546188c21c97150dc11fc42f3b3d7e8e8cb247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "        <div class='flash notice'>
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    \t<form name='nouveau 'method='post'>
\t\t\t<input type='text' name='login' />
\t\t\t<input type='password' name='pwd'/>
\t\t\t<br><input type='submit' name='creer' value='creer compte' />
\t\t</form>
    
";
        
        $__internal_9ea7811f7e0493a12fd9aba793546188c21c97150dc11fc42f3b3d7e8e8cb247->leave($__internal_9ea7811f7e0493a12fd9aba793546188c21c97150dc11fc42f3b3d7e8e8cb247_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Catalogue:nouveau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  63 => 9,  60 => 8,  55 => 7,  49 => 6,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LaFleurSymfonyBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Nouveau {% endblock %}*/
/* */
/* {% block content %}*/
/*    {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class='flash notice'>*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     	<form name='nouveau 'method='post'>*/
/* 			<input type='text' name='login' />*/
/* 			<input type='password' name='pwd'/>*/
/* 			<br><input type='submit' name='creer' value='creer compte' />*/
/* 		</form>*/
/*     */
/* {% endblock %}*/
