<?php

/* /var/www/html/financial_task/themes/jumplink-viola/partials/slideshow.htm */
class __TwigTemplate_e4686727ae8df4eb48b15732f110f59b5a9ecf74e88e51f12dd1da6b1163424a extends Twig_Template
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
        if ((($context["slideshow"] ?? null) && (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["slideshow"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["slides"] ?? null) : null))) {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval='3500'>
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["slideshow"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["slides"] ?? null) : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["slide"]) {
                // line 5
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", array()), "path", array())) {
                    // line 6
                    echo "                    <div class='carousel-item";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                        echo " active";
                    }
                    echo "'>
                        ";
                    // line 7
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "link", array())) {
                        // line 8
                        echo "                            <a class=\"carousel-image-background\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", array()), "path", array()), "html", null, true);
                        echo "');\" alt='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", array()), "title", array()), "html", null, true);
                        echo "' href='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", array()), "html", null, true);
                        echo "' target='_blank'></a>
                        ";
                    } else {
                        // line 10
                        echo "                            <div class=\"carousel-image-background\" style=\"background-image: url('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", array()), "path", array()), "html", null, true);
                        echo "');\" alt='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", array()), "title", array()), "html", null, true);
                        echo "'></div>
                        ";
                    }
                    // line 12
                    echo "                        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["slide"], "title", array()) || twig_get_attribute($this->env, $this->source, $context["slide"], "description", array())) || twig_get_attribute($this->env, $this->source, $context["slide"], "link", array()))) {
                        // line 13
                        echo "                            <div class=\"carousel-caption clearfix white-caption\">
                                ";
                        // line 14
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "title", array())) {
                            echo "<h4 class='carousel-caption-title'>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", array()), "html", null, true);
                            echo "</h4>";
                        }
                        // line 15
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "description", array())) {
                            echo "<p>";
                            echo twig_get_attribute($this->env, $this->source, $context["slide"], "description", array());
                            echo "</p>";
                        }
                        // line 16
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["slide"], "link", array())) {
                            echo "<a class='carousel-caption-link' href='";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "link", array()), "html", null, true);
                            echo "' target='_blank'>Learn more</a>";
                        }
                        // line 17
                        echo "                            </div>
                         ";
                    }
                    // line 19
                    echo "                    </div>
                ";
                }
                // line 21
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/partials/slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 22,  112 => 21,  108 => 19,  104 => 17,  97 => 16,  90 => 15,  84 => 14,  81 => 13,  78 => 12,  70 => 10,  60 => 8,  58 => 7,  51 => 6,  48 => 5,  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if slideshow and slideshow['slides'] %}
    <div id=\"{{id}}\" class=\"carousel slide\" data-ride=\"carousel\" data-interval='3500'>
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for i, slide in slideshow['slides'] %}
                {% if slide.image.path %}
                    <div class='carousel-item{% if loop.first %} active{% endif %}'>
                        {% if slide.link %}
                            <a class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\" alt='{{ slide.image.title }}' href='{{ slide.link }}' target='_blank'></a>
                        {% else %}
                            <div class=\"carousel-image-background\" style=\"background-image: url('{{ slide.image.path }}');\" alt='{{ slide.image.title }}'></div>
                        {% endif %}
                        {% if slide.title or slide.description or slide.link %}
                            <div class=\"carousel-caption clearfix white-caption\">
                                {% if slide.title %}<h4 class='carousel-caption-title'>{{ slide.title }}</h4>{% endif %}
                                {% if slide.description %}<p>{{ slide.description|raw }}</p>{% endif %}
                                {% if slide.link %}<a class='carousel-caption-link' href='{{ slide.link }}' target='_blank'>Learn more</a>{% endif %}
                            </div>
                         {% endif %}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}", "/var/www/html/financial_task/themes/jumplink-viola/partials/slideshow.htm", "");
    }
}
