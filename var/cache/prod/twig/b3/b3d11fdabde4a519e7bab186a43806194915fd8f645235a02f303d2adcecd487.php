<?php

/* SonataAdminBundle:CRUD/Association:edit_many_to_many.html.twig */
class __TwigTemplate_f926fca5d828e049241f04a4224a3282ac77d9b687cbe140b94ceb31695a3431 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasassociationadmin", [])) {
            // line 12
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 14
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
                // line 15
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", []) == "table")) {
                    // line 16
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])) > 0)) {
                        // line 17
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []), 0, [], "array"), "children", []));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 21
                            echo "                                        ";
                            if (($context["field_name"] == "_delete")) {
                                // line 22
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", [], "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 24
                                echo "                                            <th
                                                ";
                                // line 25
                                if ((($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "required", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "required", [], "array"), false)) : (false))) {
                                    // line 26
                                    echo "                                                    class=\"required\"
                                                ";
                                }
                                // line 28
                                echo "                                            >
                                                ";
                                // line 29
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "sonata_admin", [], "array"), "admin", []), "trans", [0 => $this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "label", [])], "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 32
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 33
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 37
                            echo "                                    <tr>
                                        ";
                            // line 38
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", []));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 39
                                echo "                                            <td
                                                class=\"sonata-ba-td-";
                                // line 40
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                                echo " control-group
                                                ";
                                // line 41
                                if ((($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", []), false)) : (false))) {
                                    echo " error sonata-ba-field-error";
                                }
                                echo "\"
                                            >
                                                ";
                                // line 43
                                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "hasformfielddescriptions", [0 => $context["field_name"]], "method", true, true)) {
                                    // line 44
                                    echo "                                                    ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "

                                                    ";
                                    // line 46
                                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", []);
                                    // line 47
                                    echo "                                                ";
                                } else {
                                    // line 48
                                    echo "                                                    ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "
                                                ";
                                }
                                // line 50
                                echo "                                                ";
                                if ((($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["nested_field"], "vars", [], "any", false, true), "errors", []), false)) : (false))) {
                                    // line 51
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 52
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 55
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 57
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 62
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])) > 0)) {
                    // line 63
                    echo "                    <div>
                        ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 65
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", []));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 66
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "associationadmin", [], "any", false, true), "hasformfielddescriptions", [0 => $context["field_name"]], "method", true, true)) {
                                // line 67
                                echo "                                    ";
                                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["inline" => "natural", "edit" => "inline"]);
                                // line 70
                                echo "
                                    ";
                                // line 71
                                $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", []);
                                // line 72
                                echo "                                ";
                            } else {
                                // line 73
                                echo "                                    ";
                                if (($this->getAttribute($this->getAttribute($context["nested_field"], "vars", []), "name", []) == "_delete")) {
                                    // line 74
                                    echo "                                        ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'row', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", [], "SonataAdminBundle")]);
                                    echo "
                                    ";
                                } else {
                                    // line 76
                                    echo "                                        ";
                                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'row');
                                    echo "
                                    ";
                                }
                                // line 78
                                echo "                                ";
                            }
                            // line 79
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                    </div>
                ";
                }
                // line 83
                echo "            ";
            } else {
                // line 84
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 86
            echo "
        </span>

        ";
            // line 89
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
                // line 90
                echo "
            ";
                // line 91
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute(                // line 92
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasAccess", [0 => "create"], "method")) &&                 // line 93
(isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 94
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 97
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 106
                echo "
            ";
                // line 108
                echo "            ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_script.html.twig", "SonataAdminBundle:CRUD/Association:edit_many_to_many.html.twig", 108)->display($context);
                // line 109
                echo "
        ";
            } else {
                // line 111
                echo "            <div id=\"field_container_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 112
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                    ";
                // line 113
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 117
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasRoute", [0 => "create"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute(                // line 118
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasAccess", [0 => "create"], "method")) &&                 // line 119
(isset($context["btn_add"]) ? $context["btn_add"] : null))) {
                    // line 120
                    echo "                        <a
                            href=\"";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 122
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-success btn-sm sonata-ba-action\"
                            title=\"";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                            >
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
                    // line 127
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 130
                echo "                </span>

                ";
                // line 132
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "SonataAdminBundle:CRUD/Association:edit_many_to_many.html.twig", 132)->display($context);
                // line 133
                echo "            </div>

            ";
                // line 135
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "SonataAdminBundle:CRUD/Association:edit_many_to_many.html.twig", 135)->display($context);
                // line 136
                echo "        ";
            }
            // line 137
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 137,  345 => 136,  343 => 135,  339 => 133,  337 => 132,  333 => 130,  327 => 127,  321 => 124,  316 => 122,  312 => 121,  309 => 120,  307 => 119,  306 => 118,  305 => 117,  301 => 116,  295 => 113,  291 => 112,  286 => 111,  282 => 109,  279 => 108,  276 => 106,  269 => 102,  263 => 99,  258 => 97,  254 => 96,  248 => 94,  246 => 93,  245 => 92,  244 => 91,  241 => 90,  239 => 89,  234 => 86,  228 => 84,  225 => 83,  221 => 81,  215 => 80,  209 => 79,  206 => 78,  200 => 76,  194 => 74,  191 => 73,  188 => 72,  186 => 71,  183 => 70,  180 => 67,  177 => 66,  172 => 65,  168 => 64,  165 => 63,  162 => 62,  157 => 59,  150 => 57,  143 => 55,  137 => 52,  134 => 51,  131 => 50,  125 => 48,  122 => 47,  120 => 46,  114 => 44,  112 => 43,  105 => 41,  99 => 40,  96 => 39,  92 => 38,  89 => 37,  85 => 36,  80 => 33,  74 => 32,  68 => 29,  65 => 28,  61 => 26,  59 => 25,  56 => 24,  50 => 22,  47 => 21,  43 => 20,  38 => 17,  35 => 16,  32 => 15,  30 => 14,  26 => 13,  21 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:edit_many_to_many.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_to_many.html.twig");
    }
}
