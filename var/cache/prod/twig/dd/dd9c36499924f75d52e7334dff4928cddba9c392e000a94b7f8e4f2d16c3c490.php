<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_ff7e7a44b4937bb5aa605a9a22811921619ab78425b2fae11341c365af5e5c79 extends Twig_Template
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
";
        // line 14
        if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "hasassociationadmin", [])) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [])), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "
    <div id=\"field_container_";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" >
            ";
            // line 22
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
                // line 23
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", []) == "table")) {
                    // line 24
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])) > 0)) {
                        // line 25
                        echo "                        ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 25)->display($context);
                        // line 26
                        echo "                    ";
                    }
                    // line 27
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", [])) > 0)) {
                    // line 28
                    echo "                    ";
                    $context["associationAdmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []);
                    // line 29
                    echo "                    ";
                    $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 29)->display($context);
                    // line 30
                    echo "
                ";
                }
                // line 32
                echo "            ";
            } else {
                // line 33
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                echo "
            ";
            }
            // line 35
            echo "
        </span>

        ";
            // line 38
            $context["display_create_button"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "hasroute", [0 => "create"], "method") && $this->getAttribute($this->getAttribute($this->getAttribute(            // line 39
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "isGranted", [0 => "CREATE"], "method")) &&             // line 40
(isset($context["btn_add"]) ? $context["btn_add"] : null)) && ( !$this->getAttribute($this->getAttribute($this->getAttribute(            // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "limit", [], "any", true, true) || (twig_length_filter($this->env, $this->getAttribute(            // line 43
(isset($context["form"]) ? $context["form"] : null), "children", [])) < $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "limit", []))));
            // line 45
            echo "
        ";
            // line 46
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "inline")) {
                // line 47
                echo "
            ";
                // line 48
                if ((isset($context["display_create_button"]) ? $context["display_create_button"] : null)) {
                    // line 49
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute(                    // line 53
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    // line 54
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 64
                echo "
            ";
                // line 66
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", [], "any", false, true), "options", [], "any", false, true), "sortable", [], "any", true, true)) {
                    // line 67
                    echo "                ";
                    if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline", []) == "table")) {
                        // line 68
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 68)->display($context);
                        // line 69
                        echo "                ";
                    } else {
                        // line 70
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 70)->display($context);
                        // line 71
                        echo "                ";
                    }
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "
            ";
                // line 75
                echo "            ";
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 75)->display($context);
                // line 76
                echo "
        ";
            } else {
                // line 78
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" >
                ";
                // line 79
                if ((isset($context["display_create_button"]) ? $context["display_create_button"] : null)) {
                    // line 80
                    echo "                    <a
                        href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []), "generateUrl", [0 => "create", 1 => $this->getAttribute($this->getAttribute(                    // line 83
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")], "method"), "html", null, true);
                    // line 84
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 85
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["btn_add"]) ? $context["btn_add"] : null), [], (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 93
                echo "            </span>

            ";
                // line 95
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 95)->display($context);
                // line 96
                echo "
            ";
                // line 97
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 97)->display($context);
                // line 98
                echo "        ";
            }
            // line 99
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 99,  218 => 98,  216 => 97,  213 => 96,  211 => 95,  207 => 93,  201 => 90,  195 => 87,  190 => 85,  187 => 84,  185 => 83,  184 => 81,  181 => 80,  179 => 79,  174 => 78,  170 => 76,  167 => 75,  164 => 73,  161 => 72,  158 => 71,  155 => 70,  152 => 69,  149 => 68,  146 => 67,  143 => 66,  140 => 64,  133 => 60,  127 => 57,  122 => 55,  119 => 54,  117 => 53,  116 => 51,  110 => 49,  108 => 48,  105 => 47,  103 => 46,  100 => 45,  98 => 43,  97 => 42,  96 => 40,  95 => 39,  94 => 38,  89 => 35,  83 => 33,  80 => 32,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  64 => 26,  61 => 25,  58 => 24,  55 => 23,  53 => 22,  49 => 21,  45 => 20,  42 => 19,  32 => 16,  27 => 15,  25 => 14,  22 => 13,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many.html.twig");
    }
}
