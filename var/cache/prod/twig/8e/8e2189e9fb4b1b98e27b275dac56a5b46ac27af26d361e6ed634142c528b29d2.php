<?php

/* SonataAdminBundle:CRUD:base_acl_macro.html.twig */
class __TwigTemplate_89265ae9edc8292da54ae84bcba6e27db9c509e2882dd66c0ef62afc36590e3e extends Twig_Template
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
    }

    // line 12
    public function getrender_form($__form__ = null, $__permissions__ = null, $__td_type__ = null, $__admin__ = null, $__admin_pool__ = null, $__object__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "permissions" => $__permissions__,
            "td_type" => $__td_type__,
            "admin" => $__admin__,
            "admin_pool" => $__admin_pool__,
            "object" => $__object__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 13
            echo "    <form class=\"form-horizontal\"
          action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "acl", 1 => ["id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid", []), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "get", [0 => "subclass"], "method")]], "method"), "html", null, true);
            echo "\"
          ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", []), "multipart", [])) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "          method=\"POST\"
            ";
            // line 17
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", [0 => "html5_validate"], "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "            >

        ";
            // line 20
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 28
                echo "                            <col/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </colgroup>

                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if (($this->getAttribute($this->getAttribute($context["child"], "vars", []), "name", []) != "_token")) {
                    // line 33
                    echo "                        ";
                    if ((($this->getAttribute($context["loop"], "index0", []) == 0) || (($this->getAttribute($context["loop"], "index0", []) % 10) == 0))) {
                        // line 34
                        echo "                            <tr>
                                <th>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["td_type"]) ? $context["td_type"] : null), [], "SonataAdminBundle"), "html", null, true);
                        echo "</th>
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                            // line 37
                            echo "                                    <th class=\"text-right\">";
                            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
                            echo "</th>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                            </tr>
                        ";
                    }
                    // line 41
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 44
                    $context["typeChild"] = (($this->getAttribute($context["child"], "role", [], "array", true, true)) ? ($this->getAttribute($context["child"], "role", [], "array")) : ($this->getAttribute($context["child"], "user", [], "array")));
                    // line 45
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typeChild"]) ? $context["typeChild"] : null), "vars", []), "value", []), "html", null, true);
                    echo "
                                ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["typeChild"]) ? $context["typeChild"] : null), 'widget');
                    echo "
                            </td>
                            ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                        // line 49
                        echo "                                <td class=\"text-right\">";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["child"], $context["permission"], [], "array"), 'widget', ["label" => false]);
                        echo "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </table>
            </div>
        </div>

        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", []), 'row');
            echo "

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_acl", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
        </div>
    </form>
";
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
        return "SonataAdminBundle:CRUD:base_acl_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 60,  173 => 57,  167 => 53,  156 => 51,  147 => 49,  143 => 48,  138 => 46,  133 => 45,  131 => 44,  126 => 41,  122 => 39,  113 => 37,  109 => 36,  105 => 35,  102 => 34,  99 => 33,  88 => 32,  84 => 30,  77 => 28,  73 => 27,  63 => 20,  59 => 18,  55 => 17,  52 => 16,  48 => 15,  44 => 14,  41 => 13,  24 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_acl_macro.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_acl_macro.html.twig");
    }
}
