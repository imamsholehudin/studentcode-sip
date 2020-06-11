<!DOCTYPE html>
<html>

<head>
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">SIP-IPM</a>
            <svg class="bi bi-eye" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
                <path fill-rule="evenodd"
                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
            </svg>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo BASEURL; ?>">Beranda <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data Pimpinan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/PW">Pimpinan Wilayah</a>
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/PD">Pimpinan Daerah</a>
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/PC">Pimpinan Cabang</a>
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/PR">Pimpinan Ranting</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aktivitas Perkaderan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/TM3">Taruna Melati 3</a>
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/TM2">Taruna Melati 2</a>
                            <a class="dropdown-item" href="<?php echo BASEURL; ?>/TM1">Taruna Melati 1</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASEURL; ?>/About">Tentang</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class ="container">
		  	<a class="navbar-brand" href="<?php //echo BASEURL;
											?>">PHP Mvc</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    	<div class="navbar-nav">
			      <a class="nav-item nav-link active" href="<?php //echo BASEURL;
															?>">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="<?php // echo BASEURL.'/About'; 
														?>">About</a>
			      <a class="nav-item nav-link" href="<?php //echo BASEURL.'/Mahasiswa'; 
														?>">Mahasiswa</a>
	    		</div>
		  	</div>
		  		</div>
		</nav> -->
    <div class="container">