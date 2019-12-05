<?php

/* SonataAdminBundle:CRUD:_email_link.html.twig */
class __TwigTemplate_13a7f012f2550895fc370046631dc017c00a7cbf572eee6e67251e780b79943b extends Twig_Template
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
        // line 2
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 3
            echo "&nbsp;";
        } elseif (($this->getAttribute($this->getAttribute(        // line 4
(isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "as_string", [], "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "as_string", []))) {
            // line 5
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        } else {
            // line 7
            $context["parameters"] = [];
            // line 8
            echo "    ";
            $context["subject"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "subject", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "subject", []), "")) : (""));
            // line 9
            echo "    ";
            $context["body"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "body", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "body", []), "")) : (""));
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_test_empty((isset($context["subject"]) ? $context["subject"] : null))) {
                // line 12
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), ["subject" => (isset($context["subject"]) ? $context["subject"] : null)]);
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) ? $context["body"] : null))) {
                // line 15
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), ["body" => (isset($context["body"]) ? $context["body"] : null)]);
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <a href=\"mailto:";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            if ((twig_length_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : null)) > 0)) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["parameters"]) ? $context["parameters"] : null)), "html", null, true);
            }
            echo "\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            // line 20
            echo "</a>";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:_email_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  66 => 19,  59 => 18,  56 => 17,  53 => 16,  50 => 15,  47 => 14,  44 => 13,  41 => 12,  39 => 11,  36 => 10,  33 => 9,  30 => 8,  28 => 7,  25 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:_email_link.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/_email_link.html.twig");
    }
}
