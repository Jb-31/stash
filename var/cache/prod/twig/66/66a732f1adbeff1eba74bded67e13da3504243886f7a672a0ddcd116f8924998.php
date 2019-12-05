<?php

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_9e8caa7bb6b2e6c5f49a6bca2aedcf55994ff9ad065a0b02800f3d8bfe2f2207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'show' => [$this, 'block_show'],
            'show_groups' => [$this, 'block_show_groups'],
            'field_row' => [$this, 'block_field_row'],
            'show_title' => [$this, 'block_show_title'],
            'show_field' => [$this, 'block_show_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "@SonataAdmin/CRUD/base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", ["%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"), 15)], "SonataAdminBundle"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_navbar_title($context, array $blocks = [])
    {
        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block_actions($context, array $blocks = [])
    {
        // line 23
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 23)->display($context);
    }

    // line 26
    public function block_tab_menu($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "sidemenu", [0 => (isset($context["action"]) ? $context["action"] : null)], "method"), ["currentClass" => "active", "template" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension')->getGlobalTemplate("tab_menu_template")], "twig");
        // line 30
        echo "
";
    }

    // line 33
    public function block_show($context, array $blocks = [])
    {
        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.show.top", ["admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null)]]);
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showtabs", [])) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showtabs", [])), 0, [], "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showtabs", [])) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) ? $context["has_tab"] : null)) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showtabs", []));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        ";
                $context["_tab_name"] = ((("tab_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [])) . "_") . $this->getAttribute($context["loop"], "index", []));
                // line 45
                echo "                        <li";
                if ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "has", [0 => "_tab"], "method") && ($this->getAttribute($context["loop"], "index", []) == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "_tab"], "method") == (isset($context["_tab_name"]) ? $context["_tab_name"] : null)))) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) ? $context["_tab_name"] : null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) ? $context["_tab_name"] : null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["show_tab"], "label", []), [], (($this->getAttribute($context["show_tab"], "translation_domain", [])) ? ($this->getAttribute($context["show_tab"], "translation_domain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showtabs", []));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        ";
                $context["_tab_name"] = ((("tab_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", [])) . "_") . $this->getAttribute($context["loop"], "index", []));
                // line 56
                echo "                        <div
                            class=\"tab-pane fade";
                // line 57
                if ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "has", [0 => "_tab"], "method") && $this->getAttribute($context["loop"], "first", [])) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "_tab"], "method") == (isset($context["_tab_name"]) ? $context["_tab_name"] : null)))) {
                    echo " in active";
                }
                echo "\"
                            id=\"";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) ? $context["_tab_name"] : null), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 62
                if (($this->getAttribute($context["show_tab"], "description", []) != false)) {
                    // line 63
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", []);
                    echo "</p>
                                    ";
                }
                // line 65
                echo "
                                    ";
                // line 66
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", []);
                // line 67
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 74
(isset($context["admin"]) ? $context["admin"] : null), "showtabs", []))) {
            // line 75
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showtabs", []), "default", []), "groups", []);
            // line 76
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 78
        echo "
    </div>

    ";
        // line 81
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.show.bottom", ["admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null)]]);
        echo "
";
    }

    // line 84
    public function block_show_groups($context, array $blocks = [])
    {
        // line 85
        echo "    <div class=\"row\">
        ";
        // line 86
        $this->displayBlock('field_row', $context, $blocks);
        // line 118
        echo "
    </div>
";
    }

    // line 86
    public function block_field_row($context, array $blocks = [])
    {
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 88
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "showgroups", []), $context["code"], [], "array");
            // line 89
            echo "
                <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", []), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((((isset($context["no_padding"]) || array_key_exists("no_padding", $context))) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : null), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "box_class", []), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 94
            $this->displayBlock('show_title', $context, $blocks);
            // line 97
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "fields", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 103
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 110
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                </tbody>
                            </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        ";
    }

    // line 94
    public function block_show_title($context, array $blocks = [])
    {
        // line 95
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "label", []), [], (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", []), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", []))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
        echo "
                                ";
    }

    // line 103
    public function block_show_field($context, array $blocks = [])
    {
        // line 104
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 105
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), [], "array", true, true)) {
            // line 106
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), [], "array"), (isset($context["object"]) ? $context["object"] : null));
            echo "
                                            ";
        }
        // line 108
        echo "                                        </tr>
                                    ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 108,  384 => 106,  382 => 105,  379 => 104,  376 => 103,  369 => 95,  366 => 94,  362 => 117,  343 => 111,  329 => 110,  326 => 103,  309 => 102,  302 => 97,  300 => 94,  294 => 91,  288 => 90,  285 => 89,  282 => 88,  264 => 87,  261 => 86,  255 => 118,  253 => 86,  250 => 85,  247 => 84,  241 => 81,  236 => 78,  230 => 76,  227 => 75,  225 => 74,  221 => 72,  201 => 67,  199 => 66,  196 => 65,  190 => 63,  188 => 62,  181 => 58,  175 => 57,  172 => 56,  169 => 55,  152 => 54,  147 => 51,  129 => 47,  123 => 46,  116 => 45,  113 => 44,  96 => 43,  92 => 41,  90 => 40,  87 => 39,  85 => 38,  80 => 36,  76 => 34,  73 => 33,  68 => 30,  65 => 27,  62 => 26,  58 => 23,  55 => 22,  48 => 19,  45 => 18,  38 => 15,  35 => 14,  26 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_show.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show.html.twig");
    }
}
