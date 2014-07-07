<?php

/* AlexUsersBundle:User:edit.html.twig */
class __TwigTemplate_4dbe5eaa318e4d7f587c0c68a075489e87611a39bcbdeecfc017dbc708a2d063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Edit Account</h1>
    
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form', array("attr" => array("class" => "well")));
        echo "
    
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("patients");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AlexUsersBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  65 => 23,  76 => 9,  58 => 19,  20 => 1,  124 => 39,  110 => 9,  96 => 33,  146 => 54,  127 => 49,  104 => 44,  52 => 20,  37 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 46,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 51,  131 => 50,  119 => 42,  108 => 45,  102 => 32,  71 => 24,  67 => 30,  63 => 15,  59 => 22,  47 => 9,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 31,  117 => 44,  115 => 47,  105 => 40,  91 => 27,  69 => 24,  62 => 22,  49 => 14,  28 => 3,  87 => 38,  66 => 24,  55 => 21,  25 => 5,  21 => 2,  31 => 4,  29 => 8,  43 => 6,  101 => 32,  94 => 42,  89 => 32,  85 => 25,  79 => 33,  75 => 25,  72 => 16,  68 => 14,  56 => 16,  50 => 10,  41 => 10,  24 => 4,  35 => 6,  26 => 6,  19 => 1,  98 => 31,  93 => 33,  88 => 28,  78 => 27,  46 => 15,  44 => 14,  40 => 7,  32 => 4,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 16,  112 => 42,  109 => 34,  106 => 33,  103 => 35,  99 => 34,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 11,  51 => 14,  48 => 14,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 9,  30 => 7,);
    }
}
