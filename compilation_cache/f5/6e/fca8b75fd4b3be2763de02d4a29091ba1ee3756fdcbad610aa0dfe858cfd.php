<?php

/* frontend.html */
class __TwigTemplate_f56efca8b75fd4b3be2763de02d4a29091ba1ee3756fdcbad610aa0dfe858cfd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\"> 
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"css/styles.css\">
    <script src=\"scripts/jquery-1.11.1.js\"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src=\"scripts/bootstrap.min.js\"></script>
    <script src=\"scripts/jquery-1.11.1.js\"></script>
    <script src=\"scripts/angular.min.js\" type=\"text/javascript\"></script>
    <script src=\"scripts/angular-sanitize.min.js\" type=\"text/javascript\"></script>
    <script src=\"scripts/main.js\" type=\"text/javascript\"></script>
    <script src=\"scripts/addition.js\" type=\"text/javascript\"></script>
    <script src=\"scripts/chart/Chart.js\"></script>
    <script src=\"scripts/graph.js\"></script>
  </head>
  <body>
  <div style=\"width: 100%; height: 300px;\">
    <div style=\"float: left\">
      <strong>CurrencyFrom</strong>
      <canvas id=\"currencyTo\" width=\"250\" height=\"250\"></canvas>
    </div>
    <div style=\"float: left\">
      <strong>CurrencyTo</strong>
      <canvas id=\"currencyFrom\" width=\"250\" height=\"250\"></canvas>
    </div>
    <div style=\"float: left\">
      <strong>OriginatingCountry</strong>
      <canvas id=\"originatingCountry\" width=\"250\" height=\"250\"></canvas>
    </div>
  </div>
    <table class=\"table\">
      <tr>
        <th>#</th>
        <th>CurrencyFrom</th>
        <th>CurrencyTo</th>
        <th>AmmountSell</th>
        <th>AmmountBuy</th>
        <th>Rate</th>
        <th>TimePlaced</th>
        <th>OriginatingCountry</th>
        <th>UserID</th>
      </tr>
      ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            echo "        <tr>
          <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "</td>
          <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "currencyFrom"), "html", null, true);
            echo "</td>
          <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "currencyTo"), "html", null, true);
            echo "</td>
          <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "ammountSell"), "html", null, true);
            echo "</td>
          <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "ammountBuy"), "html", null, true);
            echo "</td>
          <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "rate"), "html", null, true);
            echo "</td>
          <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "timePlaced"), "html", null, true);
            echo "</td>
          <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "originatingCountry"), "html", null, true);
            echo "</td>
          <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "userId"), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </table>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "frontend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 58,  104 => 55,  100 => 54,  96 => 53,  92 => 52,  88 => 51,  84 => 50,  80 => 49,  76 => 48,  72 => 47,  69 => 46,  65 => 45,  19 => 1,);
    }
}
