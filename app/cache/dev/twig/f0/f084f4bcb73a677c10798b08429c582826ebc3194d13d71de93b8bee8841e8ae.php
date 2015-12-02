<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_2e4cde9c2a29110b135abe14b4b16a69e279f61b1990373c7007d0403f67c957 extends Twig_Template
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
        $__internal_bc9d4a6dbae1615bb86037f7477e0f0f9db4b334ae8b0183805d6695bcc568b6 = $this->env->getExtension("native_profiler");
        $__internal_bc9d4a6dbae1615bb86037f7477e0f0f9db4b334ae8b0183805d6695bcc568b6->enter($__internal_bc9d4a6dbae1615bb86037f7477e0f0f9db4b334ae8b0183805d6695bcc568b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bc9d4a6dbae1615bb86037f7477e0f0f9db4b334ae8b0183805d6695bcc568b6->leave($__internal_bc9d4a6dbae1615bb86037f7477e0f0f9db4b334ae8b0183805d6695bcc568b6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
