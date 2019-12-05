<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_5d0c24ba848a7abb07535b38171ea523341bcbb538c5190caf415eef9e496fbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = [
            'item' => [$this, 'block_item'],
            'dividerElement' => [$this, 'block_dividerElement'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'dropdownElement' => [$this, 'block_dropdownElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = [])
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", [])) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", []);
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", []), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", []), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", []), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : null)) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "class"], "method")]) : ([]));
            // line 21
            if ((isset($context["matcher"]) || array_key_exists("matcher", $context))) {
                echo " ";
                // line 22
                if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", [0 => (isset($context["item"]) ? $context["item"] : null)], "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", [])]);
                } elseif ($this->getAttribute(                // line 24
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", [0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", [])], "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", [])]);
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", [])) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", [])]);
                } elseif ($this->getAttribute(                // line 30
(isset($context["item"]) ? $context["item"] : null), "currentAncestor", [])) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", [])]);
                }
            }
            // line 35
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", [])) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", [])]);
            }
            // line 38
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", [])) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", [])]);
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method")]) : ([]));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), [0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", []))]);
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : null)) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => "dropdown"]);
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), [0 => "dropdown-menu"]);
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), ["class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")]);
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", []), ["class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")]);
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : null)) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
(isset($context["item"]) ? $context["item"] : null), "uri", [])) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", []) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", [])))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) ? $context["divider_append"] : null)) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 77
    public function block_dividerElement($context, array $blocks = [])
    {
        // line 78
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", []) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = [])
    {
        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", []), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", []));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "icon"], "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "icon"], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
    }

    // line 95
    public function block_spanElement($context, array $blocks = [])
    {
        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", []));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "icon"], "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "icon"], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
    }

    // line 105
    public function block_dropdownElement($context, array $blocks = [])
    {
        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttribute", [0 => "class"], "method")]) : ([]));
        // line 108
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => "dropdown-toggle"]);
        // line 109
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", []);
        // line 110
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), ["class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")]);
        // line 111
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), ["data-toggle" => "dropdown"]);
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "icon"], "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "icon"], "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
    }

    // line 121
    public function block_label($context, array $blocks = [])
    {
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 123
(isset($context["item"]) ? $context["item"] : null), "label", []), $this->getAttribute(        // line 124
(isset($context["item"]) ? $context["item"] : null), "getExtra", [0 => "translation_params", 1 => []], "method"), $this->getAttribute(        // line 125
(isset($context["item"]) ? $context["item"] : null), "getExtra", [0 => "translation_domain", 1 => (($this->getAttribute(        // line 127
(isset($context["item"]) ? $context["item"] : null), "getParent", [], "method")) ? ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getParent", [], "method"), "getExtra", [0 => "translation_domain"], "method")) : (null))], "method")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 127,  277 => 125,  276 => 124,  275 => 123,  274 => 122,  271 => 121,  262 => 116,  256 => 114,  254 => 113,  249 => 112,  247 => 111,  245 => 110,  243 => 109,  241 => 108,  239 => 107,  236 => 106,  233 => 105,  225 => 101,  219 => 99,  217 => 98,  212 => 97,  209 => 96,  206 => 95,  198 => 91,  192 => 89,  190 => 88,  183 => 87,  180 => 86,  177 => 85,  171 => 81,  167 => 79,  165 => 78,  162 => 77,  155 => 72,  153 => 71,  148 => 68,  144 => 65,  140 => 63,  138 => 62,  135 => 61,  133 => 60,  129 => 59,  126 => 57,  124 => 56,  121 => 54,  119 => 53,  116 => 51,  113 => 49,  111 => 48,  109 => 47,  106 => 45,  104 => 44,  102 => 43,  99 => 41,  96 => 39,  94 => 38,  91 => 36,  89 => 35,  85 => 31,  83 => 30,  81 => 29,  79 => 28,  77 => 27,  73 => 25,  71 => 24,  69 => 23,  67 => 22,  64 => 21,  62 => 19,  59 => 17,  55 => 15,  53 => 14,  51 => 12,  48 => 10,  46 => 9,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Core/tab_menu_template.html.twig");
    }
}
