<?php

/* header.html.twig */
class __TwigTemplate_da598d170545ce8e026746b11ed53bcf3621c8e76ae7f3f07a3c59bae02652f0 extends Twig_Template
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
        $__internal_fb8c87493b2128179d99e2a242585bc94a52024f234e911913e3f40a9d16b00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8c87493b2128179d99e2a242585bc94a52024f234e911913e3f40a9d16b00d->enter($__internal_fb8c87493b2128179d99e2a242585bc94a52024f234e911913e3f40a9d16b00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_21cb01b874a504cd9f3adb78cdae209b7c5159b5e75a78ad09bd9383d39f2fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cb01b874a504cd9f3adb78cdae209b7c5159b5e75a78ad09bd9383d39f2fb0->enter($__internal_21cb01b874a504cd9f3adb78cdae209b7c5159b5e75a78ad09bd9383d39f2fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>
\t<div class=\"container-fluid\" id=\"header\">
\t\t<!--
\t\t<div class=\"row\">
\t\t\t<div class=\"col-6 col-md-2\" id=\"logo\">
\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/logohorizontale.svg"), "html", null, true);
        echo "\" alt=\"Logo l'oiseau rare\" width=\"130px\" height=\"81px\"></a>
\t\t\t</div>
\t\t\t<div class=\"col-6 col-md-10\" id=\"menu\">
\t\t\t\t<ul class=\"nav justify-content-end\">
\t\t\t\t\t<div id=\"menu-navigation\">
\t\t\t\t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map_rose.svg"), "html", null, true);
        echo "\" alt=\"carte\" width=\"28px\" height=\"28px\">Carte</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/blog_rose.svg"), "html", null, true);
        echo "\" alt=\"blog\" width=\"28px\" height=\"28px\">Blog</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
        echo "\" alt=\"login\" width=\"30px\" height=\"30px\">Se connecter</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe_rose.svg"), "html", null, true);
        echo "\" alt=\"recherche\" width=\"25px\" height=\"25px\">Recherche</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("don");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/donation_rose.svg"), "html", null, true);
        echo "\" alt=\"don\" width=\"28px\" height=\"28px\">Faire un don</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" alt=\"association\" width=\"28px\" height=\"28px\">Notre mission</a></li>
\t\t\t\t\t</div>
\t    \t\t\t
\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/menu_hamb_black.svg"), "html", null, true);
        echo "\" alt=\"menu\" width=\"69px\" height=\"48px\" id=\"menu-hamb\">
\t\t\t\t</ul>\t
\t\t\t</div>
\t\t</div>
\t\t-->

\t\t<div id=\"hamburger\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-2 col-md-2\" id=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/logohorizontale.svg"), "html", null, true);
        echo "\" alt=\"Logo l'oiseau rare\" width=\"130px\" height=\"81px\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col col-md-10\" id=\"menu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map_rose.svg"), "html", null, true);
        echo "\" alt=\"carte\" width=\"28px\" height=\"28px\">Carte</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/blog_rose.svg"), "html", null, true);
        echo "\" alt=\"blog\" width=\"28px\" height=\"28px\">Blog</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
        echo "\" alt=\"login\" width=\"30px\" height=\"30px\">Se connecter</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe_rose.svg"), "html", null, true);
        echo "\" alt=\"recherche\" width=\"25px\" height=\"25px\">Recherche</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("don");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/donation_rose.svg"), "html", null, true);
        echo "\" alt=\"don\" width=\"28px\" height=\"28px\">Faire un don</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" alt=\"association\" width=\"28px\" height=\"28px\">Notre mission</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/menu_hamb_black.svg"), "html", null, true);
        echo "\" alt=\"menu\" width=\"69px\" height=\"48px\" id=\"menu-hamb\">

\t\t\t<div id=\"hamburger-sidebar-menu\">
\t\t\t\t<h4>Menu</h4>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link active\" href=\"#\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map_rose.svg"), "html", null, true);
        echo "\" alt=\"carte\" width=\"14px\" height=\"14px\">Carte</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/blog_rose.svg"), "html", null, true);
        echo "\" alt=\"blog\" width=\"14px\" height=\"14px\">Blog</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
        echo "\" alt=\"login\" width=\"14px\" height=\"14px\">Se connecter</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe_rose.svg"), "html", null, true);
        echo "\" alt=\"recherche\" width=\"14px\" height=\"14px\">Recherche</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"#\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/donation_rose.svg"), "html", null, true);
        echo "\" alt=\"don\" width=\"14px\" height=\"14px\">Faire un don</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" alt=\"association\" width=\"14px\" height=\"14px\">Notre mission</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div id=\"black-filter\"></div>


\t\t</div>

