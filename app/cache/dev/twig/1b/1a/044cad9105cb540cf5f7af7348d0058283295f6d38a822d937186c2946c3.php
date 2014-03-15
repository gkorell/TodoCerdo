<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_1b1a044cad9105cb540cf5f7af7348d0058283295f6d38a822d937186c2946c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  26 => 3,  48 => 24,  36 => 15,  32 => 6,  19 => 1,  24 => 2,  20 => 2,  288 => 94,  285 => 93,  278 => 86,  275 => 85,  270 => 80,  265 => 77,  257 => 72,  249 => 71,  241 => 56,  233 => 54,  227 => 51,  220 => 50,  218 => 49,  214 => 48,  206 => 46,  202 => 45,  198 => 44,  194 => 43,  165 => 6,  157 => 96,  155 => 93,  150 => 90,  148 => 85,  142 => 81,  140 => 80,  136 => 78,  134 => 77,  126 => 72,  116 => 67,  102 => 65,  93 => 61,  91 => 35,  83 => 30,  68 => 27,  58 => 25,  35 => 6,  28 => 1,  231 => 47,  217 => 45,  213 => 44,  210 => 47,  196 => 41,  192 => 40,  187 => 38,  184 => 37,  179 => 35,  176 => 34,  174 => 11,  171 => 10,  163 => 28,  160 => 27,  153 => 28,  147 => 27,  144 => 26,  138 => 24,  135 => 23,  128 => 24,  122 => 71,  119 => 22,  105 => 20,  101 => 19,  98 => 64,  80 => 15,  77 => 30,  63 => 26,  59 => 11,  56 => 10,  42 => 12,  84 => 16,  82 => 20,  79 => 29,  74 => 17,  72 => 16,  69 => 15,  66 => 25,  60 => 9,  54 => 24,  51 => 6,  44 => 18,  38 => 7,  33 => 6,  30 => 5,);
    }
}
