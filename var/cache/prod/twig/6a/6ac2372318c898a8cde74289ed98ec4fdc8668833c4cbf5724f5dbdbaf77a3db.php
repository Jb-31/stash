<?php

/* SonataAdminBundle:CRUD:display_boolean.html.twig */
class __TwigTemplate_65d0f6c63f0f569d8a3328b8567e1dddddca19b996292a182931c8155b0896e2 extends Twig_Template
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
        // line 12
        ob_start();
        // line 13
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 14
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_yes", [], "SonataAdminBundle");
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_no", [], "SonataAdminBundle");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ((((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "inverse", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "inverse", []), false)) : (false))) ? ( !(isset($context["value"]) ? $context["value"] : null)) : ((isset($context["value"]) ? $context["value"] : null)))) {
            // line 20
            echo "        ";
            $context["class"] = "label-success";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "label-danger";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <span class=\"label ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:display_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  53 => 24,  50 => 23,  47 => 22,  44 => 21,  41 => 20,  39 => 19,  36 => 18,  33 => 17,  30 => 16,  27 => 15,  24 => 14,  21 => 13,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:display_boolean.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_boolean.html.twig");
    }
}
