<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_ecb1f28f080a5294febe9fc0c8715a26eaf999922427f4db46eb927be478c673 extends Twig_Template
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
        $__internal_64d43630ba4afb70d524da65ed56f5c101816684e33ec7153fa8579b4b1f4c99 = $this->env->getExtension("native_profiler");
        $__internal_64d43630ba4afb70d524da65ed56f5c101816684e33ec7153fa8579b4b1f4c99->enter($__internal_64d43630ba4afb70d524da65ed56f5c101816684e33ec7153fa8579b4b1f4c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        if ((isset($context["link"]) ? $context["link"] : null)) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null), "panel" => (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_64d43630ba4afb70d524da65ed56f5c101816684e33ec7153fa8579b4b1f4c99->leave($__internal_64d43630ba4afb70d524da65ed56f5c101816684e33ec7153fa8579b4b1f4c99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if link %}*/
/*     {% set icon %}*/
/*         <a href="{{ path('_profiler', { 'token': token, 'panel': name }) }}">{{ icon }}</a>*/
/*     {% endset %}*/
/* {% endif %}*/
/* <div class="sf-toolbar-block">*/
/*      <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*      <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/* </div>*/
/* */
