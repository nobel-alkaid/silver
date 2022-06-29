<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- TEMPLATE META -->
    <meta name="keywords" content="">

    <style>

        a {
            background-color: transparent;
        }

        a:active,
        a:hover {
            outline: 0;
        }

        small {
            font-size: 80%;
        }

        img {
            border: 0;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 0;
        }

        .invoice-part {
            background: #f5f6f7;
        }

        .invoice-details p{
            font-size: 17px;
        }

        .invoice-details h6{
            text-decoration: underline;
        }

        @media print {

            *,
            :after,
            :before {
                color: #000 !important;
                background: 0 0 !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            a,
            a:visited {
                text-decoration: underline;
            }

            a[href]:after {
                content: " ("attr(href) ")";
            }

            thead {
                display: table-header-group;
            }

            img,
            tr {
                page-break-inside: avoid;
            }

            img {
                max-width: 100% !important;
            }

            p {
                orphans: 3;
                widows: 3;
            }
        }


        a {
            color: #337ab7;
            text-decoration: none;
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline;
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        img {
            vertical-align: middle;
        }

        h4,
        h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h6 small {
            font-weight: 400;
            line-height: 1;
            color: #777;
        }

        h4,
        h6 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h6 small {
            font-size: 75%;
        }

        h4 {
            font-size: 18px;
        }

        h6 {
            font-size: 12px;
        }

        p {
            margin: 0 0 10px;
        }

        small {
            font-size: 85%;
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width:768px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px;
            }
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        .col-lg-12,
        .col-lg-6 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (min-width:1200px) {

            .col-lg-12,
            .col-lg-6 {
                float: left;
            }

            .col-lg-12 {
                width: 100%;
            }

            .col-lg-6 {
                width: 50%;
            }
        }

        table {
            background-color: transparent;
        }

        th {
            text-align: left;
        }

        .alert-info {
            margin-top: 10px;
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .container:after,
        .container:before,
        .row:after,
        .row:before {
            display: table;
            content: " ";
        }

        .container:after,
        .row:after {
            clear: both;
        }

        /*! CSS Used from: http://localhost:8000/main/css/main.css */
        * {
            margin: 0px;
            padding: 0px;
            outline: 0px;
        }

        img {
            vertical-align: middle;
        }

        a {
            text-decoration: none;
            display: inline-block;
            color: #565765;
        }

        a:hover {
            text-decoration: none;
        }

        ul {
            padding: 0px;
            list-style: none;
        }

        h4,
        h6,
        p,
        ul,
        li {
            margin-bottom: 0px;
        }

        h4,
        h6 {
            font-weight: 500;
            color: #39404a;
        }

        h4 {
            font-size: 20px;
            line-height: 28px;
        }

        h6 {
            font-size: 17px;
            line-height: 28px;
        }

        .alert-info {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 20px;
            border-radius: 3px;
            background: #ffffff;
            border-top: 3px solid #2d58a4;
        }

        .alert-info p {
            font-weight: 500;
            color: #2d58a4;
        }

       .table-scroll {
        padding: 35px;
        border-radius: 8px;
        background: #ffffff;
        }

        .table-list {
            width: 100%;
        }

        thead tr {
            background: #2d58a4;
        }

        thead tr th {
            font-size: 17px;
            font-weight: 500;
            white-space: nowrap;
            text-align: center;
            text-transform: capitalize;
            padding: 12px 20px;
            color: #ffffff;
            border-right: 1px solid #e8e8e8;
        }

        thead tr th:first-child {
            border-radius: 6px 0px 0px 6px;
        }

        thead tr th:last-child {
            border-right: none;
            border-radius: 0px 6px 6px 0px;
        }

        tbody tr {
            border-bottom: 1px solid #e8e8e8;
        }

        tbody tr td {
            padding: 12px 20px;
            text-align: center;
            border-right: 1px solid #e8e8e8;
        }

        tbody tr td:last-child {
            border-right: none;
        }

        .table-name {
            white-space: nowrap;
            text-transform: capitalize;
        }

        .table-image img {
            width: auto;
            height: 100px;
        }

        .table-price h6 {
            white-space: nowrap;
        }

        @media (max-width: 1199px) {
            .table-scroll {
                /* overflow-x: scroll; */
            }
        }

        .account-card {
            margin-bottom: 30px;
            border-radius: 8px;
            padding: 0px 30px 30px;
            background: #ffffff;
        }

        .account-title {
            padding: 18px 0px;
            margin-bottom: 25px;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            border-bottom: 1px solid #e8e8e8;
        }

        .account-title::before {
            position: absolute;
            content: "";
            bottom: -2px;
            left: 0px;
            width: 50px;
            height: 2px;
            background: #2d58a4;
        }

        .account-title h4 {
            text-transform: capitalize;
        }

        @media (max-width: 575px) {
            .account-card {
                padding: 0px 15px 15px;
            }
        }

        /*! CSS Used from: http://localhost:8000/main/css/user-auth.css */
        .user-form-logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .user-form-logo img {
            width: 200px;
        }
    </style>

</head>

<body>
    <div class="inner-section invoice-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <div class="user-form-logo">
                        <a href="/"><img src="{{ public_path('main/assets/logo/logo.png') }}" alt="logo" style="width: 100px; heigth: 100px; object-fit:cover"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Facture</h4>
                        </div>
                        <div class="account-content">
                            <div class="invoice-recieved">
                                <h6><span style="text-decoration: underline; margin-right: 5px">Numéro de facture</span>: 000{{ $invoice->id
                                    }}</h6>
                                <h6><span style="text-decoration: underline; margin-right: 5px">Date
                                </span> : {{ $invoice->sejour->date }}
                                </h6>
                                <h6><span style="text-decoration: underline; margin-right: 5px">Montant </span> : {{ $invoice->sejour->montant }}
                                    FCFA
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Client</h4>
                        </div>
                        <div class="account-content">
                            <ul class="invoice-details">
                                <li>
                                    <h6>Nom & prénoms</h6>
                                    <p>{{ $invoice->sejour->client->firstname }} {{ $invoice->sejour->client->lastname }}</p>
                                </li>
                                <li>
                                    <h6>Numéro de téléphone</h6>
                                    <p>{{ $invoice->sejour->client->phone }}</p>
                                </li>
                                <li>
                                    <h6>Sexe</h6>
                                    <p>{{ $invoice->sejour->client->sexe }}</p>
                                </li>
                                <li>
                                    <h6>Durée du séjour</small></h6>
                                    <p>{{ $invoice->sejour->start_time }} à {{ $invoice->sejour->end_time }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-scroll">
                        <table class="table-list">
                            <thead>
                                <tr>
                                    <th scope="col">Chambre</th>
                                    <th scope="col">Tarif horaire</th>
                                    <th scope="col">Nombre d'heures</th>
                                    <th scope="col">Montant</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-name">
                                        <h6>{{ $invoice->sejour->room->number }}</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>{{ $invoice->sejour->room->hourly_price }} FCFA</h6>
                                    </td>
                                    <td class="table-brand">
                                        <h6>{{ $invoice->sejour->spent_time }} H</h6>
                                    </td>
                                    <td class="table-quantity">
                                        <h6>{{ $invoice->sejour->montant }} FCFA</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert-info">
                        <p>Merci d'avoir utilisé nos services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>   

</body>

</html>