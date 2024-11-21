<?php
include('adminheader.php');
?>
            <div class="col-sm-9 col-md-10 mx-auto mt-5 text-center">
                <p class="bg-dark text-white p-2">Course Ordered</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Course ID</th>
                            <th scope="col">Student Email</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>101</td>
                            <td>student@example.com</td>
                            <td>2024-07-08</td>
                            <td>&#8377; 2000</td>
                            <td><button type="submit" class="btn btn-secondary" name="delete" value="delete"><i class="far fa-trash-alt"></i></button></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/pop.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src= "../js/all.min.js" ></script>
</body>
</html>
