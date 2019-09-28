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

/* /opt/lampp/htdocs/tanzaniaaliance/themes/demo/layouts/default.htm */
class __TwigTemplate_b18af4533e2948bf92bebc93b1fca80ffdae8e9b0d6b4e02f92691b28dc70eee extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Tanzania Alliance - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/style.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "    </head>
    <body>
    <div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"spinner\"></div>
      </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 32
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </footer>
        <!-- jquery 2.2.4  -->
  <!-- <script src=\"js/jquery.min.js\"></script>
  Popper js
  <script src=\"js/popper.min.js\"></script>
  Bootstrap js
  <script src=\"js/bootstrap.min.js\"></script>
  Owl Carousel js
  <script src=\"js/owl.carousel.min.js\"></script>
  Classynav
  <script src=\"js/classynav.js\"></script>
  Wow js
  <script src=\"js/wow.min.js\"></script>
  Sticky js
  <script src=\"js/jquery.sticky.js\"></script>
  Magnific Popup js
  <script src=\"js/jquery.magnific-popup.min.js\"></script>
  Scrollup js
  <script src=\"js/jquery.scrollup.min.js\"></script>
  Jarallax js
  <script src=\"js/jarallax.min.js\"></script>
  Jarallax Video js
  <script src=\"js/jarallax-video.min.js\"></script>
  Active js
  <script src=\"js/active.js\"></script> -->

        <!-- Scripts -->
        <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.min.js");
        echo "\"></script>
        <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/propper.min.js");
        echo "\"></script>
        <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/owl.carousel.min.js");
        echo "\"></script>
        <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/classynav.min.js");
        echo "\"></script>
        <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/wow.min.js");
        echo "\"></script>
        <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.sticky.js");
        echo "\"></script>
        <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.magnific-popup.min.js");
        echo "\"></script>
        <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.scrollup.min.js");
        echo "\"></script>
        <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jarallax.min.js");
        echo "\"></script>
        <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jarallax-video.min.js");
        echo "\"></script>
        <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/active.js");
        echo "\"></script>
        ";
        // line 76
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 77
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 78
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/tanzaniaaliance/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 78,  201 => 77,  186 => 76,  182 => 75,  178 => 74,  174 => 73,  170 => 72,  166 => 71,  162 => 70,  158 => 69,  154 => 68,  150 => 67,  146 => 66,  142 => 65,  138 => 64,  109 => 37,  105 => 36,  99 => 32,  97 => 31,  91 => 27,  87 => 26,  77 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  49 => 7,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Tanzania Alliance - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/style.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>
    <div class=\"preloader d-flex align-items-center justify-content-center\">
    <div class=\"spinner\"></div>
      </div>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>
        <!-- jquery 2.2.4  -->
  <!-- <script src=\"js/jquery.min.js\"></script>
  Popper js
  <script src=\"js/popper.min.js\"></script>
  Bootstrap js
  <script src=\"js/bootstrap.min.js\"></script>
  Owl Carousel js
  <script src=\"js/owl.carousel.min.js\"></script>
  Classynav
  <script src=\"js/classynav.js\"></script>
  Wow js
  <script src=\"js/wow.min.js\"></script>
  Sticky js
  <script src=\"js/jquery.sticky.js\"></script>
  Magnific Popup js
  <script src=\"js/jquery.magnific-popup.min.js\"></script>
  Scrollup js
  <script src=\"js/jquery.scrollup.min.js\"></script>
  Jarallax js
  <script src=\"js/jarallax.min.js\"></script>
  Jarallax Video js
  <script src=\"js/jarallax-video.min.js\"></script>
  Active js
  <script src=\"js/active.js\"></script> -->

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/propper.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/owl.carousel.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/classynav.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/wow.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/jquery.sticky.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/jquery.magnific-popup.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/jquery.scrollup.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/jarallax.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/jarallax-video.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/active.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/opt/lampp/htdocs/tanzaniaaliance/themes/demo/layouts/default.htm", "");
    }
}
