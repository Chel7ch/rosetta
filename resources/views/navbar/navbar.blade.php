<body>
	{{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="#">Navbar</a>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav ">
         <li class="nav-item active"><a class="nav-link" href="word?alf=A">A</a></li>
	  @for( $chr=65; $chr++<90;)
    {{--преобразование числа в Utf символ--}}
	<?php
      $str = chr($chr);
		 echo "<li class='nav-item '><a class='nav-link' href='word?alf=".$str."'>".$str."</a></li>";
     ?>
	@endfor
    </ul>
</div>

  <form class="form-inline ">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          link
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
</nav>