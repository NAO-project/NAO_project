<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e710190d82739942928179f96cb938533150158cf3c564580d1af243efc35dd6 extends Twig_Template
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
        $__internal_2d33e7ba1cde53bb26bc97f3877a769e510baa565fe5a9106eb7f9570ccd4140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d33e7ba1cde53bb26bc97f3877a769e510baa565fe5a9106eb7f9570ccd4140->enter($__internal_2d33e7ba1cde53bb26bc97f3877a769e510baa565fe5a9106eb7f9570ccd4140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_02e6c16e644879de45de9f3d5c4314997c662d0e016718586f16717c0c5f0c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e6c16e644879de45de9f3d5c4314997c662d0e016718586f16717c0c5f0c88->enter($__internal_02e6c16e644879de45de9f3d5c4314997c662d0e016718586f16717c0c5f0c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2d33e7ba1cde53bb26bc97f3877a769e510baa565fe5a9106eb7f9570ccd4140->leave($__internal_2d33e7ba1cde53bb26bc97f3877a769e510baa565fe5a9106eb7f9570ccd4140_prof);

        
        $__internal_02e6c16e644879de45de9f3d5c4314997c662d0e016718586f16717c0c5f0c88->leave($__internal_02e6c16e644879de45de9f3d5c4314997c662d0e016718586f16717c0c5f0c88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
