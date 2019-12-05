<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_d36d77d086e0a7931f50002ec44bda8f6454e48654aabfd0f3b6e4e39b4485b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = [
            'list' => [$this, 'block_list'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
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

    // line 14
    public function block_list($context, array $blocks = [])
    {
        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren", []) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", []) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren", []))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = [])
    {
        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", [])) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", [0 => "class"], "method")]) : ([]));
            // line 28
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", [0 => (isset($context["item"]) ? $context["item"] : null)], "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", [])]);
            } elseif ($this->getAttribute(            // line 30
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", [0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", [])], "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", [])]);
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", [])) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", [])]);
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", [])) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), [0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", [])]);
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", []);
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), ["class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")]);
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", [])) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", []) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", [])))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method"))) ? ([0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method")]) : ([]));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), [0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", []))]);
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", []), ["class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")]);
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = [])
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", []), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", [0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", []), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", [])), (isset($context["attributes"]) ? $context["attributes"] : null))], "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = [])
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", [0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", []), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", [])), (isset($context["attributes"]) ? $context["attributes"] : null))], "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  118 => 57,  110 => 53,  108 => 52,  106 => 51,  104 => 50,  102 => 49,  98 => 47,  94 => 45,  92 => 44,  90 => 43,  87 => 41,  85 => 40,  83 => 39,  80 => 37,  78 => 36,  75 => 34,  73 => 33,  70 => 31,  68 => 30,  66 => 29,  64 => 28,  62 => 27,  60 => 26,  57 => 25,  55 => 24,  52 => 23,  44 => 18,  39 => 17,  36 => 16,  34 => 15,  31 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
