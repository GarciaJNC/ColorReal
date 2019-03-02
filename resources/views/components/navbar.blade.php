    <!--===============================================-->
    <!--    Fancynav-->
    <!--===============================================-->
    <nav class="fancynavbar" data-zanim-lg='{"from":{"opacity":1,"x":70},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-xs='{"from":{"opacity":1,"y":-48},"to":{"opacity":1,"y":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}'
      data-zanim-trigger="scroll" data-exclusive="true">
      <div class="fancynavbar-togglerbar" data-onscroll-fade-in="true">
        <a class="fancynavbar-brand" href="/">
          <img class="fancynavbar-brand-img" src="img/crLogoBlackAndWhite.png" alt="" width="30" height="30" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll"
          />

          <!--You can use icon or text logo as well-->
          <!--<span class='fab fa-superpowers fs-3'></span>-->
          <!--<span class='logo-sparrow'>S</span>--></a>
        <div class="fancynavbar-toggler">
          <svg class="fancynavbar-toggler-icon" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.5}' data-zanim-trigger="scroll">
            <path id="path-top" d="M20,25c0,0,22,0,30,0c16,0,18.89,40.71-.15,21.75C38.7,35.65,19.9,16.8,19.9,16.8"></path>
            <path id="path-middle" d="M20,32h30"></path>
            <path id="path-bottom" d="M19.9,46.98c0,0,18.8-18.85,29.95-29.95C68.89-1.92,66,38.78,50,38.78c-8,0-30,0-30,0"></path>
          </svg>
        </div>
        <div class="fancynavbar-addon" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll">
        <!--  <a class="fancynavbar-addon-item" href="#"><span class="fab fa-twitter"></span></a>-->
        <!--  <a class="fancynavbar-addon-item" href="#" data-remodal-target="language"><span class="text-sans-serif ls font-weight-black fs--1">EN</span></a>-->
        </div>
      </div>
      <div class="fancynavbar-collapse">
        <ul class="fancynavbar-nav">
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/"><span class="fancynav-link-content">home</span></a>
          </li>
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/about"><span class="fancynav-link-content">about</span></a>
          </li>
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/contact"><span class="fancynav-link-content">contact</span></a>
          </li>
         <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/portfolio"><span class="fancynav-link-content">portfolio</span></a>
          </li>
          <!--<li class="fancynav-item fancy-dropdown">-->
          <!--  <a class="fancynav-link fancy-dropdown-toggle" href="blog.php"><span class="fancynav-link-content">blog</span></a>-->
          <!--</li>-->
          @if($user && $user->canCreatePage())
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/readIndexImg"><span class="fancynav-link-content">edit home</span></a>
          </li>
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/readAboutImg"><span class="fancynav-link-content">edit about</span></a>
          </li>
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/readContactImg"><span class="fancynav-link-content">edit contact</span></a>
          </li>
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/readPortfolioImg"><span class="fancynav-link-content">edit portfolio</span></a>
          </li>
          <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/logout"><span class="fancynav-link-content">logout</span></a>
          </li>
          @else
<!--           <li class="fancynav-item fancy-dropdown">
            <a class="fancynav-link fancy-dropdown-toggle" href="/login"><span class="fancynav-link-content">login</span></a>
          </li> -->
          @endif
        </ul>
      </div>
    </nav>
    <!--===============================================-->
    <!--    End of Fancynav-->
    <!--===============================================-->