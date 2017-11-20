<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecea1cd8d1c36ccb74ac7310f287b8dd30f0ceafb58b38d476d806cc9f6e7087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecea1cd8d1c36ccb74ac7310f287b8dd30f0ceafb58b38d476d806cc9f6e7087->enter($__internal_ecea1cd8d1c36ccb74ac7310f287b8dd30f0ceafb58b38d476d806cc9f6e7087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_358e048edca0fd597a3e951b675b0caa734f0c50ffa267bba1ba926056da7841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358e048edca0fd597a3e951b675b0caa734f0c50ffa267bba1ba926056da7841->enter($__internal_358e048edca0fd597a3e951b675b0caa734f0c50ffa267bba1ba926056da7841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ecea1cd8d1c36ccb74ac7310f287b8dd30f0ceafb58b38d476d806cc9f6e7087->leave($__internal_ecea1cd8d1c36ccb74ac7310f287b8dd30f0ceafb58b38d476d806cc9f6e7087_prof);

        
        $__internal_358e048edca0fd597a3e951b675b0caa734f0c50ffa267bba1ba926056da7841->leave($__internal_358e048edca0fd597a3e951b675b0caa734f0c50ffa267bba1ba926056da7841_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_513597cdf44e0d8dfec58210b7c23dacb314fb84f210036c67e7fe30ad0495ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513597cdf44e0d8dfec58210b7c23dacb314fb84f210036c67e7fe30ad0495ae->enter($__internal_513597cdf44e0d8dfec58210b7c23dacb314fb84f210036c67e7fe30ad0495ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70e0ca8b888080888b9eff98084811b9962da2706ab0f04478976203bedc6d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e0ca8b888080888b9eff98084811b9962da2706ab0f04478976203bedc6d16->enter($__internal_70e0ca8b888080888b9eff98084811b9962da2706ab0f04478976203bedc6d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_70e0ca8b888080888b9eff98084811b9962da2706ab0f04478976203bedc6d16->leave($__internal_70e0ca8b888080888b9eff98084811b9962da2706ab0f04478976203bedc6d16_prof);

        
        $__internal_513597cdf44e0d8dfec58210b7c23dacb314fb84f210036c67e7fe30ad0495ae->leave($__internal_513597cdf44e0d8dfec58210b7c23dacb314fb84f210036c67e7fe30ad0495ae_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a8fbd1d515de1d691dc5f00b56e69118be62a005395b2bad1e2c4ea7ee28be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8fbd1d515de1d691dc5f00b56e69118be62a005395b2bad1e2c4ea7ee28be6->enter($__internal_5a8fbd1d515de1d691dc5f00b56e69118be62a005395b2bad1e2c4ea7ee28be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba2da8be8f56e65c3069a405452c5e48c940f57ce0d0e495a5574cf22de6e65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2da8be8f56e65c3069a405452c5e48c940f57ce0d0e495a5574cf22de6e65a->enter($__internal_ba2da8be8f56e65c3069a405452c5e48c940f57ce0d0e495a5574cf22de6e65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ba2da8be8f56e65c3069a405452c5e48c940f57ce0d0e495a5574cf22de6e65a->leave($__internal_ba2da8be8f56e65c3069a405452c5e48c940f57ce0d0e495a5574cf22de6e65a_prof);

        
        $__internal_5a8fbd1d515de1d691dc5f00b56e69118be62a005395b2bad1e2c4ea7ee28be6->leave($__internal_5a8fbd1d515de1d691dc5f00b56e69118be62a005395b2bad1e2c4ea7ee28be6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b1ca8ebe88f0ccc191434245788396f61b1899a4b009cd6c9fd586072dd6dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1ca8ebe88f0ccc191434245788396f61b1899a4b009cd6c9fd586072dd6dea->enter($__internal_5b1ca8ebe88f0ccc191434245788396f61b1899a4b009cd6c9fd586072dd6dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17c8ae635e1dc1249e889083408c813f1342491eb3b19e36242cba3a5059f745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c8ae635e1dc1249e889083408c813f1342491eb3b19e36242cba3a5059f745->enter($__internal_17c8ae635e1dc1249e889083408c813f1342491eb3b19e36242cba3a5059f745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_17c8ae635e1dc1249e889083408c813f1342491eb3b19e36242cba3a5059f745->leave($__internal_17c8ae635e1dc1249e889083408c813f1342491eb3b19e36242cba3a5059f745_prof);

        
        $__internal_5b1ca8ebe88f0ccc191434245788396f61b1899a4b009cd6c9fd586072dd6dea->leave($__internal_5b1ca8ebe88f0ccc191434245788396f61b1899a4b009cd6c9fd586072dd6dea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Library/WebServer/Documents/sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
