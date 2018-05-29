
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a title='Mechanika samochodowa - JBServis' class="navbar-brand" href="./"><img alt='JB servis - warsztat samochodowy' title="Naprawa aut - JB servis - Żukowo" src='./images/jbservis.png' <?php echo ($_SERVER['REQUEST_URI']!='/') ? 'style="height: 40px;"': '' ?>></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNab" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <div class="navbar-nav d-flex justify-content-end w-100">
        <a title="Laweta Żukowo"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/laweta-zukowo')? 'active': '' ?>" href="/laweta-zukowo">Laweta Żukowo</a>
        <a title="Holowanie Żukowo"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/holowanie-zukowo')? 'active': '' ?>" href="/holowanie-zukowo">Holowanie Żukowo</a>
        <a title="Odpalanie aut Żukowo"class="nav-item nav-link <?php echo ($_SERVER['REQUEST_URI']=='/odpalanie-aut-zukowo')? 'active': '' ?>" href="/odpalanie-aut-zukowo">Odpalanie aut Żukowo</a>
      </div>
    </div>
  </div>
</nav>
