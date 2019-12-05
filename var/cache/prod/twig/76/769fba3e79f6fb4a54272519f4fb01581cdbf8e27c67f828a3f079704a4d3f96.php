<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig */
class __TwigTemplate_2c7d436dfbc8b079c66572c3ca926828b01c24207c2a448b8f883fca33f6dec1 extends Twig_Template
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
        // line 13
        echo "
<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])), "children", []));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 18
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 19
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 21
                echo "                    <th
                        ";
                // line 22
                if ($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "required", [], "array")) {
                    // line 23
                    echo "                            class=\"required\"
                        ";
                }
                // line 25
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "attr", [], "array"), "hidden", [], "array"))) {
                    // line 26
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 28
                echo "                    >
                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "label", []), [], (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "sonata_admin", [], "array", false, true), "admin", [], "any", false, true), "translationDomain", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "sonata_admin", [], "array", false, true), "admin", [], "any", false, true), "translationDomain", []), $this->getAttribute($this->getAttribute(                // line 30
$context["nested_field"], "vars", []), "translation_domain", []))) : ($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "translation_domain", [])))), "html", null, true);
                // line 31
                echo "
                    </th>
                ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 39
            echo "            <tr>
                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", []));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 41
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 44
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "errors", [])) > 0)) {
                    echo " error sonata-ba-field-error";
                }
                // line 45
                echo "                        \"
                        ";
                // line 46
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "attr", [], "array"), "hidden", [], "array"))) {
                    // line 47
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 49
                echo "                    >
                        ";
                // line 50
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "formfielddescriptions", [], "any", false, true), $context["field_name"], [], "array", true, true)) {
                    // line 51
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 53
                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", []);
                    // line 54
                    echo "                        ";
                } else {
                    // line 55
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 56
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', ["label" => false]);
                        echo "
                            ";
                    } else {
                        // line 58
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 60
                    echo "                        ";
                }
                // line 61
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "errors", [])) > 0)) {
                    // line 62
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 63
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 66
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  166 => 68,  159 => 66,  153 => 63,  150 => 62,  147 => 61,  144 => 60,  138 => 58,  132 => 56,  129 => 55,  126 => 54,  124 => 53,  118 => 51,  116 => 50,  113 => 49,  109 => 47,  107 => 46,  104 => 45,  100 => 44,  93 => 42,  90 => 41,  86 => 40,  83 => 39,  79 => 38,  74 => 35,  68 => 34,  63 => 31,  61 => 30,  60 => 29,  57 => 28,  53 => 26,  50 => 25,  46 => 23,  44 => 22,  41 => 21,  35 => 19,  32 => 18,  28 => 17,  22 => 13,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_table.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many_inline_table.html.twig");
    }
}
