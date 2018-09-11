<?php

/* /var/www/html/financial_task/themes/jumplink-viola/partials/top_header.htm */
class __TwigTemplate_332766e46e56e26e814a53a9f23564ab5516b53ee2c475050f4818c321fad7be extends Twig_Template
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
        if ((( !($context["slideshow"] ?? null) || (twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", array()) == null)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", array()), "name", array()) == "Example"))) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            $context["_slideshow"] = array("id" => 2, "name" => "Header", "created_at" => "2016-05-23 10:22:39", "updated_at" => "2016-05-23 10:52:46", "slides" => array(0 => array("id" => 4, "name" => "1", "description" => "<h1>Welcome</h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.</p>", "link" => "", "sort_order" => 4, "created_at" => "2016-05-23 10:52:10", "updated_at" => "2016-05-25 09:10:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_1.jpg"))), 1 => array("id" => 5, "name" => "2", "description" => "", "link" => "", "sort_order" => 5, "created_at" => "2016-05-23 10:52:32", "updated_at" => "2016-05-23 10:52:32", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_2.jpg"))), 2 => array("id" => 6, "name" => "3", "description" => "", "link" => "", "sort_order" => 6, "created_at" => "2016-05-23 10:52:42", "updated_at" => "2016-05-23 10:52:42", "slideshow_id" => 2, "is_published" => 1, "published_at" => null, "unpublished_at" => null, "image" => array("path" => $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/placeholders/header_3.jpg")))));
        } else {
            // line 61
            echo "    ";
            $context["_slideshow"] = twig_get_attribute($this->env, $this->source, ($context["slideshow"] ?? null), "slideshow", array());
        }
        // line 63
        echo "
<header id=\"top\" data-target=\"#top\">
    ";
        // line 65
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['slideshow'] = ($context["_slideshow"] ?? null)        ;
        $context['__cms_partial_params']['id'] = "carousel-top-header"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slideshow"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "    <a class=\"icon-circle mx-auto\" href=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) != "home")) {
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        }
        echo "#about\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Weiter\">
        <i class=\"fa fa-chevron-circle-down\"></i>
    </a>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/financial_task/themes/jumplink-viola/partials/top_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 66,  39 => 65,  35 => 63,  31 => 61,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not slideshow or slideshow.slideshow == null or slideshow.slideshow.name == 'Example' %}
    {# placeholder slidehsow if no slideshow is set #}
    {% set _slideshow = {
           \"id\":2,
           \"name\":\"Header\",
           \"created_at\":\"2016-05-23 10:22:39\",
           \"updated_at\":\"2016-05-23 10:52:46\",
           \"slides\":[
              {
                 \"id\":4,
                 \"name\":\"1\",
                 \"description\":\"<h1>Welcome<\\/h1><p>Donec quis magna consectetur, semper felis vitae, finibus libero. Sed laoreet diam odio.<\\/p>\",
                 \"link\":\"\",
                 \"sort_order\":4,
                 \"created_at\":\"2016-05-23 10:52:10\",
                 \"updated_at\":\"2016-05-25 09:10:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_1.jpg\" | theme
                 }
              },
              {
                 \"id\":5,
                 \"name\":\"2\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":5,
                 \"created_at\":\"2016-05-23 10:52:32\",
                 \"updated_at\":\"2016-05-23 10:52:32\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_2.jpg\" | theme
                 }
              },
              {
                 \"id\":6,
                 \"name\":\"3\",
                 \"description\":\"\",
                 \"link\":\"\",
                 \"sort_order\":6,
                 \"created_at\":\"2016-05-23 10:52:42\",
                 \"updated_at\":\"2016-05-23 10:52:42\",
                 \"slideshow_id\":2,
                 \"is_published\":1,
                 \"published_at\":null,
                 \"unpublished_at\":null,
                 \"image\": {
                     \"path\": \"/assets/images/placeholders/header_3.jpg\" | theme
                 }
              }
           ]
        }
    %}
{% else %}
    {% set _slideshow = slideshow.slideshow %}
{% endif %}

<header id=\"top\" data-target=\"#top\">
    {% partial 'slideshow' slideshow=_slideshow id='carousel-top-header' %}
    <a class=\"icon-circle mx-auto\" href=\"{% if this.page.id != 'home' %}{{'home'|page}}{% endif %}#about\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Weiter\">
        <i class=\"fa fa-chevron-circle-down\"></i>
    </a>
</header>", "/var/www/html/financial_task/themes/jumplink-viola/partials/top_header.htm", "");
    }
}
