<?php

/* BourseBundle:layout:layout.html.twig */
class __TwigTemplate_1caeb87eebe5ff8b447f8c0482df8c3258f603fe3433721318ef71e995b3c8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'lateral' => array($this, 'block_lateral'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b160ad13061568cb338d7b61f4a8083347f5a9908389df2520cabb14e82a301 = $this->env->getExtension("native_profiler");
        $__internal_6b160ad13061568cb338d7b61f4a8083347f5a9908389df2520cabb14e82a301->enter($__internal_6b160ad13061568cb338d7b61f4a8083347f5a9908389df2520cabb14e82a301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:layout:layout.html.twig"));

        // line 1
        echo "<html lang=fr>
<head>
    <title> ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "        </title>
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
    <!-- Images En-tête -->
    <!--<img src=\"images/menuGauche.gif\"\talt=\"Choisir\" title=\"Choisir\"/>-->
    <img id=\"banniere\" src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/banniere.png"), "html", null, true);
        echo " alt=\"Lentete\" title=\"entetebourseimg\"/>
<!---testet-->
</div>

<!--  Menu haut-->
<ul id=\"menu\">
    <li><a href=";
        // line 33
        echo $this->env->getExtension('routing')->getPath("bourse_tableau");
        echo "> Tableau de bord </a></li>       ";
        // line 34
        echo "    <li><a href=";
        echo "> Analyse du marché</a></li>
    <li><a href=";
        // line 35
        echo "> Gerer tableau de bord</a></li>


</ul>
<div id=\"menu lateral\">
";
        // line 40
        $this->displayBlock('lateral', $context, $blocks);
        // line 42
        echo "</div>


<div id=\"conteneur\">
    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "</div>




<br><br><br>
<div id=\"pied\"> Copyright _ BourSIQoute _ 2016 </div>
<div id=\"credits\"> powered by symfony 2 </div>
</body>

</html>";
        
        $__internal_6b160ad13061568cb338d7b61f4a8083347f5a9908389df2520cabb14e82a301->leave($__internal_6b160ad13061568cb338d7b61f4a8083347f5a9908389df2520cabb14e82a301_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44db12c9175a2f39975bcb6df6004e8c88debe82764720451141065f55b4c5ca = $this->env->getExtension("native_profiler");
        $__internal_44db12c9175a2f39975bcb6df6004e8c88debe82764720451141065f55b4c5ca->enter($__internal_44db12c9175a2f39975bcb6df6004e8c88debe82764720451141065f55b4c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "                boursiquote :
            ";
        
        $__internal_44db12c9175a2f39975bcb6df6004e8c88debe82764720451141065f55b4c5ca->leave($__internal_44db12c9175a2f39975bcb6df6004e8c88debe82764720451141065f55b4c5ca_prof);

    }

    // line 40
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_c7e9db9bb26665bc8c6ff58380e9df9b011d2fb9831d473ea8e84ab5ae723090 = $this->env->getExtension("native_profiler");
        $__internal_c7e9db9bb26665bc8c6ff58380e9df9b011d2fb9831d473ea8e84ab5ae723090->enter($__internal_c7e9db9bb26665bc8c6ff58380e9df9b011d2fb9831d473ea8e84ab5ae723090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        
        $__internal_c7e9db9bb26665bc8c6ff58380e9df9b011d2fb9831d473ea8e84ab5ae723090->leave($__internal_c7e9db9bb26665bc8c6ff58380e9df9b011d2fb9831d473ea8e84ab5ae723090_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_00f7b5507b14e3455169c90dc119f1ba334e27e07fdcf0406be4b3cbd4d5c6cb = $this->env->getExtension("native_profiler");
        $__internal_00f7b5507b14e3455169c90dc119f1ba334e27e07fdcf0406be4b3cbd4d5c6cb->enter($__internal_00f7b5507b14e3455169c90dc119f1ba334e27e07fdcf0406be4b3cbd4d5c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 47
        echo "    ";
        
        $__internal_00f7b5507b14e3455169c90dc119f1ba334e27e07fdcf0406be4b3cbd4d5c6cb->leave($__internal_00f7b5507b14e3455169c90dc119f1ba334e27e07fdcf0406be4b3cbd4d5c6cb_prof);

    }

    public function getTemplateName()
    {
        return "BourseBundle:layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  146 => 46,  135 => 40,  127 => 4,  121 => 3,  104 => 48,  102 => 46,  96 => 42,  94 => 40,  87 => 35,  83 => 34,  80 => 33,  71 => 27,  54 => 12,  40 => 10,  36 => 9,  31 => 6,  29 => 3,  25 => 1,);
    }
}
/* <html lang=fr>*/
/* <head>*/
/*     <title> {% block title %}*/
/*                 boursiquote :*/
/*             {% endblock %}*/
/*         </title>*/
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
/*     <!-- Images En-tête -->*/
/*     <!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->*/
/*     <img id="banniere" src={{ asset('images/banniere.png') }} alt="Lentete" title="entetebourseimg"/>*/
/* <!---testet-->*/
/* </div>*/
/* */
/* <!--  Menu haut-->*/
/* <ul id="menu">*/
/*     <li><a href={{ path('bourse_tableau') }}> Tableau de bord </a></li>       {# les liens sont a remettre via le routing #}*/
/*     <li><a href={#  {{ path('analyse') }}       #}> Analyse du marché</a></li>*/
/*     <li><a href={#  {{ path('gerertableau') }}  #}> Gerer tableau de bord</a></li>*/
/* */
/* */
/* </ul>*/
/* <div id="menu lateral">*/
/* {% block lateral %}*/
/* {% endblock %}*/
/* </div>*/
/* */
/* */
/* <div id="conteneur">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* */
/* */
/* */
/* <br><br><br>*/
/* <div id="pied"> Copyright _ BourSIQoute _ 2016 </div>*/
/* <div id="credits"> powered by symfony 2 </div>*/
/* </body>*/
/* */
/* </html>*/
