
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazaki Tech Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        
        .product-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 20px 0;
        }
        .product-cell {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            vertical-align: top;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }
        .product-cell:hover {
            background-color: #f0f0f0; /* Light grey background on hover */
            cursor: pointer;
        }
        .product-cell img {
            width: 100px; /* Set desired width */
            height: 100px; /* Set desired height */
            object-fit: contain; /* Ensure images are not stretched */
            border-radius: 5px; /* Optional: rounded corners for images */
        }
        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        .product-description {
            font-size: 14px;
        }
        /* Modal Styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
            max-width: 800px; 
            border-radius: 10px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover, .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        
    </style>
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
    
    <div class="container">
        <h1>Yazaki Tech Products</h1>
        <table class="product-table">
            <tr>
                <td class="product-cell" onclick="showModal('Computer HP COMPAQ 3120 PRO', 'High performance HP COMPAQ 3120 PRO suitable for business use.', '2022-01-01', 'Intel Core i5, 8GB RAM, 256GB SSD')">
                    <img src="image/hpcopac.jpg" alt="Product 1">
                    <div class="product-name">Computer HP COMPAQ 3120 PRO</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Flat screen 18.5 AOPEN', 'AOPEN 18.5 inch flat screen monitor.', '2021-05-15', '18.5 inch, 1366x768 resolution')">
                    <img src="image/aopen.jpg" alt="Product 2">
                    <div class="product-name">Flat screen 18.5 AOPEN</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Computer DELL Optiplex', 'DELL Optiplex desktop computer for office use.', '2020-11-20', 'Intel Core i7, 16GB RAM, 512GB SSD')">
                    <img src="image/dell-opti.jpg" alt="Product 3">
                    <div class="product-name">Computer DELL Optiplex</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('HP Scanjet G2710', 'High resolution scanner for office use.', '2019-07-11', '2400 dpi, USB connection')">
                    <img src="image/HP_Scanjet_G2710.jpg" alt="Product 4">
                    <div class="product-name">HP Scanjet G2710</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('HP Procurve 1000-SX-LC Mini-GBIC', 'Mini-GBIC module for HP Procurve switches.', '2018-03-25', '1000BASE-SX, LC connector')">
                    <img src="image/HP Procurve 1000-SX-LC Mini-GBIC.png" alt="Product 5">
                    <div class="product-name">HP Procurve 1000-SX-LC Mini-GBIC</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('DELL Screen 18.5 TFT', 'DELL 18.5 inch TFT monitor.', '2017-06-10', '18.5 inch, 1366x768 resolution')">
                    <img src="image/DELL Screen 18.5 TFT.jpg" alt="Product 6">
                    <div class="product-name">DELL Screen 18.5 TFT</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('Compa II 162 Thermal Printer', 'High speed thermal transfer printer.', '2016-09-14', '12 inches/sec, USB and Ethernet')">
                    <img src="image/Compa II 162 - 12 thermal transfer printer.png" alt="Product 7">
                    <div class="product-name">Compa II 162 Thermal Printer</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Color Laser Printer HP 1025', 'HP 1025 color laser printer for high quality prints.', '2015-02-28', '600 x 600 dpi, USB connection')">
                    <img src="image/Color Laser Printer HP 1025.png" alt="Product 8">
                    <div class="product-name">Color Laser Printer HP 1025</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Computer DELL Optiplex 380', 'DELL Optiplex 380 with Intel E5800, 2GB RAM.', '2014-08-22', 'Intel E5800, 2GB RAM, 500GB HDD')">
                    <img src="image/Computer DELL Optilex 380 E5800 2GB 500.jpg" alt="Product 9">
                    <div class="product-name">Computer DELL Optiplex 380</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('HP Laserjet P1606dn', 'Monochrome laser printer with duplex printing.', '2013-05-13', '1200 x 1200 dpi, USB and Ethernet')">
                    <img src="image/monochrome printers hp laserjet P1606dn.png" alt="Product 10">
                    <div class="product-name">HP Laserjet P1606dn</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('DELL Optiplex 390', 'DELL Optiplex 390 with Windows 7 Pro.', '2012-11-29', 'Intel Core i3, 4GB RAM, 500GB HDD')">
                    <img src="image/PC optiplex 390 mt widows 7 pro b210 365483.png" alt="Product 11">
                    <div class="product-name">DELL Optiplex 390</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('DELL Optiplex 990', 'DELL Optiplex 990 with 2GB RAM and 500GB HDD.', '2011-02-10', 'Intel Core i5, 2GB RAM, 500GB HDD')">
                    <img src="image/PC DELL OPTIPLEX 990 mt 13 2GB 500GB GR DVD.png" alt="Product 12">
                    <div class="product-name">DELL Optiplex 990</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('Printer dot standards ZM400', 'Standard dot matrix printer suitable for industrial use.', '2010-07-22', '203 dpi, 4-inch print width')">
                    <img src="image/Printer dot standars ZM400.png" alt="Product 13">
                    <div class="product-name">Printer dot standards ZM400</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Server HP Proliant DL360 G7', 'HP Proliant DL360 G7 server with E5620 processor.', '2009-04-17', 'Intel E5620, 16GB RAM, 1TB HDD')">
                    <img src="image/Server Hpproliant DL360 g7 E5620 1p 4gb-r-SFF.png" alt="Product 14">
                    <div class="product-name">Server HP Proliant DL360 G7</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Switch PowerDsine PD-mispan 6512', 'PowerDsine PD-mispan 6512 for network devices.', '2008-09-05', 'Power over Ethernet, 12 ports')">
                    <img src="image/Switch PowerDsine PD-mispan 6512 A C M Eth.png" alt="Product 15">
                    <div class="product-name">Switch PowerDsine PD-mispan 6512</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('LENOVO Unit M910s', 'LENOVO M910s unit for office use.', '2007-06-22', 'Intel Core i7, 8GB RAM, 1TB HDD')">
                    <img src="image/LENOVO unit m910s.jpg" alt="Product 16">
                    <div class="product-name">LENOVO Unit M910s</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('LAPTOP ThinkPad L460', 'ThinkPad L460 laptop with Intel Core i5.', '2006-03-19', 'Intel Core i5, 8GB RAM, 256GB SSD')">
                    <img src="image/LAPTOP think pad L460.jpg" alt="Product 17">
                    <div class="product-name">LAPTOP ThinkPad L460</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('LENOVO ThinkPad T530', 'LENOVO ThinkPad T530 with Intel Core i7.', '2005-12-11', 'Intel Core i7, 16GB RAM, 1TB HDD')">
                    <img src="image/LENOVO THINKPAD T530.jpg" alt="Product 18">
                    <div class="product-name">LENOVO ThinkPad T530</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('LENOVO ThinkPad X250', 'LENOVO ThinkPad X250 with Intel Core i5.', '2004-09-07', 'Intel Core i5, 8GB RAM, 256GB SSD')">
                    <img src="image/LENOVO THINK PAD (LAPTOP) X250.jpg" alt="Product 19">
                    <div class="product-name">LENOVO ThinkPad X250</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('PC LENOVO M92P', 'PC LENOVO M92P for business use.', '2003-04-15', 'Intel Core i5, 8GB RAM, 500GB HDD')">
                    <img src="image/PC LENOVO M92P.jpg" alt="Product 20">
                    <div class="product-name">PC LENOVO M92P</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('ZEBRA MC93P', 'ZEBRA MC93P handheld computer for industrial use.', '2002-12-20', 'Android OS, 4GB RAM, 32GB Storage')">
                    <img src="image/ZEBRA MC93P.jpg" alt="Product 21">
                    <div class="product-name">ZEBRA MC93P</div>
                    <div class="product-description"></div>
                </td>
            </tr>
            <tr>
                <td class="product-cell" onclick="showModal('LENOVO ThinkPad T530', 'LENOVO ThinkPad T530 with high performance.', '2001-05-10', 'Intel Core i7, 16GB RAM, 1TB HDD')">
                    <img src="image/LENOVO THINKPAD T530.jpg" alt="Product 22">
                    <div class="product-name">LENOVO ThinkPad T530</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('Switch Meraki MS350', 'Meraki MS350 switch for networking.', '2000-09-01', '24 ports, Cloud managed')">
                    <img src="image/Switch Meraki MS350.jpg" alt="Product 23">
                    <div class="product-name">Switch Meraki MS350</div>
                    <div class="product-description"></div>
                </td>
                <td class="product-cell" onclick="showModal('ThinkCenter M93P', 'ThinkCenter M93P for high productivity.', '1999-02-15', 'Intel Core i5, 8GB RAM, 500GB HDD')">
                    <img src="image/THINK CENTER M93P.jpg" alt="Product 24">
                    <div class="product-name">ThinkCenter M93P</div>
                    <div class="product-description"></div>
                </td>
            </tr>
        </table>
    </div>

    <!-- The Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle"></h2>
            <p id="modalDescription"></p>
            <p><strong>Date:</strong> <span id="modalDate"></span></p>
            <p><strong>Specifications:</strong> <span id="modalSpecs"></span></p>
        </div>
    </div>
    <footer class="text-center mt-5">
        <p>&copy; 2024 Yazaki IT Store. All rights reserved.</p>
    </footer>
    
    <script>
        function showModal(title, description, date, specs) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDescription').innerText = description;
            document.getElementById('modalDate').innerText = date;
            document.getElementById('modalSpecs').innerText = specs;
            document.getElementById('productModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('productModal')) {
                closeModal();
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
