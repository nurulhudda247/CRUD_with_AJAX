$(document).ready(function () {
    // Insert Employee
    $("#add").click(function () {
        var name = $("#emp_name").val();
        var email = $("#emp_email").val();
        var phone = $("#emp_phone").val();
        var status = $("#emp_status").val();

        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                emp_name: name,
                emp_email: email,
                emp_phone: phone,
                emp_status: status,
                action: "insert"
            },
            success: function (response) {
                $('.msg').html(`
                <div class="alert alert-success" role="alert">
                    ${response}
                </div>
                `);
                $(".msg").fadeOut(3000);
                
                $("#emp_name").val("");
                $("#emp_email").val("");
                $("#emp_phone").val("");
                $("#emp_status").val("");
                show();
            }
        });
    });

    // Show Employee
    show();
    function show() {
        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                action: "show"
            },
            success: function (response) {
                $(".tbody").html(response);
            }
        });
    }

    // Delete Employee
    $(document).on("click", "#deleteBtn", function () {
        var id = $(this).val();
        $("#yesDelete").val(id);
    })

    // Delete Employee With Confirmation Modal
    $(document).on("click", "#yesDelete", function () {
        var id = $(this).val();
        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                id: id,
                action: "destroy"
            },
            success: function (response) {
                show();
                $("#deleteModal").modal("hide");
            }
        })
    })

    //Active to Inactive
    $(document).on("click", "#activeBtn", function() {
        var id = $(this).val();
        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                id: id,
                action: "activeToInactive"
            },
            success: function (response) {
                show();
            }
        })
    });

    //Inactive to Active
    $(document).on("click", "#inactiveBtn", function () {
        var id = $(this).val();
        $.ajax({
            url: "classes/Process.php",
            type: "POST",
            data: {
                id: id,
                action: "inactiveToActive",
            },
            success: function (response) {
                show();
            }
        });
    });
});