<?php

/* genus/prof.html.twig */
class __TwigTemplate_6a6b8564007a7b9551e9b14682e1f14003943ee5f9b8ef5239d57ddd12dfd1a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9678c38352ad0b3c6ad6e21e6f34d3b5f4aaa9cea35cb512eff87583d5ba0263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9678c38352ad0b3c6ad6e21e6f34d3b5f4aaa9cea35cb512eff87583d5ba0263->enter($__internal_9678c38352ad0b3c6ad6e21e6f34d3b5f4aaa9cea35cb512eff87583d5ba0263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/prof.html.twig"));

        $__internal_ea935f9d6933683431ebd2171e3a04c8904713f5bacc90ec56528bfb6281abf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea935f9d6933683431ebd2171e3a04c8904713f5bacc90ec56528bfb6281abf6->enter($__internal_ea935f9d6933683431ebd2171e3a04c8904713f5bacc90ec56528bfb6281abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/prof.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <title>prof</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    ";
        // line 10
        $this->displayBlock('javascript', $context, $blocks);
        // line 13
        echo "   ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 16
        echo "   <link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/cssvenansol/prof.css\">
  <script type=\"text/javascript\" src=\"JS/prof.js\"></script>
</head>
<body>
<nav class=\"navbar navbar-default navbar-fixed-top\"  >
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\" href=\"#\"> <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logobar2.png"), "html", null, true);
        echo "\" width=\"150px\">

      </a>
    </div>
    <div>
      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">accueil</a></li>              
          <li><a href=\"#section42\">école</a></li>
          <li><a href=\"#partenaire\">les professeurs</a></li>
          <!-- <li><a href=\"form.html\">inscription</a></li> -->
          
  
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id=\"presse\" class=\"container-fluid\">
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/photo45.jpg"), "html", null, true);
        echo "\"  alt=\"Los Angeles\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/photo456.jpg"), "html", null, true);
        echo "\" height=\"100px\" alt=\"Chicago\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image1.jpg"), "html", null, true);
        echo "\"  alt=\"New York\">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div></div>

<div id=\"section42\" class=\"container-fluid\">
  <div class=\"col-sm-6\">
<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.gif"), "html", null, true);
        echo "\" width=\"500px\"></div>
<div class=\"col-sm-6\">
  <h1>notre école :</h1>
       <p class=\"card-block\" >
           Association loi 1901 qui pour à but, de développer la pratique,
           la culture , les connaissances musicales et instrumentales.
           <br> En contribuant  ainsi à la diffusion
            de la musique par des concerts ou autres manifestations à caractère musical ou artistique.
           C'est au sein <strong> de l'îlot des arts</strong> ( espaces culturels de Venansault )
           <br> que nous vous proposons cinq pièces dédiées à la musique:
           <br> <strong> <a href=\"https://fr.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart\" style=\"color: white\">les petits mozarts </a>,<a href=\"https://fr.wikipedia.org/wiki/Steve_Gadd\"style=\"color: white\"> le batteur Steve gadd </a>,
               <a href=\"https://fr.wikipedia.org/wiki/Charlie_Parker\" style=\"color: white\">le saxophoniste Charlie parker</a>,
               <a href=\"https://fr.wikipedia.org/wiki/Oscar_Peterson\" style=\"color: white\">le pianiste Oscar Peterson </a>et <a href=\"https://fr.wikipedia.org/wiki/Eric_Clapton\" style=\"color: white\">le guitariste  Eric clapton </a>.</strong>
           <br>Toutes ces références au grands nom de la musique vous accompagnerons,
           dans votre apprentissage ludique.

       </p>

</div>
</div>
<div id=\"partenaire\" class=\"container-fluid\">
<div class=\"row\">
 <h1>les professeurs</h1>
</div>
 <div class=\"row\"> 

       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/BenoitFradin.jpg"), "html", null, true);
        echo "\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Benoit Fradin</h2>

               </h4>
               <strong>  <p class=\"card-text\">Professeur de saxophone et éveil musical.</p> </strong>
             </div>

           </div> 

         </div> 
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/BriceVinet.jpg"), "html", null, true);
        echo "\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Brice Vinet</h2>

               </h4>
               <strong>  <p class=\"card-text\">Animation musique actuelle.</p></strong>

             </div>

           </div> 

         </div> 
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/EmiliePenaud.jpg"), "html", null, true);
        echo "\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Emilie Penaud</h2>
               </h4>
                 <strong><p class=\"card-text\">Professeur de chant</p></strong>
             </div>

           </div> 

         </div> 
       

