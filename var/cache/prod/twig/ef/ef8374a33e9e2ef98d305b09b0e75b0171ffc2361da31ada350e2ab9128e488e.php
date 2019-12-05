<?php

/* knp_menu.html.twig */
class __TwigTemplate_43f12e8568ccf0056a042ca3f4f50bca2c11a440a9de8dd767a3199db6890c48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = [
            'compressed_root' => [$this, 'block_compressed_root'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = [])
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", []);
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = [])
    {
        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", []) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", []) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", []))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = [])
    {
        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", []))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), ["depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth", []) - 1)]);
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth", [])) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth", []) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), ["matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "matchingDepth", []) - 1)]);
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 51
    public function block_item($context, array $blocks = [])
    {
        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", [])) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "class"], "method")]) : ([]));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", [0 => (isset($context["item"]) ? $context["item"] : null)], "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", [])]);
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", [0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth", [])], "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", [])]);
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", [])) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", [])]);
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", [])) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", [])]);
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", []) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", []) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class", [])) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", []))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class", [])]);
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class", []))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class", [])]);
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", []);
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), ["class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")]);
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", [])) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", [0 => (isset($context["item"]) ? $context["item"] : null)], "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", [])))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method")]) : ([]));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), [0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", []))]);
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", []), ["class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")]);
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", []), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", []));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = [])
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", []));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = [])
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", []) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", [0 => "safe_label", 1 => false], "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []), "html", null, true);
        }
    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 6,  269 => 5,  265 => 4,  253 => 3,  243 => 101,  232 => 99,  219 => 97,  210 => 92,  208 => 91,  206 => 90,  204 => 89,  200 => 86,  196 => 84,  194 => 83,  190 => 82,  187 => 81,  184 => 78,  182 => 77,  180 => 76,  177 => 73,  174 => 72,  171 => 71,  169 => 70,  166 => 69,  163 => 68,  160 => 66,  157 => 64,  155 => 63,  152 => 61,  150 => 60,  147 => 58,  145 => 57,  143 => 56,  141 => 55,  139 => 54,  137 => 52,  134 => 51,  130 => 48,  128 => 47,  111 => 44,  94 => 43,  91 => 41,  89 => 40,  86 => 37,  84 => 36,  82 => 34,  80 => 33,  77 => 31,  69 => 26,  64 => 25,  61 => 24,  59 => 23,  56 => 22,  52 => 19,  50 => 18,  47 => 17,  40 => 13,  38 => 12,  35 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "knp_menu.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
