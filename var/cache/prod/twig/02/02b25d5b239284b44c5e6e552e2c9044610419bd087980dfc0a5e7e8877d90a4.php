<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_ffe7f365f9ecb0229ffb10e16ce341549b16cd297d0b4ed9f6526912a7b67669 extends Twig_Template
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
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "canAccessObject", [0 => "history", 1 => (isset($context["object"]) ? $context["object"] : null)], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "history"], "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "history", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", [], "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 16,  27 => 14,  24 => 13,  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Button:history_button.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Button/history_button.html.twig");
    }
}
