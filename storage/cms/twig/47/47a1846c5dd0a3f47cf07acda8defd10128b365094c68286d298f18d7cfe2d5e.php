<?php

/* /var/www/html/financial_task/themes/jumplink-viola/partials/navigation.htm */
class __TwigTemplate_bdd47822c67f13a5b222f15a7a39e58efd979a39bc8ea88191a8e4553d68ee51 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "hidden-xs-down navbar-nav d-flex justify-content-end"        ;
        $context['__cms_partial_params']['itemClass'] = "nav-item"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/navbar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        ";
        // line 17
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["main"] ?? null), "menuItems", array())        ;
        $context['__cms_partial_params']['class'] = "list-group"        ;
        $context['__cms_partial_params']['itemClass'] = "list-group-item"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation/sidebar-items"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 22
        echo "    <script type=\"text/javascript\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/partials/navigation.js");
        echo "\"></script>
";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  63 => 22,  61 => 21,  56 => 18,  49 => 17,  40 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav class=\"navbar fixed-top navbar-toggleable-xs navbar-light bg-white-transparent fg-primary navbar-big\" id=\"main-navbar\">
    <button class=\"navbar-toggler navbar-toggler-right hidden-md-up\" type=\"button\">
        &#9776;
    </button>
    <div class=\"container\">
        <a href=\"/\" class=\"navbar-brand\">&nbsp;</a>
        <div class=\"w-100\">
            {% partial 'navigation/navbar-items' items=main.menuItems class='hidden-xs-down navbar-nav d-flex justify-content-end' itemClass='nav-item' %}
        </div>
    </div>
</nav>

<!-- http://dcdeiv.github.io/simpler-sidebar/ -->
<div id=\"sidebar\">
    <div id=\"sidebar-wrapper\" class=\"sidebar-wrapper bg-white fg-primary\">
        {% partial 'navigation/sidebar-items' items=main.menuItems class='list-group' itemClass='list-group-item' %}
    </div>
</div>

{% put scripts %}
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/partials/navigation.js' |theme }}\"></script>
{% endput %}", "/var/www/html/financial_task/themes/jumplink-viola/partials/navigation.htm", "");
    }
}
