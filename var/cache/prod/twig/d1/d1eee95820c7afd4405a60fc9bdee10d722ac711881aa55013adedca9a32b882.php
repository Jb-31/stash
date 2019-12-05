<?php

/* SonataAdminBundle:CRUD:show_url.html.twig */
class __TwigTemplate_253108b3b993ec5856bad65bd4fc2b6ca44b987bd4efbf78776c4d9140a7f7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_url.html.twig", 12);
        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "url", [], "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "url", []);
                // line 22
                echo "        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "route", [], "any", true, true) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []), [0 => "edit", 1 => "show"]))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "route", [], "any", false, true), "parameters", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "route", [], "any", false, true), "parameters", []), [])) : ([]));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "route", [], "any", false, true), "identifier_parameter_name", [], "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : null), [$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "identifier_parameter_name", []) => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "normalizedidentifier", [0 => (isset($context["object"]) ? $context["object"] : null)], "method")]);
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "route", [], "any", false, true), "absolute", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "route", [], "any", false, true), "absolute", []), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []), (isset($context["parameters"]) ? $context["parameters"] : null));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "route", []), "name", []), (isset($context["parameters"]) ? $context["parameters"] : null));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) ? $context["value"] : null);
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "hide_protocol", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "hide_protocol", []), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = twig_replace_filter((isset($context["value"]) ? $context["value"] : null), ["http://" => "", "https://" => ""]);
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a
            href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["url_address"]) ? $context["url_address"] : null), "html", null, true);
            echo "\"";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "attributes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "attributes", []), [])) : ([])));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo ">";
            // line 51
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "safe", [])) {
                // line 52
                echo (isset($context["value"]) ? $context["value"] : null);
            } else {
                // line 54
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            }
            // line 56
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 56,  135 => 54,  132 => 52,  130 => 51,  128 => 50,  118 => 48,  114 => 47,  111 => 46,  107 => 44,  104 => 43,  101 => 42,  99 => 41,  96 => 40,  93 => 39,  90 => 38,  88 => 37,  85 => 36,  82 => 35,  79 => 34,  76 => 33,  73 => 32,  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  56 => 25,  53 => 24,  51 => 23,  48 => 22,  45 => 21,  43 => 20,  40 => 19,  36 => 17,  33 => 16,  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:show_url.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_url.html.twig");
    }
}
