
$(document).ready(function () {

    // operations of duplicate, edit and delete icons starts
    //======================================================================================
    //==========================Clicking on edit icon starts================================
    //======================================================================================
    // Function to set the cursor position to the end of the contenteditable element
    function setEndOfContenteditable(contentEditableElement) {
        var range, selection;
        if (document.createRange) {
            range = document.createRange();
            range.selectNodeContents(contentEditableElement);
            range.collapse(false);
            selection = window.getSelection();
            selection.removeAllRanges();
            selection.addRange(range);
        } else if (document.selection) {
            range = document.body.createTextRange();
            range.moveToElementText(contentEditableElement);
            range.collapse(false);
            range.select();
        }
    }

    // Function to focus on the contenteditable heading and set the cursor at the end
    function focusOnHeading() {
        var editableHeading = $(".editableHeading");
        editableHeading.focus();
        setEndOfContenteditablee(editableHeading);
    }

    // Click event for the icon
    $(".focusIcon").click(function () {
        focusOnHeading();
    });
    //======================================================================================
    //==========================Clicking on edit icon ends================================
    //======================================================================================

    //======================================================================================
    //==========================Clicking on duplicate icon starts===========================
    //======================================================================================
    // Function to duplicate the entire section
    // function duplicateSection($originalSection) {
    //     var $duplicatedSection = $originalSection.clone();

    //     // Clear content from duplicated heading
    //     // $sduplicatedSection.find("[contenteditable]").text("");

    //     // Append the duplicated section below the original one
    //     $originalSection.after($duplicatedSection);

    //     // Initialize AOS for the new section
    //     AOS.init({ target: $duplicatedSection.get(0) });

    //     // Scroll to the duplicated section
    //     $('html, body').animate({
    //         scrollTop: $duplicatedSection.offset().top
    //     }, 1000);
    // }

    // // Click event for the plus icon using event delegation
    // $(document).on("click", ".duplicateIcon", function () {
    //     var $originalSection = $(this).closest(".section");
    //     duplicateSection($originalSection);
    // });

    // // Initialize AOS for the first section
    // AOS.init();

    //======================================================================================
    //==========================Clicking on duplicate icon ends=============================


    /* Add loading animation */
    // Show loading text after a certain amount of time
    //  setTimeout(function () {
    //      $(".loading-text").text("Still Loading...");
    //     }, 2000); // Display text after 2000 milliseconds (2 seconds)
    //     setTimeout(function () {
    //            $(".loading-text").text("Building your Portfolio...");
    //  }, 4000); // Display text after 2000 milliseconds (2 seconds)
    //     setTimeout(function () {
    //         $(".loading-text").text("Adding text...");
    //     }, 6000); // Display text after 2000 milliseconds (2 seconds)
    //         // // Hide the page loader once the page is fully loaded
    //  setTimeout(function () {
    //             $(".loading-text").text("Adding multimedia content...");
    //          }, 8000); // Display text after 2000 milliseconds (2 seconds)
    //          setTimeout(function () {
    //             $(".loading-text").text("Almost ready...");
    //        }, 10000); // Display text after 2000 milliseconds (2 seconds)
    //         setTimeout(function () {
    //             $(".page-loader").hide();
    //         }, 12000); // Hide loader after 4000 milliseconds (4 seconds)

    // loading animation end
    // choosing themes
    $("#theme").click(function () {
        $("#theme-content").toggle("slow");
    });
    // thems end

    // ==============opt 1 start ====================
    $("#opt1").change(function () {
        $('body').removeClass("bg-dark");
        $('body').css({ 'color': 'black', 'background-color': 'black' });
        // $("#hero-image").removeClass("bg-danger");
        // $("#hero-image").removeClass("bg-success");
        $("#hero-image").css("background", "blue !important");
        $("#hero-image").removeClass("bg-danger");
        $("#hero-image").removeClass("bg-success");
        // $("#hero-image").addClass("bg-primary");
        $("h1").addClass("text-primary");
        $("h1").removeClass("text-danger");
        $("h1").removeClass("text-success");
        $("a").addClass("text-primary");
        $("a").removeClass("text-danger");
        $("a").removeClass("text-success");
        $(".bi").addClass("text-primary");
        $(".bi").removeClass("text-danger");
        $(".bi").removeClass("text-success");
        $("a>button").removeClass("btn-outline-danger");
        $("a>button").removeClass("btn-outline-success");
        $("a>button").addClass("btn-outline-primary");
    });
    // ================end opt 1 ===================

    // ==============opt 2 start ====================
    $("#opt2").change(function () {
        $('body').removeClass("bg-dark");
        $('body').css({ 'color': 'black', 'background-color': 'black' });
        $("#hero-image").removeClass("bg-primary");
        $("#hero-image").removeClass("bg-success");
        // $("#hero-image").addClass("bg-danger");
        $("h1").addClass("text-danger");
        $("a").addClass("text-danger");
        $(".bi").addClass("text-danger");
        $("a>button").removeClass("btn-outline-primary");
        $("a>button").removeClass("btn-outline-success");
        $("a>button").addClass("btn-outline-danger");
    });
    // ================end opt 2 ===================

    // ==============opt 3 start ====================
    $("#opt3").change(function () {
        $('body').removeClass("bg-dark");
        $('body').css({ 'color': 'black', 'background-color': 'black' });
        $("#hero-image").removeClass("bg-primary");
        $("#hero-image").removeClass("bg-danger");
        // $("#hero-image").addClass("bg-success");
        $("h1").removeClass("text-danger");
        $("h1").removeClass("text-primary");
        $("h1").addClass("text-success");
        $("a").removeClass("text-danger");
        $("a").removeClass("text-primary");
        $("a").addClass("text-success");
        $(".bi").removeClass("text-primary");
        $(".bi").removeClass("text-danger");
        $(".bi").addClass("text-success");
        $("a>button").removeClass("btn-outline-primary");
        $("a>button").removeClass("btn-outline-danger");
        $("a>button").addClass("btn-outline-success");
    });
    // ================end opt 3 ===================

    // change hero image
    // Function to handle hero image upload for a specific section
    // function handleImageUpload(section) {
    //     section.find('.hero-image').click('.hero-iconImage', function () {
    //         // get selected file from the file input within the specific section
    //         var file = section.find('.hero-upload')[0].files[0];
    //         if (file) {
    //             // create file reader object to read the file
    //             var reader = new FileReader();
    //             // set up the onload event handler
    //             reader.onload = function (e) {
    //                 // update the image source within the specific section
    //                 section.find(".img-hero").attr('src', e.target.result);
    //             }
    //             // Read the file as a data URL
    //             reader.readAsDataURL(file);
    //         }
    //     });
    // }
    // $("#box").click('.hero-iconImage', function () {
    //     // get selected file from the file input
    //     var section = $(this).closest('.section');
    //     handleImageUpload(section);
    // });






   // Initialize AOS
    AOS.init();

    // Duplicate section
    $(document).on('click', '.duplicateIcon', function () {
        var section = $(this).closest('.section');
        var num = section.find('.hero-upload').data('num');

        var duplicatedSection = section.clone();
        duplicatedSection.find('.hero-upload').val(''); // Clear the file input value
        duplicatedSection.find('.hero-upload').data('num', num + 1); // Increment data-num
        duplicatedSection.find('.focusIcon').data('num', num + 1); // Increment data-num for the edit icon

        duplicatedSection.insertAfter(section);
    });

    // Handle hero image upload for a specific section
    $(document).on('change', '.hero-upload', function () {
        var fileInput = $(this);
        var file = fileInput[0].files[0];
        var section = fileInput.data('num', 1);
        var num = fileInput.data('num');

        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                section.find('.img-hero').attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        }
    });








    // change about image
    $("#about-icon").click(function () {
        // get selected file from the file input
        var file = $("#about-upload")[0].files[0];
        if (file) {
            //create file reader object to read the file
            var reader = new FileReader();
            //set up the onload event handler
            reader.onload = function (e) {
                //update the image source with the selected file
                $("#about-image").attr('src', e.target.result);
            }
            //Read the file as a date url
            reader.readAsDataURL(file);
        }
    });



    // change about image
    $(".wk-icon").click(function () {
        // get selected file from the file input
        var file = $(".image-preview")[0].files[0];
        if (file) {
            //create file reader object to read the file
            var reader = new FileReader();
            //set up the onload event handler
            reader.onload = function (e) {
                //update the image source with the selected file
                $(".image-upload").attr('src', e.target.result);
            }
            //Read the file as a date url
            reader.readAsDataURL(file);
        }
    });



    $(".upload-icon").click(function () {
        // Get the parent card of the clicked icon
        var card = $(this).closest('.card-dark');

        // Find the file input within that card
        var fileInput = card.find('.image-upload')[0];

        // get selected file from the file input
        var file = fileInput.files[0];
        if (file) {
            // create file reader object to read the file
            var reader = new FileReader();
            // set up the onload event handler
            reader.onload = function (e) {
                // Find the image within that card and update its source
                card.find('.image-preview').attr('src', e.target.result);
            };
            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });



    // AJAX request
    // JavaScript for saving content using AJAX

    // Function to get editable content
    function getEditableContent(sectionId) {
        return $("#" + sectionId).html();
    }

    // Function to send AJAX request to save content
    function saveContent(sectionId) {
        var content = getEditableContent(sectionId);

        $.ajax({
            type: "POST",
            url: "present.php",
            data: { sectionId: sectionId, content: content },
            success: function (response) {
                console.log(response); // Log the response from the server
            },
            error: function (error) {
                console.error("Error: " + error.responseText);
            }
        });
    }

    // Save content when the page is loaded
    $(document).ready(function () {
        saveContent("section-about");
        saveContent("section-skills");
        saveContent("section-work");
        saveContent("section-contact");
    });

});


