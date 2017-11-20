<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e37c4641a0248ce580f11ef76475470c7dc65983e5b82c58f8030d015ba9b328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37c4641a0248ce580f11ef76475470c7dc65983e5b82c58f8030d015ba9b328->enter($__internal_e37c4641a0248ce580f11ef76475470c7dc65983e5b82c58f8030d015ba9b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6405818ae965c08c3e634bf5bbd4bb1496897c8057bf58e0fdaa909f2dab9884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6405818ae965c08c3e634bf5bbd4bb1496897c8057bf58e0fdaa909f2dab9884->enter($__internal_6405818ae965c08c3e634bf5bbd4bb1496897c8057bf58e0fdaa909f2dab9884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e37c4641a0248ce580f11ef76475470c7dc65983e5b82c58f8030d015ba9b328->leave($__internal_e37c4641a0248ce580f11ef76475470c7dc65983e5b82c58f8030d015ba9b328_prof);

        
        $__internal_6405818ae965c08c3e634bf5bbd4bb1496897c8057bf58e0fdaa909f2dab9884->leave($__internal_6405818ae965c08c3e634bf5bbd4bb1496897c8057bf58e0fdaa909f2dab9884_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a9e88b4f911a674ecdbc7d14104a3a064a3ac7f3c0e81202f0ac799ec36b43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9e88b4f911a674ecdbc7d14104a3a064a3ac7f3c0e81202f0ac799ec36b43b->enter($__internal_5a9e88b4f911a674ecdbc7d14104a3a064a3ac7f3c0e81202f0ac799ec36b43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad0d3f678afd8f77b8ed132739587fd82001f04b51e8fed495cd0daa8e135b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0d3f678afd8f77b8ed132739587fd82001f04b51e8fed495cd0daa8e135b2f->enter($__internal_ad0d3f678afd8f77b8ed132739587fd82001f04b51e8fed495cd0daa8e135b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ad0d3f678afd8f77b8ed132739587fd82001f04b51e8fed495cd0daa8e135b2f->leave($__internal_ad0d3f678afd8f77b8ed132739587fd82001f04b51e8fed495cd0daa8e135b2f_prof);

        
        $__internal_5a9e88b4f911a674ecdbc7d14104a3a064a3ac7f3c0e81202f0ac799ec36b43b->leave($__internal_5a9e88b4f911a674ecdbc7d14104a3a064a3ac7f3c0e81202f0ac799ec36b43b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a877dca6d1b6c568ff40ce7381ae3c54c1c8f2d197b0c023216714d02cf66817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a877dca6d1b6c568ff40ce7381ae3c54c1c8f2d197b0c023216714d02cf66817->enter($__internal_a877dca6d1b6c568ff40ce7381ae3c54c1c8f2d197b0c023216714d02cf66817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d1d3fc0185d2b8997fefd4193f3631d740d0d0705659cb7d5df2acce7ac98119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d3fc0185d2b8997fefd4193f3631d740d0d0705659cb7d5df2acce7ac98119->enter($__internal_d1d3fc0185d2b8997fefd4193f3631d740d0d0705659cb7d5df2acce7ac98119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1d3fc0185d2b8997fefd4193f3631d740d0d0705659cb7d5df2acce7ac98119->leave($__internal_d1d3fc0185d2b8997fefd4193f3631d740d0d0705659cb7d5df2acce7ac98119_prof);

        
        $__internal_a877dca6d1b6c568ff40ce7381ae3c54c1c8f2d197b0c023216714d02cf66817->leave($__internal_a877dca6d1b6c568ff40ce7381ae3c54c1c8f2d197b0c023216714d02cf66817_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bdd766fb6f95f1fecf68c2263738e53c10893ec0005ec3b17f49c188e7ef1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdd766fb6f95f1fecf68c2263738e53c10893ec0005ec3b17f49c188e7ef1ea->enter($__internal_4bdd766fb6f95f1fecf68c2263738e53c10893ec0005ec3b17f49c188e7ef1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_159fb9e0bd6391a0f293f94568a377e8ea5b7ab9a1f0b73e02367fa7898f6a8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159fb9e0bd6391a0f293f94568a377e8ea5b7ab9a1f0b73e02367fa7898f6a8c->enter($__internal_159fb9e0bd6391a0f293f94568a377e8ea5b7ab9a1f0b73e02367fa7898f6a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_159fb9e0bd6391a0f293f94568a377e8ea5b7ab9a1f0b73e02367fa7898f6a8c->leave($__internal_159fb9e0bd6391a0f293f94568a377e8ea5b7ab9a1f0b73e02367fa7898f6a8c_prof);

        
        $__internal_4bdd766fb6f95f1fecf68c2263738e53c10893ec0005ec3b17f49c188e7ef1ea->leave($__internal_4bdd766fb6f95f1fecf68c2263738e53c10893ec0005ec3b17f49c188e7ef1ea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bbb6aeda2a0f26223dfc2242e1262046faaa060ee9bd3fbec7fcde8cd135285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbb6aeda2a0f26223dfc2242e1262046faaa060ee9bd3fbec7fcde8cd135285->enter($__internal_3bbb6aeda2a0f26223dfc2242e1262046faaa060ee9bd3fbec7fcde8cd135285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f9c5a60e8c6513d8c3f98753f7466c1a1d87973cb0028bddb762cd05314e830f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c5a60e8c6513d8c3f98753f7466c1a1d87973cb0028bddb762cd05314e830f->enter($__internal_f9c5a60e8c6513d8c3f98753f7466c1a1d87973cb0028bddb762cd05314e830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9c5a60e8c6513d8c3f98753f7466c1a1d87973cb0028bddb762cd05314e830f->leave($__internal_f9c5a60e8c6513d8c3f98753f7466c1a1d87973cb0028bddb762cd05314e830f_prof);

        
        $__internal_3bbb6aeda2a0f26223dfc2242e1262046faaa060ee9bd3fbec7fcde8cd135285->leave($__internal_3bbb6aeda2a0f26223dfc2242e1262046faaa060ee9bd3fbec7fcde8cd135285_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Library/WebServer/Documents/sf/app/Resources/views/base.html.twig");
    }
}
