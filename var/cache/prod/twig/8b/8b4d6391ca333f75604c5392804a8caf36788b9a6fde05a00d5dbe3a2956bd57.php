<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_96cb812ffbb8c6a92a66f0627276b6be22c5fa26ada7adb79ea5f579b29a0707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = [
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
    public function block_label($context, array $blocks = [])
    {
        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "translation_domain", 1 => "messages"], "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", []);
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "translation_params", 1 => []], "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", []) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", [0 => "safe_label", 1 => false], "method"))) {
            echo (isset($context["label"]) ? $context["label"] : null);
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpMenuBundle::menu.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/knplabs/knp-menu-bundle/src/Resources/views/menu.html.twig");
    }
}
