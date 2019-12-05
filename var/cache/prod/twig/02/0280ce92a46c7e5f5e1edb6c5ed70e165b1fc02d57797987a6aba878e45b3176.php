<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_a56511a1006f3590a78641047beeb88621de4f1e61b488e61473655c40e64b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : null), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", ["%query%" => (isset($context["query"]) ? $context["query"] : null)], "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = [])
    {
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", ["%query%" => (isset($context["query"]) ? $context["query"] : null)], "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if (((isset($context["query"]) || array_key_exists("query", $context)) &&  !((isset($context["query"]) ? $context["query"] : null) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", [])) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "adminPool", []), "getOption", [0 => "role_super_admin"], "method")));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", []));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : null)) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : null) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", [0 => "create"], "method") && $this->getAttribute($context["admin"], "hasAccess", [0 => "create"], "method")) || ($this->getAttribute($context["admin"], "hasRoute", [0 => "list"], "method") && $this->getAttribute($context["admin"], "hasAccess", [0 => "list"], "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => "sonata.admin.block.search_result"], ["query" =>                             // line 35
(isset($context["query"]) ? $context["query"] : null), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", []), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", [])]]);
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  121 => 45,  115 => 44,  112 => 43,  106 => 42,  102 => 40,  100 => 39,  99 => 36,  98 => 35,  96 => 32,  93 => 31,  90 => 30,  85 => 29,  83 => 28,  80 => 27,  73 => 26,  70 => 25,  64 => 24,  61 => 23,  57 => 22,  54 => 21,  51 => 20,  49 => 19,  43 => 17,  40 => 16,  35 => 15,  29 => 14,  20 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:search.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/Core/search.html.twig");
    }
}
