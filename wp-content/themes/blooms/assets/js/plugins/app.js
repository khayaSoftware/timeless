(function($, window) {
  'use strict';

  var $doc = $(document),
    win = $(window),
    body = $('body'),
    adminbar = $('#wpadminbar'),
    cc = $('.click-capture'),
    header = $('.header'),
    wrapper = $('#wrapper'),
    mobile_menu = $('#mobile-menu'),
    mobile_toggle = $('.mobile-toggle-holder');

  var SITE = SITE || {};

  function thb_toggleClass(selector, cls) {
    $(selector).toggleClass(cls);
  }

  SITE = {
    thb_scrolls: {},
    h_offset: 0,
    init: function() {
      var self = this,
        obj;

      function initFunctions() {
        for (obj in self) {
          if (self.hasOwnProperty(obj)) {
            var _method = self[obj];
            if (_method.selector !== undefined && _method.init !== undefined) {
              if ($(_method.selector).length > 0) {
                _method.init();
              }
            }
          }
        }
      }
      initFunctions();
    },
    header: {
      selector: '.header',
      init: function() {
        var base = this,
          container = $(base.selector);

        var observer = new IntersectionObserver(function(entries) {
          if (entries[0].intersectionRatio === 0) {
            document.querySelector('.header').classList.add('fixed');
          } else if (entries[0].intersectionRatio === 1) {
            document.querySelector('.header').classList.remove('fixed');
          }
        }, {
          threshold: [0, 1]
        });

        observer.observe(document.querySelector('.header-placeholder'));
      }
    },
    mobileMenu: {
      selector: '#mobile-menu',
      init: function() {
        var base = this,
          container = $(base.selector),
          behaviour = container.data('behaviour'),
          arrow = behaviour === 'thb-submenu' ? container.find('.thb-mobile-menu li.menu-item-has-children>a') : container.find('.thb-mobile-menu li.menu-item-has-children>a>span');

        arrow.on('click', function(e) {
          var that = $(this),
            parent = that.parents('a').length ? that.parents('a') : that,
            menu = parent.next('.sub-menu');

          if (parent.hasClass('active')) {
            parent.removeClass('active');
            menu.slideUp('200');
          } else {
            parent.addClass('active');
            menu.slideDown('200');
          }
          e.stopPropagation();
          e.preventDefault();
        });
      }
    },
    shopSidebar: {
      selector: '.widget_tag_cloud .tag-link-count',
      init: function() {
        var base = this,
          container = $(base.selector);

        container.each(function() {
          var count = $.trim($(this).html());
          count = count.substring(1, count.length - 1);
          $(this).html(count);
        });
      }
    },
    search_toggle: {
      selector: '.thb-quick-search',
      searchTl: false,
      init: function() {
        var base = this,
          container = $(base.selector);

        var _this = container,
          target = $('.thb-header-inline-search', header),
          field = $('.search-field', target);

        _this.on('click', function() {
          target.toggleClass('active');

          setTimeout(function() {
            if (target.hasClass('active')) {
              field.get(0).focus();
            }
          }, 100);

          return false;
        });
        $doc.keyup(function(e) {
          if (e.keyCode === 27) {
            target.removeClass('active');
          }
        });
      }
    },
    shop_toggle: {
      selector: '#thb-shop-filters',
      init: function() {
        var base = this,
          container = $(base.selector),
          filters = $('.thb-shop-filters');

        container.add(filters.find('.thb-close')).on('click', function() {
          wrapper.toggleClass('open-filters');
          return false;
        });
        $doc.on('keyup', function(e) {
          if (e.keyCode === 27) {
            wrapper.removeClass('open-filters');
          }
        });
      }
    },
    mobile_toggle: {
      selector: '.mobile-toggle-holder',
      init: function() {
        var base = this,
          container = $(base.selector);

        container.on('click', function() {
          mobile_menu.css('margin-top', function() {
            return header.outerHeight() + 'px';
          });
          wrapper.toggleClass('open-cc');
          wrapper.toggleClass('open-menu');
          return false;
        });

        $doc.on('keyup', function(e) {
          if (e.keyCode === 27) {
            wrapper.removeClass('open-cc');
            wrapper.removeClass('open-menu');
          }
        });
        cc.on('click', function() {
          wrapper.removeClass('open-cc');
          wrapper.removeClass('open-menu');
          return false;
        });
      }
    },
    quickCart: {
      selector: '.thb-quick-cart',
      init: function() {
        var base = this,
          container = $(base.selector),
          side_cart = $('#side-cart'),
          close = $('.thb-close', side_cart);

        container.on('click', function() {
          if (themeajax.settings.is_cart || themeajax.settings.is_checkout) {
            window.location.href = themeajax.settings.cart_url;
          } else {
            wrapper.addClass('open-cc');
            wrapper.addClass('open-cart');
          }
					wrapper.removeClass('open-menu');
					return false;
        });
        $doc.on('keyup', function(e) {
          if (e.keyCode === 27) {
            wrapper.removeClass('open-cc');
            wrapper.removeClass('open-cart');
          }
        });
        cc.add(close).on('click', function() {
          wrapper.removeClass('open-cc');
          wrapper.removeClass('open-cart');
          return false;
        });
      }
    },
    productAjaxAddtoCart: {
      selector: '.thb-single-product-ajax-on.single-product .product-type-variable form.cart, .thb-single-product-ajax-on.single-product .product-type-simple form.cart',
      init: function() {
        var base = this,
          container = $(base.selector),
          btn = $('.single_add_to_cart_button', container);

        if (typeof wc_add_to_cart_params !== 'undefined') {
          if (wc_add_to_cart_params.cart_redirect_after_add === 'yes') {
            return;
          }
        }
        $doc.on('submit', 'body.single-product form.cart', function(e) {
          e.preventDefault();
          var _this = $(this),
            btn_text = btn.eq(0).text();

          if (btn.is('.disabled') || btn.is('.wc-variation-selection-needed')) {
            return;
          }

          var data = {
            product_id: _this.find("[name*='add-to-cart']").val(),
            product_variation_data: _this.serialize()
          };

          $.ajax({
            method: 'POST',
            data: data.product_variation_data,
            dataType: 'html',
            url: wc_cart_fragments_params.wc_ajax_url.toString().replace('%%endpoint%%', 'add-to-cart=' + data.product_id + '&thb-ajax-add-to-cart=1'),
            cache: false,
            headers: {
              'cache-control': 'no-cache'
            },
            beforeSend: function() {
              body.trigger('adding_to_cart');
              btn.addClass('disabled').text(themeajax.l10n.adding_to_cart);
            },
            success: function(data) {
              var parsed_data = $.parseHTML(data);

              var thb_fragments = {
                '.thb-cart-amount': $(parsed_data).find('.thb-cart-amount').html(),
                '.thb-cart-count': $(parsed_data).find('.thb-cart-count').html(),
                '.thb_prod_ajax_to_cart_notices': $(parsed_data).find('.thb_prod_ajax_to_cart_notices').html(),
                '.widget_shopping_cart_content': $(parsed_data).find('.widget_shopping_cart_content').html()
              };

              $.each(thb_fragments, function(key, value) {
                $(key).html(value);
              });
              body.trigger('wc_fragments_refreshed');
              btn.removeClass('disabled').text(btn_text);
            },
            error: function(response) {
              body.trigger('wc_fragments_ajax_error');
              btn.removeClass('disabled').text(btn_text);
            }
          });
        });
      }
    },
    variations: {
      selector: 'form.variations_form',
      init: function() {
        var base = this,
          container = $(base.selector),
          price_container = $('p.price', '.product-information').eq(0),
          org_price = price_container.html();

        container.on('show_variation', function(e, variation) {
          if (variation.price_html) {
            price_container.html(variation.price_html);
          }
        }).on('reset_image', function() {
          price_container.html(org_price);
        });
        if (container.find('.single_variation').is(':visible')) {
          if (container.find('.single_variation .woocommerce-variation-price').html()) {
            price_container.html(container.find('.single_variation .woocommerce-variation-price').html());
          }
        }
      }
    },
    quantity: {
      selector: '.quantity:not(.hidden)',
      init: function() {
        var base = this,
          container = $(base.selector);

        base.initialize();
        body.on('updated_cart_totals', function() {
          base.initialize();
        });
      },
      initialize: function() {
        // Quantity buttons
        $('div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)').addClass('buttons_added').append('<div class="plus"></div>').prepend('<div class="minus"></div>').end().find('input[type="number"]').attr('type', 'text');
        $('.plus, .minus').on('click', function() {
          // Get values
          var $qty = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max = parseFloat($qty.attr('max')),
            min = parseFloat($qty.attr('min')),
            step = $qty.attr('step');

          // Format values
          if (!currentVal || currentVal === '' || currentVal === 'NaN') {
            currentVal = 0;
          }
          if (max === '' || max === 'NaN') {
            max = '';
          }
          if (min === '' || min === 'NaN') {
            min = 0;
          }
          if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') {
            step = 1;
          }

          // Change the value
          if ($(this).is('.plus')) {

            if (max && (max === currentVal || currentVal > max)) {
              $qty.val(max);
            } else {
              $qty.val(currentVal + parseFloat(step));
            }

          } else {

            if (min && (min === currentVal || currentVal < min)) {
              $qty.val(min);
            } else if (currentVal > 0) {
              $qty.val(currentVal - parseFloat(step));
            }

          }

          // Trigger change event
          $qty.trigger('change');
          return false;
        });
      }
    },
    shop: {
      selector: '.products .product, .wc-block-grid__products .product',
      init: function() {
        var base = this,
          container = $(base.selector),
          product,
          text;

        $('body')
          .on('adding_to_cart', function(e, $button) {
            if (!$button) {
              return;
            }
            product = $button.closest('.product');
            text = $button.text();

            $button.text(themeajax.l10n.adding_to_cart);

          })
          .on('added_to_cart', function(e, fragments, cart_hash, $button) {
            if ($button) {
              $button.text(text);
            }
            var product_title = product.find('.woocommerce-loop-product__title a').text();

            $('.thb_prod_ajax_to_cart_notices').html('<div class="thb-temp-message">' + product_title + ' ' + themeajax.l10n.has_been_added + '</div>');
          });
      }
    },
    widget_nav_menu: {
      selector: '.widget_nav_menu, .widget_pages, .widget_product_categories',
      init: function() {
        var base = this,
          container = $(base.selector),
          items = container.find('.menu-item-has-children, .page_item_has_children, .cat-parent');

        items.each(function() {
          var _this = $(this),
            link = $('>a', _this),
            menu = _this.find('>.sub-menu, >.children');

          menu.before('<div class="thb-arrow"><i class="thb-icon-down-open-mini"></i></div>');

          $('.thb-arrow', _this).on('click', function(e) {
            var that = $(this),
              parent = that.parents('li');

            if (parent.hasClass('active')) {
              parent.removeClass('active');
              menu.slideUp('200');
            } else {
              parent.addClass('active');
              menu.slideDown('200');
            }
            e.stopPropagation();
            e.preventDefault();
          });
          if (link.attr('href') === '#') {
            link.on('click', function(e) {
              var that = $(this),
                menu = that.next('.sub-menu');
              if (that.hasClass('active')) {
                that.removeClass('active');
                menu.slideUp('200');
              } else {
                that.addClass('active');
                menu.slideDown('200');
              }
              e.preventDefault();
            });
          }
        });
      }
    },
    shopSidebar_widgets: {
      selector: '.thb-shop-filters .widget',
      init: function() {
        var base = this,
          container = $(base.selector);

        container.each(function() {
          var that = $(this),
            t = that.find('>.thb-widget-title');

          t.append($('<span/>'));
        });
      }
    },
    cart_totals: {
      selector: '.woocommerce-cart .cart-collaterals h2',
      init: function() {
        var base = this,
          container = $(base.selector);

        container.prependTo('.woocommerce-cart .cart-collaterals');
      }
    },
    cart_mobile_prices: {
      selector: '.woocommerce-cart .shop_table td.product-price',
      init: function() {
        var base = this;
        base.update();

        body.on('updated_cart_totals', function() {
          base.update();
        });

      },
      update: function() {
        var base = this,
          container = $(base.selector);

        container.each(function() {
          var _this = $(this),
            product_name = _this.parents('.cart_item').find('td.product-name'),
            price_html = _this.find('.amount');

          price_html.clone().addClass('price-mobile').appendTo(product_name);
        });
      }
    },
    toTop: {
      selector: '#scroll_to_top',
      init: function() {
        var base = this,
          container = $(base.selector);

        container.on('click', function() {
          $('html, body').animate({
            scrollTop: 0
          }, 500);
          return false;
        });
        win.on('scroll', function() {
          base.control();
        });
      },
      control: function() {
        var base = this,
          container = $(base.selector);

        if (win.scrollTop() > 200) {
          container.addClass('active');
        } else {
          container.removeClass('active');
        }
      }
    },
  };

  $(function() {
    SITE.init();
  });
})(jQuery, this);
