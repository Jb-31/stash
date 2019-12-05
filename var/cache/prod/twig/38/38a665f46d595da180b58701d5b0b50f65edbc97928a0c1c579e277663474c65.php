<?php

/* @SonataAdmin/CRUD/base_edit_form.html.twig */
class __TwigTemplate_1cb36b6b2e5f96b4e73f0134e74eea1c0cb296f6eceb0c728502fcc23accc3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'sonata_form_action_url' => [$this, 'block_sonata_form_action_url'],
            'sonata_form_attributes' => [$this, 'block_sonata_form_attributes'],
            'sonata_pre_fieldsets' => [$this, 'block_sonata_pre_fieldsets'],
            'sonata_tab_content' => [$this, 'block_sonata_tab_content'],
            'sonata_post_fieldsets' => [$this, 'block_sonata_post_fieldsets'],
            'formactions' => [$this, 'block_formactions'],
            'sonata_form_actions' => [$this, 'block_sonata_form_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.top", ["admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null)]]);
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => (isset($context["url"]) ? $context["url"] : null)], "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", [], "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "form_type"], "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", []), "multipart", [])) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "html5_validate"], "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 70
            echo "
            ";
            // line 71
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 74
            echo "
            ";
            // line 75
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

            ";
            // line 77
            $this->displayBlock('formactions', $context, $blocks);
            // line 129
            echo "        </form>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.bottom", ["admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null)]]);
        echo "

";
    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => (isset($context["url"]) ? $context["url"] : null), 1 => ["id" => (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "subclass"], "method")]], "method"), "html", null, true);
    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = [])
    {
    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = [])
    {
        // line 27
        echo "                <div class=\"row\">
            ";
    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = [])
    {
        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs", [])) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs", [])), 0, [], "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs", [])) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    ";
                $context["_tab_name"] = ((("tab_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [])) . "_") . $this->getAttribute($context["loop"], "index", []));
                // line 39
                echo "                                    <li";
                if ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "has", [0 => "_tab"], "method") && ($this->getAttribute($context["loop"], "index", []) == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "_tab"], "method") == (isset($context["_tab_name"]) ? $context["_tab_name"] : null)))) {
                    echo " class=\"active\"";
                }
                echo ">
                                        <a href=\"#";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) ? $context["_tab_name"] : null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) ? $context["_tab_name"] : null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                            <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "label", []), [], (($this->getAttribute($context["form_tab"], "translation_domain", [])) ? ($this->getAttribute($context["form_tab"], "translation_domain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 48
                echo "                                    ";
                $context["_tab_name"] = ((("tab_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [])) . "_") . $this->getAttribute($context["loop"], "index", []));
                // line 49
                echo "                                    <div class=\"tab-pane fade";
                if ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "has", [0 => "_tab"], "method") && $this->getAttribute($context["loop"], "first", [])) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "_tab"], "method") == (isset($context["_tab_name"]) ? $context["_tab_name"] : null)))) {
                    echo " in active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) ? $context["_tab_name"] : null), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 52
                if (($this->getAttribute($context["form_tab"], "description", []) != false)) {
                    // line 53
                    echo "                                                    <p>
                                                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "description", []), [], (($this->getAttribute($context["form_tab"], "translation_domain", [])) ? ($this->getAttribute($context["form_tab"], "translation_domain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
                    echo "
                                                    </p>
                                                ";
                }
                // line 57
                echo "
                                                ";
                // line 58
                echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : null), (isset($context["form"]) ? $context["form"] : null), $this->getAttribute($context["form_tab"], "groups", [], "array"), (isset($context["has_tab"]) ? $context["has_tab"] : null));
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 66
            echo "                        ";
            echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : null), (isset($context["form"]) ? $context["form"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formtabs", []), "default", [], "array"), "groups", []), (isset($context["has_tab"]) ? $context["has_tab"] : null));
            echo "
                    ";
        }
        // line 68
        echo "                </div>
            ";
    }

    // line 71
    public function block_sonata_post_fieldsets($context, array $blocks = [])
    {
        // line 72
        echo "                </div>
            ";
    }

    // line 77
    public function block_formactions($context, array $blocks = [])
    {
        // line 78
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 79
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 127
        echo "                </div>
            ";
    }

    // line 79
    public function block_sonata_form_actions($context, array $blocks = [])
    {
        // line 80
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "isxmlhttprequest", [])) {
            // line 81
            echo "                        ";
            // line 82
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                            ";
                // line 84
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "delete"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"))) {
                    // line 85
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 90
                echo "                        ";
            } else {
                // line 91
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 93
            echo "                    ";
        } else {
            // line 94
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode", [])) {
                // line 95
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", [], "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 100
            echo "                        ";
            // line 101
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"))))) {
                // line 102
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 104
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "list"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "list"], "method"))) {
                    // line 105
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 107
                echo "
                            ";
                // line 108
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "delete"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"))) {
                    // line 109
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 112
                echo "
                            ";
                // line 113
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", [], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "acl"], "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"))) {
                    // line 114
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", [0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 116
                echo "                        ";
            } else {
                // line 117
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", [0 => "edit"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "edit"], "method"))) {
                    // line 118
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 120
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", [0 => "list"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "list"], "method"))) {
                    // line 121
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 123
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 125
            echo "                    ";
        }
        // line 126
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  461 => 126,  458 => 125,  452 => 123,  446 => 121,  443 => 120,  437 => 118,  434 => 117,  431 => 116,  423 => 114,  421 => 113,  418 => 112,  411 => 110,  406 => 109,  404 => 108,  401 => 107,  395 => 105,  393 => 104,  387 => 102,  384 => 101,  382 => 100,  376 => 97,  372 => 95,  369 => 94,  366 => 93,  360 => 91,  357 => 90,  351 => 87,  347 => 86,  342 => 85,  340 => 84,  335 => 83,  332 => 82,  330 => 81,  327 => 80,  324 => 79,  319 => 127,  317 => 79,  314 => 78,  311 => 77,  306 => 72,  303 => 71,  298 => 68,  292 => 66,  287 => 63,  268 => 58,  265 => 57,  259 => 54,  256 => 53,  254 => 52,  243 => 49,  240 => 48,  223 => 47,  219 => 45,  201 => 41,  195 => 40,  188 => 39,  185 => 38,  168 => 37,  164 => 35,  162 => 34,  158 => 32,  155 => 31,  152 => 30,  147 => 27,  144 => 26,  139 => 21,  133 => 17,  126 => 132,  123 => 131,  119 => 129,  117 => 77,  112 => 75,  109 => 74,  107 => 71,  104 => 70,  102 => 30,  99 => 29,  97 => 26,  92 => 24,  88 => 22,  85 => 21,  81 => 20,  78 => 19,  74 => 18,  69 => 17,  66 => 15,  62 => 14,  59 => 13,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  36 => 3,  33 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_edit_form.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
