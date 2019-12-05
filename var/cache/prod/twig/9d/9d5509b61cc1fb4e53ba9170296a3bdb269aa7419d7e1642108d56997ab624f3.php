<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_3e3f8ae0e42951229c9eacc5da0650f44b963d74de03378da0a3481699e60d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'block_class' => [$this, 'block_block_class'],
            'block_role' => [$this, 'block_block_role'],
            'block' => [$this, 'block_block'],
            'block_child_render' => [$this, 'block_block_child_render'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", []), "block_base", []), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = [])
    {
        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "hasParent", [], "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", [])) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", []), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = [])
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "pre", []);
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "children", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "post", []);
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = [])
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [(isset($context["child"]) ? $context["child"] : null)]);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  99 => 24,  92 => 28,  78 => 27,  75 => 24,  57 => 23,  52 => 22,  49 => 21,  43 => 18,  30 => 15,  21 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataBlockBundle:Block:block_container.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_container.html.twig");
    }
}
