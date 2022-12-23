<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/smash_lite/templates/page/page.html.twig */
class __TwigTemplate_423366cabb3ffaadbb873b8d216c7626 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "
<!-- Start: Header -->
<div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas>
  <header class=\"header clear\">
    <div class=\"header-cicle header-cicle1\"></div>
    <div class=\"header-cicle header-cicle3\"></div>
    <div class=\"header-cicle header-cicle4\"></div>
    <div class=\"header-cicle header-cicle6\"></div>
    <div class=\"header-cicle header-cicle7\"></div>
    <div class=\"header-cicle header-cicle8\"></div>
    <div class=\"header-cicle header-cicle10\"></div>
    <div class=\"header-cicle header-cicle2\"></div>
    <div class=\"header-cicle header-cicle5\"></div>
    <div class=\"header-cicle header-cicle9\"></div>
    <div class=\"container\">
      <div class=\"header-main\">
        <div class=\"site-brand\">
          <div class=\"block-region region-site-branding\">
            <div id=\"block-smash_lite-branding\" class=\"contextual-region block\">
              <div data-contextual-id=\"block:block=smash_lite_branding:langcode=en\"
                data-contextual-token=\"KO3DE52Hl0A8085Q1wvB3bxHz9qwJ9zzrnJHrWhOECs\"></div>
              <div class=\"block-content\">
                <div class=\"site-branding\">
                  <div class=\"site-logo\">
                    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 67)) {
            // line 68
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_logo", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 70
        echo "                  </div>
                </div>
              </div>
            </div>
            <!--/.block-content -->
          </div>
        </div>
        <!--/.site-branding -->
        <div class=\"header-main-right\">
          <div class=\"mobile-menu\"><i class=\"fa fa-bars\"></i></div>
          <div class=\"primary-menu-wrapper\">
            <div class=\"menu-wrap\">
              <div class=\"close-mobile-menu\">x</div>
              <div class=\"block-region region-primary-menu\">
                <nav role=\"navigation\" aria-labelledby=\"block-smash_lite-main-menu-menu\" id=\"block-smash_lite-main-menu\"class=\"contextual-region block block-menu\">
                  <h2 class=\"visually-hidden block-title\" id=\"block-smash_lite-main-menu-menu\">Main navigation</h2>
                  <div data-contextual-id=\"block:block=smash_lite_main_menu:langcode=en|menu:menu=main:langcode=en\"data-contextual-token=\"pcy94TLuiBEz7_xiY90zSn3rtcqhKhE24hBUzLj0Fig\"></div>
                 ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 87)) {
            echo "  
                  <ul class=\"main-menu\">
                   ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
                  </ul>
                 ";
        }
        // line 92
        echo "                </nav>
              </div>
            </div> <!-- /.menu-wrap -->
          </div> <!-- /.primary-menu-wrapper -->

          <div class=\"full-page-search\">
            <div class=\"search-icon\">
              <i class=\"fa fa-search\"></i>
            </div>
            <!--/.search icon -->
            <div class=\"search-box\">
              <div class=\"search-box-close\"></div>
              <div class=\"search-box-content\">
                <div class=\"block-region region-search-box\">
                  ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 106)) {
            // line 107
            echo "                    <div class=\"search-block-form contextual-region block\" data-drupal-selector=\"search-block-form\"id=\"block-smash_lite-search\" role=\"search\">
                     ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
                    </div>
                  ";
        }
        // line 111
        echo "                  <!--/.block-content -->
                </div>
              </div>
              <div class=\"search-box-close\"></div>
            </div> <!-- /.search-box -->
          </div>
          <!--/.full-page-search -->
        </div> <!-- /.header-right -->
      </div><!-- /header-main -->
    </div><!-- /container -->
   ";
        // line 121
        if (($context["slideshow_display"] ?? null)) {
            // line 122
            echo "    <section class=\"slider\">
      <div class=\"container slider-container\">
        <div class=\"slider-text\">
          <ul class=\"js-rotating\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slide"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 127
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 127)) {
                    // line 128
                    echo "              <li>
                ";
                    // line 129
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 129)) {
                        // line 130
                        echo "                <h1>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                        echo "</h1>
                ";
                    }
                    // line 132
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 132)) {
                        // line 133
                        echo "                <p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                        echo "</p>
                ";
                    }
                    // line 135
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 135) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 135))) {
                        // line 136
                        echo "                <a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                        echo "</a>
                ";
                    }
                    // line 138
                    echo "              </li>
              ";
                } else {
                    // line 140
                    echo "              <li>
                ";
                    // line 141
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 141)) {
                        // line 142
                        echo "                <h1>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_head", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                        echo "</h1>
                ";
                    }
                    // line 144
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 144)) {
                        // line 145
                        echo "                <p>";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_desc", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                        echo "</p>
                ";
                    }
                    // line 147
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 147) || twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 147))) {
                        // line 148
                        echo "                <a class=\"button-link\" href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_url", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "slide_link_text", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
                        echo "</a>
                ";
                    }
                    // line 150
                    echo "              </li>
            ";
                }
                // line 152
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "          </ul>
          <!--/.home-slider -->
        </div><!-- /slider-text -->
        ";
            // line 156
            if (($context["show_header_image_details"] ?? null)) {
                // line 157
                echo "        ";
                if (($context["header_image"] ?? null)) {
                    // line 158
                    echo "        <div class=\"slider-image\">
          <img src=\"";
                    // line 159
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_image"] ?? null), 159, $this->source), "html", null, true);
                    echo "\"/>
        </div><!-- /slider-image -->
        ";
                }
                // line 162
                echo "        ";
            }
            // line 163
            echo "      </div>
      <!--/.container -->
    </section>
   ";
        }
        // line 167
        echo "  </header>
