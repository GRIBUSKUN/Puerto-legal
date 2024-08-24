@include('components.title', ['title' => 'blog'])
@include('components.blogEntry', [
    'fecha' => ' Junio 24 del 2024',
    'escritor' => 'Erick Alejandro',
    'titulo_entry' => 'Titulo de ejemplo',
    'content' => 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod  
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
    'link' => 'titulo-de-ejemplo'
    ]) 
@include('components.blogEntry', [
    'fecha' => ' Junio 24 del 2024',
    'escritor' => 'Erick Alejandro',
    'titulo_entry' => 'Titulo de ejemplo',
    'content' => 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. sed do eiusmod  
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
    'link' => '#'
    ]) 
@include('components.studies')