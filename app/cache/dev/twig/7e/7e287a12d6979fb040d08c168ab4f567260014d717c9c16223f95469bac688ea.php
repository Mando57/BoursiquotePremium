<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_540172a16cae60d04c9220a4042002c074f5b899cabd036476050197d2495d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4a4c4c4e42de7af5c03b3ff8509a80a0b39aced95a3aa272ce3a4dd8689781 = $this->env->getExtension("native_profiler");
        $__internal_2b4a4c4c4e42de7af5c03b3ff8509a80a0b39aced95a3aa272ce3a4dd8689781->enter($__internal_2b4a4c4c4e42de7af5c03b3ff8509a80a0b39aced95a3aa272ce3a4dd8689781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4a4c4c4e42de7af5c03b3ff8509a80a0b39aced95a3aa272ce3a4dd8689781->leave($__internal_2b4a4c4c4e42de7af5c03b3ff8509a80a0b39aced95a3aa272ce3a4dd8689781_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_959a838fa7615312bbb5e43b90e81eb81edaa9303c4334fca588fb7fc8ae5b70 = $this->env->getExtension("native_profiler");
        $__internal_959a838fa7615312bbb5e43b90e81eb81edaa9303c4334fca588fb7fc8ae5b70->enter($__internal_959a838fa7615312bbb5e43b90e81eb81edaa9303c4334fca588fb7fc8ae5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_959a838fa7615312bbb5e43b90e81eb81edaa9303c4334fca588fb7fc8ae5b70->leave($__internal_959a838fa7615312bbb5e43b90e81eb81edaa9303c4334fca588fb7fc8ae5b70_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3ea29097cf9afc7b18310ce41ac57dae722606b40c459ca49153d79a972438ae = $this->env->getExtension("native_profiler");
        $__internal_3ea29097cf9afc7b18310ce41ac57dae722606b40c459ca49153d79a972438ae->enter($__internal_3ea29097cf9afc7b18310ce41ac57dae722606b40c459ca49153d79a972438ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3ea29097cf9afc7b18310ce41ac57dae722606b40c459ca49153d79a972438ae->leave($__internal_3ea29097cf9afc7b18310ce41ac57dae722606b40c459ca49153d79a972438ae_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7594e01d736f9af4f185051ac98802898c01b50c3264f633f0576c017324479c = $this->env->getExtension("native_profiler");
        $__internal_7594e01d736f9af4f185051ac98802898c01b50c3264f633f0576c017324479c->enter($__internal_7594e01d736f9af4f185051ac98802898c01b50c3264f633f0576c017324479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_7594e01d736f9af4f185051ac98802898c01b50c3264f633f0576c017324479c->leave($__internal_7594e01d736f9af4f185051ac98802898c01b50c3264f633f0576c017324479c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
