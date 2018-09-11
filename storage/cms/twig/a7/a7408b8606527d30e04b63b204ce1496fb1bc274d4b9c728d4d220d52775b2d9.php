<?php

/* /var/www/html/financial_task/themes/jumplink-viola/pages/work-progress.htm */
class __TwigTemplate_a9a3b7a954b6997333f13f80a21b5cf7b12be95befee8b420fef9c95d24cdc0c extends Twig_Template
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
        echo "<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <img class=\"center-block img-fluid\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo/thp-viola-garber-logo.png");
        echo "\" alt=\"\">
        </div>
    </div>
</div>

<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p class=\"text-xs-center\">This site is currently under construction.</p>
        </div>
    </div>
</div>
";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("imprint"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 18
        echo "    <script type=\"text/javascript\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/work-progress.js");
        echo "\"></script>
";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/pages/work-progress.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  49 => 18,  47 => 17,  43 => 16,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <img class=\"center-block img-fluid\" src=\"{{ 'assets/images/logo/thp-viola-garber-logo.png' |theme }}\" alt=\"\">
        </div>
    </div>
</div>

<div class=\"container p-t-3\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <p class=\"text-xs-center\">This site is currently under construction.</p>
        </div>
    </div>
</div>
{% partial 'imprint' %}
{% put scripts %}
    <script type=\"text/javascript\" src=\"{{ 'assets/javascript/work-progress.js' |theme }}\"></script>
{% endput %}", "/var/www/html/financial_task/themes/jumplink-viola/pages/work-progress.htm", "");
    }
}
