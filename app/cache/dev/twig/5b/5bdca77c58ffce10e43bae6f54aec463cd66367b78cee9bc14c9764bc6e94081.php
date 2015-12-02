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
        $__internal_66b74f335069a4a01aa52a3647f37f591c9f631549e115c7a0c1d020998e8766 = $this->env->getExtension("native_profiler");
        $__internal_66b74f335069a4a01aa52a3647f37f591c9f631549e115c7a0c1d020998e8766->enter($__internal_66b74f335069a4a01aa52a3647f37f591c9f631549e115c7a0c1d020998e8766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BourseBundle:layout:layout.html.twig"));

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

<body>
<div id=\"bandeau\">
    <!-- Images En-tête -->
    <!--<img src=\"images/menuGauche.gif\"\talt=\"Choisir\" title=\"Choisir\"/>-->
    <img src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/banniere.png"), "html", null, true);
        echo " alt=\"Lentete\" title=\"entetebourseimg\"/>

</div>

<!--  Menu haut-->
<ul id=\"menu\">
    <li><a href=";
        // line 24
        echo $this->env->getExtension('routing')->getPath("bourse_tableau");
        echo "> Tableau de bord </a></li>       ";
        // line 25
        echo "    <li><a href=";
        echo "> Analyse du marché</a></li>
    <li><a href=";
        // line 26
        echo "> Gerer tableau de bord</a></li>


</ul>
<div id=\"menu lateral\">
";
        // line 31
        $this->displayBlock('lateral', $context, $blocks);
        // line 33
        echo "</div>


<div id=\"conteneur\">
    ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "</div>




<br><br><br>
<div id=\"pied\"> Copyright _ BourSIQoute _ 2016 </div>
<div id=\"credits\"> powered by symfony 2 </div>
</body>

</html>";
        
        $__internal_66b74f335069a4a01aa52a3647f37f591c9f631549e115c7a0c1d020998e8766->leave($__internal_66b74f335069a4a01aa52a3647f37f591c9f631549e115c7a0c1d020998e8766_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7205912038432df2d28ae2b299ae08f314431e51bf33d17350e75fdef2b22df = $this->env->getExtension("native_profiler");
        $__internal_a7205912038432df2d28ae2b299ae08f314431e51bf33d17350e75fdef2b22df->enter($__internal_a7205912038432df2d28ae2b299ae08f314431e51bf33d17350e75fdef2b22df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "                boursiquote :
            ";
        
        $__internal_a7205912038432df2d28ae2b299ae08f314431e51bf33d17350e75fdef2b22df->leave($__internal_a7205912038432df2d28ae2b299ae08f314431e51bf33d17350e75fdef2b22df_prof);

    }

    // line 31
    public function block_lateral($context, array $blocks = array())
    {
        $__internal_38865d3804cf2d0db04d0e62ce09e187872d4c3be9e68864ec29b5e8ed1f4955 = $this->env->getExtension("native_profiler");
        $__internal_38865d3804cf2d0db04d0e62ce09e187872d4c3be9e68864ec29b5e8ed1f4955->enter($__internal_38865d3804cf2d0db04d0e62ce09e187872d4c3be9e68864ec29b5e8ed1f4955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lateral"));

        
        $__internal_38865d3804cf2d0db04d0e62ce09e187872d4c3be9e68864ec29b5e8ed1f4955->leave($__internal_38865d3804cf2d0db04d0e62ce09e187872d4c3be9e68864ec29b5e8ed1f4955_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1e9fdcdc8aac81db32a476ffa72890f7b6c87aff470b8f4882070bf94dd65dc = $this->env->getExtension("native_profiler");
        $__internal_d1e9fdcdc8aac81db32a476ffa72890f7b6c87aff470b8f4882070bf94dd65dc->enter($__internal_d1e9fdcdc8aac81db32a476ffa72890f7b6c87aff470b8f4882070bf94dd65dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "    ";
        
        $__internal_d1e9fdcdc8aac81db32a476ffa72890f7b6c87aff470b8f4882070bf94dd65dc->leave($__internal_d1e9fdcdc8aac81db32a476ffa72890f7b6c87aff470b8f4882070bf94dd65dc_prof);

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
        return array (  143 => 38,  137 => 37,  126 => 31,  118 => 4,  112 => 3,  95 => 39,  93 => 37,  87 => 33,  85 => 31,  78 => 26,  74 => 25,  71 => 24,  62 => 18,  54 => 12,  40 => 10,  36 => 9,  31 => 6,  29 => 3,  25 => 1,);
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
/* <body>*/
/* <div id="bandeau">*/
/*     <!-- Images En-tête -->*/
/*     <!--<img src="images/menuGauche.gif"	alt="Choisir" title="Choisir"/>-->*/
/*     <img src={{ asset('images/banniere.png') }} alt="Lentete" title="entetebourseimg"/>*/
/* */
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