\t\t
\t</div>
</header>";
        
        $__internal_fb8c87493b2128179d99e2a242585bc94a52024f234e911913e3f40a9d16b00d->leave($__internal_fb8c87493b2128179d99e2a242585bc94a52024f234e911913e3f40a9d16b00d_prof);

        
        $__internal_21cb01b874a504cd9f3adb78cdae209b7c5159b5e75a78ad09bd9383d39f2fb0->leave($__internal_21cb01b874a504cd9f3adb78cdae209b7c5159b5e75a78ad09bd9383d39f2fb0_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 64,  181 => 61,  173 => 58,  165 => 55,  157 => 52,  151 => 49,  142 => 43,  132 => 38,  126 => 37,  120 => 36,  114 => 35,  108 => 34,  102 => 33,  92 => 28,  80 => 19,  72 => 16,  66 => 15,  60 => 14,  54 => 13,  48 => 12,  42 => 11,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
\t<div class=\"container-fluid\" id=\"header\">
\t\t<!--
\t\t<div class=\"row\">
\t\t\t<div class=\"col-6 col-md-2\" id=\"logo\">
\t\t\t\t<a href=\"{{ path('home') }}\"><img src=\"{{ asset('build/img/logohorizontale.svg') }}\" alt=\"Logo l'oiseau rare\" width=\"130px\" height=\"81px\"></a>
\t\t\t</div>
\t\t\t<div class=\"col-6 col-md-10\" id=\"menu\">
\t\t\t\t<ul class=\"nav justify-content-end\">
\t\t\t\t\t<div id=\"menu-navigation\">
\t\t\t\t\t\t<li class=\"nav-item link\"><a href=\"{{ path('map') }}\"><img src=\"{{ asset('build/img/map_rose.svg') }}\" alt=\"carte\" width=\"28px\" height=\"28px\">Carte</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('blog_list') }}\"><img src=\"{{ asset('build/img/blog_rose.svg') }}\" alt=\"blog\" width=\"28px\" height=\"28px\">Blog</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('login') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"30px\" height=\"30px\">Se connecter</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('research') }}\"><img src=\"{{ asset('build/img/loupe_rose.svg') }}\" alt=\"recherche\" width=\"25px\" height=\"25px\">Recherche</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('don') }}\"><img src=\"{{ asset('build/img/donation_rose.svg') }}\" alt=\"don\" width=\"28px\" height=\"28px\">Faire un don</a></li>
\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('association') }}\"><img src=\"{{ asset('build/img/world_rose.svg') }}\" alt=\"association\" width=\"28px\" height=\"28px\">Notre mission</a></li>
\t\t\t\t\t</div>
\t    \t\t\t
\t\t\t\t\t<img src=\"{{ asset('build/img/menu_hamb_black.svg') }}\" alt=\"menu\" width=\"69px\" height=\"48px\" id=\"menu-hamb\">
\t\t\t\t</ul>\t
\t\t\t</div>
\t\t</div>
\t\t-->

\t\t<div id=\"hamburger\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-2 col-md-2\" id=\"logo\">
\t\t\t\t\t<a href=\"{{ path('home') }}\"><img src=\"{{ asset('build/img/logohorizontale.svg') }}\" alt=\"Logo l'oiseau rare\" width=\"130px\" height=\"81px\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col col-md-10\" id=\"menu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item link\"><a href=\"{{ path('map') }}\"><img src=\"{{ asset('build/img/map_rose.svg') }}\" alt=\"carte\" width=\"28px\" height=\"28px\">Carte</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('blog_list') }}\"><img src=\"{{ asset('build/img/blog_rose.svg') }}\" alt=\"blog\" width=\"28px\" height=\"28px\">Blog</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('login') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"30px\" height=\"30px\">Se connecter</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('research') }}\"><img src=\"{{ asset('build/img/loupe_rose.svg') }}\" alt=\"recherche\" width=\"25px\" height=\"25px\">Recherche</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('don') }}\"><img src=\"{{ asset('build/img/donation_rose.svg') }}\" alt=\"don\" width=\"28px\" height=\"28px\">Faire un don</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('association') }}\"><img src=\"{{ asset('build/img/world_rose.svg') }}\" alt=\"association\" width=\"28px\" height=\"28px\">Notre mission</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<img src=\"{{ asset('build/img/menu_hamb_black.svg') }}\" alt=\"menu\" width=\"69px\" height=\"48px\" id=\"menu-hamb\">

\t\t\t<div id=\"hamburger-sidebar-menu\">
\t\t\t\t<h4>Menu</h4>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link active\" href=\"#\"><img src=\"{{ asset('build/img/map_rose.svg') }}\" alt=\"carte\" width=\"14px\" height=\"14px\">Carte</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('blog_list') }}\"><img src=\"{{ asset('build/img/blog_rose.svg') }}\" alt=\"blog\" width=\"14px\" height=\"14px\">Blog</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('login') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"14px\" height=\"14px\">Se connecter</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('research') }}\"><img src=\"{{ asset('build/img/loupe_rose.svg') }}\" alt=\"recherche\" width=\"14px\" height=\"14px\">Recherche</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"#\"><img src=\"{{ asset('build/img/donation_rose.svg') }}\" alt=\"don\" width=\"14px\" height=\"14px\">Faire un don</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('association') }}\"><img src=\"{{ asset('build/img/world_rose.svg') }}\" alt=\"association\" width=\"14px\" height=\"14px\">Notre mission</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div id=\"black-filter\"></div>


\t\t</div>

\t\t
\t</div>
</header>", "header.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\header.html.twig");
    }
}
