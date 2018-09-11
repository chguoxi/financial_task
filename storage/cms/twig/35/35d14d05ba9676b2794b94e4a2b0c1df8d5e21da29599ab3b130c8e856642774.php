<?php

/* /var/www/html/financial_task/themes/jumplink-viola/partials/navigation/navbar-items.htm */
class __TwigTemplate_9415541cd5e209e9493837b41eaa306e1535333b0f7882acb7edc2544a11c031 extends Twig_Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, ($context["itemClass"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) ? ("dropdown") : (""));
            echo "\">
            <a class=\"nav-link\" ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                echo "data-toggle=\"dropdown\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", array()), "cssClass", array()), "html", null, true);
            echo "\">
                ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "
                ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                // line 7
                echo "                    <span class=\"caret\"></span>
                ";
            }
            // line 9
            echo "            </a>
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                // line 11
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", array())                ;
                $context['__cms_partial_params']['class'] = "dropdown-menu"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu-items"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "            ";
            }
            // line 13
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/partials/navigation/navbar-items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  76 => 13,  73 => 12,  66 => 11,  64 => 10,  61 => 9,  57 => 7,  55 => 6,  51 => 5,  41 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"{{ class }}\">
    {% for item in items %}
        <li class=\"{{ itemClass }} {{ item.viewBag.cssClass }} {{ item.items ? 'dropdown' : '' }}\">
            <a class=\"nav-link\" {% if item.items %}data-toggle=\"dropdown\"{% endif %} href=\"{{ item.url }}#{{ item.viewBag.cssClass }}\">
                {{ item.title }}
                {% if item.items %}
                    <span class=\"caret\"></span>
                {% endif %}
            </a>
            {% if item.items %}
                {% partial 'menu-items' items=item.items class='dropdown-menu' %}
            {% endif %}
        </li>
    {% endfor %}
</ul>", "/var/www/html/financial_task/themes/jumplink-viola/partials/navigation/navbar-items.htm", "");
    }
}
