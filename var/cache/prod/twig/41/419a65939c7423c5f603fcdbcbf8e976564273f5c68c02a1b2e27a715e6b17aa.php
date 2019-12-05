<?php

/* @SonataAdmin/Pager/base_links.html.twig */
class __TwigTemplate_26fe8e143f3622db86ed07305a03ed02a4efd0d8df8d0102d65ee49a840e555b extends Twig_Template
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
<div class=\"text-center\">
    <ul class=\"pagination\">
        ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "page", []) > 2)) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => 1], "method")], "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_first_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "page", []) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "previouspage", []))) {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "previouspage", [])], "method")], "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_previous_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "getLinks", [0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", [0 => "pager_links"], "method")], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "page", []))) {
                // line 25
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => $context["page"]], "method")], "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => $context["page"]], "method")], "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "page", []) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "nextpage", []))) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "nextpage", [])], "method")], "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_next_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "page", []) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "lastpage", [])) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "lastpage", []) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "nextpage", [])))) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager", []), "paginationparameters", [0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "pager", []), "lastpage", [])], "method")], "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_last_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
        ";
        }
        // line 38
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  98 => 36,  96 => 35,  93 => 34,  85 => 32,  83 => 31,  80 => 30,  74 => 29,  66 => 27,  58 => 25,  55 => 24,  50 => 23,  47 => 21,  39 => 19,  37 => 18,  34 => 17,  26 => 15,  24 => 14,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Pager/base_links.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/base_links.html.twig");
    }
}
