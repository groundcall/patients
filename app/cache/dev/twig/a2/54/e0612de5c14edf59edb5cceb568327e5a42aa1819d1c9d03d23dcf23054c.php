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
            'stylesheets' => array($this, 'block_stylesheets'),
            'user_block' => array($this, 'block_user_block'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 8
        $this->displayBlock('user_block', $context, $blocks);
        // line 15
        echo "</head>
<body>
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_user_block($context, array $blocks = array())
    {
        // line 9
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("patients");
        echo "\">Patients List</a>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("alex_users_admin");
            echo "\">Admin Panel</a>";
        }
        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("users_edit");
        echo "\">Edit account</a>
    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("hospital");
        echo "\">Hospital list</a>
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    ";
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
        return array (  108 => 20,  105 => 19,  101 => 18,  98 => 17,  92 => 13,  87 => 12,  81 => 11,  77 => 10,  72 => 9,  69 => 8,  64 => 6,  58 => 5,  52 => 21,  49 => 19,  47 => 17,  43 => 15,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
