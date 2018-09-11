<?php

/* /var/www/html/financial_task/themes/jumplink-viola/partials/navigation/sidebar-items.htm */
class __TwigTemplate_3f4eaa6cf1b7af184f84f754bbe4db0528d9c458cbbdcfa390d00be99f635fa0 extends Twig_Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <a class=\"";
            echo twig_escape_filter($this->env, ($context["itemClass"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown") : (""));
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                // line 6
                echo "                <span class=\"caret\"></span>
            ";
            }
            // line 8
            echo "        </a>
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                // line 10
                echo "            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", array())                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/partials/navigation/sidebar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 12,  71 => 11,  64 => 10,  62 => 9,  59 => 8,  55 => 6,  53 => 5,  49 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ class }}\">
    {% for item in items %}
        <a class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
            {{ item.title }}
            {% if item.items %}
                <span class=\"caret\"></span>
            {% endif %}
        </a>
        {% if item.items %}
            {% partial 'menu-items' items=item.items class='dropdown-menu' %}
        {% endif %}
    {% endfor %}
</div>", "/var/www/html/financial_task/themes/jumplink-viola/partials/navigation/sidebar-items.htm", "");
    }
}
