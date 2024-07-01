         <div class="container-fluid" style="background-image: linear-gradient(black, #001431);">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="/">
                   <img src="images/logo.svg">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content:center;">
                  <ul class="navbar-nav">
                     <li class="nav-item @if(Request::is('/')) active @endif">
                        <a class="nav-link" href="/">Inicio</a>
                     </li>
                    <li class="nav-item @if(Request::is('blog')) active @endif">
                        <a class="nav-link" href="/blog">Blog</a>
                     </li>
                        <li class="nav-item @if(Request::is('nosotros')) active @endif">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                     </li>
                    <li class="nav-item @if(Request::is('contacto')) active @endif">
                        <a class="nav-link" href="/contacto">Contacto</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
