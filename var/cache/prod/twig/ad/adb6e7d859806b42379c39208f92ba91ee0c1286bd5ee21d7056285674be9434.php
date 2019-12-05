<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_0fdd2481ccada5f8448473863b77e6b0034bd505dfd7f2fcb00100b6d7063b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'field' => [$this, 'block_field'],
            'field_value' => [$this, 'block_field_value'],
            'field_compare' => [$this, 'block_field_compare'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 11
        echo "
<th";
        // line 12
        if ((((isset($context["is_diff"]) || array_key_exists("is_diff", $context))) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : null), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
    }

    // line 12
    public function block_name($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label", []), [], (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain", [])) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain", [])) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationDomain", [])))), "html", null, true);
    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "collapse", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", [], "any", false, true), "collapse", []), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : null)) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", []), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", []), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", []), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_field_value($context, array $blocks = [])
    {
        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", []), "safe", [])) {
            echo (isset($context["value"]) ? $context["value"] : null);
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true));
        }
        // line 24
        echo "                    ";
    }

    // line 33
    public function block_field_compare($context, array $blocks = [])
    {
        // line 34
        echo "    ";
        if ((isset($context["value_compare"]) || array_key_exists("value_compare", $context))) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : null);
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  116 => 36,  113 => 35,  110 => 34,  107 => 33,  103 => 24,  96 => 23,  93 => 22,  88 => 29,  82 => 27,  78 => 25,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  44 => 12,  40 => 33,  36 => 31,  34 => 14,  26 => 12,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_show_field.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_field.html.twig");
    }
}