</div>
<!-- start: content -->
";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 170)) {
            // line 171
            echo " <div class=\"container\">
  ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
 </div>
";
        }
        // line 175
        echo "<!-- End: content -->
  <!-- Start: Footer -->
  <!--footer-first -->
    <section id=\"footer-blocks\">
        <div class=\"container footer-container clear\">
           ";
        // line 180
        if (($context["show_footer_first_details"] ?? null)) {
            // line 181
            echo "            <div class=\"footer-block\">
                <div class=\"block-region region-footer-first\">
                    <div id=\"block-footerabout\" class=\"block\">
                        <div class=\"block-content\">
                            <div class=\"field field--name-body field--type-text-with-summary field--label-hidden field-item\">
                             <div class=\"footer-logo\">
                              ";
            // line 187
            if (($context["footer_image"] ?? null)) {
                // line 188
                echo "                                <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_image"] ?? null), 188, $this->source), "html", null, true);
                echo "\" />
                              ";
            }
            // line 190
            echo "                             </div> 
                              ";
            // line 191
            if (($context["footer_text"] ?? null)) {
                // line 192
                echo "                                <p>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_text"] ?? null), 192, $this->source), "html", null, true);
                echo "</p>
                              ";
            }
            // line 194
            echo "                            </div>
                        </div>
                    </div>
                    <!--/.block-content -->
                </div>
            </div>
           ";
        }
        // line 201
        echo "            <!--footer-second -->
           <div class=\"footer-block\">
              <div class=\"block-region region-footer-second\">
                ";
        // line 204
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 204)) {
            // line 205
            echo "                  <div id=\"block-footersupport\" class=\"block\">
                    ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
                  </div>
                ";
        }
        // line 209
        echo "              </div>
           </div>
          <!--/footer-second -->

          <!--footer_third -->
            <div class=\"footer-block\">
                <div class=\"block-region region-footer-third\">
                  ";
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 216)) {
            // line 217
            echo "                    <div id=\"block-usefullinks\" class=\"block\">
                        ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
                    </div>
                  ";
        }
        // line 221
        echo "                    <!--/.block-content -->
                </div>
            </div>
            <!--/footer-three -->
          ";
        // line 225
        if (($context["show_contact_details"] ?? null)) {
            // line 226
            echo "            <div class=\"footer-block last-footer-block\">
                <div class=\"block-region region-footer-fourth\">
                    <div id=\"block-footercontactus\" class=\"block\">
                      ";
            // line 229
            if (($context["footer_contact"] ?? null)) {
                // line 230
                echo "                        <h2 class=\"block-title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_contact"] ?? null), 230, $this->source), "html", null, true);
                echo "</h2>
                      ";
            }
            // line 232
            echo "                        <div class=\"block-content\">
                            <div class=\"field field--name-body field--type-text-with-summary field--label-hidden field-item\">
                              ";
            // line 234
            if (($context["location"] ?? null)) {
                // line 235
                echo "                                <p><i class=\"fa fa-map-marker theme-color\" aria-hidden=\"true\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["location"] ?? null), 235, $this->source), "html", null, true);
                echo "</p>
                              ";
            }
            // line 237
            echo "                              ";
            if (($context["phone"] ?? null)) {
                // line 238
                echo "                                <p><i class=\"fa fa-mobile theme-color\" aria-hidden=\"true\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 238, $this->source), "html", null, true);
                echo "</p>
                              ";
            }
            // line 240
            echo "                              ";
            if (($context["emails"] ?? null)) {
                // line 241
                echo "                                <p><i class=\"fa fa-envelope-o theme-color\" aria-hidden=\"true\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["emails"] ?? null), 241, $this->source), "html", null, true);
                echo "</p>
                              ";
            }
            // line 243
            echo "                            </div>
                        </div>
                    </div>
                    <!--/.block-content -->
                </div>
            </div>
          ";
        }
        // line 250
        echo "            <!--/footer-fourth -->
        </div>
        <!--/container -->
    </section>

  <!-- /footer-top -->
  <footer class=\"footer clear\">
    <!-- /footer-bottom -->
    <section id=\"footer-bottom-last\" class=\"clear\">
        <div class=\"container clear\">
            <div class=\"footer-bottom-last\">
              ";
        // line 261
        if (($context["footer_copyright"] ?? null)) {
            // line 262
            echo "                <div class=\"copyright\">
                  ";
            // line 263
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_copyright"] ?? null), 263, $this->source), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 266
        echo "              ";
        if (($context["show_social_icon"] ?? null)) {
            // line 267
            echo "                <div class=\"footer-social-icons\">
                  <ul class=\"social-icons\">
                    ";
            // line 269
            if (($context["facebook_url"] ?? null)) {
                // line 270
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 270, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                    ";
            }
            // line 272
            echo "                    ";
            if (($context["twitter_url"] ?? null)) {
                // line 273
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 273, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                    ";
            }
            // line 275
            echo "                    ";
            if (($context["instagram_url"] ?? null)) {
                // line 276
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 276, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                    ";
            }
            // line 278
            echo "                    ";
            if (($context["linkedin_url"] ?? null)) {
                // line 279
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 279, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
                    ";
            }
            // line 281
            echo "                    ";
            if (($context["youtube_url"] ?? null)) {
                // line 282
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 282, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a></li>
                    ";
            }
            // line 284
            echo "                    ";
            if (($context["vimeo_url"] ?? null)) {
                // line 285
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo_url"] ?? null), 285, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-vimeo\"></i></a></li>
                    ";
            }
            // line 287
            echo "                    ";
            if (($context["telegram_url"] ?? null)) {
                // line 288
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 288, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-telegram\"></i></a></li>
                    ";
            }
            // line 290
            echo "                    ";
            if (($context["whatsapp_url"] ?? null)) {
                // line 291
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null), 291, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-whatsapp\"></i></a></li>
                    ";
            }
            // line 293
            echo "                    ";
            if (($context["github_url"] ?? null)) {
                // line 294
                echo "                     <li><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null), 294, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fa fa-github\"></i></a></li>
                    ";
            }
            // line 296
            echo "                  </ul>
                </div>
              ";
        }
        // line 299
        echo "            </div>
            <!--/.social icons -->
        </div> <!-- /.container -->
    </section> <!-- /footer-bottom-last -->
