<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4b04693d21d1d7c94ccef85af49161a537f117327e5fcbb56ad1585693af0178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_514cf9ad3495653c59c7997baf4aed089b2dcf937801a40a7a021118200ccaf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514cf9ad3495653c59c7997baf4aed089b2dcf937801a40a7a021118200ccaf3->enter($__internal_514cf9ad3495653c59c7997baf4aed089b2dcf937801a40a7a021118200ccaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9f24195464b5af4146aa506e209cbf73d3fd58cb9e35d2b31e89f59316916c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f24195464b5af4146aa506e209cbf73d3fd58cb9e35d2b31e89f59316916c19->enter($__internal_9f24195464b5af4146aa506e209cbf73d3fd58cb9e35d2b31e89f59316916c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_514cf9ad3495653c59c7997baf4aed089b2dcf937801a40a7a021118200ccaf3->leave($__internal_514cf9ad3495653c59c7997baf4aed089b2dcf937801a40a7a021118200ccaf3_prof);

        
        $__internal_9f24195464b5af4146aa506e209cbf73d3fd58cb9e35d2b31e89f59316916c19->leave($__internal_9f24195464b5af4146aa506e209cbf73d3fd58cb9e35d2b31e89f59316916c19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
