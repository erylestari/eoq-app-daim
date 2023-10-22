<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Thesisku
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="/"> Home </a></li>
                <li><a href="bagian"> Bagian </a></li>
                <li><a href="barang"> Barang </a></li>
                <li><a href="pegawai"> Pegawai </a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"> {{ $_COOKIE['nama_pegawai'] }} </a></li>
                <li><a href="logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