<!-- end condition if copyright or social icons -->
  </footer>

  <!-- scrolltop start-->
  ";
        // line 307
        if (($context["show_scroller_details"] ?? null)) {
            // line 308
            echo "    <div class=\"scrolltop ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["arrow_up"] ?? null), 308, $this->source), "html", null, true);
            echo "\">
      <div class=\"scrolltop-icon\">&#x2191;</div>
    </div>
  ";
        }
        // line 312
        echo "  <!-- scrolltop end-->
<!-- End: Footer -->
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/smash_lite/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 312,  567 => 308,  565 => 307,  555 => 299,  550 => 296,  544 => 294,  541 => 293,  535 => 291,  532 => 290,  526 => 288,  523 => 287,  517 => 285,  514 => 284,  508 => 282,  505 => 281,  499 => 279,  496 => 278,  490 => 276,  487 => 275,  481 => 273,  478 => 272,  472 => 270,  470 => 269,  466 => 267,  463 => 266,  457 => 263,  454 => 262,  452 => 261,  439 => 250,  430 => 243,  424 => 241,  421 => 240,  415 => 238,  412 => 237,  406 => 235,  404 => 234,  400 => 232,  394 => 230,  392 => 229,  387 => 226,  385 => 225,  379 => 221,  373 => 218,  370 => 217,  368 => 216,  359 => 209,  353 => 206,  350 => 205,  348 => 204,  343 => 201,  334 => 194,  328 => 192,  326 => 191,  323 => 190,  317 => 188,  315 => 187,  307 => 181,  305 => 180,  298 => 175,  292 => 172,  289 => 171,  287 => 170,  282 => 167,  276 => 163,  273 => 162,  267 => 159,  264 => 158,  261 => 157,  259 => 156,  254 => 153,  240 => 152,  236 => 150,  228 => 148,  225 => 147,  219 => 145,  216 => 144,  210 => 142,  208 => 141,  205 => 140,  201 => 138,  193 => 136,  190 => 135,  184 => 133,  181 => 132,  175 => 130,  173 => 129,  170 => 128,  167 => 127,  150 => 126,  144 => 122,  142 => 121,  130 => 111,  124 => 108,  121 => 107,  119 => 106,  103 => 92,  97 => 89,  92 => 87,  73 => 70,  67 => 68,  65 => 67,  39 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/smash_lite/templates/page/page.html.twig", "C:\\xampp\\htdocs\\drupal_portfolio\\themes\\contrib\\smash_lite\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "for" => 126);
        static $filters = array("escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
