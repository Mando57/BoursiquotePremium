<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_48d5766d26fecdd070a35cd417a01b8307329fe4425f3007360259294fc79c46 extends Twig_Template
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
        $__internal_ca9224c5219c4cd8fd24d8b57427d85800d276e0baaa5572fcbe4c3bb03a57ae = $this->env->getExtension("native_profiler");
        $__internal_ca9224c5219c4cd8fd24d8b57427d85800d276e0baaa5572fcbe4c3bb03a57ae->enter($__internal_ca9224c5219c4cd8fd24d8b57427d85800d276e0baaa5572fcbe4c3bb03a57ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_ca9224c5219c4cd8fd24d8b57427d85800d276e0baaa5572fcbe4c3bb03a57ae->leave($__internal_ca9224c5219c4cd8fd24d8b57427d85800d276e0baaa5572fcbe4c3bb03a57ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="{{ _charset }}" />*/
/*         <title>An Error Occurred: {{ status_text }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Oops! An Error Occurred</h1>*/
/*         <h2>The server returned a "{{ status_code }} {{ status_text }}".</h2>*/
/* */
/*         <div>*/
/*             Something is broken. Please let us know what you were doing when this error occurred.*/
/*             We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
