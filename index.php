<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link -->
    <script src="./assets/js/search.js"> </script>
    <!-- link -->

    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->

    <!-- backgournd -->
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
    <!-- backgournd -->
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- image -->
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/hotel.png" height="50">
            </a>
            <!-- image -->

        <!-- buttons -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- buttons -->

            <!-- Navigation bars front -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registration.php">Registration</a>
                    </li>

                </ul>
                    <input onkeyup="search(this.value)" class="form-control" type="text md-2"
                        placeholder="Search anything here">
                    <button class="btn btn-primary " type="button mt-2">Search</button></input>
                </form>
            </div>
            <!-- Navigation bars buttom-->
        </div>
    </nav>
    <!-- For Text/Typography Front -->
    <div class="container-fluid mb-5">
        <p class="h1 mt-2">Search Hotels</p>
        <p class="mt-2">You can FInd your likely</p>
        <div class="card mt-2">
            <div class="card-header">List of Hotel</div>
            <div class="card-body"> <strong> </strong>
                <table class="table table-bordered table-hover" ;>
                    <thead>
                        <tr>
                            <th width="100" style="text-align : center;">Hotel Id</th>
                            <th style="text-align: left; padding-left: 10px">Hotel Name</th>
                            <th width="130">Details</th>
                        </tr>
                        <div class="modal" id="show-details">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Hotel Details</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Modal body..
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </thead>
                    <tbody id="results">
            </div>
        </div>
        <div style="display: none;">
            </tbody>
            </table>
        </div>
        <div class="card-footer">Those are all Hotels Found in Misamis Region </div>
    </div>
    <!-- For Text/Typography Buttom-->

</body>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<!-- jquery -->

</html>