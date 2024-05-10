$(document).ready(function () {
    fetchDataTable();
    $("#insertUser").submit(function (e) {
        e.preventDefault();
        insertData();
    });

    // Insert User

    function insertData() {
        let name = $("#name").val();
        let email = $("#email").val();
        let number = $("#number").val();

        $.ajax({
            url: "functions/insert.php",
            type: "POST",
            data: {
                name: name,
                email: email,
                number: number,
            },
            success: function (data) {
                $("#formModal").modal("hide");
                $(".message").empty();
                $(".message").append(`
                    <div class="alert alert-success" role="alert">
                        ${data}
                    </div>
                `);

                // Reset Inputs
                $("#name").val("");
                $("#email").val("");
                $("#number").val("");
                fetchDataTable();

                setTimeout(function () {
                    $(".message").empty();
                }, 3000);
            },
            error: function (error) {
                console.log(error);
            },
        });
    }

    // Fetch All Data From DB

    function fetchDataTable() {
        $("#tableData").empty();
        $.ajax({
            url: "functions/fetch.php",
            type: "GET",
            dataType: "json",
            success: function (data) {
                $.each(data, function (key, value) {
                    $("#tableData").append(`
                        <tr>
                            <td>${value["name"]}</td>
                            <td>${value["email"]}</td>
                            <td>${value["number"]}</td>
                            <td>
                                <button id="btn-edit" class="btn btn-info" data-id="${value.id}" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                <button id="btn-delete" class="btn btn-danger" data-id="${value.id}">Delete</button>
                            </td>
                        </tr>
                    `);
                });
            },
            error: function (error) {
                console.log(error);
            },
        });
    }

    //Delete Single Record

    $(document).on("click", "#btn-delete", function () {
        let userId = $(this).data("id");
        $.ajax({
            url: "functions/delete.php",
            type: "POST",
            data: {
                userId: userId,
            },
            success: function (data) {
                $(".message").empty();
                $(".message").append(`
                    <div class="alert alert-success" role="alert">
                        ${data}
                    </div>
                `);
                fetchDataTable();

                setTimeout(function () {
                    $(".message").empty();
                }, 3000);
            },
        });
    });

    //Edit Single Record

    $(document).on("click", "#btn-edit", function () {
        let userId = $(this).attr("data-id");
        $.ajax({
            url: "functions/fetchSingle.php",
            type: "POST",
            dataType: "json",
            data: {
                userId: userId,
            },
            success: function (data) {
                $("#editName").val(data.name);
                $("#editEmail").val(data.email);
                $("#editNumber").val(data.number);
                $("#btn-update").removeAttr("data-id").attr("data-id", data.id);
            },
        });
    });

    //Update Single Record

    $(document).on("click", "#btn-update", function () {
        let userId = $(this).attr("data-id");
        let updateName = $("#editName").val();
        let updateEmail = $("#editEmail").val();
        let updateNumber = $("#editNumber").val();

        $.ajax({
            url: "functions/update.php",
            type: "POST",
            dataType: "html",
            data: {
                userId: userId,
                updateName: updateName,
                updateEmail: updateEmail,
                updateNumber: updateNumber,
            },
            success: function (data) {
                $("#editModal").modal("hide");
                $(".message").empty();
                $(".message").append(data);
                fetchDataTable();

                setTimeout(function () {
                    $(".message").empty();
                }, 3000);
            },
        });
    });
});
