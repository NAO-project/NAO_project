<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_003e0f0140e53be7130c206136732ad1856f9e32c0bc3dc81ef76081c77eca30 extends Twig_Template
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
        $__internal_9308fbd16f17554ba6e54d6119d3985106eec685be3df8a6a1d27d2f661b05fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9308fbd16f17554ba6e54d6119d3985106eec685be3df8a6a1d27d2f661b05fb->enter($__internal_9308fbd16f17554ba6e54d6119d3985106eec685be3df8a6a1d27d2f661b05fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_dce0b8693982bac2b437b52f54aade3a1b583d7699d12f274a458904aca83c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce0b8693982bac2b437b52f54aade3a1b583d7699d12f274a458904aca83c18->enter($__internal_dce0b8693982bac2b437b52f54aade3a1b583d7699d12f274a458904aca83c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9308fbd16f17554ba6e54d6119d3985106eec685be3df8a6a1d27d2f661b05fb->leave($__internal_9308fbd16f17554ba6e54d6119d3985106eec685be3df8a6a1d27d2f661b05fb_prof);

        
        $__internal_dce0b8693982bac2b437b52f54aade3a1b583d7699d12f274a458904aca83c18->leave($__internal_dce0b8693982bac2b437b52f54aade3a1b583d7699d12f274a458904aca83c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
