<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_fa1705270dceaafcbed894aa31a70452ce901017ac675674098dfd3a6660577f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", []), "block_base", []), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        $context["show_empty_boxes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "container", []), "getParameter", [0 => "sonata.admin.configuration.global_search.empty_boxes"], "method");
        // line 16
        echo "    ";
        $context["visibility_class"] = ("sonata-search-result-" . (isset($context["show_empty_boxes"]) ? $context["show_empty_boxes"] : null));
        // line 17
        echo "    ";
        if (((isset($context["pager"]) ? $context["pager"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getResults", [], "method")))) {
            // line 18
            echo "        ";
            $context["visibility_class"] = "sonata-search-result-show";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) ? $context["visibility_class"] : null), "html", null, true);
        echo "\">
        <div class=\"box box-solid ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) ? $context["visibility_class"] : null), "html", null, true);
        echo "\">
            <div class=\"box-header with-border ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) ? $context["visibility_class"] : null), "html", null, true);
        echo "\">
                ";
        // line 24
        $context["icon"] = (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", []), "")) : (""));
        // line 25
        echo "                ";
        echo (isset($context["icon"]) ? $context["icon"] : null);
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label", []), [], $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", [])), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if (((isset($context["pager"]) ? $context["pager"] : null) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", [], "method") > 0))) {
            // line 32
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getNbResults", [], "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "create"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "create"], "method"))) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "create"], "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        echo "                    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "list"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "list"], "method"))) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "list"], "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        echo "                </div>
            </div>
            ";
        // line 45
        if (((isset($context["pager"]) ? $context["pager"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getResults", [], "method")))) {
            // line 46
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "getResults", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                echo "                            ";
                $context["link"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getSearchResultLink", [0 => $context["result"]], "method");
                // line 50
                echo "                            ";
                if ((isset($context["link"]) ? $context["link"] : null)) {
                    // line 51
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", [0 => $context["result"]], "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 53
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "toString", [0 => $context["result"]], "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 55
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 59
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_results_found", [], "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 65
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  152 => 61,  148 => 59,  143 => 56,  137 => 55,  131 => 53,  123 => 51,  120 => 50,  117 => 49,  113 => 48,  109 => 46,  107 => 45,  103 => 43,  95 => 39,  92 => 38,  84 => 34,  82 => 33,  77 => 32,  75 => 31,  68 => 27,  62 => 25,  60 => 24,  56 => 23,  52 => 22,  48 => 21,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Block:block_search_result.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_search_result.html.twig");
    }
}
