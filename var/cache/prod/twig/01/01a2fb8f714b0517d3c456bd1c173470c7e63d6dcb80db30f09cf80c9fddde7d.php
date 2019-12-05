<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_f2edf2a292c86b2748e14ea846a85b568246c7a8b6a97c9dd8c5e4a17b67485c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = [
            'root' => [$this, 'block_root'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
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
    public function block_root($context, array $blocks = [])
    {
        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", []), ["class" => "sidebar-menu", "data-widget" => "tree"]);
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "request"], "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "request"], "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", [])));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 9
    public function block_item($context, array $blocks = [])
    {
        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", [])) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "roles"], "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "role_super_admin"], "method")));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "roles"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : null)) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", []) && (((isset($context["display"]) || array_key_exists("display", $context))) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : null))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), ["branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"]);
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method") . " active"))], "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", [0 => "class"], "method") . " treeview-menu"))], "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
    }

    // line 26
    public function block_linkElement($context, array $blocks = [])
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "label_catalogue", 1 => "messages"], "method");
        // line 29
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "on_top"], "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "on_top"], "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "icon"], "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "icon"], "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", []) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", []) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "icon"], "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_spanElement($context, array $blocks = [])
    {
        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "label_catalogue"], "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "icon"], "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "icon"], "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "keep_open"], "method", true, true) ||  !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "keep_open"], "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_label($context, array $blocks = [])
    {
        if (((isset($context["is_link"]) || array_key_exists("is_link", $context)) && (isset($context["is_link"]) ? $context["is_link"] : null))) {
            echo (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", []) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "safe_label", 1 => false], "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []), [], (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : null), "messages")) : ("messages"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  142 => 49,  139 => 47,  137 => 46,  135 => 45,  130 => 44,  127 => 43,  125 => 42,  122 => 41,  119 => 40,  116 => 39,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  73 => 22,  71 => 21,  69 => 20,  66 => 19,  64 => 18,  56 => 14,  51 => 13,  49 => 12,  47 => 10,  44 => 9,  39 => 6,  37 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Menu/sonata_menu.html.twig");
    }
}
