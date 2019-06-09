function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}

function displayRecords() {
    $.get("ajax/displayRecords.php", {}, function (data, status) {
        $(".display_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete this data?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            var student = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_last_name").val(student.Lastname);
            $("#update_first_name").val(student.Firstname);
            $("#update_first").val(student.first);
            $("#update_second").val(student.second);
            $("#update_third").val(student.third);
            $("#update_fourth").val(student.fourth);
            $("#update_finalGrade").val(student.Final);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function search() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
    displayRecords();
});