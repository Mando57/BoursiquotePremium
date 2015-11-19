<?php

/* LaFleurSymfonyBundle:Catalogue:panier.html.twig */
class __TwigTemplate_b6a5dd7e4e9203e369524317d05d658da1983452abea427504cc21ecc3810f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LaFleurSymfonyBundle:layout:layout.html.twig", "LaFleurSymfonyBundle:Catalogue:panier.html.twig", 1);
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
        $__internal_755aa6b2140ca36355136ca021490f42ec4a6655942c3aeb97c24391a4f85222 = $this->env->getExtension("native_profiler");
        $__internal_755aa6b2140ca36355136ca021490f42ec4a6655942c3aeb97c24391a4f85222->enter($__internal_755aa6b2140ca36355136ca021490f42ec4a6655942c3aeb97c24391a4f85222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LaFleurSymfonyBundle:Catalogue:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_755aa6b2140ca36355136ca021490f42ec4a6655942c3aeb97c24391a4f85222->leave($__internal_755aa6b2140ca36355136ca021490f42ec4a6655942c3aeb97c24391a4f85222_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bf8b48a0f9af51b3b95bf312205d82ed8e21896407e42a2b4256b5b5ade8c58 = $this->env->getExtension("native_profiler");
        $__internal_6bf8b48a0f9af51b3b95bf312205d82ed8e21896407e42a2b4256b5b5ade8c58->enter($__internal_6bf8b48a0f9af51b3b95bf312205d82ed8e21896407e42a2b4256b5b5ade8c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Panier ";
        
        $__internal_6bf8b48a0f9af51b3b95bf312205d82ed8e21896407e42a2b4256b5b5ade8c58->leave($__internal_6bf8b48a0f9af51b3b95bf312205d82ed8e21896407e42a2b4256b5b5ade8c58_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b2ffad47d9370b80d5572d502e9f0549116645628605cd225c25e644dac6d9d = $this->env->getExtension("native_profiler");
        $__internal_8b2ffad47d9370b80d5572d502e9f0549116645628605cd225c25e644dac6d9d->enter($__internal_8b2ffad47d9370b80d5572d502e9f0549116645628605cd225c25e644dac6d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/panier.gif"), "html", null, true);
        echo "\talt=\"Panier\" title=\"panier\"/>

\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"message\">
\t\t\t<ul><li>            
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</li></ul>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t<form href=";
        // line 16
        echo $this->env->getExtension('routing')->getPath("la_fleur_symfony_validerPanier");
        echo " name='form1' method=\"post\" action=>

\t\t";
        // line 18
        if ((isset($context["lePanier"]) ? $context["lePanier"] : $this->getContext($context, "lePanier"))) {
            // line 19
            echo "\t\t    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lePanier"]) ? $context["lePanier"] : $this->getContext($context, "lePanier")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "\t\t    
\t\t        <li>
\t\t        <p>
\t\t\t\t
\t\t        <img src=";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["item"], "image", array())), "html", null, true);
                echo " alt=image />
\t\t        ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo " 
\t\t         ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prix", array()), "html", null, true);
                echo " euro
\t\t        
\t\t    \t<input type='hidden' name='produit[]' value=";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo " />
\t\t    \t<a href=";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("la_fleur_symfony_retirerPanier", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo " ><img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/retirerpanier.png"), "html", null, true);
                echo " TITLE=\"Retirer du panier\" ></a>
\t\t    \t<input style=\"width:30px\" type='text' value='1' name='quantite[]'/>
\t\t\t
\t\t\t
\t\t\t</p>
\t\t        </li>


\t\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
\t     ";
            // line 39
            if (((isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged")) == 1)) {
                // line 40
                echo "    \t\t\t<input type=\"submit\" name='qte'/> 
    \t";
            } else {
                // line 42
                echo "    \t\tVeuillez vous connectez/creer un compte avant de passer au paiement<br><input DISABLED type=\"submit\"/><br><a href= > Connection ou creation de compte </a>';

\t\t";
            }
            // line 45
            echo "\t";
        }
        // line 46
        echo "\t</form>
";
        
        $__internal_8b2ffad47d9370b80d5572d502e9f0549116645628605cd225c25e644dac6d9d->leave($__internal_8b2ffad47d9370b80d5572d502e9f0549116645628605cd225c25e644dac6d9d_prof);

    }

    public function getTemplateName()
    {
        return "LaFleurSymfonyBundle:Catalogue:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 46,  148 => 45,  143 => 42,  139 => 40,  137 => 39,  134 => 38,  117 => 29,  113 => 28,  108 => 26,  104 => 25,  100 => 24,  94 => 20,  89 => 19,  87 => 18,  82 => 16,  79 => 15,  69 => 11,  65 => 9,  61 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LaFleurSymfonyBundle:layout:layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Panier {% endblock %}*/
/* */
/* {% block content %}*/
/* <img src={{ asset('images/panier.gif') }}	alt="Panier" title="panier"/>*/
/* */
/* 	{% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="message">*/
/* 			<ul><li>            */
/* 				{{ flashMessage }}*/
/* 			</li></ul>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* 	<form href={{ path("la_fleur_symfony_validerPanier") }} name='form1' method="post" action=>*/
/* */
/* 		{% if lePanier %}*/
/* 		    {% for item in lePanier %}*/
/* 		    */
/* 		        <li>*/
/* 		        <p>*/
/* 				*/
/* 		        <img src={{ asset(item.image)}} alt=image />*/
/* 		        {{item.description}} */
/* 		         {{ item.prix}} euro*/
/* 		        */
/* 		    	<input type='hidden' name='produit[]' value={{ item.id }} />*/
/* 		    	<a href={{ path('la_fleur_symfony_retirerPanier',{'id':item.id}) }} ><img src={{ asset('images/retirerpanier.png')}} TITLE="Retirer du panier" ></a>*/
/* 		    	<input style="width:30px" type='text' value='1' name='quantite[]'/>*/
/* 			*/
/* 			*/
/* 			</p>*/
/* 		        </li>*/
/* */
/* */
/* 		    {% endfor %}*/
/* */
/* 	     {% if logged==1 %}*/
/*     			<input type="submit" name='qte'/> */
/*     	{% else %}*/
/*     		Veuillez vous connectez/creer un compte avant de passer au paiement<br><input DISABLED type="submit"/><br><a href= > Connection ou creation de compte </a>';*/
/* */
/* 		{% endif %}*/
/* 	{% endif %}*/
/* 	</form>*/
/* {% endblock %}*/
