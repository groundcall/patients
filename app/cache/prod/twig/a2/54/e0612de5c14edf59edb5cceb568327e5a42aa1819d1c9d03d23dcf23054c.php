<?php

/* ::base.html.twig */
class __TwigTemplate_a254e0612de5c14edf59edb5cceb568327e5a42aa1819d1c9d03d23dcf23054c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'user_block' => array($this, 'block_user_block'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "10675a4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_10675a4_0") : $this->env->getExtension('assets')->getAssetUrl("css/10675a4_bootstrap_1.css");
            echo " <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/public/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">";
        } else {
            // asset "10675a4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_10675a4") : $this->env->getExtension('assets')->getAssetUrl("css/10675a4.css");
            echo " <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/public/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">";
        }
        unset($context["asset_url"]);
        // line 11
        echo "        ";
        // line 16
        echo "    ";
        $this->displayBlock('user_block', $context, $blocks);
        // line 17
        echo "</head>
<body>
    <div class=\"container\">
        <div class=\"masthead\">
            <h1 class=\"text-muted\">Patients Manager</h1>
            <ul class=\"nav nav-justified\">
                <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("patients");
        echo "\">Patients List</a></li>
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("hospital");
        echo "\">Hospital list</a></li>
                <li> <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("users_edit");
        echo "\">Edit account</a></li>
                <li>";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("alex_users_admin");
            echo "\">Admin Panel</a>";
        }
        echo "</li>
                <li></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
            </ul>
        </div>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "    </div>
    <div class=\"footer\" style=\"position: absolute\">
      <div class=\"container\">
        <p class=\"text-muted\">© Alexandru Butnar</p>
      </div>
    </div>
</body>
</html>


";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Patients Manager";
    }

    // line 16
    public function block_user_block($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 32,  110 => 9,  96 => 33,  146 => 54,  127 => 49,  104 => 44,  52 => 13,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 46,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 51,  131 => 50,  119 => 42,  108 => 45,  102 => 32,  71 => 24,  67 => 23,  63 => 15,  59 => 17,  47 => 9,  38 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 31,  117 => 44,  115 => 47,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  28 => 3,  87 => 25,  66 => 24,  55 => 15,  25 => 5,  21 => 2,  31 => 8,  29 => 3,  43 => 6,  101 => 32,  94 => 31,  89 => 20,  85 => 25,  79 => 26,  75 => 25,  72 => 16,  68 => 14,  56 => 16,  50 => 10,  41 => 5,  24 => 4,  35 => 9,  26 => 6,  19 => 1,  98 => 31,  93 => 28,  88 => 28,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 16,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 11,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
