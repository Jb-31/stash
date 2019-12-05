<?php

/* SonataAdminBundle:CRUD/Association:edit_one_to_many_inline_table.html.twig */
class __TwigTemplate_799e85844597b8d0678ca6b93cb57f7e892ec5c4c101d33a17ae4ae7ecae2d9d extends Twig_Template
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
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])), "children", []));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 16
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 18
                echo "                    <th
                        ";
                // line 19
                if ((($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "required", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "required", [], "array"), false)) : (false))) {
                    // line 20
                    echo "                            class=\"required\"
                        ";
                }
                // line 22
                echo "                        ";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array"), false)) : (false))) {
                    // line 23
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 25
                echo "                    >
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "label", []), [], (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "sonata_admin", [], "array", false, true), "admin", [], "any", false, true), "translationDomain", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "sonata_admin", [], "array", false, true), "admin", [], "any", false, true), "translationDomain", []), $this->getAttribute($this->getAttribute(                // line 27
$context["nested_field"], "vars", []), "translation_domain", []))) : ($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "translation_domain", [])))), "html", null, true);
                // line 28
                echo "
                    </th>
                ";
            }
            // line 31
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 36
            echo "            <tr>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", []));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 38
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 41
                if ((($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", []), false)) : (false))) {
                    echo " error sonata-ba-field-error";
                }
                // line 42
                echo "                        \"
                        ";
                // line 43
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "attr", [], "array", false, true), "hidden", [], "array"), false)) : (false))) {
                    // line 44
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 46
                echo "                    >
                        ";
                // line 47
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "formfielddescriptions", [], "any", false, true), $context["field_name"], [], "array", true, true)) {
                    // line 48
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 50
                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", []);
                    // line 51
                    echo "                        ";
                } else {
                    // line 52
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 53
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', ["label" => false]);
                        echo "
                            ";
                    } else {
                        // line 55
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 57
                    echo "                        ";
                }
                // line 58
                echo "                        ";
                if ((($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", []), false)) : (false))) {
                    // line 59
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 60
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 63
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 67,  162 => 65,  155 => 63,  149 => 60,  146 => 59,  143 => 58,  140 => 57,  134 => 55,  128 => 53,  125 => 52,  122 => 51,  120 => 50,  114 => 48,  112 => 47,  109 => 46,  105 => 44,  103 => 43,  100 => 42,  96 => 41,  89 => 39,  86 => 38,  82 => 37,  79 => 36,  75 => 35,  70 => 32,  64 => 31,  59 => 28,  57 => 27,  56 => 26,  53 => 25,  49 => 23,  46 => 22,  42 => 20,  40 => 19,  37 => 18,  31 => 16,  28 => 15,  24 => 14,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:edit_one_to_many_inline_table.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_many_inline_table.html.twig");
    }
}
