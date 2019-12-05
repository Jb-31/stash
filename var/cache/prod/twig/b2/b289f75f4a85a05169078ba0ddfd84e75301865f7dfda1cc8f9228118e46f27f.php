<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_337814c776905d19f6f1581d0ecb5e2face91b7fcac939f06d8644085eac1124 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 22
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 28
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_append_form_element", (["code" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 38
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "code", []), "elementId" =>         // line 39
(isset($context["id"]) ? $context["id"] : null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 40
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "id", [0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "subject", [])], "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 41
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "uniqid", []), "subclass" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 42
(isset($context["app"]) ? $context["app"] : null), "request", []), "query", []), "get", [0 => "subclass"], "method")] + $this->getAttribute($this->getAttribute(        // line 43
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "getOption", [0 => "link_parameters", 1 => []], "method")));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }
                var \$newForm = jQuery(html);
                var \$oldForm = jQuery('#field_container_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "');

                // Maintain state of file inputs
                \$oldForm.find('input[type=\"file\"]').each(function(){
                    var id = '#'+\$(this).attr('id');
                    \$newForm.find(id).replaceWith(\$(this));
                });

                \$oldForm.replaceWith(\$newForm); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 62
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 80
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 85
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 89
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 89,  118 => 85,  110 => 80,  103 => 76,  93 => 69,  89 => 68,  80 => 62,  67 => 52,  55 => 43,  54 => 42,  53 => 41,  52 => 40,  51 => 39,  50 => 38,  49 => 37,  37 => 28,  29 => 22,  26 => 20,  23 => 18,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_association_script.html.twig");
    }
}
