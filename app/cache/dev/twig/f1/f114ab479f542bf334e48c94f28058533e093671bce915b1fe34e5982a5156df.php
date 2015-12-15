<?php

/* BourseBundle:Profile:connection.html.twig */
class __TwigTemplate_e81e063115d30401e79a5e8ae8a0b05eaa974c691e1799a5bdbb6d6c542f6d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_269f6990ec66b8fef2c79d36da29d3ce190ccdc2c7a8cbe10171912694f6392a = $this->env->getExtension("native_profiler");
        $__internal_269f6990ec66b8fef2c79d36da29d3ce190ccdc2c7a8cbe10171912694f6392a->enter($__internal_269f6990ec66b8fef2c79d36da29d3ce190ccdc2c7a8cbe10171912694f6392a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:Profile:connection.html.twig"));

        // line 1
        echo "<html lang=fr>
<head>
    <title> ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "    </title>
    <meta http-equiv=\"Content-Language\" content=\"fr\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0e4d8f7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e4d8f7_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0e4d8f7_cssGeneral_1.css");
            // line 10
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\">
    ";
        } else {
            // asset "0e4d8f7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e4d8f7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0e4d8f7.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\">
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "</head>

<script>
    function R1600()
    {
        var width = 1600;
        document.body.style.zoom = screen.width/1600;
    }
</script>

<body onload=\"R1600();\">

<div id=\"bandeau\">
    <!-- Images En-t�te -->
    <!--<img src=\"images/menuGauche.gif\"\talt=\"Choisir\" title=\"Choisir\"/>-->
    <img id=\"banniere\" src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/banniere.png"), "html", null, true);
        echo " alt=\"Lentete\" title=\"entetebourseimg\"/>


</div>
<div id=\"conteneur\">
    <div id=\"conn\">

        <form name=\"form1\" method=\"POST\" action =\"\">
            <table border=\"0\" align=\"center\" cellspacing=\"2\" cellpadding=\"2\">

                <p>Mail : <br> <input type=\"text\" name=\"login\" required=\"Champ vide!\" /></p>
                <p>Mot de passe : <br> <input type=\"password\" name=\"mdp\" required=\"Champ vide!\" /></p>
                <input type='submit' name='Connexion'/>

        </form>

    </div>


</div>








";
        
        $__internal_269f6990ec66b8fef2c79d36da29d3ce190ccdc2c7a8cbe10171912694f6392a->leave($__internal_269f6990ec66b8fef2c79d36da29d3ce190ccdc2c7a8cbe10171912694f6392a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50ec4342e2dc71cde899ae1495506d835932f46a2a24bfad6d0497b1df61d170 = $this->env->getExtension("native_profiler");
        $__internal_50ec4342e2dc71cde899ae1495506d835932f46a2a24bfad6d0497b1df61d170->enter($__internal_50ec4342e2dc71cde899ae1495506d835932f46a2a24bfad6d0497b1df61d170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "            boursiquote :
        ";
        
        $__internal_50ec4342e2dc71cde899ae1495506d835932f46a2a24bfad6d0497b1df61d170->leave($__internal_50ec4342e2dc71cde899ae1495506d835932f46a2a24bfad6d0497b1df61d170_prof);

    }

    public function getTemplateName()
    {
        return "BourseBundle:Profile:connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 4,  105 => 3,  69 => 27,  52 => 12,  38 => 10,  34 => 9,  29 => 6,  27 => 3,  23 => 1,);
    }
}
/* <html lang=fr>*/
/* <head>*/
/*     <title> {% block title %}*/
/*             boursiquote :*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Language" content="fr">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/*     {% stylesheets '@BourseBundle/Resources/public/css/cssGeneral.css' filter='cssrewrite' %}*/
/*     <link href="{{ asset_url }}" rel="stylesheet" media="screen">*/
/*     {% endstylesheets %}*/
/* </head>*/
/* */
/* <script>*/
/*     function R1600()*/
/*     {*/
/*         var width = 1600;*/
/*         document.body.style.zoom = screen.width/1600;*/
/*     }*/
/* </script>*/
/* */
/* <body onload="R1600();">*/
/* */
/* <div id="bandeau">*/
/*     <!-- Images En-t�te -->*/
/*     <!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->*/
/*     <img id="banniere" src={{ asset('images/banniere.png') }} alt="Lentete" title="entetebourseimg"/>*/
/* */
/* */
/* </div>*/
/* <div id="conteneur">*/
/*     <div id="conn">*/
/* */
/*         <form name="form1" method="POST" action ="">*/
/*             <table border="0" align="center" cellspacing="2" cellpadding="2">*/
/* */
/*                 <p>Mail : <br> <input type="text" name="login" required="Champ vide!" /></p>*/
/*                 <p>Mot de passe : <br> <input type="password" name="mdp" required="Champ vide!" /></p>*/
/*                 <input type='submit' name='Connexion'/>*/
/* */
/*         </form>*/
/* */
/*     </div>*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
