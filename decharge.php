<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Décharge - Yazaki</title>
    <style>
       
        body {
           font-family: Arial, sans-serif;
           background: #f5f5f5;
           color: #333;;
           margin: 0;
           padding: 0;
           display: flex;
           flex-direction: column;
          
        }

        
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            flex: 1; /* Prendre tout l'espace disponible */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Légère ombre pour la profondeur */

        }
 
        .container-decharge {
            max-width: 297mm; /* Largeur maximale d'une page A4 en mode paysage */
            margin: 100px auto 0; /* Ajustez la marge en haut pour compenser la hauteur de la navbar fixe */
            border: 1px solid #000;
            padding: 20px;
            background-color: #fff; /* Ajout d'un fond blanc pour mieux voir le contenu */
        }
   
        .header-decharge {
            text-align: center;
            margin-bottom: 20px
        }

        h1 {
            text-align: center;
            flex: 2;
        }

        .date-input {
            flex: 1;
            text-align: right;
        }

        .date-input label {
            margin-right: 10px;
            font-size: 12px;
        }

        .section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .section-title input {
            margin-right: 10px;
        }
        .equipment {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .equipment label {
            flex: 1;
            margin-right: 10px;
            margin-left: 20px;
            font-size: 12px;

        }
        label{
        font-size: 12px;
        }
       
        .signature {
            text-align: right;
            margin-top: 20px;
        }
        .sig{
            width: 100px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .logo {
            height: 50px; /* Taille du logo */
            margin-bottom: 20px; /* Correction de la marge en bas du logo */
        }
        .btn-red {
            background-color: #dc3545; /* Couleur rouge Bootstrap */
            color: #fff;
        }
        .btn-red:hover {
            background-color: #c82333; /* Couleur rouge plus foncé au survol */
            color: #fff;
        }
        .sign{
            width: 80px;
        }


        .frame-logo {

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1; /* Transparence pour que le contenu du formulaire soit lisible */
            z-index: 0; /* Pour que le logo soit derrière les autres éléments */
            pointer-events:none;
        }

    </style>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        function generatePDF() {
            var element = document.getElementById('document-content');
            var opt = {
                margin: [-1,0.5,0,0.5],
                filename: 'decharge.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'landscape' }
            };
            html2pdf().from(element).set(opt).save();
        }
    </script>
</head>
<body>
<div class="container">
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
           <img src="image/logo.png" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php"><i class="fas fa-home"></i> Home</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-box"></i> Products</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="products.php">Product List</a></li>
                                <li><a class="dropdown-item" href="scrap.php">Scrap List</a></li>
                                <li><a class="dropdown-item" href="decharge.php">Discharge Product</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="product.php">Products Catalog</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="settings.php"><i class="fas fa-cog"></i> User Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>     
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i> Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-decharge" id="document-content">
        <img src="image/logo.png" class="frame-logo" alt="logo">
        <div class="header-decharge">
            <h1> Décharge </h1>
            <div class="date-input">
                <label for="date"> Date: </label>
                <input type="date" id="date" name="date">
            </div>
        </div>
        <form method="post" action="">
        <p> Je soussigné <strong> Mr/Mme/Melle: </strong> <input type="text" name="name" required> Certifie avoir reçu de la société <strong> Yazaki Automotive Products Tunisia </strong> </p>
        <p> Département IT les équipements suivants:</p>
        
        
            <!-- Section pour Laptop/Desktop -->
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="laptop-desktop-check" name="equipment[]" value="Laptop/Desktop">
                    <label for="laptop-desktop-check">Laptop/Desktop</label>
                </div>
                <div class="equipment">
                    <label for="laptop1-model">Model:</label>
                    <input type="text" id="laptop1-model" name="laptop1_model">
                    <label for="laptop1-asset">  Asset:</label>
                    <input type="text" id="laptop1-asset" name="laptop1_asset">
                    <label for="laptop1-sn">  S/N:</label>
                    <input type="text" id="laptop1-sn" name="laptop1_sn">
                </div>
            </div>

            <!-- Section pour Ecran -->
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="ecran-check" name="equipment[]" value="Ecran">
                    <label for="ecran-check">Ecran</label>
                </div>
                <div class="equipment">
                    <label for="ecran-model">Model:</label>
                    <input type="text" id="ecran-model" name="ecran_model">
                    <label for="ecran-asset">Asset:</label>
                    <input type="text" id="ecran-asset" name="ecran_asset">
                    <label for="ecran-sn">S/N:</label>
                    <input type="text" id="ecran-sn" name="ecran_sn">
                </div>
            </div>

            <!-- Section pour Station d'accueil -->
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">docking-station</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">Palm</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">HP M507</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">Palm</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">VMT</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">Tv</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>
            <div class="section">
                <div class="section-title">
                    <input type="checkbox" id="docking-station-check" name="equipment[]" value="Docking Station">
                    <label for="docking-station-check">Other equipment</label>
                </div>
                <div class="equipment">
                    <label for="docking-station-model">Model:</label>
                    <input type="text" id="docking-station-model" name="docking_station_model">
                    <label for="docking-station-asset">Asset:</label>
                    <input type="text" id="docking-station-asset" name="docking_station_asset">
                    <label for="docking-station-sn">S/N:</label>
                    <input type="text" id="docking-station-sn" name="docking_station_sn">
                </div>
            </div>

            <!-- Signature -->
            <div class="signature">
                <label for="signature">Signature:</label>
                <img src="image/logo.png" class="sign" alt="">
            </div>

        </form>
        
    </div>
    <div class="button-container">
        <button type="button" class="btn btn-red" onclick="generatePDF()">Télécharger PDF</button>
    </div>
</div>    


<footer class="text-center mt-5">
    <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>


    
</body>
</html>