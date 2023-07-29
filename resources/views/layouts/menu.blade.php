<li class="nav-item">
<a href="{{ route('home') }}" 
    class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-th"></i>
    <p>
    ACCEUIL
    <span class="right badge badge-danger">New</span>
    </p>
</a>
</li>


<li class="nav-item">
<a href="#" class="nav-link {{ Request::is('permissions*','roles*','users*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    PARAMETRES
    <i class="right fas fa-angle-left"></i>
    </p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="{{ route('permissions.index') }}" 
    class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>PERMISSIONS</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('roles.index') }}" 
    class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>ROLES</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('users.index') }}" 
    class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>UTILISATEURS</p>
    </a>
    </li>
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link {{ Request::is('habitants*','amenagements*','demenagements*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    RESSOURCES HUMAINES
    <i class="right fas fa-angle-left"></i>
    </p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="{{ route('habitants.index') }}" 
    class="nav-link {{ Request::is('habitants*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>HABITANTS</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('amenagements.index') }}" 
    class="nav-link {{ Request::is('amenagements*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>ARMENAGEMENTS</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('demenagements.index') }}" 
    class="nav-link {{ Request::is('demenagements*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>DEMENAGEMENTS</p>
    </a>
    </li>
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link {{ Request::is('naissances*','mariages*','divoces*','deces*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    ETATS CIVILS
    <i class="right fas fa-angle-left"></i>
    </p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="{{ route('naissances.index') }}" 
    class="nav-link {{ Request::is('naissances*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>NAISSANCES</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('mariages.index') }}" 
    class="nav-link {{ Request::is('mariages*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>MARIAGES</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('divoces.index') }}" 
    class="nav-link {{ Request::is('divoces*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>DIVOCES</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('deces.index') }}" 
    class="nav-link {{ Request::is('deces*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>DECES</p>
    </a>
    </li>
</ul>
</li>


<li class="nav-item">
<a href="#" class="nav-link {{ Request::is('activites*','metiers*','refMetiers*','centreInterets*') ? 'active' : '' }}">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
    ACTIVITES
    <i class="right fas fa-angle-left"></i>
    </p>
</a>
<ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="{{ route('activites.index') }}" 
    class="nav-link {{ Request::is('activites *') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>ACTIVITES</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('metiers.index') }}" 
    class="nav-link {{ Request::is('metiers*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>METIERS</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('refMetiers.index') }}" 
    class="nav-link {{ Request::is('refMetiers*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>REFERETIEL METIERS</p>
    </a>
    </li>
    <li class="nav-item">
    <a href="{{ route('centreInterets.index') }}" 
    class="nav-link {{ Request::is('centreInterets*') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>CENTRE INTERETS</p>
    </a>
    </li>
</ul>
</li>


<li class="nav-item">
    <a href="{{ route('amenagements.index') }}"
       class="nav-link {{ Request::is('amenagements*') ? 'active' : '' }}">
        <p>Amenagements</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('naissances.index') }}"
       class="nav-link {{ Request::is('naissances*') ? 'active' : '' }}">
        <p>Naissances</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('hommes.index') }}"
       class="nav-link {{ Request::is('hommes*') ? 'active' : '' }}">
        <p>Hommes</p>
    </a>
</li>


