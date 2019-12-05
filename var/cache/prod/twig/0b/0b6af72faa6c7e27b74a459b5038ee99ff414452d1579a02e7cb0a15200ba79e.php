<?php

/* SonataAdminBundle:CRUD/Association:edit_many_script.html.twig */
class __TwigTemplate_1ef4de92e48e60e6fd7806a375f55f9e50f4c0ab79a8124d45d2647037b561f5 extends Twig_Template
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
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "associationadmin", []);
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('change');

        field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "  =  function() {
        Admin.log('[";
        // line 80
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
        jQuery('form', field_dialog_";
        // line 85
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        initialize_popup_";
        // line 113
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                field_dialog_title_";
        // line 135
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label", []), [], $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 137
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 142
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 144
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 150
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 151
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 158
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 160
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 168
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 171
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                field_dialog_title_";
        // line 172
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label", []), [], $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_";
        // line 178
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " a', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 179
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 182
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 184
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 190
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 191
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 198
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 200
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 208
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 211
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                field_dialog_title_";
        // line 212
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label", []), [], $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain", []));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 214
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_";
        // line 218
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " a', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 219
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 222
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 224
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 230
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
        // line 243
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 250
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 252
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
        // line 266
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 276
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 284
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 289
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');

                    ";
        // line 291
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list")) {
            // line 292
            echo "                        ";
            // line 296
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 297
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').change();

                    ";
        } else {
            // line 300
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 302
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_retrieve_form_element", ["elementId" =>             // line 304
(isset($context["id"]) ? $context["id"] : null), "subclass" => $this->getAttribute($this->getAttribute(            // line 305
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "getActiveSubclassCode", [], "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 306
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "id", [0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "subject", [])], "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 307
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "uniqid", []), "code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 308
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin", []), "root", []), "code", [])]);
            // line 309
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 314
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 315
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 322
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 327
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 332
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 334
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 337
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 344
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = false;
    var field_dialog_content_";
        // line 345
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;
    var field_dialog_title_";
        // line 346
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = false;

    function initialize_popup_";
        // line 348
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 350
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
            field_dialog_";
        // line 351
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_content_";
        // line 352
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_title_";
        // line 353
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 356
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

            Admin.log('[";
        // line 358
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 365
        echo "    // this function initializes the popup
    // this can be only done this way as popup can be cascaded
    function start_field_dialog_form_add_";
        // line 367
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 372
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 376
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    ";
        // line 386
        echo "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 388
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 393
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 397
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 404
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 405
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
    }

    ";
        // line 408
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit", []) == "list")) {
            // line 409
            echo "        ";
            // line 412
            echo "        // this function initializes the popup
        // this can be only done this way as popup can be cascaded
        function start_field_dialog_form_list_";
            // line 414
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 418
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 422
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 429
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 434
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 441
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 444
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " option').get(0)) {
                jQuery('#";
            // line 445
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 448
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val('');
            jQuery('#";
            // line 449
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 456
            echo "
        // update the label
        jQuery('#";
            // line 458
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 460
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 462
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading_information", [], "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 465
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", ["objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute(            // line 467
(isset($context["associationadmin"]) ? $context["associationadmin"] : null), "uniqid", []), "code" => $this->getAttribute(            // line 468
(isset($context["associationadmin"]) ? $context["associationadmin"] : null), "code", []), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 469
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", []), "options", []), "link_parameters", [])]);
            // line 470
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 473
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(html);
                }
            });

            ";
            // line 477
            if ((isset($context["btn_edit"]) ? $context["btn_edit"] : null)) {
                // line 478
                echo "                var edit_button_url = '";
                echo $this->getAttribute(                // line 479
(isset($context["associationadmin"]) ? $context["associationadmin"] : null), "generateUrl", [0 => "edit", 1 => ["id" => "OBJECT_ID"]], "method");
                // line 480
                echo "'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_";
                // line 482
                echo (isset($context["id"]) ? $context["id"] : null);
                echo " a.btn-warning').attr('href', edit_button_url);
            ";
            }
            // line 484
            echo "        });

    ";
        }
        // line 487
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_many_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  863 => 487,  858 => 484,  853 => 482,  849 => 480,  847 => 479,  845 => 478,  843 => 477,  836 => 473,  831 => 470,  829 => 469,  828 => 468,  827 => 467,  826 => 465,  816 => 462,  811 => 460,  806 => 458,  802 => 456,  795 => 449,  791 => 448,  785 => 445,  781 => 444,  775 => 441,  765 => 434,  757 => 429,  747 => 422,  740 => 418,  733 => 414,  729 => 412,  727 => 409,  725 => 408,  719 => 405,  715 => 404,  705 => 397,  698 => 393,  690 => 388,  686 => 386,  676 => 376,  669 => 372,  661 => 367,  657 => 365,  650 => 358,  645 => 356,  637 => 353,  631 => 352,  625 => 351,  621 => 350,  616 => 348,  611 => 346,  607 => 345,  603 => 344,  591 => 337,  585 => 334,  580 => 332,  573 => 327,  565 => 322,  555 => 315,  551 => 314,  544 => 309,  542 => 308,  541 => 307,  540 => 306,  539 => 305,  538 => 304,  537 => 303,  533 => 302,  529 => 300,  523 => 297,  518 => 296,  516 => 292,  514 => 291,  509 => 289,  501 => 284,  490 => 276,  477 => 266,  460 => 252,  455 => 250,  445 => 243,  429 => 230,  420 => 224,  415 => 222,  407 => 219,  401 => 218,  394 => 214,  387 => 212,  383 => 211,  375 => 208,  364 => 200,  359 => 198,  349 => 191,  345 => 190,  336 => 184,  331 => 182,  323 => 179,  317 => 178,  310 => 174,  303 => 172,  299 => 171,  291 => 168,  280 => 160,  275 => 158,  265 => 151,  261 => 150,  252 => 144,  247 => 142,  241 => 139,  236 => 137,  229 => 135,  224 => 133,  218 => 130,  207 => 122,  200 => 118,  192 => 113,  187 => 111,  177 => 104,  172 => 102,  168 => 101,  163 => 99,  151 => 90,  143 => 85,  137 => 84,  130 => 80,  126 => 79,  119 => 75,  114 => 73,  110 => 72,  105 => 70,  95 => 63,  90 => 61,  86 => 60,  81 => 58,  71 => 51,  64 => 47,  59 => 45,  45 => 34,  41 => 33,  38 => 32,  31 => 22,  29 => 21,  26 => 20,  23 => 18,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:edit_many_script.html.twig", "/home/www/sfproject/sf3GrcEternity/releases/20190225100256/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_script.html.twig");
    }
}
