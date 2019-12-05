<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_54d3d22c1f0103583b6e9f6b48f61f5c510396285b75916ed9cd1d32f850e354 extends Twig_Template
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
";
        // line 23
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []);
        // line 24
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 34
        echo "
    var field_dialog_form_list_link_";
        // line 35
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 36
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 47
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 62
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 65
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 72
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 74
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('change');

        field_dialog_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "  =  function() {
        Admin.log('[";
        // line 82
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 86
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
        jQuery('form', field_dialog_";
        // line 87
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 101
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 103
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 104
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 106
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 113
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        initialize_popup_";
        // line 115
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 120
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 132
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 135
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                field_dialog_title_";
        // line 137
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label", []), [], $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 141
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 144
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 146
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 152
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 153
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 160
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 162
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 170
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                field_dialog_title_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label", []), [], $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 176
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 180
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 181
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 184
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 186
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 192
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 193
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 200
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 202
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 213
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                field_dialog_title_";
        // line 214
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label", []), [], $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 216
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 220
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 221
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 224
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 226
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 232
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 245
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 252
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 254
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 268
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 278
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 286
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 291
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');

                    ";
        // line 293
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list")) {
            // line 294
            echo "                        ";
            // line 298
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 299
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').change();

                    ";
        } else {
            // line 302
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 304
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 305
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_retrieve_form_element", ["elementId" =>             // line 306
(isset($context["id"]) ? $context["id"] : null), "subclass" => $this->getAttribute($this->getAttribute(            // line 307
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "getActiveSubclassCode", [], "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 308
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "id", [0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "subject", [])], "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 309
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "uniqid", []), "code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 310
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "code", [])]);
            // line 311
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 316
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 317
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 324
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 329
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 334
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 336
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 339
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 346
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = false;
    var field_dialog_content_";
        // line 347
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;
    var field_dialog_title_";
        // line 348
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = false;

    function initialize_popup_";
        // line 350
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 352
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
            field_dialog_";
        // line 353
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_content_";
        // line 354
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_title_";
        // line 355
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 358
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

            Admin.log('[";
        // line 360
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 367
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 369
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 374
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 378
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    ";
        // line 388
        echo "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 390
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 395
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 399
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 406
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 407
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
    }

    ";
        // line 410
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list")) {
            // line 411
            echo "        ";
            // line 414
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 416
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 420
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 424
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 431
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 436
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 443
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 446
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " option').get(0)) {
                jQuery('#";
            // line 447
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 450
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val('');
            jQuery('#";
            // line 451
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 458
            echo "
        // update the label
        jQuery('#";
            // line 460
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 462
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 464
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading_information", [], "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 467
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", ["objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute(            // line 469
(isset($context["associationadmin"]) ? $context["associationadmin"] : null), "uniqid", []), "code" => $this->getAttribute(            // line 470
(isset($context["associationadmin"]) ? $context["associationadmin"] : null), "code", []), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 471
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "link_parameters", [])]);
            // line 472
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 475
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(html);
                }
            });

            ";
            // line 479
            if ((isset($context["btn_edit"]) ? $context["btn_edit"] : null)) {
                // line 480
                echo "                var edit_button_url = '";
                echo $this->getAttribute(                // line 481
(isset($context["associationadmin"]) ? $context["associationadmin"] : null), "generateUrl", [0 => "edit", 1 => ["id" => "OBJECT_ID"]], "method");
                // line 482
                echo "'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_";
                // line 484
                echo (isset($context["id"]) ? $context["id"] : null);
                echo " a.btn-warning').attr('href', edit_button_url);
            ";
            }
            // line 486
            echo "        });

    ";
        }
        // line 489
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 489,  861 => 486,  856 => 484,  852 => 482,  850 => 481,  848 => 480,  846 => 479,  839 => 475,  834 => 472,  832 => 471,  831 => 470,  830 => 469,  829 => 467,  819 => 464,  814 => 462,  809 => 460,  805 => 458,  798 => 451,  794 => 450,  788 => 447,  784 => 446,  778 => 443,  768 => 436,  760 => 431,  750 => 424,  743 => 420,  736 => 416,  732 => 414,  730 => 411,  728 => 410,  722 => 407,  718 => 406,  708 => 399,  701 => 395,  693 => 390,  689 => 388,  679 => 378,  672 => 374,  664 => 369,  660 => 367,  653 => 360,  648 => 358,  640 => 355,  634 => 354,  628 => 353,  624 => 352,  619 => 350,  614 => 348,  610 => 347,  606 => 346,  594 => 339,  588 => 336,  583 => 334,  576 => 329,  568 => 324,  558 => 317,  554 => 316,  547 => 311,  545 => 310,  544 => 309,  543 => 308,  542 => 307,  541 => 306,  540 => 305,  536 => 304,  532 => 302,  526 => 299,  521 => 298,  519 => 294,  517 => 293,  512 => 291,  504 => 286,  493 => 278,  480 => 268,  463 => 254,  458 => 252,  448 => 245,  432 => 232,  423 => 226,  418 => 224,  410 => 221,  404 => 220,  397 => 216,  390 => 214,  386 => 213,  378 => 210,  367 => 202,  362 => 200,  352 => 193,  348 => 192,  339 => 186,  334 => 184,  326 => 181,  320 => 180,  313 => 176,  306 => 174,  302 => 173,  294 => 170,  283 => 162,  278 => 160,  268 => 153,  264 => 152,  255 => 146,  250 => 144,  244 => 141,  239 => 139,  232 => 137,  227 => 135,  221 => 132,  210 => 124,  203 => 120,  195 => 115,  190 => 113,  180 => 106,  175 => 104,  171 => 103,  166 => 101,  154 => 92,  146 => 87,  140 => 86,  133 => 82,  129 => 81,  122 => 77,  117 => 75,  113 => 74,  108 => 72,  98 => 65,  93 => 63,  89 => 62,  84 => 60,  74 => 53,  67 => 49,  62 => 47,  48 => 36,  44 => 35,  41 => 34,  34 => 24,  32 => 23,  29 => 22,  26 => 20,  23 => 18,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_association_script.html.twig");
    }
}
