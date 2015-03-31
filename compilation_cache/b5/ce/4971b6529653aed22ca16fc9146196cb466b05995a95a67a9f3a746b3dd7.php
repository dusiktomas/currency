<?php

/* endpoint.html */
class __TwigTemplate_b5ce4971b6529653aed22ca16fc9146196cb466b05995a95a67a9f3a746b3dd7 extends Twig_Template
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
  </head>
  <body>
    <div ng-app=\"CurrencyTrade\" ng-controller=\"currencyController\">
      <form role=\"form\" method=\"POST\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" name=\"userId\" placeholder=\"userId\" ng-model=\"information.userId\">
          <input type=\"text\" class=\"form-control\" name=\"currencyFrom\" placeholder=\"currencyFrom\" ng-model=\"information.currencyFrom\">
          <input type=\"text\" class=\"form-control\" name=\"currencyTo\" placeholder=\"currencyTo\" ng-model=\"information.currencyTo\">
          <input type=\"text\" class=\"form-control\" name=\"ammountSell\" placeholder=\"ammountSell\" ng-model=\"information.ammountSell\">
          <input type=\"text\" class=\"form-control\" name=\"ammountBuy\" placeholder=\"ammountBuy\" ng-model=\"information.ammountBuy\">
          <input type=\"text\" class=\"form-control\" name=\"rate\" placeholder=\"rate\" ng-model=\"information.rate\">
          <input type=\"text\" class=\"form-control\" name=\"timePlaced\" placeholder=\"timePlaced\" ng-model=\"information.timePlaced\">
          <input type=\"text\" class=\"form-control\" name=\"originatingCountry\" placeholder=\"originatingCountry\" ng-model=\"information.originatingCountry\">
          <textarea placeholder=\"Json realtime rendering...\" id=\"json-format-data\" ng-bind=\"buildJson()\" disabled></textarea>
          <p>
            <button class=\"btn btn-default\" id=\"process-button\">Process</button>
          </p>
          <span id=\"processing-msg\" style=\"display: none\">Processing...please wait<span>
          <p>
            <span id=\"processed-msg\" style=\"display: none\">OK<span>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "endpoint.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
