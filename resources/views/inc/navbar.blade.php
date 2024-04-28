<nav class="navbar" style="background-color:#000">
    <div class="container-fluid" >
        <div class="col-xl-6 pb-2" style="display: flex;">
            <img src="{{'/images/logo.png'}}" style="max-width: 100%; height:100%">
        </div>
        <div class="col-xl-6" style="display: flex; justify-content: flex-end;align-items:center">
           <p class="mx-2"> <i class="fa-solid fa-search fa-lg"></i> <p>
            <p class="mx-2 " type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation"> <i class="fa-solid fa-bars fa-lg"></i></p> 
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="offcanvasDarkNavbarLabel" style="width: 100vw;background-color:#000">
    <div class="offcanvas-header">
        <img src="{{'/images/logo.png'}}" style="max-width: 100%; height:100%">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-4">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <p style="text-decoration: underline">About</p>  
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <p style="text-decoration: underline">Projects</p>  
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <p style="text-decoration: underline">Press</p>  
                    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <p style="text-decoration: underline">Contact Us</p>  
                </a>
            </li>
        </ul>
    
    </div>
</div>
