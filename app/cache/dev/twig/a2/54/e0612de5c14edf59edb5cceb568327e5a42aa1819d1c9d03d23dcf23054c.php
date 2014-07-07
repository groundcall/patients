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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_10675a4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/10675a4_bootstrap_1.css");
            echo " <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/public/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">";
        } else {
            // asset "10675a4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_10675a4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/10675a4.css");
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
        return array (  124 => 32,  121 => 31,  116 => 16,  110 => 9,  96 => 33,  94 => 31,  88 => 28,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  59 => 17,  56 => 16,  54 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
