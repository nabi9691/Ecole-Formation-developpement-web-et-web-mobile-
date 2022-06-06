<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_c0f8724cd7cc8f1490c19e5b6c2ca253c110819f90ef4347c79ab96824d65139 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Bienvenu(e) sur le site :   
Cours de développement en ligne !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
 <div class=\"container\">
      
<hr/>
<br/>

<h1>
    Bienvenu(e) sur le site :   
    Cours de développement en ligne !
</h1>
<hr/>
<br/>

<h1>Devenez expert en programmations  </h1>
<hr/>
<br/>

<h1> Formation Développeur PHP - 100% en Ligne, 100% Flexible </h1>
<hr/>
<br/>

<h2> Cours PHP - Apprendre PHP
</h2>
<hr/>
<br/>


<h3> Cours PHP - Apprendre PHP
/<h3>
<hr/>
<br/>


<h4> Ecole / Formation développement web et web mobile 
/<h4>
<hr/>
<br/>


<h5> développer un site Web dynamique avec ...
</h5>
<hr/>
<br/>


<h6> Créer un Forum complet de A à Z en PHP ...
</h6>


<h3> Découvrez nos Formations...
</h3>





  ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "medias", [], "any", false, false, false, 66)), 0)))) {
            // line 67
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "medias", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["medias"]) {
                // line 68
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["medias"], "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medias"], "contenu", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medias'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "      
    ";
        }
        // line 71
        echo "

<br/>
<hr/>
<br/>
<h3> 
ATELIER INFORMATIQUE !
</h3> 
    </div>

<br/><br/>

";
        // line 83
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 84
        echo "<div>
<h1>Cliquer ici pour plus de informations !</h1>
<a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
        echo "\"> Liste de nos Formations en ligne !</a></li>
<lu>
    <li>Formations :</li>
    <li> LANGAGE PHP</li>
    <li>  LANGAGE JAVA </li>
<li>  Formation de Développeur Web et Web Mobile  !</li>
<li> ENTREPRISE  : BIOInformatique </li>
<li> Ecole de Formation Professionnelle en Bioinformatique, Informatique de Gestion, </li>
<li> Software et Réseaux. </li>
<li> Adresse : 70 Avenue du général De Gaulle, 94000  Créteil. </li>
<li> Code Postal : 94000  Créteil
<li> Tél : 06 13 54 10 16 </li>
<li> FAX : +33 6 13 54 10 16 </li>
<li> Email : akli.saidani2000@gmail.com </li>
</lu>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 86,  211 => 84,  201 => 83,  189 => 103,  187 => 83,  173 => 71,  169 => 69,  158 => 68,  153 => 67,  151 => 66,  150 => 65,  92 => 9,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) sur le site :   
Cours de développement en ligne !
{% endblock %}

{% block content %}

 <div class=\"container\">
      
<hr/>
<br/>

<h1>
    Bienvenu(e) sur le site :   
    Cours de développement en ligne !
</h1>
<hr/>
<br/>

<h1>Devenez expert en programmations  </h1>
<hr/>
<br/>

<h1> Formation Développeur PHP - 100% en Ligne, 100% Flexible </h1>
<hr/>
<br/>

<h2> Cours PHP - Apprendre PHP
</h2>
<hr/>
<br/>


<h3> Cours PHP - Apprendre PHP
/<h3>
<hr/>
<br/>


<h4> Ecole / Formation développement web et web mobile 
/<h4>
<hr/>
<br/>


<h5> développer un site Web dynamique avec ...
</h5>
<hr/>
<br/>


<h6> Créer un Forum complet de A à Z en PHP ...
</h6>


<h3> Découvrez nos Formations...
</h3>





  {% if app.user and
   app.user.medias|length > 0 %}
        {% for medias in app.user.medias %}
            <img src=\"{{ vich_uploader_asset(medias, 'imageFile') }}\" alt=\"{{ medias.contenu }}\">
        {% endfor %}      
    {% endif %}


<br/>
<hr/>
<br/>
<h3> 
ATELIER INFORMATIQUE !
</h3> 
    </div>

<br/><br/>

{% block footer %}
<div>
<h1>Cliquer ici pour plus de informations !</h1>
<a href=\"{{ path('formations_index') }}\"> Liste de nos Formations en ligne !</a></li>
<lu>
    <li>Formations :</li>
    <li> LANGAGE PHP</li>
    <li>  LANGAGE JAVA </li>
<li>  Formation de Développeur Web et Web Mobile  !</li>
<li> ENTREPRISE  : BIOInformatique </li>
<li> Ecole de Formation Professionnelle en Bioinformatique, Informatique de Gestion, </li>
<li> Software et Réseaux. </li>
<li> Adresse : 70 Avenue du général De Gaulle, 94000  Créteil. </li>
<li> Code Postal : 94000  Créteil
<li> Tél : 06 13 54 10 16 </li>
<li> FAX : +33 6 13 54 10 16 </li>
<li> Email : akli.saidani2000@gmail.com </li>
</lu>
</div>
{% endblock %}


{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\Symfony\\BIOInformatique.com\\templates\\home\\index.html.twig");
    }
}
