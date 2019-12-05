<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_41a8d6faca87f97cf4d1c01a6983cf4b2454a75b57942919250f06b2401c8722 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = (((isset($context["domain"]) || array_key_exists("domain", $context))) ? ((isset($context["domain"]) ? $context["domain"] : null)) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessages($context["type"], (isset($context["domain"]) ? $context["domain"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\CoreBundle\Twig\Extension\StatusRuntime')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button
                type=\"button\"
                class=\"close\"
                data-dismiss=\"alert\"
                aria-hidden=\"true\"
                aria-label=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_close", [], "SonataCoreBundle"), "html", null, true);
                echo "\"
            >&times;</button>
            ";
                // line 22
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 22,  41 => 20,  31 => 14,  26 => 13,  23 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:FlashMessage:render.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/FlashMessage/render.html.twig");
    }
}
