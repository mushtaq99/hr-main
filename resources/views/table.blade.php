<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h3 align="center">User Complete Profile</h3>

        <div class="row">
            <div class="col-xl">
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
                <style type="text/css">
                    body {
                        margin-top: 20px;
                    }


                    /* USER LIST TABLE */
                    .user-list tbody td > img {
                        position: relative;
                        max-width: 50px;
                        float: left;
                        margin-right: 15px;
                    }

                    .user-list tbody td .user-link {
                        display: block;
                        font-size: 1.25em;
                        padding-top: 3px;
                        margin-left: 60px;
                    }

                    .user-list tbody td .user-subhead {
                        font-size: 0.875em;
                        font-style: italic;
                    }

                    /* TABLES */
                    .table {
                        border-collapse: separate;
                    }

                    .table-hover > tbody > tr:hover > td,
                    .table-hover > tbody > tr:hover > th {
                        background-color: #eee;
                    }

                    .table thead > tr > th {
                        border-bottom: 1px solid #C2C2C2;
                        padding-bottom: 0;
                    }

                    .table tbody > tr > td {
                        font-size: 0.875em;
                        background: #f5f5f5;
                        border-top: 10px solid #fff;
                        vertical-align: middle;
                        padding: 12px 8px;
                    }

                    .table tbody > tr > td:first-child,
                    .table thead > tr > th:first-child {
                        padding-left: 20px;
                    }

                    .table thead > tr > th span {
                        border-bottom: 2px solid #C2C2C2;
                        display: inline-block;
                        padding: 0 5px;
                        padding-bottom: 5px;
                        font-weight: normal;
                    }

                    .table thead > tr > th > a span {
                        color: #344644;
                    }

                    .table thead > tr > th > a span:after {
                        content: "\f0dc";
                        font-family: FontAwesome;
                        font-style: normal;
                        font-weight: normal;
                        text-decoration: inherit;
                        margin-left: 5px;
                        font-size: 0.75em;
                    }

                    .table thead > tr > th > a.asc span:after {
                        content: "\f0dd";
                    }

                    .table thead > tr > th > a.desc span:after {
                        content: "\f0de";
                    }

                    .table thead > tr > th > a:hover span {
                        text-decoration: none;
                        color: #2bb6a3;
                        border-color: #2bb6a3;
                    }

                    .table.table-hover tbody > tr > td {
                        -webkit-transition: background-color 0.15s ease-in-out 0s;
                        transition: background-color 0.15s ease-in-out 0s;
                    }

                    .table tbody tr td .call-type {
                        display: block;
                        font-size: 0.75em;
                        text-align: center;
                    }

                    .table tbody tr td .first-line {
                        line-height: 1.5;
                        font-weight: 400;
                        font-size: 1.125em;
                    }

                    .table tbody tr td .first-line span {
                        font-size: 0.875em;
                        color: #969696;
                        font-weight: 300;
                    }

                    .table tbody tr td .second-line {
                        font-size: 0.875em;
                        line-height: 1.2;
                    }

                    .table a.table-link {
                        margin: 0 5px;
                        font-size: 1.125em;
                    }

                    .table a.table-link:hover {
                        text-decoration: none;
                        color: #2aa493;
                    }

                    .table a.table-link.danger {
                        color: #fe635f;
                    }

                    .table a.table-link.danger:hover {
                        color: #dd504c;
                    }

                    .table-products tbody > tr > td {
                        background: none;
                        border: none;
                        border-bottom: 1px solid #ebebeb;
                        -webkit-transition: background-color 0.15s ease-in-out 0s;
                        transition: background-color 0.15s ease-in-out 0s;
                        position: relative;
                    }

                    .table-products tbody > tr:hover > td {
                        text-decoration: none;
                        background-color: #f6f6f6;
                    }

                    .table-products .name {
                        display: block;
                        font-weight: 600;
                        padding-bottom: 7px;
                    }

                    .table-products .price {
                        display: block;
                        text-decoration: none;
                        width: 50%;
                        float: left;
                        font-size: 0.875em;
                    }

                    .table-products .price > i {
                        color: #8dc859;
                    }

                    .table-products .warranty {
                        display: block;
                        text-decoration: none;
                        width: 50%;
                        float: left;
                        font-size: 0.875em;
                    }

                    .table-products .warranty > i {
                        color: #f1c40f;
                    }

                    .table tbody > tr.table-line-fb > td {
                        background-color: #9daccb;
                        color: #262525;
                    }

                    .table tbody > tr.table-line-twitter > td {
                        background-color: #9fccff;
                        color: #262525;
                    }

                    .table tbody > tr.table-line-plus > td {
                        background-color: #eea59c;
                        color: #262525;
                    }

                    .table-stats .status-social-icon {
                        font-size: 1.9em;
                        vertical-align: bottom;
                    }

                    .table-stats .table-line-fb .status-social-icon {
                        color: #556484;
                    }

                    .table-stats .table-line-twitter .status-social-icon {
                        color: #5885b8;
                    }

                    .table-stats .table-line-plus .status-social-icon {
                        color: #a75d54;
                    }
                </style>
                <body>
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                      rel="stylesheet">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-box clearfix">
                                <div class="table-responsive">
                                    <table class="table user-list">
                                        <thead>
                                        <tr>
                                            <th><span>User</span></th>
                                            <th><span>Created</span></th>
                                            <th class="text-center"><span>Status</span></th>
                                            <th><span>Email</span></th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                                                <a href="#" class="user-link">Mila Kunis</a>
                                                <span class="user-subhead">Admin</span>
                                            </td>
                                            <td>
                                                2013/08/08
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">Inactive</span>
                                            </td>
                                            <td>
                                                <a href="#"><span class="__cf_email__"
                                                                  data-cfemail="5d3034313c1d362833342e733e3230">[email&#160;protected]</span></a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt>
                                                <a href="#" class="user-link">George Clooney</a>
                                                <span class="user-subhead">Member</span>
                                            </td>
                                            <td>
                                                2013/08/12
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="#"><span class="__cf_email__"
                                                                  data-cfemail="b9d4d8cbd5d6d7f9dbcbd8d7ddd697dad6d4">[email&#160;protected]</span></a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
                                                <a href="#" class="user-link">Ryan Gossling</a>
                                                <span class="user-subhead">Registered</span>
                                            </td>
                                            <td>
                                                2013/03/03
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a href="#">jack@nicholson</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt>
                                                <a href="#" class="user-link">Emma Watson</a>
                                                <span class="user-subhead">Registered</span>
                                            </td>
                                            <td>
                                                2004/01/24
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="#"><span class="__cf_email__"
                                                                  data-cfemail="82eaf7eff2eaf0e7fbc2e0ede5e3f0f6ace1edef">[email&#160;protected]</span></a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt>
                                                <a href="#" class="user-link">Robert Downey Jr.</a>
                                                <span class="user-subhead">Admin</span>
                                            </td>
                                            <td>
                                                2013/12/31
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="#">spencer@tracy</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
                                                <a href="#" class="user-link">Mila Kunis</a>
                                                <span class="user-subhead">Admin</span>
                                            </td>
                                            <td>
                                                2013/08/08
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">Inactive</span>
                                            </td>
                                            <td>
                                                <a href="#"><span class="__cf_email__"
                                                                  data-cfemail="d6bbbfbab796bda3b8bfa5f8b5b9bb">[email&#160;protected]</span></a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt>
                                                <a href="#" class="user-link">George Clooney</a>
                                                <span class="user-subhead">Member</span>
                                            </td>
                                            <td>
                                                2013/08/12
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="#"><span class="__cf_email__"
                                                                  data-cfemail="d4b9b5a6b8bbba94b6a6b5bab0bbfab7bbb9">[email&#160;protected]</span></a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                                                <a href="#" class="user-link">Ryan Gossling</a>
                                                <span class="user-subhead">Registered</span>
                                            </td>
                                            <td>
                                                2013/03/03
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-danger">Banned</span>
                                            </td>
                                            <td>
                                                <a href="#">jack@nicholson</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
                                                <a href="#" class="user-link">Emma Watson</a>
                                                <span class="user-subhead">Registered</span>
                                            </td>
                                            <td>
                                                2004/01/24
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-warning">Pending</span>
                                            </td>
                                            <td>
                                                <a href="#"><span class="__cf_email__"
                                                                  data-cfemail="4129342c312933243801232e262033356f222e2c">[email&#160;protected]</span></a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt>
                                                <a href="#" class="user-link">Robert Downey Jr.</a>
                                                <span class="user-subhead">Admin</span>
                                            </td>
                                            <td>
                                                2013/12/31
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="#">spencer@tracy</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                                <a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pull-right">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script data-cfasync="false"
                        src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <script type="text/javascript">

                </script>
                </body>


            </div>
        </div>
    </div>
</x-layouts.app>
