<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01b22e5bda3827c587f3b59c37e1697ce3943be92629ebdef58126db8320ee31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b22e5bda3827c587f3b59c37e1697ce3943be92629ebdef58126db8320ee31->enter($__internal_01b22e5bda3827c587f3b59c37e1697ce3943be92629ebdef58126db8320ee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_22e2c24160633167ff46fec5986b5f913f1ed4b7b5c3ca0dfc38074fce2bc26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e2c24160633167ff46fec5986b5f913f1ed4b7b5c3ca0dfc38074fce2bc26c->enter($__internal_22e2c24160633167ff46fec5986b5f913f1ed4b7b5c3ca0dfc38074fce2bc26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b22e5bda3827c587f3b59c37e1697ce3943be92629ebdef58126db8320ee31->leave($__internal_01b22e5bda3827c587f3b59c37e1697ce3943be92629ebdef58126db8320ee31_prof);

        
        $__internal_22e2c24160633167ff46fec5986b5f913f1ed4b7b5c3ca0dfc38074fce2bc26c->leave($__internal_22e2c24160633167ff46fec5986b5f913f1ed4b7b5c3ca0dfc38074fce2bc26c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17ca1c54123882dea5455e872a405eea2039e4323edcef32e2426e3354b5407d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ca1c54123882dea5455e872a405eea2039e4323edcef32e2426e3354b5407d->enter($__internal_17ca1c54123882dea5455e872a405eea2039e4323edcef32e2426e3354b5407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_17cde7fba67fc698bca1e4bb61fb090e9627a770f1e35d905fd9bd4a3a321588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cde7fba67fc698bca1e4bb61fb090e9627a770f1e35d905fd9bd4a3a321588->enter($__internal_17cde7fba67fc698bca1e4bb61fb090e9627a770f1e35d905fd9bd4a3a321588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_17cde7fba67fc698bca1e4bb61fb090e9627a770f1e35d905fd9bd4a3a321588->leave($__internal_17cde7fba67fc698bca1e4bb61fb090e9627a770f1e35d905fd9bd4a3a321588_prof);

        
        $__internal_17ca1c54123882dea5455e872a405eea2039e4323edcef32e2426e3354b5407d->leave($__internal_17ca1c54123882dea5455e872a405eea2039e4323edcef32e2426e3354b5407d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1a90f6adaecd66e8ff55f01276173197d8f4981f1312bfbd28a7eb31c54670d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a90f6adaecd66e8ff55f01276173197d8f4981f1312bfbd28a7eb31c54670d->enter($__internal_c1a90f6adaecd66e8ff55f01276173197d8f4981f1312bfbd28a7eb31c54670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f5fc3a3b7094cab2809fd13798e21763e136a04f6647635b286132db8ba404b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5fc3a3b7094cab2809fd13798e21763e136a04f6647635b286132db8ba404b->enter($__internal_4f5fc3a3b7094cab2809fd13798e21763e136a04f6647635b286132db8ba404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4f5fc3a3b7094cab2809fd13798e21763e136a04f6647635b286132db8ba404b->leave($__internal_4f5fc3a3b7094cab2809fd13798e21763e136a04f6647635b286132db8ba404b_prof);

        
        $__internal_c1a90f6adaecd66e8ff55f01276173197d8f4981f1312bfbd28a7eb31c54670d->leave($__internal_c1a90f6adaecd66e8ff55f01276173197d8f4981f1312bfbd28a7eb31c54670d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_609d12df987e12253c0e5f7f09c29cab8fe5c1e044f9854b9dd51ff7e84651e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609d12df987e12253c0e5f7f09c29cab8fe5c1e044f9854b9dd51ff7e84651e1->enter($__internal_609d12df987e12253c0e5f7f09c29cab8fe5c1e044f9854b9dd51ff7e84651e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32bbba7c539ff037b9d22b1fee8bb1f291570e93c3c7bc3610770f7014a669db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bbba7c539ff037b9d22b1fee8bb1f291570e93c3c7bc3610770f7014a669db->enter($__internal_32bbba7c539ff037b9d22b1fee8bb1f291570e93c3c7bc3610770f7014a669db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_32bbba7c539ff037b9d22b1fee8bb1f291570e93c3c7bc3610770f7014a669db->leave($__internal_32bbba7c539ff037b9d22b1fee8bb1f291570e93c3c7bc3610770f7014a669db_prof);

        
        $__internal_609d12df987e12253c0e5f7f09c29cab8fe5c1e044f9854b9dd51ff7e84651e1->leave($__internal_609d12df987e12253c0e5f7f09c29cab8fe5c1e044f9854b9dd51ff7e84651e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/sf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
