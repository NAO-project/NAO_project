<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2715d159b4d699b4c0da4039725ce100c8bf655b5900b1c2ca967606d91dee58 extends Twig_Template
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
        $__internal_38fd212933d4cecb656b4edbc07bc0d87c713c21d78f81862f0074eb158fc97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fd212933d4cecb656b4edbc07bc0d87c713c21d78f81862f0074eb158fc97b->enter($__internal_38fd212933d4cecb656b4edbc07bc0d87c713c21d78f81862f0074eb158fc97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9ebfc1a0c990586ef788a457a3fe2c7d1967900b3b22704aad66f57e233459da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebfc1a0c990586ef788a457a3fe2c7d1967900b3b22704aad66f57e233459da->enter($__internal_9ebfc1a0c990586ef788a457a3fe2c7d1967900b3b22704aad66f57e233459da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_38fd212933d4cecb656b4edbc07bc0d87c713c21d78f81862f0074eb158fc97b->leave($__internal_38fd212933d4cecb656b4edbc07bc0d87c713c21d78f81862f0074eb158fc97b_prof);

        
        $__internal_9ebfc1a0c990586ef788a457a3fe2c7d1967900b3b22704aad66f57e233459da->leave($__internal_9ebfc1a0c990586ef788a457a3fe2c7d1967900b3b22704aad66f57e233459da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}