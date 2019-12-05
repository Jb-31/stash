<?php

/* SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_4695af971bf9c8286fa44c8df16941ad66edce1c6bcbe2c895e382e439b94c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'sonata_mosaic_background' => [$this, 'block_sonata_mosaic_background'],
            'sonata_mosaic_default_view' => [$this, 'block_sonata_mosaic_default_view'],
            'sonata_mosaic_hover_view' => [$this, 'block_sonata_mosaic_hover_view'],
            'sonata_mosaic_description' => [$this, 'block_sonata_mosaic_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", []), "elements", [])) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "isXmlHttpRequest", [])) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", []), "has", [0 => "_action"], "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list", []), "has", [0 => "batch"], "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid", []), "results", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getObjectMetadata", [0 => $context["object"]], "method");
            // line 24
            echo "                ";
            ob_start();
            // line 25
            echo "                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 30
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 32
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 35
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 38
            echo "                            </div>

                            ";
            // line 44
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 45
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 49
            echo "                            </div>
                        </div>

                        ";
            // line 53
            echo "                        ";
            $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : null), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", []))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getExportFormats", [])));
            // line 54
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 56
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "batch"], "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : null)) > 0)) || (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "export"], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "export"], "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : null))))) {
                // line 57
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => $context["object"]], "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 59
                echo "                                &nbsp;
                            ";
            }
            // line 61
            echo "
                            ";
            // line 62
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 65
            echo "                        </div>
                    </div>
                ";
            $context["mosaic_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 68
            echo "                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => $context["object"]], "method"), "html", null, true);
            echo "\">
                    ";
            // line 70
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "edit", 1 => $context["object"]], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "edit"], "method"))) {
                // line 71
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "edit", 1 => ["id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier($context["object"], (isset($context["admin"]) ? $context["admin"] : null))]], "method"), "html", null, true);
                echo "\">
                            ";
                // line 73
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) ? $context["mosaic_content"] : null), "html", null, true);
                echo "
                        </a>
                    ";
            } elseif (($this->getAttribute(            // line 75
(isset($context["admin"]) ? $context["admin"] : null), "hasAccess", [0 => "show", 1 => $context["object"]], "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", [0 => "show"], "method"))) {
                // line 76
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", [0 => "show", 1 => ["id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier($context["object"], (isset($context["admin"]) ? $context["admin"] : null))]], "method"), "html", null, true);
                echo "\">
                            ";
                // line 78
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) ? $context["mosaic_content"] : null), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 81
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["mosaic_content"]) ? $context["mosaic_content"] : null), "html", null, true);
                echo "
                    ";
            }
            // line 83
            echo "                </div>

                ";
            // line 85
            if ((($this->getAttribute($context["loop"], "index", []) % 4) == 0)) {
                // line 86
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 88
            echo "                ";
            if ((($this->getAttribute($context["loop"], "index", []) % 2) == 0)) {
                // line 89
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 91
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
    </td>
</tr>
";
    }

    // line 32
    public function block_sonata_mosaic_background($context, array $blocks = [])
    {
        // line 33
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "image", []), "html", null, true);
        echo "\" alt=\"\" />
                                ";
    }

    // line 35
    public function block_sonata_mosaic_default_view($context, array $blocks = [])
    {
        // line 36
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
        echo "</span>
                                ";
    }

    // line 45
    public function block_sonata_mosaic_hover_view($context, array $blocks = [])
    {
        // line 46
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", [0 => (isset($context["object"]) ? $context["object"] : null)], "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", []), "html", null, true);
        echo "
                                ";
    }

    // line 62
    public function block_sonata_mosaic_description($context, array $blocks = [])
    {
        // line 63
        echo "                                ";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", []), 40), "html", null, true);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 63,  232 => 62,  226 => 47,  221 => 46,  218 => 45,  211 => 36,  208 => 35,  201 => 33,  198 => 32,  191 => 92,  177 => 91,  173 => 89,  170 => 88,  166 => 86,  164 => 85,  160 => 83,  154 => 81,  148 => 78,  144 => 77,  141 => 76,  139 => 75,  134 => 73,  130 => 72,  127 => 71,  125 => 70,  121 => 69,  118 => 68,  113 => 65,  111 => 62,  108 => 61,  104 => 59,  98 => 57,  96 => 56,  92 => 54,  89 => 53,  84 => 49,  82 => 45,  79 => 44,  75 => 38,  72 => 35,  70 => 32,  66 => 30,  62 => 25,  59 => 24,  56 => 23,  39 => 22,  34 => 20,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}