</div>

 <div class=\"row\"> 

       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/DenisMoreau.jpg"), "html", null, true);
        echo "\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Denis Moreau</h2>

               </h4>

                 <strong> <p class=\"card-text\">Professeur de percussion et formation musical </p></strong>
             </div>

           </div> 

         </div> 
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/JackyRichet.jpg"), "html", null, true);
        echo "\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Jacky Richet</h2>

               </h4> 

               <p class=\"card-text\"><strong>professeur  de guitare </strong></p>

             </div> 

           </div> 

         </div> 
     
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ThomasDucept.jpg"), "html", null, true);
        echo "\"  width=\"300px\" ></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Thomas Ducept</h2>

               </h4>

                 <p class=\"card-text\">  <strong>professeur  de piano </strong></p>


           </div> 

         </div> 

</div>

</div>

</div>

   </div>

</body>
</html>
";
        
        $__internal_9678c38352ad0b3c6ad6e21e6f34d3b5f4aaa9cea35cb512eff87583d5ba0263->leave($__internal_9678c38352ad0b3c6ad6e21e6f34d3b5f4aaa9cea35cb512eff87583d5ba0263_prof);

        
        $__internal_ea935f9d6933683431ebd2171e3a04c8904713f5bacc90ec56528bfb6281abf6->leave($__internal_ea935f9d6933683431ebd2171e3a04c8904713f5bacc90ec56528bfb6281abf6_prof);

    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b4bb61f0b86e6928c5ebdd5d3ee0c0ac46d39a472bd57adac2e14d5eae2fb577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bb61f0b86e6928c5ebdd5d3ee0c0ac46d39a472bd57adac2e14d5eae2fb577->enter($__internal_b4bb61f0b86e6928c5ebdd5d3ee0c0ac46d39a472bd57adac2e14d5eae2fb577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_c302add2b76b159c310182d9a2df9868a55e446ef8831516138d0c13035f5a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c302add2b76b159c310182d9a2df9868a55e446ef8831516138d0c13035f5a9c->enter($__internal_c302add2b76b159c310182d9a2df9868a55e446ef8831516138d0c13035f5a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("JS/prof.js"), "html", null, true);
        echo "\";></script>
    ";
        
        $__internal_c302add2b76b159c310182d9a2df9868a55e446ef8831516138d0c13035f5a9c->leave($__internal_c302add2b76b159c310182d9a2df9868a55e446ef8831516138d0c13035f5a9c_prof);

        
        $__internal_b4bb61f0b86e6928c5ebdd5d3ee0c0ac46d39a472bd57adac2e14d5eae2fb577->leave($__internal_b4bb61f0b86e6928c5ebdd5d3ee0c0ac46d39a472bd57adac2e14d5eae2fb577_prof);

    }

    // line 13
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fc99d5c352ca709907d4c9dcc2bf0027c6ae188e30181545d3adc7845ad4e6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc99d5c352ca709907d4c9dcc2bf0027c6ae188e30181545d3adc7845ad4e6c3->enter($__internal_fc99d5c352ca709907d4c9dcc2bf0027c6ae188e30181545d3adc7845ad4e6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7d5815d67926cb5e39dc157131b6b3d165866cf9050c3a2e258b6ac1aa307873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5815d67926cb5e39dc157131b6b3d165866cf9050c3a2e258b6ac1aa307873->enter($__internal_7d5815d67926cb5e39dc157131b6b3d165866cf9050c3a2e258b6ac1aa307873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 14
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("CSS/cssvenansol/prof.css"), "html", null, true);
        echo "\">
 ";
        
        $__internal_7d5815d67926cb5e39dc157131b6b3d165866cf9050c3a2e258b6ac1aa307873->leave($__internal_7d5815d67926cb5e39dc157131b6b3d165866cf9050c3a2e258b6ac1aa307873_prof);

        
        $__internal_fc99d5c352ca709907d4c9dcc2bf0027c6ae188e30181545d3adc7845ad4e6c3->leave($__internal_fc99d5c352ca709907d4c9dcc2bf0027c6ae188e30181545d3adc7845ad4e6c3_prof);

    }

    public function getTemplateName()
    {
        return "genus/prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 14,  340 => 13,  327 => 11,  318 => 10,  280 => 218,  255 => 196,  232 => 176,  205 => 152,  182 => 132,  160 => 113,  127 => 83,  107 => 66,  100 => 62,  93 => 58,  67 => 35,  57 => 28,  43 => 16,  40 => 13,  38 => 10,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <title>prof</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    {% block javascript %}
        <script src=\"{{ asset (\"JS/prof.js\") }}\";></script>
    {% endblock %}
   {% block stylesheet  %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset (\"CSS/cssvenansol/prof.css\") }}\">
 {% endblock %}
   <link rel=\"stylesheet\" type=\"text/css\" href=\"CSS/cssvenansol/prof.css\">
  <script type=\"text/javascript\" src=\"JS/prof.js\"></script>
</head>
<body>
<nav class=\"navbar navbar-default navbar-fixed-top\"  >
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>                        
      </button>
      <a class=\"navbar-brand\" href=\"#\"> <img src=\"{{ asset('img/logobar2.png')}}\" width=\"150px\">

      </a>
    </div>
    <div>
      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"{{ path ('index')}}\">accueil</a></li>              
          <li><a href=\"#section42\">école</a></li>
          <li><a href=\"#partenaire\">les professeurs</a></li>
          <!-- <li><a href=\"form.html\">inscription</a></li> -->
          
  
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id=\"presse\" class=\"container-fluid\">
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\">
    <div class=\"item active\">
      <img src=\"{{ asset('img/photo45.jpg')}}\"  alt=\"Los Angeles\">
    </div>

    <div class=\"item\">
      <img src=\"{{ asset ('img/photo456.jpg') }}\" height=\"100px\" alt=\"Chicago\">
    </div>

    <div class=\"item\">
      <img src=\"{{ asset ('img/image1.jpg')}}\"  alt=\"New York\">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div></div>

<div id=\"section42\" class=\"container-fluid\">
  <div class=\"col-sm-6\">
<img src=\"{{ asset ('img/logo.gif')}}\" width=\"500px\"></div>
<div class=\"col-sm-6\">
  <h1>notre école :</h1>
       <p class=\"card-block\" >
           Association loi 1901 qui pour à but, de développer la pratique,
           la culture , les connaissances musicales et instrumentales.
           <br> En contribuant  ainsi à la diffusion
            de la musique par des concerts ou autres manifestations à caractère musical ou artistique.
           C'est au sein <strong> de l'îlot des arts</strong> ( espaces culturels de Venansault )
           <br> que nous vous proposons cinq pièces dédiées à la musique:
           <br> <strong> <a href=\"https://fr.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart\" style=\"color: white\">les petits mozarts </a>,<a href=\"https://fr.wikipedia.org/wiki/Steve_Gadd\"style=\"color: white\"> le batteur Steve gadd </a>,
               <a href=\"https://fr.wikipedia.org/wiki/Charlie_Parker\" style=\"color: white\">le saxophoniste Charlie parker</a>,
               <a href=\"https://fr.wikipedia.org/wiki/Oscar_Peterson\" style=\"color: white\">le pianiste Oscar Peterson </a>et <a href=\"https://fr.wikipedia.org/wiki/Eric_Clapton\" style=\"color: white\">le guitariste  Eric clapton </a>.</strong>
           <br>Toutes ces références au grands nom de la musique vous accompagnerons,
           dans votre apprentissage ludique.

       </p>

</div>
</div>
<div id=\"partenaire\" class=\"container-fluid\">
<div class=\"row\">
 <h1>les professeurs</h1>
</div>
 <div class=\"row\"> 

       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/BenoitFradin.jpg')}}\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Benoit Fradin</h2>

               </h4>
               <strong>  <p class=\"card-text\">Professeur de saxophone et éveil musical.</p> </strong>
             </div>

           </div> 

         </div> 
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/BriceVinet.jpg')}}\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Brice Vinet</h2>

               </h4>
               <strong>  <p class=\"card-text\">Animation musique actuelle.</p></strong>

             </div>

           </div> 

         </div> 
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/EmiliePenaud.jpg')}}\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Emilie Penaud</h2>
               </h4>
                 <strong><p class=\"card-text\">Professeur de chant</p></strong>
             </div>

           </div> 

         </div> 
       

</div>

 <div class=\"row\"> 

       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/DenisMoreau.jpg')}}\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Denis Moreau</h2>

               </h4>

                 <strong> <p class=\"card-text\">Professeur de percussion et formation musical </p></strong>
             </div>

           </div> 

         </div> 
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/JackyRichet.jpg')}}\"  alt=\"\" width=\"300px\"></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Jacky Richet</h2>

               </h4> 

               <p class=\"card-text\"><strong>professeur  de guitare </strong></p>

             </div> 

           </div> 

         </div> 
     
       <div class=\"col-lg-4 col-md-6 col-sm-6 portfolio-item \"> 

           <div class=\"card h-100\"> 

             <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset ('img/ThomasDucept.jpg')}}\"  width=\"300px\" ></a>

             <div class=\"card-body\"> 

               <h4 class=\"card-title\"> 

                <h2>Thomas Ducept</h2>

               </h4>

                 <p class=\"card-text\">  <strong>professeur  de piano </strong></p>


           </div> 

         </div> 

</div>

</div>

</div>

   </div>

</body>
</html>
", "genus/prof.html.twig", "/home/irvin/venansol/app/Resources/views/genus/prof.html.twig");
    }
}
