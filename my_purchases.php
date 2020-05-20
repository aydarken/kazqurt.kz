<!DOCTYPE html>
<html>

<head>
    <title>MY Purchases</title>
    <!-- Bootstrap 4 cdn CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    echo "hello" . $_GET['id'];
    ?>
    <!-- Table about user -->
    <div class="row">
        <!-- This justifies column size. Our is middle size 5 first rows -->
        <div class="col-md-5">
            <h5>Customer</h5>
            <hr>

            <!-- CARD class in bootstrap is smth like container with information -->
            <div class="card card-body">
                <!-- there also table class firm BS  -->
                <table class="table table-sm">
                    <!-- The <tr> tag serves as a container for creating a table row. -->
                    <tr>
                        <!-- Our tag headers -->
                        <th></th>
                        <th>Customer</th>
                        <th>Phone</th>
                    </tr>

                    <tr>
                        <td><a class="btn btn-sm btn-info" href="{% url 'customer' customer.id %}">View</a></td>
                        <td>Name</td>
                        <td>Phone</td>
                    </tr>

                </table>
            </div>
        </div>
        <!-- Next table about orders -->
        <div class="col-md-7">
            <h5>Last 5 Orders</h5>

            <hr>
            <div class="card card-body">

                <table class="table table-sm">

                    <tr>
                        <!-- We have headers like product name, date, status of purchase, entity of products and repeat button -->
                        <th>Product</th>
                        <th>Date ordered</th>
                        <th>Status</th>
                        <th>Entity</th>
                        <th>Repeat</th>
                    </tr>

                    <tr>
                        <!-- THere is all last 5 orders of user -->
                        <td>Product</td>
                        <td>Order date</td>
                        <td>Status</td>
                        <td>5</td>
                        <td><a class="btn btn-sm btn-info" href="{% url 'update_order' order.id %}">Repeat</a></td>


                    </tr>


                </table>
            </div>
        </div>

    </div>

    <!-- SECTION with our numbers  -->
    <section class="counters">
        <div class="container">
            <div>
                <!-- Data target is numbers in that brackets -->
                <div class="counter" data-target="514">0</div>
                <h3>Purchases</h3>

            </div>

        </div>
    </section>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>