<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_2e29e35b5bc333f082768e1a8463c3aed4ea755cd8187cae92ec34115224207f extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", []), "block_base", []), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = [])
    {
        // line 14
        echo "    <div class=\"panel panel-default ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", []), "html", null, true);
        echo "\">
        ";
        // line 15
        if ( !twig_test_empty($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", []))) {
            // line 16
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    ";
            // line 18
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", [])) {
                // line 19
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", []), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 21
            echo "                    ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "translation_domain", [])) {
                // line 22
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", []), [], $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "translation_domain", [])), "html", null, true);
                echo "
                    ";
            } else {
                // line 24
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", []), "html", null, true);
                echo "
                    ";
            }
            // line 26
            echo "                </h4>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"panel-body\">
            <div class=\"media\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 33
            echo "                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", []), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", []), "html", null, true);
            echo "</a>
                        </h5>
                        ";
            // line 37
            echo $this->getAttribute($context["feed"], "description", []);
            echo "
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                    No feeds available.
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  100 => 40,  92 => 37,  83 => 35,  79 => 33,  74 => 32,  69 => 29,  64 => 26,  58 => 24,  52 => 22,  49 => 21,  43 => 19,  41 => 18,  37 => 16,  35 => 15,  30 => 14,  27 => 13,  18 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataBlockBundle:Block:block_core_rss.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_rss.html.twig");
    }
}
