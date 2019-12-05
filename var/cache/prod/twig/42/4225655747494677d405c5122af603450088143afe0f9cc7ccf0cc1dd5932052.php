<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_78635497a439465ee541f83059cac760d4679869823143ee2a78f09f0323ec7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "canAccessObject", [0 => "show", 1 => (isset($context["object"]) ? $context["object"] : null)], "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", [])) > 0)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "show"], "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "show", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", [], "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  24 => 13,  21 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Button:show_button.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Button/show_button.html.twig");
    }
}
