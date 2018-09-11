<?php

/* /var/www/html/financial_task/themes/jumplink-viola/partials/imprint.htm */
class __TwigTemplate_052206748ba2057523b49435dc24d94481198ded92c1b052dc22bb713a28ac92 extends Twig_Template
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
        echo "<div id=\"imprint\" data-target=\"#imprint\">
    <div class=\"container-fluid fg-gray-light subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">";
        // line 5
        echo twig_escape_filter($this->env, ($context["infotext1"] ?? null), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-gray-lighter subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["infotext2"] ?? null), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-8 text-center text-md-left py-4\">
                <strong><h5>";
        // line 19
        echo twig_escape_filter($this->env, ($context["headertitle"] ?? null), "html", null, true);
        echo "</h5></strong>
                <div class=\"fg-gray-light\">
                    <strong>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "company_name", array()), "html", null, true);
        echo "</strong>
                    <br><a href=\"tel:";
        // line 22
        echo call_user_func_array($this->env->getFunction('str_camel')->getCallable(), array("camel", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "phone_number", array())));
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "phone_number", array()), "html", null, true);
        echo "</a>
                    <br><a href=\"mailto:";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "email_address", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "email_address", array()), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer_logo_01.svg");
        echo "\">
                    </div>
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer_logo_02.svg");
        echo "\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 39
        if (($context["showcopyright"] ?? null)) {
            // line 40
            echo "        <div class=\"container-fluid bg-gray\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center bg-inverse py-3\">
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["copyrighturl"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["copyright"] ?? null), "html", null, true);
            echo "</a>
                </div>
            </div>
        </div>
    ";
        }
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/partials/imprint.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  98 => 43,  93 => 40,  91 => 39,  82 => 33,  76 => 30,  64 => 23,  58 => 22,  54 => 21,  49 => 19,  39 => 12,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"imprint\" data-target=\"#imprint\">
    <div class=\"container-fluid fg-gray-light subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">{{infotext1}}</div>
            </div>
        </div>
    </div>
    <div class=\"container-fluid bg-gray-lighter subtext\">
        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <div class=\"display-4\">{{infotext2}}</div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-8 text-center text-md-left py-4\">
                <strong><h5>{{headertitle}}</h5></strong>
                <div class=\"fg-gray-light\">
                    <strong>{{ this.theme.company_name }}</strong>
                    <br><a href=\"tel:{{ str_camel(this.theme.phone_number) }}\">{{ this.theme.phone_number }}</a>
                    <br><a href=\"mailto:{{ this.theme.email_address }}\">{{ this.theme.email_address }}</a>
                </div>
            </div>

            <div class=\"col-xs-12 col-md-4\">
                <div class=\"row\">
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"{{'assets/images/footer_logo_01.svg'|theme}}\">
                    </div>
                    <div class=\"col-xs-6 py-4\">
                        <img class=\"center-block img-fluid\" style=\"max-height: 120px;\" src=\"{{'assets/images/footer_logo_02.svg'|theme}}\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% if showcopyright %}
        <div class=\"container-fluid bg-gray\">
            <div class=\"row\">
                <div class=\"col-xs-12 text-center bg-inverse py-3\">
                    <a href=\"{{copyrighturl}}\">{{copyright}}</a>
                </div>
            </div>
        </div>
    {% endif %}
</div>", "/var/www/html/financial_task/themes/jumplink-viola/partials/imprint.htm", "");
    }
}
