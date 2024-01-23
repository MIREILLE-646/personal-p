<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Section</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include custom CSS for styling -->
    <style>
        /* Style the editable sections */
        .editable {
            border: 1px dashed #007bff;
            padding: 10px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        /* Hide text input initially */
        .edit-input {
            display: none;
            border: none !important;
        }

        /* Style for Undo button */
        .undo-btn {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <!-- Undo button outside of sections -->
                <button class="btn btn-warning undo-btn">Undo</button>
                <!-- Editable section 1 -->
                <div class="editable" id="section1">
                    <p>This is the first editable section. Click to edit.</p>
                    <input type="text" class="form-control edit-input shadow-none" id="section1Input">
                    <button class="btn btn-primary edit-btn">Edit</button>
                    <button class="btn btn-danger delete-btn">Delete</button>
                    <button class="btn btn-success duplicate-btn">Duplicate</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Temporary storage for deleted sections
        var deletedSections = [];

        // jQuery code for enabling editing on click
        $(document).ready(function () {
            // Attach event listener to a parent element (container) that exists from the start
            $(".container").on("click", ".editable", function () {
                // Find the input field within the clicked section
                var input = $(this).find(".edit-input");
                // Hide the paragraph and display the input field
                $(this).find("p").hide();
                input.show().val($(this).find("p").text()).focus();
                // Handle blur (when user clicks away)
                input.blur(function () {
                    var newText = $(this).val();
                    // Update the paragraph with the new text
                    $(this).parent().find("p").text(newText);
                    // Hide the input field and show the paragraph again
                    $(this).hide();
                    $(this).parent().find("p").show();
                });
            });

            // Attach event listener to the container for delete button functionality
            $(".container").on("click", ".delete-btn", function () {
                var deletedSection = $(this).parent().clone();
                deletedSections.push(deletedSection);
                $(this).parent().remove();
            });

            // Attach event listener to the container for duplicate button functionality
            $(".container").on("click", ".duplicate-btn", function () {
                var clone = $(this).parent().clone();
                // Clear the input field in the clone
                clone.find("input").val("");
                $(this).parent().after(clone);
            });

            // Attach event listener to the Undo button
            $(".undo-btn").click(function () {
                if (deletedSections.length > 0) {
                    var deletedSection = deletedSections.pop();
                    $(".container").append(deletedSection);
                }
            });
        });
    </script>
</body>

</html>